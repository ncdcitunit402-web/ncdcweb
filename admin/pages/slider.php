<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: ../login.php");
  exit;
}
include("../../config/db.php");
include_once __DIR__ . '/../includes/header.php';


/* ================= ADD SLIDER ================= */
if(isset($_POST['add_slider'])){
$title = trim($_POST['title']);

if (!preg_match("/^[A-Za-z0-9 ]+$/", $title)) {
    echo "<script>
            alert('Only letters, numbers and spaces are allowed');
            history.back();
          </script>";
    exit;
}

$title = mysqli_real_escape_string($conn, $title);
  $title  = mysqli_real_escape_string($conn, $_POST['title']);
  $status = $_POST['status'];

  // Get file extension
  $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

  // ✅ Allow only jpg & png
  if(!in_array($ext, ['jpg','jpeg','png'])){
    echo "<script>
            alert('Only JPG and PNG images are allowed');
            history.back();
          </script>";
    exit;
  }

  $imgName = time().'_'.$_FILES['image']['name'];
  $tmp     = $_FILES['image']['tmp_name'];

  $path = $_SERVER['DOCUMENT_ROOT']."/NCDC_MOHFW/uploads/slider/";

  if(move_uploaded_file($tmp, $path.$imgName)){
    mysqli_query($conn,"INSERT INTO sliders(title,image,status) 
                        VALUES('$title','$imgName','$status')");
    header("Location: slider.php");
    exit;
  } else {
    echo "<script>
            alert('Image upload failed');
            history.back();
          </script>";
  }
}


/* ================= EDIT SLIDER ================= */
if(isset($_POST['edit_slider'])){
$title = trim($_POST['title']);

if (!preg_match("/^[A-Za-z0-9 ]+$/", $title)) {
    echo "<script>
            alert('Only letters, numbers and spaces are allowed');
            history.back();
          </script>";
    exit;
}

$title = mysqli_real_escape_string($conn, $title);
  $id     = (int)$_POST['edit_id'];
  $title  = mysqli_real_escape_string($conn, $_POST['edit_title']);
  $status = $_POST['edit_status'];
  $oldImg = $_POST['old_image'];

  $uploadDir = $_SERVER['DOCUMENT_ROOT']."/NCDC_MOHFW/uploads/slider/";

  /* CHECK NEW IMAGE */
  if(isset($_FILES['edit_image']) && $_FILES['edit_image']['error'] === 0){

    // Get file extension
    $ext = strtolower(pathinfo($_FILES['edit_image']['name'], PATHINFO_EXTENSION));

    // ✅ Allow only JPG & PNG
    if(!in_array($ext, ['jpg','jpeg','png'])){
      echo "<script>
              alert('Only JPG and PNG images are allowed');
              history.back();
            </script>";
      exit;
    }

    $newImg = time().'_'.basename($_FILES['edit_image']['name']);
    $tmp    = $_FILES['edit_image']['tmp_name'];

    /* MOVE NEW IMAGE */
    if(move_uploaded_file($tmp, $uploadDir.$newImg)){

      /* DELETE OLD IMAGE */
      if(!empty($oldImg) && file_exists($uploadDir.$oldImg)){
        unlink($uploadDir.$oldImg);
      }

      /* UPDATE DB WITH IMAGE */
      mysqli_query($conn,"UPDATE sliders 
        SET title='$title', image='$newImg', status='$status' 
        WHERE id=$id");

    } else {
      echo "<script>
              alert('New image upload failed');
              history.back();
            </script>";
      exit;
    }

  } else {
    /* UPDATE WITHOUT IMAGE */
    mysqli_query($conn,"UPDATE sliders 
      SET title='$title', status='$status' 
      WHERE id=$id");
  }

  header("Location: slider.php");
  exit;
}



/* ================= DELETE SLIDER ================= */
if(isset($_POST['delete_slider'])){
  $id = $_POST['delete_id'];

  $q = mysqli_query($conn,"SELECT image FROM sliders WHERE id=$id");
  $img = mysqli_fetch_assoc($q);

  if($img && file_exists($uploadDir.$img['image'])){
    unlink($uploadDir.$img['image']);
  }

  mysqli_query($conn,"DELETE FROM sliders WHERE id=$id");
  header("Location: slider.php");
  exit;
}


/* ================= FETCH SLIDERS ================= */
$sliders = mysqli_query($conn,"SELECT * FROM sliders ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Slider Management</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!-- =================== YOUR UI START =================== -->

<div class="slider-admin">
  <a href="../dashboard.php" class="back-btn">⬅ Back to Dashboard</a>
  <h2>📸 Manage Homepage Slider</h2>

  <!-- ADD SLIDER FORM -->
  <div class="slider-form">
    <form method="post" enctype="multipart/form-data">
      <label>Slider Title</label>
<input type="text" 
       name="title" 
       placeholder="Enter slider title" 
       pattern="[A-Za-z0-9 ]+" 
       title="Only letters, numbers and spaces are allowed"
       required>

      <label>Upload Image</label>
<input type="file" name="image" accept=".jpg,.jpeg,.png" required>

      <label>Status</label>
      <select name="status">
        <option value="1">Active</option>
        <option value="0">Inactive</option>
      </select>

      <button type="submit" name="add_slider">➕ Add Slider</button>
    </form>
  </div>

  <!-- SLIDER LIST -->
  <div class="slider-table-wrapper">
    <table class="slider-table">
      <tr>
        <th>#</th>
        <th>Preview</th>
        <th>Title</th>
        <th>Status</th>
        <th>Action</th>
      </tr>

      <?php $count=1; while($row=mysqli_fetch_assoc($sliders)){ ?>
      <tr>
        <td><?= $count++ ?></td>
        <td><img src="/NCDC_MOHFW/uploads/slider/<?= $row['image'] ?>"></td>
        <td><?= $row['title'] ?></td>
        <td><?= $row['status'] ? "Active" : "Inactive" ?></td>
        <td>
          <a href="#" class="action-btn edit-btn"
             onclick="openEditModal(
               '<?= $row['id'] ?>',
               '<?= htmlspecialchars($row['title'],ENT_QUOTES) ?>',
               '<?= $row['image'] ?>',
               '<?= $row['status'] ?>'
             )">Edit</a>

          <a href="#" class="action-btn delete-btn"
             onclick="openDeleteModal('<?= $row['id'] ?>','<?= htmlspecialchars($row['title'],ENT_QUOTES) ?>')">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </table>
  </div>

</div>

<!-- ================= EDIT MODAL ================= -->
<div id="editModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeEditModal()">&times;</span>
    <h3>Edit Slider</h3>
    <form method="post" enctype="multipart/form-data">
      <input type="hidden" name="edit_id" id="edit_id">
      <input type="hidden" name="old_image" id="old_image">

      <label>Slider Title</label>
      <input type="text" name="edit_title" id="edit_title" required>

      <label>Upload New Image (Optional)</label>
      <input type="file" name="edit_image" accept="image/*">

      <label>Status</label>
      <select name="edit_status" id="edit_status">
        <option value="1">Active</option>
        <option value="0">Inactive</option>
      </select>

      <button type="submit" name="edit_slider">💾 Save Changes</button>
    </form>
  </div>
</div>

<!-- ================= DELETE MODAL ================= -->
<div id="deleteModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeDeleteModal()">&times;</span>
    <h3>Delete Slider</h3>
    <p id="deleteText"></p>
    <form method="post">
      <input type="hidden" name="delete_id" id="delete_id">
      <button type="submit" name="delete_slider" class="delete-btn">🗑 Delete</button>
      <button type="button" onclick="closeDeleteModal()">Cancel</button>
    </form>
  </div>
</div>

<!-- ================= JS ================= -->
<script>
function openEditModal(id,title,image,status){
  edit_id.value=id;
  edit_title.value=title;
  old_image.value=image;
  edit_status.value=status;
  editModal.style.display="block";
}
function closeEditModal(){ editModal.style.display="none"; }

function openDeleteModal(id,title){
  delete_id.value=id;
  deleteText.innerText='Are you sure you want to delete "'+title+'"?';
  deleteModal.style.display="block";
}
function closeDeleteModal(){ deleteModal.style.display="none"; }

window.onclick=function(e){
  if(e.target==editModal) closeEditModal();
  if(e.target==deleteModal) closeDeleteModal();
}
</script>

<!-- ================= CSS (YOUR UI) ================= -->
<style>
/* SAME CSS YOU PROVIDED – UNCHANGED */
.slider-admin{max-width:1000px;margin:20px auto;padding:0 15px;}
.slider-admin h2{margin-bottom:20px;color:#0b77b7;font-size:24px;}
.slider-form{background:#f5f7fa;padding:20px;border-radius:6px;margin-bottom:30px;}
.slider-form label{display:block;font-weight:600;margin-bottom:6px;}
.slider-form input,.slider-form select{width:90%;padding:8px 10px;margin-bottom:15px;border:1px solid #ccc;border-radius:4px;}
.slider-form button{background:#0b77b7;color:#fff;padding:10px 16px;border:none;border-radius:4px;font-weight:600;}
.slider-table{width:100%;border-collapse:collapse;min-width:600px;}
.slider-table th,.slider-table td{border:1px solid #ddd;padding:10px;}
.slider-table th{background:#0b77b7;color:#fff;}
.slider-table img{width:120px;height:60px;object-fit:cover;}
.action-btn{padding:6px 10px;border-radius:4px;color:#fff;text-decoration:none;}
.edit-btn{background:#4caf50;}
.delete-btn{background:#e53935;}
.modal{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.5);}
.modal-content{background:#fff;margin:10% auto;padding:20px;border-radius:6px;max-width:500px;}
.close{position:absolute;right:15px;top:10px;font-size:24px;cursor:pointer;}
.slider-table-wrapper{
  overflow-x:auto;
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



/* ===== MODAL BACKDROP ===== */
.modal {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, 0.6);
  backdrop-filter: blur(4px);
  z-index: 9999;
  animation: fadeIn 0.3s ease;
}

/* ===== MODAL BOX ===== */
.modal-content {
  background: #ffffff;
  max-width: 420px;
  width: 90%;
  margin: 6% auto;
  padding: 25px 28px;
  border-radius: 14px;
  box-shadow: 0 20px 40px rgba(0,0,0,0.25);
  position: relative;
  animation: slideUp 0.35s ease;
}

/* ===== MODAL TITLE ===== */
.modal-content h3 {
  margin-bottom: 18px;
  color: #0b77b7;
  text-align: center;
  font-size: 22px;
  font-weight: 600;
}

/* ===== CLOSE BUTTON ===== */
.modal-content .close {
  position: absolute;
  top: 14px;
  right: 18px;
  font-size: 26px;
  font-weight: bold;
  cursor: pointer;
  color: #999;
  transition: 0.3s;
}

.modal-content .close:hover {
  color: #e74c3c;
  transform: rotate(90deg);
}

/* ===== FORM LABELS ===== */
.modal-content label {
  display: block;
  margin-top: 14px;
  margin-bottom: 5px;
  font-weight: 500;
  color: #333;
}

/* ===== INPUTS ===== */
.modal-content input,
.modal-content select {
  width: 100%;
  padding: 10px 12px;
  border: 1px solid #ddd;
  border-radius: 8px;
  font-size: 14px;
  transition: 0.3s;
}

.modal-content input:focus,
.modal-content select:focus {
  border-color: #0b77b7;
  box-shadow: 0 0 0 2px rgba(11,119,183,0.15);
  outline: none;
}

/* ===== SAVE BUTTON ===== */
.modal-content button[type="submit"] {
  margin-top: 18px;
  width: 100%;
  padding: 12px;
  background: linear-gradient(135deg, #0b77b7, #189ad6);
  color: #fff;
  border: none;
  border-radius: 8px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s;
}

.modal-content button[type="submit"]:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 14px rgba(11,119,183,0.35);
}

/* ===== DELETE MODAL TEXT ===== */
#deleteText {
  text-align: center;
  font-size: 15px;
  color: #444;
  margin: 20px 0;
}

/* ===== DELETE BUTTON ===== */
.delete-btn {
  background: linear-gradient(135deg, #e74c3c, #c0392b);
  color: #fff;
  border: none;
  padding: 12px;
  width: 100%;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s;
}

.delete-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 14px rgba(231,76,60,0.35);
}

/* ===== CANCEL BUTTON ===== */
.modal-content button[type="button"] {
  margin-top: 10px;
  width: 100%;
  padding: 10px;
  background: #f1f1f1;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 500;
}

.modal-content button[type="button"]:hover {
  background: #ddd;
}

/* ===== ANIMATIONS ===== */
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes slideUp {
  from {
    transform: translateY(40px);
    opacity: 0;
  }
  to {
    transform: translateY(0);
    opacity: 1;
  }
}

/* ===== MOBILE RESPONSIVE ===== */
@media (max-width: 480px) {
  .modal-content {
    margin: 20% auto;
    padding: 22px;
  }

  .modal-content h3 {
    font-size: 20px;
  }
}

</style>

</body>
</html>
