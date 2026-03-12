<?php

/* ===== SESSION TIMEOUT (15 MINUTES) ===== */
$timeout = 15 * 60; // 15 minutes

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $timeout) {
    session_unset();
    session_destroy();
    header("Location: /NCDC_MOHFW/admin/login.php");
    exit;
}

$_SESSION['LAST_ACTIVITY'] = time();

/* ===== CHECK ADMIN LOGIN ===== */
if (!isset($_SESSION['admin'])) {
    header("Location: /NCDC_MOHFW/admin/login.php");
    exit;
}
?>

<!-- ===== AUTO LOGOUT JAVASCRIPT ===== -->
<script>
let logoutTime = 15 * 60 * 1000; // 15 minutes

setTimeout(function(){
    alert("Session expired! Please login again.");
    window.location.href = "/NCDC_MOHFW/admin/login.php";
}, logoutTime);
</script>