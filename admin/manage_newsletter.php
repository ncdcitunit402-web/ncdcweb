<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: login.php");
  exit;
}
include("includes/session_check.php");
include("../config/db.php");
include_once __DIR__.'/includes/header.php';

/* =======================
   DELETE NEWSLETTER
======================= */
if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);

    // delete pdf file
    $res = mysqli_query($conn,"SELECT pdf_file FROM ncdc_newsletters WHERE id=$id");
    if($row = mysqli_fetch_assoc($res)){
        $filePath = "../uploads/newsletter/".$row['pdf_file'];
        if(file_exists($filePath)){
            unlink($filePath);
        }
    }

    mysqli_query($conn, "DELETE FROM ncdc_newsletters WHERE id=$id");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

/* =======================
   FETCH FOR EDIT
======================= */
$editData = null;
if (isset($_GET['edit_id'])) {
    $edit_id = intval($_GET['edit_id']);
    $editRes = mysqli_query($conn, "SELECT * FROM ncdc_newsletters WHERE id=$edit_id");
    $editData = mysqli_fetch_assoc($editRes);
}

/* =======================
   INSERT / UPDATE
======================= */
if (isset($_POST['submit'])) {
$title = trim($_POST['title']);

if (!preg_match("/^[A-Za-z0-9 ]+$/", $title)) {
    echo "<script>
            alert('Only letters, numbers and spaces are allowed');
            history.back();
          </script>";
    exit;
}

$title = mysqli_real_escape_string($conn, $title);
    $title = mysqli_real_escape_string($conn, trim($_POST['title']) ?: 'N/A');

    $pdfFile = $editData['pdf_file'] ?? '';

    if (!empty($_FILES['pdf_file']['name'])) {

        $fileName = $_FILES['pdf_file']['name'];
        $tmpName  = $_FILES['pdf_file']['tmp_name'];
        $fileSize = $_FILES['pdf_file']['size'];

        $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // ✅ only PDF
        if ($ext !== 'pdf') {
            echo "<script>alert('Only PDF files are allowed'); history.back();</script>";
            exit;
        }

        // ✅ max 5MB
        if ($fileSize > 5 * 1024 * 1024) {
            echo "<script>alert('File must be less than 5MB'); history.back();</script>";
            exit;
        }

        // ✅ real mime type check
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime  = finfo_file($finfo, $tmpName);
        finfo_close($finfo);

        if ($mime !== 'application/pdf') {
            echo "<script>alert('Invalid PDF file'); history.back();</script>";
            exit;
        }

        $pdfName = time() . "_" . basename($fileName);
        $uploadPath = "../uploads/newsletter/" . $pdfName;

        move_uploaded_file($tmpName, $uploadPath);
        $pdfFile = $pdfName;
    }

    if (!empty($_POST['edit_id'])) {
        $id = intval($_POST['edit_id']);
        $sql = "UPDATE ncdc_newsletters SET 
                title='$title',
                pdf_file='$pdfFile'
                WHERE id=$id";
    } else {
        $sql = "INSERT INTO ncdc_newsletters
                (title, pdf_file, status)
                VALUES
                ('$title','$pdfFile',1)";
    }

    mysqli_query($conn, $sql);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Newsletter</title>

<style>
body{
  font-family:"Segoe UI", Arial, sans-serif;
  background:#f4f6f9;
  padding:15px;
}
.container{
  max-width:1100px;
  margin:auto;
}
h2{
  margin:15px 0;
}

/* FORM */
form{
  background:#fff;
  padding:20px;
  border-radius:10px;
  box-shadow:0 3px 10px rgba(0,0,0,0.08);
}
.form-grid{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:15px;
}
.form-full{
  grid-column:1/3;
}
label{
  font-weight:600;
}
input{
  width:100%;
  padding:10px;
  margin-top:6px;
  border:1px solid #ccc;
  border-radius:6px;
}
button{
  background:#0b77b7;
  color:#fff;
  padding:12px 25px;
  border:none;
  border-radius:8px;
  cursor:pointer;
}
button:hover{ background:#095c8d; }

/* TABLE */
.table-wrapper{
  overflow-x:auto;
}
table{
  width:100%;
  border-collapse:collapse;
  background:#fff;
  margin-top:25px;
}
th{
  background:#eef3f6;
  padding:12px;
  text-align:left;
}
td{
  padding:12px;
  border-bottom:1px solid #ddd;
}
.action a{
  margin-right:10px;
  color:#0b77b7;
  font-weight:600;
}

/* BACK BUTTON */
.back-btn{
  display:inline-block;
  margin-bottom:15px;
  padding:8px 14px;
  background:#222;
  color:#fff;
  border-radius:8px;
  text-decoration:none;
}
.back-btn:hover{
  background:#0b5ed7;
}

/* RESPONSIVE */
@media(max-width:768px){
  .form-grid{
    grid-template-columns:1fr;
  }
  .form-full{
    grid-column:1;
  }
}
</style>
</head>

<body>
<div class="container">

<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a>

<h2><?= $editData ? 'Edit Newsletter' : 'Add Newsletter'; ?></h2>

<form method="POST" enctype="multipart/form-data">
<input type="hidden" name="edit_id" value="<?= $editData['id'] ?? ''; ?>">

<div class="form-grid">

  <div class="form-full">
    <label>Newsletter Title *</label>
    <input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="title" required
      value="<?= $editData['title'] ?? ''; ?>">
  </div>

  <div class="form-full">
    <label>Upload PDF *</label>
    <input type="file" accept=".pdf" name="pdf_file" <?= $editData ? '' : 'required'; ?>>
    <?php if(!empty($editData['pdf_file'])){ ?>
      <small>Current File: <?= $editData['pdf_file']; ?></small>
    <?php } ?>
  </div>

</div>

<br>
<button type="submit" name="submit">
  <?= $editData ? 'Update Newsletter' : 'Add Newsletter'; ?>
</button>

<?php if($editData){ ?>
  <a href="<?= $_SERVER['PHP_SELF']; ?>" style="margin-left:10px;">Cancel</a>
<?php } ?>
</form>

<h2>Uploaded Newsletters</h2>

<div class="table-wrapper">
<table>
<tr>
  <th>ID</th>
  <th>Title</th>
  <th>PDF File</th>
  <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM ncdc_newsletters ORDER BY id DESC");
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
  <td><?= $row['id']; ?></td>
  <td><?= $row['title']; ?></td>
  <td>
    <a href="../uploads/newsletter/<?= $row['pdf_file']; ?>" target="_blank">
      View PDF
    </a>
  </td>
  <td class="action">
    <a href="?edit_id=<?= $row['id']; ?>">Edit</a>
    <a href="?delete_id=<?= $row['id']; ?>"
       onclick="return confirm('Delete this newsletter?');">
       Delete
    </a>
  </td>
</tr>
<?php }} else { ?>
<tr>
  <td colspan="4">No newsletter records found.</td>
</tr>
<?php } ?>
</table>
</div>

</div>
</body>
</html>

<?php include_once __DIR__.'/includes/footer.php'; ?>