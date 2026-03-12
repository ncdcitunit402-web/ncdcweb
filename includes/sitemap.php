<?php include("header.php"); ?>


<link rel="stylesheet" href="/NCDC_MOHFW/assets/css/style.css">

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" alt="NCDC Header">
</div>

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

/* ===== BREADCRUMB ===== */
.breadcrumb{
  font-size:14px;
  margin:15px auto;
  max-width:1300px;
  padding:0 15px;
  color:#555;
}

/* ===== SITEMAP ===== */
.sitemap-container{
  max-width:1300px;
  margin:auto;
  padding:20px 15px 40px;
}

.sitemap-title{
  text-align:center;
  font-size:26px;
  margin-bottom:30px;
  color:#0b4d8a;
}

.sitemap-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:20px;
}

.sitemap-section{
  border:1px solid #ddd;
  border-radius:6px;
  padding:15px;
  background:#fff;
}

.sitemap-section h2{
  font-size:18px;
  color:#0b4d8a;
  border-bottom:2px solid #e5e5e5;
  padding-bottom:6px;
  margin-bottom:10px;
}

.sitemap-section ul{
  list-style:none;
  padding-left:0;
}

.sitemap-section li{
  margin:7px 0;
}

.sitemap-section li ul{
  padding-left:15px;
}

.sitemap-section a{
  text-decoration:none;
  color:#333;
  font-size:14px;
}

.sitemap-section a:hover{
  color:#0b4d8a;
  text-decoration:underline;
}

/* ===== TABLET ===== */
@media(max-width:1024px){
  .sitemap-grid{
    grid-template-columns:repeat(2,1fr);
  }
}

/* ===== MOBILE ===== */
@media(max-width:768px){
  .header-image{
    height:180px;
  }
  .sitemap-grid{
    grid-template-columns:1fr;
  }
  .sitemap-title{
    font-size:22px;
  }
  .sitemap-section h2{
    font-size:16px;
  }
  .sitemap-section a{
    font-size:15px;
  }
}
</style>

<div class="breadcrumb">Home › Sitemap</div>

<div class="sitemap-container">
  <div class="sitemap-title">Sitemap</div>

  <div class="sitemap-grid">

    <div class="sitemap-section">
      <h2>Main Pages</h2>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="#">About Us</a>
          <ul>
            <li><a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=whoswho">Who’s Who</a></li>
            <li><a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=mandate">Mandate</a></li>
            <li><a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=achievements">Major Achievements</a></li>
            <li><a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=functions">Functions</a></li>
            <li><a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=former">Former Directors</a></li>
            <li><a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=staff">NCDC Staff</a></li>
            <li><a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=structure">Organisation Structure</a></li>
            <li><a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=committee">Institutional Committee</a></li>
            <li><a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=Administrative">Administrative Wing</a></li>
            <li><a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=centersandivision">Centers & Divisions Under NCDC</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <div class="sitemap-section">
      <h2>Administrative Wing</h2>
      <ul>
        <li><a href="#">MT Cell</a></li>
        <li><a href="#">Budget Cell</a></li>
        <li><a href="#">Account Section</a></li>
        <li><a href="#">Store Section</a></li>
        <li><a href="#">Establishment Section</a></li>
        <li><a href="#">General Section</a></li>
        <li><a href="#">PRC Section</a></li>
        <li><a href="#">Administrative Section</a></li>
      </ul>
    </div>

    <div class="sitemap-section">
      <h2>Branches</h2>
      <ul>
        <li><a href="/NCDC_MOHFW/includes/Branches/upcoming_branches.php">Upcoming Branches</a></li>
        <li><a >Established Branches</a>
          <ul>
            <li><a href="/NCDC_MOHFW/includes/Branches/alwar.php">Alwar</a></li>
            <li><a href="/NCDC_MOHFW/includes/Branches/Bengaluru.php">Bengaluru</a></li>
            <li><a href="/NCDC_MOHFW/includes/Branches/Coonoor.php">Coonoor</a></li>
            <li><a href="/NCDC_MOHFW/includes/Branches/upcoming_branches.php">Jagdalpur</a></li>
            <li><a href="/NCDC_MOHFW/includes/Branches/upcoming_branches.php">Kozhikode</a></li>
            <li><a href="/NCDC_MOHFW/includes/Branches/upcoming_branches.php">Patna</a></li>
            <li><a href="/NCDC_MOHFW/includes/Branches/upcoming_branches.php">Rajahmundry</a></li>
            <li><a href="/NCDC_MOHFW/includes/Branches/upcoming_branches.php">Varanasi</a></li>
          </ul>
        </li>
      </ul>
    </div>

    <div class="sitemap-section">
      <h2>Health Information</h2>
      <ul>
        <li><a href="/NCDC_MOHFW/includes/Work_With_Us/healthcare.php">Health Care Professional</a></li>
        <li><a href="/NCDC_MOHFW/includes/Work_With_Us/generalpublic.php">General Public</a></li>
        <li>
  <a href="#nipah">NIPAH Virus Guidelines</a>
</li>

        <li><a href="/NCDC_MOHFW/includes/Work_With_Us/seasonalinfluenza.php">Seasonal Influenza</a></li>
        <li><a href="/NCDC_MOHFW/includes/Work_With_Us/healthcare.php">Mpox</a></li>
        <li><a href="/NCDC_MOHFW/includes/Work_With_Us/healthcare.php">Public Health Emergencies</a></li>
      </ul>
    </div>

    <div class="sitemap-section">
      <h2>Work With Us</h2>
      <ul>
        <li><a href="/NCDC_MOHFW/includes/Work_With_Us/Vacancies.php">Vacancies</a></li>
        <li><a href="/NCDC_MOHFW/includes/Work_With_Us/internship.php">Internship</a></li>
        <li><a href="/NCDC_MOHFW/includes/Work_With_Us/training_fellowship.php">Training & Fellowship</a></li>
        <li><a href="/NCDC_MOHFW/includes/Work_With_Us/Educational_cum_Orientation_visit_to_NCDC.php">Educational Visit</a></li>
      </ul>
    </div>

    <div class="sitemap-section">
      <h2>Quick Links</h2>
      <ul>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">RTI</a></li>
        <li><a href="#">Grievance</a></li>
        <li><a href="#">Feedback</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Accessibility Statement</a></li>
      </ul>
    </div>

  </div>
</div>

<?php include("footer.php"); ?>
