<?php
// includes/Tenders/index.php 
include("../header.php"); ?>
<?php
// pdf_helper.php

// Function to format file size in B, KB, MB, GB
function formatSize($bytes) {
    if ($bytes >= 1073741824) {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    } else {
        $bytes = $bytes . ' B';
    }
    return $bytes;
}

// Function to get PDF size
function getPDFSize($pdfPath) {
    // $pdfPath: example "/NCDC_MOHFW/uploads/tenders/abc.pdf"
    $serverPath = $_SERVER['DOCUMENT_ROOT'] . $pdfPath; // absolute path
    if (file_exists($serverPath)) {
        return formatSize(filesize($serverPath));
    } else {
        return "0 KB";
    }
}

?>


<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" alt="NCDC Header">
</div>

<?php
include("../../config/db.php");

$query = "SELECT * FROM tenders 
          WHERE status=1 
          ORDER BY created_at DESC";

$result = mysqli_query($conn, $query);
?>

<style>
/* ===== HEADER IMAGE ===== */
.header-image{
  width:100%;
  height:260px;
  overflow:hidden;
}
.header-image img{
  width:100%;
  height:100%;
  object-fit:cover;
}

/* ===== PAGE ===== */
body{
  font-family:"Segoe UI", Arial, sans-serif;
  background:#fff;
}

.tender-wrapper{
  max-width:1100px;
  margin:40px auto;
  padding:0 20px;
}

.breadcrumb{
  font-size:14px;
  color:#666;
  margin-bottom:10px;
}

.tender-wrapper h1{
  font-size:30px;
  font-weight:700;
  margin-bottom:25px;
}

/* LIST */
.tender-list{
  padding-left:20px;
}

.tender-list li{
  margin-bottom:18px;
  font-size:16px;
  line-height:1.6;
}

.tender-list a{
  text-decoration:none;
  color:#4b2ea3;
}

.tender-list a:hover{
  text-decoration:underline;
}

/* PDF ICON */
.pdf-icon{
  width:18px;
  margin-left:8px;
  vertical-align:middle;
}

/* NEW BADGE */
.new-badge{
  color:#d40000;
  font-size:12px;
  font-weight:bold;
  margin-left:6px;
}

/* RESPONSIVE */
@media(max-width:480px){
  .header-image{
    height:140px;
  }
  .tender-wrapper h1{
    font-size:24px;
  }
}
</style>

<div class="tender-wrapper">

  <div class="breadcrumb">Home › Tenders</div>

  <h1>Tenders</h1>

  <ol class="tender-list">
    <?php if(mysqli_num_rows($result)>0){ 
      while($row = mysqli_fetch_assoc($result)){ ?>
        <li>
          <strong><?= $row['tender_no']; ?></strong>
          <a href="/NCDC_MOHFW/uploads/tenders/<?= $row['pdf_file']; ?>" target="_blank">
  <?= $row['title']; ?> (<?= getPDFSize('/NCDC_MOHFW/uploads/tenders/'.$row['pdf_file']); ?>)
</a>

          <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon">
          <?php if($row['is_new']){ ?>
            <span class="new-badge">NEW</span>
          <?php } ?>
        </li>
    <?php }} else { ?>
        <li>No tenders available at present.</li>
    <?php } ?>
  </ol>

</div>

<?php include("../footer.php"); ?>
