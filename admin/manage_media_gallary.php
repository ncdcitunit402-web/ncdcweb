<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: login.php");
  exit;
}
include("includes/session_check.php");
include("../config/db.php");
include_once __DIR__.'/includes/header.php';

// Upload folder (physical path)
$upload_dir = $_SERVER['DOCUMENT_ROOT'] . "/NCDC_MOHFW/uploads/media/";

// Create folder if it doesn't exist
if(!is_dir($upload_dir)){
    mkdir($upload_dir,0777,true);
}

// DELETE MEDIA
if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);
    
    // Get all images for this media
    $images = mysqli_query($conn,"SELECT image_path FROM media_images WHERE media_id=$id");
    while($img = mysqli_fetch_assoc($images)){
        $file_path = $_SERVER['DOCUMENT_ROOT'].$img['image_path'];
        if(file_exists($file_path)){
            unlink($file_path);
        }
    }
    
    // Delete from DB
    mysqli_query($conn,"DELETE FROM media_images WHERE media_id=$id");
    mysqli_query($conn,"DELETE FROM media_gallery WHERE id=$id");
    
    header("Location: manage_media_gallary.php");
    exit;
}

// SAVE MEDIA
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

    // ✅ FIRST: validate all files before inserting anything
    foreach($_FILES['images']['name'] as $key => $val){
        if(!empty($_FILES['images']['name'][$key])){
            $file_ext  = strtolower(pathinfo($_FILES['images']['name'][$key], PATHINFO_EXTENSION));
            $file_type = $_FILES['images']['type'][$key];

            $allowed_ext  = ['jpg','png'];
            $allowed_mime = ['image/jpeg','image/png'];

            if(!in_array($file_ext,$allowed_ext) || !in_array($file_type,$allowed_mime)){
                echo "<script>alert('Only JPG and PNG images are allowed'); history.back();</script>";
                exit; // ⛔ STOP EVERYTHING
            }
        }
    }

    // ✅ Now safe to insert (no invalid file found)
    mysqli_query($conn,"INSERT INTO media_gallery(title, created_at) VALUES('$title', NOW())");
    $media_id = mysqli_insert_id($conn);

    foreach($_FILES['images']['name'] as $key => $val){
        if(!empty($_FILES['images']['name'][$key])){
            $file_tmp = $_FILES['images']['tmp_name'][$key];
            $file_ext = strtolower(pathinfo($_FILES['images']['name'][$key], PATHINFO_EXTENSION));

            $file_name = time().rand(1000,9999).".".$file_ext;
            $target = "/NCDC_MOHFW/uploads/media/".$file_name;
            $physical_path = $upload_dir.$file_name;

            if(move_uploaded_file($file_tmp,$physical_path)){
                mysqli_query($conn,"INSERT INTO media_images(media_id,image_path) 
                VALUES('$media_id','$target')");
            }
        }
    }

    echo "<script>alert('Media Uploaded Successfully'); window.location='manage_media_gallary.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Media Upload</title>
<style>
body{
    font-family: Arial;
    background:#f4f6f9;
    margin:0;
}
.container{
    max-width:1000px;
    margin:40px auto;
}
.form-box{
    background:#fff;
    padding:20px;
    border-radius:8px;
    box-shadow:0 4px 10px rgba(0,0,0,0.08);
    margin-bottom:30px;
}
input[type="text"], input[type="file"]{
    width:100%;
    padding:8px;
    margin-top:5px;
}
button{
    background:#0b5ed7;
    color:#fff;
    padding:8px 15px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}
button:hover{
    background:#084298;
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
    text-align:center;
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
.preview img{
    width:80px;
    margin:5px;
    border-radius:5px;
}
.media-images img{
    width:60px;
    margin:3px;
    border-radius:5px;
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
</style>
</head>

<body>

<div class="container">
<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a>
<h2>Upload Media Gallery</h2>

<div class="form-box">
<form method="POST" enctype="multipart/form-data">

<label>Media Title *</label>
<input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="title" required>

<br><br>

<label>Upload Images (You can select multiple)</label>
<input type="file" name="images[]" multiple required onchange="previewImages(event)">

<br><br>

<div class="preview" id="preview"></div>

<br>

<button type="submit" name="save">Submit</button>

</form>
</div>

<h3>Uploaded Media</h3>

<table>
<tr>
<th>ID</th>
<th>Title</th>
<th>Date</th>
<th>Images</th>
<th>Action</th>
</tr>

<?php
$result = mysqli_query($conn,"SELECT * FROM media_gallery ORDER BY id DESC");

while($row=mysqli_fetch_assoc($result)){
    $images = mysqli_query($conn,"SELECT image_path FROM media_images WHERE media_id=".$row['id']);
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo htmlspecialchars($row['title']); ?></td>
<td><?php echo date("d M Y",strtotime($row['created_at'])); ?></td>
<td class="media-images">
<?php 
while($img = mysqli_fetch_assoc($images)){
    echo "<img src='".$img['image_path']."' alt='Media Image'>";
}
?>
</td>
<td>
<a href="?delete=<?php echo $row['id']; ?>" 
onclick="return confirm('Delete this media?')" 
class="delete-btn">Delete</a>
</td>
</tr>
<?php } ?>

</table>

</div>

<script>
function previewImages(event){
    let preview = document.getElementById("preview");
    preview.innerHTML = "";
    let files = event.target.files;

    for(let i=0;i<files.length;i++){
        let reader = new FileReader();
        reader.onload = function(e){
            let img = document.createElement("img");
            img.src = e.target.result;
            preview.appendChild(img);
        }
        reader.readAsDataURL(files[i]);
    }
}
</script>

</body>
</html>
