<?php
session_start();

// Admin login check
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit();
}
include("includes/session_check.php");
include("../config/db.php");
include_once __DIR__.'/includes/header.php';

/* =======================
   DELETE GLIMPSE PDF
======================= */
if (isset($_GET['delete_id'])) {
    $id = intval($_GET['delete_id']);

    $res = mysqli_query($conn, "SELECT pdf_file FROM glimpse_details WHERE id=$id");
    if ($row = mysqli_fetch_assoc($res)) {
        $filePath = "../" . $row['pdf_file'];
        if (file_exists($filePath)) unlink($filePath);
    }

    mysqli_query($conn, "DELETE FROM glimpse_details WHERE id=$id");
    header("Location: manage_glimpse.php");
    exit;
}

/* =======================
   INSERT GLIMPSE PDF
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

    $title   = trim($_POST['title']);
    $section = trim($_POST['section']);

    // Mandatory validation
    if ($title == '' || $section == '' || empty($_FILES['pdf']['name'])) {
        echo "<script>alert('All fields are mandatory'); history.back();</script>";
        exit;
    }

    // ✅ Allow only PDF
    $allowedMime = "application/pdf";
    $fileType = $_FILES['pdf']['type'];
    $fileExt  = strtolower(pathinfo($_FILES['pdf']['name'], PATHINFO_EXTENSION));

    if ($fileType !== $allowedMime || $fileExt !== "pdf") {
        echo "<script>alert('Only PDF files are allowed!'); history.back();</script>";
        exit;
    }

    $title   = mysqli_real_escape_string($conn, $title);
    $section = mysqli_real_escape_string($conn, $section);

    // Upload PDF
    $pdf_name = time() . "_" . basename($_FILES['pdf']['name']);
    $tmp_name = $_FILES['pdf']['tmp_name'];

    $upload_dir = "../uploads/glimpse_pdfs/";
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    move_uploaded_file($tmp_name, $upload_dir . $pdf_name);

    $pdf_path = "uploads/glimpse_pdfs/" . $pdf_name;

    mysqli_query($conn, "INSERT INTO glimpse_details (title, section, pdf_file, status)
                         VALUES ('$title', '$section', '$pdf_path', 1)");

    header("Location: manage_glimpse.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Glimpse</title>

<style>
*{ box-sizing:border-box; }

body{
  font-family:"Segoe UI", Arial, sans-serif;
  background:#f4f6f9;
  padding:20px;
}

/* BACK BUTTON */
.back-btn{
  display:inline-flex;
  align-items:center;
  gap:6px;
  margin-bottom:18px;
  padding:10px 16px;
  background:#222;
  color:#fff;
  text-decoration:none;
  border-radius:8px;
  font-weight:600;
}
.back-btn:hover{ background:#0b5ed7; }

/* FORM */
form{
  background:#fff;
  padding:20px;
  border-radius:10px;
  max-width:520px;
  box-shadow:0 4px 12px rgba(0,0,0,.08);
}

label{ font-weight:600; }

input, select{
  width:100%;
  padding:10px;
  margin-top:6px;
  margin-bottom:16px;
  border:1px solid #ccc;
  border-radius:6px;
}

button{
  background:#0b77b7;
  color:#fff;
  border:none;
  padding:12px;
  width:100%;
  border-radius:8px;
  font-size:16px;
  cursor:pointer;
}
button:hover{ background:#095f91; }

hr{ margin:40px 0; }

/* TABLE (DESKTOP) */
.table-wrapper{
  overflow-x:auto;
}

table{
  width:100%;
  border-collapse:collapse;
  background:#fff;
  box-shadow:0 2px 8px rgba(0,0,0,.08);
}

th, td{
  padding:12px;
  border:1px solid #ddd;
  font-size:15px;
}

th{
  background:#003366;
  color:#fff;
  text-align:left;
}

.action-btn{
  padding:6px 10px;
  border-radius:5px;
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

/* MOBILE CARD VIEW */
@media(max-width:768px){

  body{ padding:12px; }

  table, thead, tbody, th, tr{
    display:block;
  }

  thead{ display:none; }

  tr{
    background:#fff;
    margin-bottom:16px;
    padding:14px;
    border-radius:10px;
    box-shadow:0 2px 6px rgba(0,0,0,.08);
  }

  td{
    border:none;
    padding:6px 0;
    display:block;
  }

  td::before{
    content:attr(data-label);
    font-weight:600;
    color:#555;
    display:block;
    margin-bottom:2px;
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

<h2>Add Glimpse PDF</h2>

<form method="POST" enctype="multipart/form-data">
  <label>Title *</label>
  <input type="text" pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed" name="title" required>

  <label>Section *</label>
  <select name="section" required>
    <option value="">Select Section</option>
    <option>Important Glimpse</option>
    <option>CD Alert</option>
    <option>Employee Corner</option>
    <option>Upcoming Events</option>
  </select>

  <label>Upload PDF *</label>
  <input type="file" name="pdf" accept="application/pdf" required>

  <button type="submit" name="submit">Upload PDF</button>
</form>

<hr>

<h2>Uploaded Glimpse PDFs</h2>

<div class="table-wrapper">
<table>
<thead>
<tr>
  <th>ID</th>
  <th>Title</th>
  <th>Section</th>
  <th>Actions</th>
</tr>
</thead>

<tbody>
<?php
$result = mysqli_query($conn, "SELECT * FROM glimpse_details ORDER BY id DESC");
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
  <td data-label="ID"><?= $row['id']; ?></td>
  <td data-label="Title"><?= htmlspecialchars($row['title']); ?></td>
  <td data-label="Section"><?= htmlspecialchars($row['section']); ?></td>
  <td data-label="Actions">
    <a class="action-btn view-btn"
       href="../<?= $row['pdf_file']; ?>"
       target="_blank">View PDF</a>

    <a class="action-btn delete-btn"
       href="manage_glimpse.php?delete_id=<?= $row['id']; ?>"
       onclick="return confirm('Are you sure you want to delete this PDF?');">
       Delete
    </a>
  </td>
</tr>
<?php } ?>
</tbody>
</table>
</div>

</body>
</html>

<?php include_once __DIR__.'/includes/footer.php'; ?>
