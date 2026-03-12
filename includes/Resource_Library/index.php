
<?php include("../header.php"); ?>

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="Header Image of NCDC Website">
</div>
<?php
include("../../config/db.php");

$active_tab = $_GET['tab'] ?? 'Technical Guidelines';

$query = "SELECT * FROM resource_materials 
          WHERE category='$active_tab' AND status=1 
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
  display:block;
}
body{
  font-family: "Segoe UI", Arial, sans-serif;
  background:#fff;
}

.resource-wrapper{
  display:flex;
  gap:40px;
  max-width:1200px;
  margin:40px auto;
  padding:0 20px;
}

/* SIDEBAR */
.resource-sidebar{
  width:280px;
  background:#f2f8f8;
  border-radius:12px;
  padding:18px;
  height: 50%;
}

.resource-sidebar ul{
  list-style:none;
  padding:0;
  margin:0;
}

.resource-sidebar li{
  margin-bottom:12px;
}

.resource-sidebar a{
  display:block;
  padding:14px 16px;
  border-radius:10px;
  text-decoration:none;
  font-size:15px;
  color:#000;
}

.resource-sidebar li.active a{
  background:#16b1b1;
  color:#fff;
  font-weight:600;
}

/* CONTENT */
.resource-content{
  flex:1;
}

.breadcrumb{
  font-size:14px;
  color:#666;
  margin-bottom:10px;
}

.resource-content h1{
  font-size:30px;
  font-weight:700;
  margin-bottom:20px;
}

/* LIST */
.resource-list{
  padding-left:20px;
}

.resource-list li{
  margin-bottom:16px;
  font-size:16px;
  line-height:1.6;
}

.resource-list a{
  text-decoration:none;
  color:#4b2ea3;
}

.resource-list a:hover{
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
@media(max-width:900px){
  .resource-wrapper{
    flex-direction:column;
  }
  .resource-sidebar{
    width:100%;
  }
}

@media(max-width:480px){
  .header-image{
    height:140px;
  }
}

</style>
<div class="resource-wrapper">

  <!-- SIDEBAR -->
  <aside class="resource-sidebar">
    <ul>
      <li class="<?= $active_tab=='Technical Guidelines'?'active':'' ?>">
        <a href="?tab=Technical Guidelines">Technical Guidelines</a>
      </li>
      <li class="<?= $active_tab=='Resource Material'?'active':'' ?>">
        <a href="?tab=Resource Material">Resource Material</a>
      </li>
      <li class="<?= $active_tab=='Annual Report'?'active':'' ?>">
        <a href="?tab=Annual Report">Annual Report</a>
      </li>
      <li class="<?= $active_tab=='Guideline EForm'?'active':'' ?>">
        <a href="?tab=Guideline EForm">Guideline for EForm</a>
      </li>
    </ul>
  </aside>

  <!-- CONTENT -->
  <section class="resource-content">
    <div class="breadcrumb">Home › Resource Library</div>

    <h1><?= $active_tab ?></h1>

    <?php if($active_tab == 'Guideline EForm'){ ?>

<h3>Video</h3>
<ul class="resource-list">
  <li>
    Guideline for filling VPN form  
    <a href="https://youtu.be/OlT4oayEHxM" target="_blank">
      https://youtu.be/OlT4oayEHxM
    </a>
  </li>

  <li>
    Guideline for filling Email form  
    <a href="https://youtu.be/Dv4bNUQFfcA" target="_blank">
      https://youtu.be/Dv4bNUQFfcA
    </a>
  </li>
</ul>

<br>

<h3>SOS</h3>
<ul class="resource-list">
  <li>
    Guideline for filling Email form
    <ul>
      <li>
        <a href="/NCDC_MOHFW/uploads/resource/Email_Guideline_English.pdf" target="_blank">
          Email Guideline_English
        </a>
      </li>
      <li>
        <a href="/NCDC_MOHFW/uploads/resource/Email_Guideline_Hindi.pdf" target="_blank">
          Email Guideline_Hindi
        </a>
      </li>
    </ul>
  </li>

  <li>
    Guideline for filling VPN form
    <ul>
      <li>
        <a href="/NCDC_MOHFW/uploads/resource/VPN_Guideline_English.pdf" target="_blank">
          VPN Guideline_English
        </a>
      </li>
      <li>
        <a href="/NCDC_MOHFW/uploads/resource/VPN_Guideline_Hindi.pdf" target="_blank">
          VPN Guideline_Hindi
        </a>
      </li>
    </ul>
  </li>
</ul>

<br>

<?php } else { ?>

<ol class="resource-list">
  <?php while($row = mysqli_fetch_assoc($result)) { ?>
    <li>
      <a href="/NCDC_MOHFW/uploads/resource/<?= $row['pdf_file'] ?>" target="_blank">
        <?= $row['title'] ?>
      </a>
      <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon">
      <?php if($row['is_new']) { ?>
        <span class="new-badge">NEW</span>
      <?php } ?>
    </li>
  <?php } ?>
</ol>

<?php } ?>
  </section>

</div>

<?php include("../footer.php"); ?>
