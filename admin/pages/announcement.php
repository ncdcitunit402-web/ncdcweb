<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: login.php");
  exit;
}
include("../includes/session_check.php");
include("../../config/db.php");
include_once __DIR__ . '/../includes/header.php';
/* ================== PROJECT SETTINGS ================== */
$project_folder = "/NCDC_MOHFW";   // Change if project name different
$server_upload_path = $_SERVER['DOCUMENT_ROOT'].$project_folder."/uploads/announcements/";
$db_upload_path = $project_folder."/uploads/announcements/";

/* ============== CREATE FOLDER IF NOT EXISTS ============== */
if (!is_dir($server_upload_path)) {
    mkdir($server_upload_path, 0777, true);
}

/* ================= DELETE ================= */
if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);

    // delete file also
    $get = mysqli_query($conn,"SELECT pdf_file FROM announcements WHERE id=$id");
    $row = mysqli_fetch_assoc($get);

    if(!empty($row['pdf_file'])){
        $file_path = $_SERVER['DOCUMENT_ROOT'].$row['pdf_file'];
        if(file_exists($file_path)){
            unlink($file_path);
        }
    }

    mysqli_query($conn,"DELETE FROM announcements WHERE id=$id");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

/* ================= SAVE ================= */
if(isset($_POST['save'])){
$title = trim($_POST['title']);

if (!preg_match("/^[A-Za-z0-9 ]+$/", $title)) {
    echo "<script>
            alert('Only letters, numbers and spaces are allowed');
            history.back();
          </script>";
    exit;
}

$title = mysqli_real_escape_string($conn, $title);
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $link = mysqli_real_escape_string($conn,$_POST['external_link']);
    $pdf_path = "";

    /* ===== PDF Upload ===== */
    if(!empty($_FILES['pdf']['name'])){

        $file_type = strtolower(pathinfo($_FILES['pdf']['name'], PATHINFO_EXTENSION));

        if($file_type != "pdf"){
            echo "<script>alert('Only PDF files allowed');</script>";
        }

        else{

            $file_name = time()."_".preg_replace("/[^a-zA-Z0-9.]/", "", $_FILES['pdf']['name']);

            $full_server_path = $server_upload_path.$file_name;

            if(move_uploaded_file($_FILES['pdf']['tmp_name'],$full_server_path)){

                // Save browser accessible path in DB
                $pdf_path = $db_upload_path.$file_name;

            } else {
                echo "<script>alert('File upload failed');</script>";
            }
        }
    }

    /* ===== Validation ===== */
    if(empty($pdf_path) && empty($link)){
        echo "<script>alert('Please upload PDF or provide external link');</script>";
    } else {

        mysqli_query($conn,"INSERT INTO announcements 
        (title,pdf_file,external_link) 
        VALUES('$title','$pdf_path','$link')");

        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Announcements</title>
<style>
body{
    font-family:Arial;
    background:#f4f6f9;
    margin:0;
}
.container{
    max-width:1000px;
    margin:40px auto;
}
h2{
    margin-bottom:20px;
}
.form-box{
    background:#fff;
    padding:20px;
    border-radius:8px;
    box-shadow:0 4px 10px rgba(0,0,0,0.08);
    margin-bottom:30px;
}
input[type="text"],
input[type="url"],
input[type="file"]{
    width:100%;
    padding:8px;
    margin-top:5px;
}
button{
    background:#007bff;
    color:#fff;
    padding:8px 15px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}
button:hover{
    background:#0056b3;
}
table{
    width:100%;
    border-collapse:collapse;
    background:#fff;
    box-shadow:0 4px 10px rgba(0,0,0,0.08);
}
table th, table td{
    padding:12px;
    border:1px solid #ddd;
}
table th{
    background:#0b3d91;
    color:#fff;
}
.delete-btn{
    background:#dc3545;
    color:#fff;
    padding:5px 10px;
    border-radius:4px;
    text-decoration:none;
}
.new-badge{
    color:red;
    font-weight:bold;
}
.note{
    font-size:13px;
    color:#666;
}
.back-btn{
  display:inline-flex;
  align-items:center;
  gap:6px;
  margin-bottom:15px;
  padding:8px 14px;
  background:linear-gradient(135deg,#555,#333);
  color:#fff;
  text-decoration:none;
  border-radius:8px;
  font-size:14px;
  font-weight:600;
  transition:.3s;
}

.back-btn:hover{
  background:linear-gradient(135deg,#0b77b7,#189ad6);
  transform:translateX(-3px);
}
</style>
</head>

<body>

<div class="container">
<a href="../dashboard.php" class="back-btn">⬅ Back to Dashboard</a>
<h2>Manage Announcements</h2>

<!-- ADD FORM -->
<div class="form-box">
<form method="POST" enctype="multipart/form-data">

<label>Title *</label>
<input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="title" required>

<br><br>

<label>Upload PDF</label>
<input type="file" name="pdf" accept="application/pdf">
<span class="note">OR provide external link below</span>

<br><br>

<label>External Link</label>
<input type="url" name="external_link" placeholder="https://example.com">

<br><br>

<button type="submit" name="save">Save Announcement</button>

</form>
</div>

<!-- LIST TABLE -->
<table>
<tr>
<th>ID</th>
<th>Title</th>
<th>Type</th>
<th>Created</th>
<th>Status</th>
<th>Action</th>
</tr>

<?php
$result = mysqli_query($conn,"SELECT * FROM announcements ORDER BY created_at DESC");

while($row=mysqli_fetch_assoc($result)){

$created = strtotime($row['created_at']);
$five_days = strtotime('+5 days',$created);
$is_new = time() <= $five_days;
?>

<tr>
<td><?php echo $row['id']; ?></td>

<td><?php echo htmlspecialchars($row['title']); ?></td>

<td>
<?php 
if(!empty($row['pdf_file'])){
    echo "PDF";
} else {
    echo "Link";
}
?>
</td>

<td><?php echo date("d M Y",strtotime($row['created_at'])); ?></td>

<td>
<?php if($is_new){ ?>
<span class="new-badge">NEW</span>
<?php } else { echo "-"; } ?>
</td>

<td>
<a href="?delete=<?php echo $row['id']; ?>" 
   onclick="return confirm('Delete this announcement?')" 
   class="delete-btn">Delete</a>
</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>
