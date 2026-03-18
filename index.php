<?php
// ================= ERROR REPORTING (FOR DEBUGGING) =================
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ================= INCLUDE FILES =================
include __DIR__ . '/config/db.php';
include __DIR__ . '/includes/header.php';
?>

<div class="main-content">

<?php include __DIR__ . '/includes/slider.php'; ?>

<?php include __DIR__ . '/includes/announcement.php'; ?>

<?php include __DIR__ . '/includes/about.php'; ?>

<?php include __DIR__ . '/includes/glimpse-programme.php'; ?>

<?php include __DIR__ . '/includes/media.php'; ?>

<?php include __DIR__ . '/includes/scroll.php'; ?>

</div>

<?php include __DIR__ . '/includes/footer1.php'; ?>