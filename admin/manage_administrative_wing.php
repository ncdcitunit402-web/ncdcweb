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

    $res = mysqli_query($conn, "SELECT photo FROM administrative_staff WHERE id=$id");
    if ($row = mysqli_fetch_assoc($res)) {
        if ($row['photo'] != 'no-photo.png') {
            $filePath = "../uploads/administrative/".$row['photo'];
            if (file_exists($filePath)) unlink($filePath);
        }
    }

    mysqli_query($conn, "DELETE FROM administrative_staff WHERE id=$id");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

/* =======================
   FETCH FOR EDIT
======================= */
$editData = null;
if (isset($_GET['edit_id'])) {
    $edit_id = intval($_GET['edit_id']);
    $res = mysqli_query($conn, "SELECT * FROM administrative_staff WHERE id=$edit_id");
    $editData = mysqli_fetch_assoc($res);
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
    $id          = intval($_POST['id']);
    $section_id  = intval($_POST['section_id']);
    $is_director = intval($_POST['is_director']);

    // Mandatory
    $name        = trim($_POST['name']);
    $designation = trim($_POST['designation']);

    if ($name == '' || $designation == '') {
        echo "<script>alert('Name and Designation are mandatory'); history.back();</script>";
        exit;
    }

    // Optional → N/A
    $qualification = trim($_POST['qualification']) ?: 'N/A';
    $phone         = trim($_POST['phone']) ?: 'N/A';
    $email         = trim($_POST['email']) ?: 'N/A';

    // Escape
    $name          = mysqli_real_escape_string($conn, $name);
    $designation   = mysqli_real_escape_string($conn, $designation);
    $qualification = mysqli_real_escape_string($conn, $qualification);
    $phone         = mysqli_real_escape_string($conn, $phone);
    $email         = mysqli_real_escape_string($conn, $email);

    /* ===== PHOTO (ONLY JPG & PNG) ===== */
$defaultPhoto = 'no-photo.png';

if (!empty($_FILES['photo']['name'])) {

    $file_ext  = strtolower(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION));
    $file_type = $_FILES['photo']['type'];

    // Allow only JPG and PNG
    $allowed_ext  = ['jpg','png'];
    $allowed_mime = ['image/jpeg','image/png'];

    if(!in_array($file_ext, $allowed_ext) || !in_array($file_type, $allowed_mime)){
        echo "<script>alert('Only JPG and PNG images are allowed'); history.back();</script>";
        exit; // ⛔ stop everything
    }

    $photo = time().'_'.basename($_FILES['photo']['name']);

    if (!is_dir("../uploads/administrative/")) {
        mkdir("../uploads/administrative/", 0777, true);
    }

    move_uploaded_file(
        $_FILES['photo']['tmp_name'],
        "../uploads/administrative/".$photo
    );

} else {
    $photo = !empty($_POST['old_photo']) ? $_POST['old_photo'] : $defaultPhoto;
}

    if ($id > 0) {
        // UPDATE
        mysqli_query($conn, "UPDATE administrative_staff SET
            section_id='$section_id',
            name='$name',
            designation='$designation',
            qualification='$qualification',
            phone='$phone',
            email='$email',
            photo='$photo',
            is_director='$is_director'
            WHERE id=$id
        ");
    } else {
        // INSERT
        mysqli_query($conn, "INSERT INTO administrative_staff
        (section_id, name, designation, qualification, phone, email, photo, is_director)
        VALUES
        ('$section_id','$name','$designation','$qualification','$phone','$email','$photo','$is_director')");
    }

    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

/* =======================
   FETCH SECTIONS
======================= */
$sections = mysqli_query($conn, "SELECT * FROM admin_sections WHERE status=1");
?>

<!DOCTYPE html>
<html>
<head>
<title>Administrative Wing Admin</title>

<style>
<?php /* === RESPONSIVE UI === */ ?>
*{ box-sizing:border-box; }
body{ font-family:Segoe UI,Arial; background:#f4f6f9; padding:16px; }

h2{ color:#003366; margin:16px 0; }

/* FORM */
form{
  background:#fff;
  padding:20px;
  border-radius:10px;
  max-width:720px;
  margin:auto;
  box-shadow:0 4px 12px rgba(0,0,0,.08);
}
label{ font-weight:600; margin-bottom:6px; display:block; }
input, select{
  width:100%; padding:10px; margin-bottom:14px;
  border:1px solid #ccc; border-radius:6px;
}
button{
  background:#0b77b7; color:#fff; padding:12px;
  width:100%; border:none; border-radius:8px;
  font-size:16px; cursor:pointer;
}

/* TABLE */
.table-wrapper{ overflow-x:auto; }
table{
  width:100%; border-collapse:collapse; background:#fff;
  box-shadow:0 2px 8px rgba(0,0,0,.05);
}
th{ background:#003366; color:#fff; }
th, td{ padding:12px; border:1px solid #ddd; font-size:14px; }
td img{ width:60px; border-radius:6px; }
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

/* MOBILE */
@media(max-width:768px){
  table, thead, tbody, th, tr{ display:block; }
  thead{ display:none; }
  tr{
    background:#fff; margin-bottom:16px;
    padding:12px; border-radius:10px;
    box-shadow:0 2px 6px rgba(0,0,0,.08);
  }
  td{
    display:block; border:none; padding:6px 0;
  }
  td::before{
    content:attr(data-label);
    font-weight:600; color:#555; display:block;
  }
  .back-btn{
        width:100%;
        justify-content:center;
      }
}
</style>
</head>

<body>
<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a>
<h2><?= $editData ? 'Edit Administrative Staff' : 'Add Administrative Staff' ?></h2>

<form method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $editData['id'] ?? 0 ?>">
<input type="hidden" name="old_photo" value="<?= $editData['photo'] ?? '' ?>">

<label>Section</label>
<select name="section_id" required>
<option value="">-- Select Section --</option>
<?php while($sec=mysqli_fetch_assoc($sections)){ ?>
<option value="<?= $sec['id']; ?>"
<?= isset($editData)&&$editData['section_id']==$sec['id']?'selected':'' ?>>
<?= $sec['section_name']; ?>
</option>
<?php } ?>
</select>

<label>Name *</label>
<input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="name" required value="<?= $editData['name'] ?? '' ?>">


<label>Designation *</label>
<input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="designation" required value="<?= $editData['designation'] ?? '' ?>">

<label>Qualification</label>
<input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="qualification" value="<?= $editData['qualification'] ?? '' ?>">

<label>Phone</label>
<input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="phone" value="<?= $editData['phone'] ?? '' ?>">

<label>Email</label>
<input type="email" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="email" value="<?= $editData['email'] ?? '' ?>">

<label>Role</label>
<select name="is_director">
<option value="0" <?= isset($editData)&&$editData['is_director']==0?'selected':'' ?>>Staff</option>
<option value="1" <?= isset($editData)&&$editData['is_director']==1?'selected':'' ?>>Director</option>
</select>

<label>Photo</label>
<input type="file" name="photo" accept="image/*">
<?php
$photoPath="../uploads/administrative/".($editData['photo']??'no-photo.png');
if(!file_exists($photoPath)) $photoPath="../uploads/administrative/no-photo.png";
?>
<img src="<?= $photoPath ?>" width="80">

<button name="submit"><?= $editData?'Update Staff':'Add Staff' ?></button>
</form>

<hr>

<h2>Administrative Staff List</h2>
<div class="table-wrapper">
<table>
<thead>
<tr>
<th>Photo</th><th>Name</th><th>Section</th><th>Designation</th><th>Role</th><th>Action</th>
</tr>
</thead>
<tbody>
<?php
$res=mysqli_query($conn,"
SELECT s.*,sec.section_name
FROM administrative_staff s
LEFT JOIN admin_sections sec ON s.section_id=sec.id
ORDER BY s.id DESC
");
while($row=mysqli_fetch_assoc($res)){
$img="../uploads/administrative/".$row['photo'];
if(!file_exists($img)) $img="../uploads/administrative/no-photo.png";
?>
<tr>
<td data-label="Photo"><img src="<?= $img ?>"></td>
<td data-label="Name"><?= $row['name'] ?></td>
<td data-label="Section"><?= $row['section_name'] ?></td>
<td data-label="Designation"><?= $row['designation'] ?></td>
<td data-label="Role"><?= $row['is_director']?'Director':'Staff' ?></td>
<td data-label="Action">
<a href="?edit_id=<?= $row['id'] ?>">Edit</a> |
<a href="?delete_id=<?= $row['id'] ?>" onclick="return confirm('Delete this record?')">Delete</a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>

</body>
</html>
<?php include_once __DIR__.'/includes/footer.php'; ?>
