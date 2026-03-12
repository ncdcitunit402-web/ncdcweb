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
   DELETE TENDERS
======================= */
if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);

    $res = mysqli_query($conn, "SELECT pdf_file FROM tenders WHERE id=$id");
    if ($row = mysqli_fetch_assoc($res)) {
        $filePath = "../uploads/tenders/" . $row['pdf_file'];
        if (file_exists($filePath)) {
            unlink($filePath);
        }
    }

    mysqli_query($conn, "DELETE FROM tenders WHERE id=$id");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

/* =======================
   INSERT TENDERS (SECURE)
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
    $title = mysqli_real_escape_string($conn, $_POST['title']);

    $file_name = $_FILES['pdf']['name'];
    $tmp_name  = $_FILES['pdf']['tmp_name'];
    $file_size = $_FILES['pdf']['size'];

    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    // ✅ Only PDF allowed
    if ($file_ext !== 'pdf') {
        echo "<script>alert('Only PDF files are allowed'); history.back();</script>";
        exit;
    }

    // ✅ Max file size 5MB
    if ($file_size > 5 * 1024 * 1024) {
        echo "<script>alert('File size must be less than 5MB'); history.back();</script>";
        exit;
    }

    // ✅ MIME type check
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime  = finfo_file($finfo, $tmp_name);
    finfo_close($finfo);

    if ($mime !== 'application/pdf') {
        echo "<script>alert('Invalid PDF file'); history.back();</script>";
        exit;
    }

    $pdf_name = time() . "_" . basename($file_name);
    $upload_path = "../uploads/tenders/";

    if (!is_dir($upload_path)) {
        mkdir($upload_path, 0777, true);
    }

    move_uploaded_file($tmp_name, $upload_path . $pdf_name);

    $sql = "INSERT INTO tenders (title, pdf_file, status)
            VALUES ('$title', '$pdf_name', 1)";
    mysqli_query($conn, $sql);

    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage Tenders Material</title>

<style>
*{
  box-sizing:border-box;
}
body{
  font-family:"Segoe UI", Arial, sans-serif;
  background:#f4f6f9;
  padding:20px;
  margin:0;
}
h2{
  margin-top:10px;
}
.container{
  max-width:1100px;
  margin:auto;
}

/* BACK BUTTON */
.back-btn{
  display:inline-flex;
  align-items:center;
  gap:6px;
  margin-bottom:18px;
  padding:10px 16px;
  background:linear-gradient(135deg,#444,#222);
  color:#fff;
  text-decoration:none;
  border-radius:8px;
  font-size:14px;
  font-weight:600;
  transition:.3s;
}
.back-btn:hover{
  background:linear-gradient(135deg,#0b5ed7,#0d6efd);
  transform:translateX(-3px);
}

/* FORM */
form{
  background:#fff;
  padding:22px;
  border-radius:10px;
  max-width:520px;
  box-shadow:0 2px 10px rgba(0,0,0,0.08);
}
label{
  font-weight:600;
}
input{
  width:100%;
  padding:10px;
  margin:8px 0 16px;
  border:1px solid #ccc;
  border-radius:6px;
}
button{
  width:100%;
  background:#0b77b7;
  color:#fff;
  padding:12px;
  border:none;
  border-radius:6px;
  font-size:15px;
  cursor:pointer;
}
button:hover{
  background:#095c8f;
}

/* TABLE */
.table-wrap{
  overflow-x:auto;
  margin-top:25px;
}
table{
  width:100%;
  border-collapse:collapse;
  background:#fff;
  min-width:600px;
}
th, td{
  padding:12px;
  border:1px solid #ddd;
  text-align:left;
}
th{
  background:#f1f1f1;
}
td a{
  text-decoration:none;
  color:#0b77b7;
  font-weight:600;
}
td a:hover{
  text-decoration:underline;
}

/* MOBILE */
@media(max-width:768px){
  body{
    padding:12px;
  }
  form{
    max-width:100%;
  }
  h2{
    font-size:18px;
  }
}
</style>
</head>

<body>
<div class="container">

<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a>

<h2>Add Tenders Material</h2>

<form method="POST" enctype="multipart/form-data">
  <label>Title *</label>
  <input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="title" required>

  <label>Upload PDF *</label>
  <input type="file" name="pdf" accept=".pdf" required>

  <button type="submit" name="submit">Upload Tender</button>
</form>

<hr style="margin:30px 0;">

<h2>Uploaded Tenders</h2>

<div class="table-wrap">
<table>
<tr>
  <th>ID</th>
  <th>Title</th>
  <th>Actions</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM tenders ORDER BY id DESC");
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
  <td><?= $row['id']; ?></td>
  <td><?= htmlspecialchars($row['title']); ?></td>
  <td>
    <a href="../uploads/tenders/<?= $row['pdf_file']; ?>" target="_blank">View PDF</a>
    |
    <a href="?delete_id=<?= $row['id']; ?>" onclick="return confirm('Delete this tender?');">Delete</a>
  </td>
</tr>
<?php } ?>
</table>
</div>

</div>
</body>
</html>

<?php include_once __DIR__.'/includes/footer.php'; ?>
