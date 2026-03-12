<?php
include_once __DIR__ . '/../includes/session_secure.php';

if(!isset($_SESSION['admin'])){
  header("Location: login.php");
  exit;
}

include_once __DIR__.'/includes/header.php';
include("includes/session_check.php");
?>

<div class="admin-wrapper">

  <?php include_once __DIR__.'/sidebar.php'; ?>

  <div class="admin-content" id="adminContent">
    <h2>Welcome Admin 👋</h2>
    <p>Left menu se option select karein.</p>
  </div>

</div>

<?php include_once __DIR__.'/includes/footer.php'; ?>