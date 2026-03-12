<?php include("header.php"); ?>
<link rel="stylesheet" href="/NCDC_MOHFW/assets/css/style.css">
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
include("../config/db.php");

$sql = "SELECT title, pdf_file, created_at 
        FROM glimpse_details
        WHERE section = 'CD Alert'
        AND status = 1
        ORDER BY created_at DESC";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query Failed: " . mysqli_error($conn));
}

function isNew($date){
    return strtotime($date) >= strtotime('-7 days');
}
?>


<style>
/* ===== HEADER IMAGE ===== */
.header-image{
  height:260px;
  overflow:hidden;
}
.header-image img{
  width:100%;
  height:100%;
  object-fit:cover;
}

/* ===== WRAPPER ===== */
.cd-wrapper{
  max-width:1200px;
  margin:40px auto;
  padding:0 20px;
  font-family:"Segoe UI", Arial, sans-serif;
}

/* ===== BREADCRUMB ===== */
.breadcrumb{
  font-size:14px;
  color:#666;
  margin-bottom:10px;
}

/* ===== TITLES ===== */
.cd-wrapper h1{
  font-size:32px;
  margin-bottom:10px;
}
.subtitle{
  font-size:22px;
  font-weight:600;
  margin:25px 0 15px;
}
.desc{
  line-height:1.8;
  color:#333;
  text-align: justify;
}

/* ===== INFO BOX ===== */
.info-box{
  background:#f6f8fa;
  padding:20px;
  border-radius:10px;
  margin:30px 0;
}

/* ===== ALERT LIST ===== */
.cd-alert-list{
  margin-top:30px;
}

.cd-alert-card{
  display:flex;
  justify-content:space-between;
  align-items:center;
  background:#ffffff;
  padding:18px 22px;
  border-radius:14px;
  box-shadow:0 6px 18px rgba(0,0,0,.08);
  margin-bottom:18px;
  transition:.2s ease;
}

.cd-alert-card:hover{
  transform:translateY(-2px);
}

/* LEFT */
.cd-alert-left{
  display:flex;
  align-items:center;
  gap:14px;
}

.pdf-icon{
  width:34px;
}

.cd-alert-title{
  font-size:16px;
  font-weight:600;
  color:#222;
}

/* NEW TAG */
.tag-new{
  background:#ffeb3b;
  color:#000;
  font-size:11px;
  padding:3px 7px;
  border-radius:5px;
  margin-left:8px;
  font-weight:700;
}

/* DOWNLOAD BUTTON */
.download-btn{
  padding:9px 20px;
  border-radius:22px;
  border:1px solid #1fa971;
  color:#1fa971;
  text-decoration:none;
  font-weight:600;
  transition:.2s ease;
}
.download-btn:hover{
  background:#1fa971;
  color:#fff;
}
.editorial-section{
  max-width:1100px;
  margin:40px auto;
  font-family:"Segoe UI", Arial, sans-serif;
}

.editorial-section h2{
  font-size:22px;
  font-weight:700;
  margin-bottom:14px;
  color:#000;
}

/* TABLE WRAPPER */
.table-wrapper{
  border-radius:10px;
  overflow:hidden;
  box-shadow:0 4px 12px rgba(0,0,0,.08);
}

/* TABLE */
.editorial-table{
  width:100%;
  border-collapse:collapse;
  background:#fff;
}

.editorial-table thead th{
  background:#e6f0ed;
  color:#000;
  font-size:15px;
  font-weight:700;
  padding:12px;
  text-align:left;
}

.editorial-table tbody td{
  padding:12px;
  font-size:14.5px;
  color:#333;
}

/* ZEBRA STRIPES */
.editorial-table tbody tr:nth-child(even){
  background:#f2f7f5;
}

/* HOVER EFFECT */
.editorial-table tbody tr:hover{
  background:#dff1eb;
}

/* COLUMN WIDTH CONTROL */
.editorial-table th:nth-child(1),
.editorial-table td:nth-child(1){
  width:80px;
}

.editorial-table th:nth-child(2){
  width:35%;
}

</style>

<div class="cd-wrapper">

  <div class="breadcrumb">Home › CD Alert</div>

  <h1>CD Alert</h1>

  <div class="subtitle">
    An important tool for Rapid Dissemination of Information towards Control of Diseases.
  </div>

  <p class="desc">
    CD Alert is a monthly newsletter of the National Centre for Diseases Control, Directorate General of Health Services, to disseminate 
    information on various aspects of communicable diseases to medical fraternity and health administrators. It is widely circulated to 
    different parts of the country including Directorates of Health Services of different States, Districts, Primary health Centres, Medical 
    Colleges and individuals. Many a times, the important topics covered in CD Alert have been reproduced, in part or whole, by Indian Medical 
    Association for dissemination of knowledge. The first issue was published in August 1997 on emerging and reemerging diseases and a total of 
    seventy five issues have been published so far. Issues have been published on commonly known topics which have also been updated from time to 
    time. The CD Alerts give an inside view of the disease including the global scenario, Indian scenario and also the diagnostic facilities of 
    the particular disease within our country. The CD Alert becomes a handy tool for the Rapid response Teams for management and containment 
    operations in outbreak/ epidemic situations. These issues have been handy in disease outbreaks like meningococcal meningitis and also have 
    been useful in disasters like Tsunami, floods in Bihar, Cyclone (Aila) in West Bengal, etc.
  </p>

  <!-- EDITOR INFO -->
  <div class="info-box">
    <strong>Chief Editor</strong><br>
    Prof. (Dr.) Atul Goel, Director General of Health Services, MoHFW, Govt. of India.
    <br><br>
    <strong>Executive Editor</strong><br>
    Dr. Arti Bhal, Additional Director & HOD (Epid.)
  </div>

  <div class="editorial-section">
  <h2>Editorial Board:</h2>

  <div class="table-wrapper">
    <table class="editorial-table">
      <thead>
        <tr>
          <th>Sr No.</th>
          <th>Members</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01.</td>
          <td>Dr. Tanzin Dikid</td>
          <td>Joint Director & HOD (CME&VM)</td>
        </tr>
        <tr>
          <td>02.</td>
          <td>Dr. Partha Rakshit</td>
          <td>Joint Director</td>
        </tr>
        <tr>
          <td>03.</td>
          <td>Dr. Shikha Vardhan</td>
          <td>Joint Director</td>
        </tr>
        <tr>
          <td>04.</td>
          <td>Dr. Aradhana Bhargava</td>
          <td>Joint Director, APHO, Nagpur</td>
        </tr>
        <tr>
          <td>05.</td>
          <td>Dr. Meera Dhuria</td>
          <td>Joint Director & HOD (DPHP & NCD)</td>
        </tr>
        <tr>
  <td>06.</td>
  <td>Dr. Monil Singhai</td>
  <td>Joint Director</td>
</tr>

<tr>
  <td>07.</td>
  <td>Dr. Purva Pankaj Sarkate</td>
  <td>Joint Director & HOD (Enterovirus)</td>
</tr>

<tr>
  <td>08.</td>
  <td>Dr. Monil Singhai</td>
  <td>Joint Director</td>
</tr>

<tr>
  <td>09.</td>
  <td>Dr. Anubhav Srivastava</td>
  <td>
    Deputy Director & OIC (Establishment & Strengthening of NCDC branches)
  </td>
</tr>

<tr>
  <td>10.</td>
  <td>Dr. Purvi Patel</td>
  <td>Senior Consultant (on contract basis)</td>
</tr>

      </tbody>
    </table>
  </div>
</div>


  <div class="editorial-section">
  <h2>Editorial Advisory Panel:</h2>

  <div class="table-wrapper">
    <table class="editorial-table">
      <thead>
        <tr>
          <th>Sr No.</th>
          <th>Members</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
  <td>01.</td>
  <td>Dr Anil Kumar</td>
  <td>Principal Advisor</td>
</tr>

<tr>
  <td>02.</td>
  <td>Dr. P.K. Sen</td>
  <td>Principal Advisor</td>
</tr>

<tr>
  <td>03.</td>
  <td>Dr. Sunil Gupta</td>
  <td>Principal Consultant</td>
</tr>

<tr>
  <td>04.</td>
  <td>Dr. S. K. Jain</td>
  <td>Advisor</td>
</tr>
        <tr>
  <td>05.</td>
  <td>Dr. S. Venkatesh</td>
  <td>Consultant (on re-employment basis)</td>
</tr>

<tr>
  <td>06.</td>
  <td>Dr. Sandhya Kabra</td>
  <td>Additional Director &amp; HOD (Biotech. &amp; VH)</td>
</tr>

<tr>
  <td>07.</td>
  <td>Dr. Aakash Shrivastava</td>
  <td>Additional Director &amp; HOD (CEOH)</td>
</tr>

<tr>
  <td>08.</td>
  <td>Dr. Lata Kapoor</td>
  <td>Additional Director &amp; HOD (CBD &amp; DR)</td>
</tr>

<tr>
  <td>09.</td>
  <td>Dr. Simrita Singh</td>
  <td>Additional Director &amp; OIC (Influenza &amp; TB Lab)</td>
</tr>

<tr>
  <td>10.</td>
  <td>Dr. Himanshu Chauhan</td>
  <td>Joint Director &amp; Nodal Office (IDSP)</td>
</tr>

<tr>
  <td>11.</td>
  <td>Dr Vinay Kumar Garg</td>
  <td>Joint Director &amp; HOD (DPD)</td>
</tr>

<tr>
  <td>12.</td>
  <td>Dr Simmi Tiwari</td>
  <td>Joint Director &amp; HOD (Center for One Health)</td>
</tr>
      </tbody>
    </table>
  </div>
</div>

<h4>The Editorial Board consists of Eminent Medical Professionals. 
    The CD Alerts are also available on the NCDC Website. A list of the CD Alerts published from 2008 onwards is given below.</h4>

  <!-- CD ALERT LIST -->
<div class="subtitle">CD Alerts</div>

<div class="cd-alert-list">

<?php if (mysqli_num_rows($result) > 0) { ?>
    <?php while ($row = mysqli_fetch_assoc($result)) { 

        $pdfPath = '/NCDC_MOHFW/' . $row['pdf_file'];   // PDF full path
        $pdfTitle = $row['title'];
        $pdfSize = getPDFSize($pdfPath);               // getPDFSize() from pdf_helper.php

    ?>
        <div class="cd-alert-card">
            <div class="cd-alert-left">
                <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png"
                     class="pdf-icon"
                     alt="PDF">

                <span class="cd-alert-title">
                    <?= htmlspecialchars($pdfTitle) . ' (' . $pdfSize . ')'; ?>
                    <?php if (isNew($row['created_at'])) { ?>
                        <span class="tag-new">NEW</span>
                    <?php } ?>
                </span>
            </div>

            <a href="<?= htmlspecialchars($pdfPath); ?>"
               target="_blank"
               class="download-btn">
                View
            </a>
        </div>

    <?php } ?>
<?php } else { ?>
    <p>No CD Alerts available.</p>
<?php } ?>

</div>

<!-- Back Button -->
<div style="margin-bottom:20px;">
    <a href="/NCDC_MOHFW/index.php" 
       style="display:inline-block; padding:8px 16px; background:#0b5ed7; color:#fff; border-radius:6px; text-decoration:none; font-weight:600;">
        ← Back
    </a>
</div>
</div>

<?php include("footer.php"); ?>
