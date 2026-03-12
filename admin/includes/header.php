<?php
if (session_status() === PHP_SESSION_NONE) session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel | NCDC</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- MAIN SITE CSS (PUBLIC UI SAME) -->
<link rel="stylesheet" href="/NCDC_MOHFW/assets/css/style.css">

<style>

/* ===== HEADER DIVIDER ===== */
.header-divider{
  width:100%;
  height:2px;
  background:#000;
}

</style>
</head>
<body>

<!-- ================= TOP UTILITY ================= -->
<div class="top-utility">
  <div class="top-inner">
    <div class="top-left">
      Ministry of Health & Family Welfare | Government of India
    </div>
    <div class="top-right">
      <strong>ADMIN PANEL</strong>
    </div>
  </div>
</div>

<!-- ================= LOGO ROW ================= -->
<div class="header-inner">
  <div class="header-left">
    <img src="/NCDC_MOHFW/assets/images/emblem.png" class="emblem">
    <div class="title-text">
      <h1>National Centre for Disease Control</h1>
      <p>Directorate General of Health Services, MoHFW<br>Government of India</p>
    </div>
  </div>
  <div class="header-right">
    <img src="/NCDC_MOHFW/assets/images/azadi.png">
    <img src="/NCDC_MOHFW/assets/images/ncdc-logo.png">
  </div>
</div>
<div class="header-divider"></div>