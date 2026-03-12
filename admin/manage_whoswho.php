<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: login.php");
  exit;
}
include("includes/session_check.php");
include("../config/db.php");
include_once __DIR__.'/includes/header.php';

/* =====================
   ADD / UPDATE RECORD
===================== */
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
  $id          = isset($_POST['id']) ? intval($_POST['id']) : 0;
  $name        = mysqli_real_escape_string($conn, $_POST['name']);
  $designation = mysqli_real_escape_string($conn, $_POST['designation']);
  $division    = mysqli_real_escape_string($conn, $_POST['division']);

  $department  = !empty($_POST['department']) ? mysqli_real_escape_string($conn, $_POST['department']) : 'N/A';
  $email       = !empty($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : 'N/A';
  $order       = !empty($_POST['display_order']) ? intval($_POST['display_order']) : 0;

  /* PHOTO */
  if(!empty($_FILES['photo']['name'])){
    $photo = time().'_'.basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'], "../uploads/whoswho/".$photo);
  } else {
    $photo = $_POST['old_photo'] ?? 'no_image.png';
  }

  if($id > 0){
    mysqli_query($conn,"
      UPDATE whos_who SET
        name='$name',
        designation='$designation',
        department='$department',
        division='$division',
        email='$email',
        photo='$photo',
        display_order='$order'
      WHERE id=$id
    ");
  } else {
    mysqli_query($conn,"
      INSERT INTO whos_who
      (name, designation, department, division, email, photo, display_order)
      VALUES
      ('$name','$designation','$department','$division','$email','$photo','$order')
    ");
  }
}

/* =====================
   DELETE RECORD
===================== */
if(isset($_GET['del'])){
  $id = intval($_GET['del']);

  $img = mysqli_fetch_assoc(mysqli_query($conn,"SELECT photo FROM whos_who WHERE id=$id"));
  if($img && $img['photo']!='no_image.png'){
    @unlink("../uploads/whoswho/".$img['photo']);
  }

  mysqli_query($conn,"DELETE FROM whos_who WHERE id=$id");
  header("Location: whos_who.php");
  exit;
}

/* =====================
   EDIT FETCH
===================== */
$editData = null;
if(isset($_GET['edit'])){
  $id = intval($_GET['edit']);
  $editData = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM whos_who WHERE id=$id"));
}

$data = mysqli_query($conn,"SELECT * FROM whos_who ORDER BY division, display_order ASC");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Manage Who's Who</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body{
  font-family:Segoe UI, Arial, sans-serif;
  background:#f1f3f6;
  margin:0;
  padding:15px;
}
.container{
  max-width:1100px;
  margin:auto;
  background:#fff;
  padding:20px;
  border-radius:10px;
}
h2{
  margin-bottom:15px;
  color:#333;
}
.back-btn{
  display:inline-block;
  margin-bottom:15px;
  padding:10px 16px;
  background:#333;
  color:#fff;
  text-decoration:none;
  border-radius:6px;
}
.back-btn:hover{background:#0d6efd}

/* FORM */
.form-box{
  background:#fafafa;
  padding:18px;
  border-radius:8px;
}
.form-box input{
  width:100%;
  padding:10px;
  margin-bottom:12px;
  border:1px solid #ccc;
  border-radius:6px;
}
.form-box button{
  width:100%;
  padding:12px;
  background:#0d6efd;
  color:#fff;
  border:none;
  border-radius:6px;
  cursor:pointer;
}
.form-box button:hover{background:#084298}

/* TABLE */
.table-wrap{
  margin-top:25px;
  overflow-x:auto;
}
table{
  width:100%;
  min-width:750px;
  border-collapse:collapse;
}
th,td{
  padding:10px;
  border:1px solid #ddd;
}
th{
  background:#0d6efd;
  color:#fff;
}
img{
  width:60px;
  border-radius:6px;
}
.action a{
  margin-right:8px;
  text-decoration:none;
  font-weight:600;
}
.edit{color:#0d6efd}
.del{color:red}

/* MOBILE */
@media(max-width:768px){
  h2{font-size:18px}
}
</style>
</head>

<body>
<div class="container">

<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a>

<h2><?php echo $editData ? "Edit Staff" : "Add Staff"; ?></h2>

<div class="form-box">
<form method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo $editData['id'] ?? ''; ?>">
  <input type="hidden" name="old_photo" value="<?php echo $editData['photo'] ?? 'no_image.png'; ?>">

  <input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="name" placeholder="Name *" required value="<?php echo $editData['name'] ?? ''; ?>">
  <input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="designation" placeholder="Designation *" required value="<?php echo $editData['designation'] ?? ''; ?>">
  <input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="division" placeholder="Division *" required value="<?php echo $editData['division'] ?? ''; ?>">

  <input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="department" placeholder="Department" value="<?php echo $editData['department'] ?? ''; ?>">
  <input type="email" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="email" placeholder="Email" value="<?php echo $editData['email'] ?? ''; ?>">
  <input type="number" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="display_order" placeholder="Display Order" value="<?php echo $editData['display_order'] ?? 0; ?>">

  <input type="file" name="photo">
  <button type="submit" name="save">Save</button>
</form>
</div>

<h2>Who's Who List</h2>

<div class="table-wrap">
<table>
<tr>
  <th>Photo</th>
  <th>Name</th>
  <th>Designation</th>
  <th>Division</th>
  <th>Order</th>
  <th>Action</th>
</tr>

<?php while($row=mysqli_fetch_assoc($data)){ ?>
<tr>
  <td>
    <img src="../uploads/whoswho/<?php echo $row['photo'] ?: 'no_image.png'; ?>">
  </td>
  <td><?php echo htmlspecialchars($row['name']); ?></td>
  <td><?php echo htmlspecialchars($row['designation']); ?></td>
  <td><?php echo htmlspecialchars($row['division']); ?></td>
  <td><?php echo $row['display_order']; ?></td>
  <td class="action">
    <a class="edit" href="?edit=<?php echo $row['id']; ?>">Edit</a>
    <a class="del" href="?del=<?php echo $row['id']; ?>" onclick="return confirm('Delete this record?')">Delete</a>
  </td>
</tr>
<?php } ?>
</table>
</div>

</div>
</body>
</html>

<?php include_once __DIR__.'/includes/footer.php'; ?>
