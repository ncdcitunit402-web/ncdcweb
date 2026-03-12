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
   DELETE STAFF
======================= */
if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);

    $res = mysqli_query($conn, "SELECT photo FROM staff WHERE id=$id");
    if ($row = mysqli_fetch_assoc($res)) {
        if (!empty($row['photo']) && $row['photo'] != 'uploads/Staff/no-image.png') {
            $filePath = "../" . $row['photo'];
            if (file_exists($filePath)) unlink($filePath);
        }
    }

    mysqli_query($conn, "DELETE FROM staff WHERE id=$id");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

/* =======================
   FETCH STAFF FOR EDIT
======================= */
$editData = null;
if (isset($_GET['edit_id'])) {
    $edit_id = intval($_GET['edit_id']);
    $res = mysqli_query($conn, "SELECT * FROM staff WHERE id=$edit_id");
    $editData = mysqli_fetch_assoc($res);
}

/* =======================
   INSERT / UPDATE STAFF
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
    if (empty($_POST['division']) || empty($_POST['staff_name']) || empty($_POST['designation'])) {
        die("Division, Staff Name and Designation are mandatory.");
    }

    $id          = intval($_POST['id']);
    $division    = mysqli_real_escape_string($conn, trim($_POST['division']));
    $staff_name  = mysqli_real_escape_string($conn, trim($_POST['staff_name']));
    $designation = mysqli_real_escape_string($conn, trim($_POST['designation']));
    $degree      = !empty($_POST['degree']) ? mysqli_real_escape_string($conn, $_POST['degree']) : 'N/A';
    $email       = !empty($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : 'N/A';

    // PHOTO
if (!empty($_FILES['photo']['name'])) {

    $file_ext  = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));
    $file_type = $_FILES['photo']['type'];

    // Allow only JPG and PNG
    $allowed_ext  = ['jpg','png'];
    $allowed_mime = ['image/jpeg','image/png'];

    if(!in_array($file_ext,$allowed_ext) || !in_array($file_type,$allowed_mime)){
        echo "<script>alert('Only JPG and PNG images are allowed'); history.back();</script>";
        exit; // ⛔ STOP upload
    }

    $photoName = time()."_".basename($_FILES['photo']['name']);
    $uploadDir = "../uploads/Staff/";

    if (!is_dir($uploadDir)) mkdir($uploadDir,0777,true);
    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadDir.$photoName);

    $photoPath = "uploads/Staff/".$photoName;

    // delete old photo
    if (!empty($_POST['old_photo']) && $_POST['old_photo']!='uploads/Staff/no-image.png') {
        $oldPath = "../".$_POST['old_photo'];
        if (file_exists($oldPath)) unlink($oldPath);
    }

} else {
    $photoPath = $_POST['old_photo'] ?: 'uploads/Staff/no-image.png';
}

    if ($id > 0) {
        // UPDATE
        mysqli_query($conn,"UPDATE staff SET
            division='$division',
            staff_name='$staff_name',
            designation='$designation',
            degree='$degree',
            email='$email',
            photo='$photoPath'
            WHERE id=$id
        ");
    } else {
        // INSERT
        mysqli_query($conn,"INSERT INTO staff
            (division, staff_name, designation, degree, email, photo, status)
            VALUES
            ('$division','$staff_name','$designation','$degree','$email','$photoPath',1)
        ");
    }

    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Staff</title>

<style>
body{
  font-family:"Segoe UI", Arial, sans-serif;
  background:#f4f6f9;
  padding:15px;
}
.container{
  max-width:1200px;
  margin:auto;
}
form{
  background:#fff;
  padding:20px;
  border-radius:10px;
  max-width:650px;
  box-shadow:0 3px 10px rgba(0,0,0,0.08);
}
label{ font-weight:600; }
input, select{
  width:100%;
  padding:10px;
  margin-bottom:15px;
  border:1px solid #ccc;
  border-radius:6px;
}
button{
  background:#0b77b7;
  color:#fff;
  padding:12px;
  border:none;
  border-radius:8px;
  cursor:pointer;
}
button:hover{ background:#095f91; }

/* TABLE */
.table-wrapper{ overflow-x:auto; }
table{
  width:100%;
  margin-top:30px;
  border-collapse:collapse;
  background:#fff;
  box-shadow:0 3px 10px rgba(0,0,0,0.08);
}
th, td{
  padding:12px;
  border-bottom:1px solid #ddd;
}
th{ background:#f1f3f5; }
.staff-photo{
  width:55px;
  height:55px;
  border-radius:50%;
  object-fit:cover;
}

/* BACK BUTTON */
.back-btn{
  display:inline-flex;
  align-items:center;
  gap:6px;
  margin-bottom:18px;
  padding:8px 14px;
  background:#333;
  color:#fff;
  text-decoration:none;
  border-radius:8px;
}

@media(max-width:768px){
  form{ max-width:100%; }
}
</style>
</head>

<body>
<div class="container">

<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a>

<h2><?= $editData ? 'Edit Staff' : 'Add Staff' ?></h2>

<form method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $editData['id'] ?? 0 ?>">
<input type="hidden" name="old_photo" value="<?= $editData['photo'] ?? 'uploads/Staff/no-image.png' ?>">

<label>Division *</label>
<select name="division" required>
<option value="">-- Select Division --</option>
<?php
$divisions = [
"Central Library","Division of Epidemiology","Enterovirus Division","IDSP"
];
foreach($divisions as $d){
  $sel = ($editData && $editData['division']==$d)?'selected':'';
  echo "<option $sel>$d</option>";
}
?>
</select>

<label>Staff Name *</label>
<input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="staff_name" value="<?= $editData['staff_name'] ?? '' ?>" required>

<label>Designation *</label>
<input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="designation" value="<?= $editData['designation'] ?? '' ?>" required>

<label>Degree</label>
<input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="degree" value="<?= $editData['degree'] ?? '' ?>">

<label>Email</label>
<input type="email" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="email" value="<?= $editData['email'] ?? '' ?>">

<label>Photo</label>
<input type="file" name="photo" accept="image/*">
<?php if(!empty($editData['photo'])){ ?>
<img src="../<?= $editData['photo']; ?>" width="70">
<?php } ?>

<button type="submit" name="submit">
<?= $editData ? 'Update Staff' : 'Save Staff' ?>
</button>
</form>

<h2>Staff List</h2>

<div class="table-wrapper">
<table>
<tr>
  <th>ID</th>
  <th>Photo</th>
  <th>Name</th>
  <th>Division</th>
  <th>Designation</th>
  <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn,"SELECT * FROM staff ORDER BY id DESC");
while($row=mysqli_fetch_assoc($result)){
$img = (!empty($row['photo']) && file_exists("../".$row['photo']))
       ? "../".$row['photo']
       : "../uploads/Staff/no-image.png";
?>
<tr>
<td><?= $row['id']; ?></td>
<td><img src="<?= $img ?>" class="staff-photo"></td>
<td><?= $row['staff_name']; ?></td>
<td><?= $row['division']; ?></td>
<td><?= $row['designation']; ?></td>
<td>
  <a href="?edit_id=<?= $row['id']; ?>">Edit</a> |
  <a href="?delete_id=<?= $row['id']; ?>" onclick="return confirm('Delete?');">Delete</a>
</td>
</tr>
<?php } ?>
</table>
</div>

</div>
</body>
</html>

<?php include_once __DIR__.'/includes/footer.php'; ?>
