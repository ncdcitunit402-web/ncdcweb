<?php include("../header.php"); ?>
<link rel="stylesheet" href="/NCDC_MOHFW/assets/css/style.css">

<style>

/* ===== NPHICON MENU ===== */
.nphicon-menu ul{
  list-style:none;
  padding:0;
  display:flex;
  flex-wrap:wrap;
  gap:12px;
  margin-bottom:30px;
}

.nphicon-menu ul li a{
  text-decoration:none;
  padding:8px 14px;
  background:#003366;
  color:#fff;
  border-radius:4px;
  font-size:14px;
  transition:0.3s;
  display:inline-block;
}

.nphicon-menu ul li a:hover{
  background:#0055aa;
}

/* Sections */
section{
  margin-bottom:40px;
}

/* Button */
.btn-primary{
  background:#003366;
  color:#fff;
  padding:10px 20px;
  text-decoration:none;
  border-radius:4px;
  display:inline-block;
  transition:0.3s;
}

.btn-primary:hover{
  background:#0055aa;
}
/* Breadcrumb */
.breadcrumb{
  font-size:14px;
  margin-bottom:15px;
  color:#666;
}
.breadcrumb a{
  text-decoration:none;
  color:#0066cc;
}

/* Responsive */
@media(max-width:768px){
  .nphicon-menu ul{
    flex-direction:column;
  }
}

</style>

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="NPHICON 2024 Header">
</div>

<div class="page-container">

  <!-- Breadcrumb -->
  <div class="breadcrumb">
    <a href="/NCDC_MOHFW/index.php">Home</a> › NCDC Newsletter
  </div>

  <h1>NPHICON 2024</h1>

  <!-- Navigation Section -->
  <div class="nphicon-menu">
    <ul>
      <li><a href="/NCDC_MOHFW/includes/About/aboutus.php">About NCDC</a></li>
      <li><a href="/NCDC_MOHFW/uploads/pdf/66340390761705938866.pdf">About NPHICON</a></li>
      <li><a href="/NCDC_MOHFW/pages/organizing_committee.php">Organizing Committee</a></li>
      <li><a href="/NCDC_MOHFW/pages/registration.php">Registration Link</a></li>
      <li><a href="/NCDC_MOHFW/pages/scientific_theme.php">Scientific Theme</a></li>
      <li><a href="/NCDC_MOHFW/pages/abstract_guidelines.php">Abstract Submission Guidelines</a></li>
      <li><a href="/NCDC_MOHFW/pages/agenda.php">Agenda</a></li>
      <li><a href="/NCDC_MOHFW/pages/accommodation.php">Accommodation</a></li>
      <li><a href="/NCDC_MOHFW/pages/contact.php">Contact Us</a></li>
      <li><a href="/NCDC_MOHFW/pages/how_to_reach.php">How to Reach NCDC</a></li>
      <li>
        <a href="/NCDC_MOHFW/uploads/NPHICON_2024_Compendium.pdf" target="_blank">
          NPHICON 2024 Compendium
        </a>
      </li>
    </ul>
  </div>
</div>

<?php include("../footer.php"); ?>
