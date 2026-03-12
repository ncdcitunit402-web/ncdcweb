<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}
include("includes/session_check.php");
include("../config/db.php");
include_once __DIR__.'/includes/header.php';

/* =======================
   DELETE RESOURCE
======================= */
if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);

    $res = mysqli_query($conn, "SELECT pdf_file FROM resource_materials WHERE id=$id");
    if ($row = mysqli_fetch_assoc($res)) {
        $filePath = "../uploads/resource/" . $row['pdf_file'];
        if (!empty($row['pdf_file']) && file_exists($filePath)) {
            unlink($filePath);
        }
    }

    mysqli_query($conn, "DELETE FROM resource_materials WHERE id=$id");
    header("Location: manage_resource.php");
    exit;
}

/* =======================
   INSERT RESOURCE
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
    if (
        empty($_POST['title']) ||
        empty($_POST['category']) ||
        empty($_FILES['pdf']['name'])
    ) {
        die("All fields are mandatory.");
    }

    $title    = mysqli_real_escape_string($conn, trim($_POST['title']));
    $category = mysqli_real_escape_string($conn, trim($_POST['category']));

    // ===== PDF VALIDATION =====
$file_ext  = strtolower(pathinfo($_FILES['pdf']['name'], PATHINFO_EXTENSION));
$file_type = $_FILES['pdf']['type'];

// Allow only PDF
if ($file_ext !== 'pdf' || $file_type !== 'application/pdf') {
    echo "<script>alert('Only PDF files are allowed'); history.back();</script>";
    exit; // ⛔ stop upload
}

$pdf_name = time() . "_" . basename($_FILES['pdf']['name']);
$tmp_name = $_FILES['pdf']['tmp_name'];

$upload_path = "../uploads/resource/";
if (!is_dir($upload_path)) {
    mkdir($upload_path, 0777, true);
}

move_uploaded_file($tmp_name, $upload_path . $pdf_name);

    $sql = "INSERT INTO resource_materials (title, category, pdf_file, status)
            VALUES ('$title', '$category', '$pdf_name', 1)";
    mysqli_query($conn, $sql);

    header("Location: manage_resource.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Resource Material</title>

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
  max-width:520px;
  box-shadow:0 3px 10px rgba(0,0,0,0.08);
}
label{
  font-weight:600;
}
input, select{
  width:100%;
  padding:10px;
  margin-top:6px;
  margin-bottom:15px;
  border:1px solid #ccc;
  border-radius:6px;
}
button{
  background:#0b77b7;
  color:#fff;
  border:none;
  padding:12px 22px;
  border-radius:8px;
  cursor:pointer;
}
button:hover{
  background:#095f91;
}

/* TABLE */
.table-wrapper{
  overflow-x:auto;
}
table{
  width:100%;
  border-collapse:collapse;
  background:#fff;
  margin-top:30px;
  box-shadow:0 3px 10px rgba(0,0,0,0.08);
}
th{
  background:#f1f3f5;
  padding:12px;
  text-align:left;
}
td{
  padding:12px;
  border-bottom:1px solid #ddd;
}
.action-btn{
  padding:6px 10px;
  border-radius:6px;
  text-decoration:none;
  font-size:14px;
  display:inline-block;
}
.view-btn{
  background:#e7f3ff;
  color:#0b77b7;
}
.delete-btn{
  background:#ffeaea;
  color:#d40000;
  margin-left:6px;
}
.delete-btn:hover{
  background:#ffcccc;
}

/* BACK BUTTON */
.back-btn{
  display:inline-flex;
  align-items:center;
  gap:6px;
  margin-bottom:18px;
  padding:8px 14px;
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

/* RESPONSIVE */
@media(max-width:768px){
  form{
    max-width:100%;
  }
}
</style>
</head>

<body>
<div class="container">

<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a>

<h2>Add Resource Material</h2>

<form method="POST" enctype="multipart/form-data">
  <label>Title *</label>
  <input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="title" required>

  <label>Category *</label>
  <select name="category" required>
    <option value="">Select Category</option>
    <option>Technical Guidelines</option>
    <option>Resource Material</option>
    <option>Annual Report</option>
  </select>

  <label>Upload PDF *</label>
  <input type="file" name="pdf" accept=".pdf" required>

  <button type="submit" name="submit">Upload Resource</button>
</form>

<h2>Uploaded Resources</h2>

<div class="table-wrapper">
<table>
<tr>
  <th>ID</th>
  <th>Title</th>
  <th>Category</th>
  <th>Actions</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM resource_materials ORDER BY id DESC");
if(mysqli_num_rows($result)>0){
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
  <td><?= $row['id']; ?></td>
  <td><?= $row['title']; ?></td>
  <td><?= $row['category']; ?></td>
  <td>
    <a class="action-btn view-btn"
       href="../uploads/resource/<?= $row['pdf_file']; ?>"
       target="_blank">View PDF</a>

    <a class="action-btn delete-btn"
       href="?delete_id=<?= $row['id']; ?>"
       onclick="return confirm('Are you sure you want to delete this resource?');">
       Delete
    </a>
  </td>
</tr>
<?php }} else { ?>
<tr>
  <td colspan="4">No resources uploaded.</td>
</tr>
<?php } ?>
</table>
</div>

</div>
</body>
</html>

<?php include_once __DIR__.'/includes/footer.php'; ?>
