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
   DELETE INTERNSHIP
======================= */
if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);
    mysqli_query($conn, "DELETE FROM internships WHERE id=$id");
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

/* =======================
   FETCH FOR EDIT
======================= */
$editData = null;
if (isset($_GET['edit_id'])) {
    $edit_id = intval($_GET['edit_id']);
    $editRes = mysqli_query($conn, "SELECT * FROM internships WHERE id=$edit_id");
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
    $division   = trim($_POST['division_name']) ?: 'N/A';
    $eligibility= trim($_POST['eligibility']) ?: 'N/A';
    $seats      = trim($_POST['seats']) ?: 'N/A';
    $duration   = trim($_POST['duration']) ?: 'N/A';

    if (!empty($_POST['edit_id'])) {
        // UPDATE
        $id = intval($_POST['edit_id']);
        $sql = "UPDATE internships SET 
                division_name='$division',
                eligibility='$eligibility',
                seats='$seats',
                duration='$duration'
                WHERE id=$id";
    } else {
        // INSERT
        $sql = "INSERT INTO internships
                (division_name, eligibility, seats, duration, status)
                VALUES
                ('$division','$eligibility','$seats','$duration',1)";
    }

    mysqli_query($conn, $sql);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Internship Programme</title>

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
input, textarea{
  width:100%;
  padding:10px;
  margin-top:6px;
  border:1px solid #ccc;
  border-radius:6px;
}
textarea{ resize:vertical; }

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

<h2><?= $editData ? 'Edit Internship Programme' : 'Add Internship Programme'; ?></h2>

<form method="POST">
<input type="hidden" name="edit_id" value="<?= $editData['id'] ?? ''; ?>">

<div class="form-grid">

  <div>
    <label>Division Name *</label>
    <input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="division_name" required
      value="<?= $editData['division_name'] ?? ''; ?>">
  </div>

  <div>
    <label>No. of Seats / Year *</label>
    <input type="number" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="seats" required
      value="<?= $editData['seats'] ?? ''; ?>">
  </div>

  <div class="form-full">
    <label>Eligibility Required *</label>
    <textarea name="eligibility" rows="3" required><?= $editData['eligibility'] ?? ''; ?></textarea>
  </div>

  <div class="form-full">
    <label>Internship Duration *</label>
    <input type="text" name="duration" required
      placeholder="e.g. 2 months / Up to 6 months"
      value="<?= $editData['duration'] ?? ''; ?>">
  </div>

</div>

<br>
<button type="submit" name="submit">
  <?= $editData ? 'Update Internship' : 'Add Internship'; ?>
</button>

<?php if($editData){ ?>
  <a href="<?= $_SERVER['PHP_SELF']; ?>" style="margin-left:10px;">Cancel</a>
<?php } ?>
</form>

<h2>Uploaded Internship Programmes</h2>

<div class="table-wrapper">
<table>
<tr>
  <th>ID</th>
  <th>Division</th>
  <th>Eligibility</th>
  <th>Seats</th>
  <th>Duration</th>
  <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM internships ORDER BY id DESC");
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
  <td><?= $row['id']; ?></td>
  <td><?= $row['division_name']; ?></td>
  <td><?= $row['eligibility']; ?></td>
  <td><?= $row['seats']; ?></td>
  <td><?= $row['duration']; ?></td>
  <td class="action">
    <a href="?edit_id=<?= $row['id']; ?>">Edit</a>
    <a href="?delete_id=<?= $row['id']; ?>" 
       onclick="return confirm('Delete this internship?');">
       Delete
    </a>
  </td>
</tr>
<?php }} else { ?>
<tr>
  <td colspan="6">No internship records found.</td>
</tr>
<?php } ?>
</table>
</div>

</div>
</body>
</html>

<?php include_once __DIR__.'/includes/footer.php'; ?>
