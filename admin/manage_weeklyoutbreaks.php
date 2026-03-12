<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}
include("includes/session_check.php");
include("../config/db.php");
include_once __DIR__.'/includes/header.php';

/* =======================
   DELETE WEEKLY OUTBREAK
======================= */
if (isset($_GET['delete_id'])) {
  $id = intval($_GET['delete_id']);

  $res = mysqli_query($conn, "SELECT pdf_file FROM weekly_outbreaks WHERE id=$id");
  if ($row = mysqli_fetch_assoc($res)) {
    $filePath = "../uploads/weekly_outbreaks/" . $row['pdf_file'];
    if (file_exists($filePath)) {
      unlink($filePath);
    }
  }

  mysqli_query($conn, "DELETE FROM weekly_outbreaks WHERE id=$id");
  header("Location: ".$_SERVER['PHP_SELF']);
  exit;
}

/* =======================
   INSERT WEEKLY OUTBREAK
======================= */
if (!empty($_FILES['pdf']['name'])) {
$title = trim($_POST['title']);

if (!preg_match("/^[A-Za-z0-9 ]+$/", $title)) {
    echo "<script>
            alert('Only letters, numbers and spaces are allowed');
            history.back();
          </script>";
    exit;
}

$title = mysqli_real_escape_string($conn, $title);
    $fileName = $_FILES['pdf']['name'];
    $tmpName  = $_FILES['pdf']['tmp_name'];

    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // ✅ Sirf PDF allow
    if ($ext !== 'pdf') {
        echo "<script>alert('Only PDF file is allowed');</script>";
        exit;
    }

    

    // ✅ MIME type check (real PDF)
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime  = finfo_file($finfo, $tmpName);
    finfo_close($finfo);

    if ($mime !== 'application/pdf') {
        echo "<script>alert('Invalid PDF file');</script>";
        exit;
    }

    $pdf_name = time() . "_" . basename($fileName);
    move_uploaded_file($tmpName, "../uploads/weekly_outbreaks/" . $pdf_name);
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Manage Weekly Outbreaks</title>

<style>
body{
  font-family:"Segoe UI", Arial, sans-serif;
  background:#f4f6f9;
  padding:20px;
}

h2{
  margin-top:0;
}

/* FORM */
form{
  background:#fff;
  padding:20px;
  border-radius:8px;
  max-width:520px;
  box-shadow:0 2px 8px rgba(0,0,0,0.08);
}

label{
  font-weight:600;
}

input{
  width:100%;
  padding:8px;
  margin-top:6px;
  margin-bottom:15px;
  border:1px solid #ccc;
  border-radius:5px;
}

button{
  background:#0b77b7;
  color:#fff;
  border:none;
  padding:10px 20px;
  border-radius:6px;
  cursor:pointer;
}

button:hover{
  background:#095f91;
}

/* TABLE */
table{
  width:100%;
  margin-top:30px;
  border-collapse:collapse;
  background:#fff;
  box-shadow:0 2px 8px rgba(0,0,0,0.08);
}

th, td{
  padding:10px;
  border:1px solid #ddd;
}

th{
  background:#f1f3f5;
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

@media(max-width:600px){
  .back-btn{
    width:100%;
    justify-content:center;
  }
}
</style>
</head>

<body>

<a href="dashboard.php" class="back-btn">⬅ Back to Dashboard</a>

<h2>Add Weekly Outbreak PDF</h2>

<form method="POST" enctype="multipart/form-data">
  <label>Year</label>
  <input type="number" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="year" required>

  <label>Week Number</label>
  <input type="number" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="week_no" required>

  <label>Upload PDF</label>
  <input type="file" name="pdf" accept=".pdf" required>

  <button type="submit" name="submit">Upload Weekly PDF</button>
</form>

<hr>

<h2>Uploaded Weekly Outbreaks</h2>

<table border="1" cellpadding="8">
<tr>
  <th>ID</th>
  <th>Year</th>
  <th>Week</th>
  <th>Actions</th>
</tr>

<?php
$result = mysqli_query(
  $conn,
  "SELECT * FROM weekly_outbreaks ORDER BY year DESC, week_no DESC"
);

while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
  <td><?= $row['id']; ?></td>
  <td><?= $row['year']; ?></td>
  <td>Week <?= $row['week_no']; ?></td>
  <td>
    <a href="../uploads/weekly_outbreaks/<?= $row['pdf_file']; ?>" target="_blank">
      View PDF
    </a>
    |
    <a href="?delete_id=<?= $row['id']; ?>"
       onclick="return confirm('Delete this weekly outbreak PDF?');">
       Delete
    </a>
  </td>
</tr>
<?php } ?>

</table>

</body>
</html>
<?php include_once __DIR__.'/includes/footer.php'; ?>