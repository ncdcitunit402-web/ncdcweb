<?php
// contactus.php
?>
<?php include("../header.php"); ?>

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="Header Image of NCDC Website">
</div>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Contact Us | NCDC</title>

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
  font-family:"Segoe UI", Arial, sans-serif;
  background:#f4f6f9;
  margin:0;
}
.container{
  max-width:1200px;
  margin:auto;
  padding:20px;
}

.page-title{
  font-size:26px;
  font-weight:700;
  margin-bottom:16px;
}

/* ===== CARD ===== */
.card{
  background:#fff;
  border-radius:10px;
  padding:20px;
  box-shadow:0 2px 10px rgba(0,0,0,0.08);
  margin-bottom:20px;
}

/* ===== TEXT ===== */
.card p{
  font-size:15px;
  line-height:1.7;
  color:#333;
}

/* ===== CONTACT GRID ===== */
.contact-grid{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:20px;
}
.contact-item{
  font-size:15px;
  margin-bottom:10px;
}
.contact-item strong{
  display:block;
  margin-bottom:4px;
}

/* ===== MAP ===== */
.map iframe{
  width:100%;
  height:380px;
  border:0;
  border-radius:10px;
}
.breadcrumb{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin:20px 0;
}

/* left side */
.breadcrumb-left{
  font-size:14px;
}

/* right side */
.breadcrumb-right{
  display:flex;
  align-items:center;
}

/* button */
.feedback-btn{
  background:black;
  color:#fff;
  padding:8px 16px;
  border-radius:6px;
  font-size:14px;
  font-weight:600;
  text-decoration:none;
  display:inline-flex;
  align-items:center;
  gap:6px;
  transition:0.3s ease;
}

.feedback-btn:hover{
  background:#084f78;
}

/* MOBILE */
@media(max-width:768px){

  .breadcrumb{
    flex-direction:column;
    align-items:flex-start;
    gap:10px;
  }

}


/* ===== MOBILE ===== */
@media(max-width:768px){
  .contact-grid{
    grid-template-columns:1fr;
  }
  .page-title{
    font-size:22px;
  }
  .header-image{
    height:140px;
  }
}
</style>
</head>

<body>

<div class="container">

  <!-- Breadcrumb -->
  <div class="breadcrumb">
  
  <div class="breadcrumb-left">
    <a href="/NCDC_MOHFW/">Home</a> › Contact Us
  </div>

  <div class="breadcrumb-right">
    <a href="/NCDC_MOHFW/includes/SideBar/feedback2.php" class="feedback-btn">
      ✉ Give Feedback
    </a>
  </div>

</div>


  <div class="page-title">How to Reach NCDC</div>

  <!-- HOW TO REACH -->
  <div class="card">
    <p>
      NCDC is located in North Delhi near ISBT Kashmiri Gate, Delhi University–North Campus.
      The National Centre is adjacent to Civil Lines Station on Delhi Metro (Yellow Line –
      Samaypur Badli to HUDA City Centre route), opposite to Indraprastha College for Women (IP College).
      Metro services are available from the Airport Express Line to be changed at New Delhi Metro Station.
      It is about a kilometer from the Maharana Pratap Inter State Bus Terminus (ISBT), Kashmere Gate.
      Pre-paid taxi services are available from both the domestic and international airports.
      The distance between international airport and NCDC is approximately 25 kms.
    </p>
  </div>

  <!-- MAP -->
  <div class="card map">
    <iframe 
      src="https://www.google.com/maps?q=National%20Centre%20for%20Disease%20Control,%20Delhi&output=embed"
      allowfullscreen=""
      loading="lazy">
    </iframe>
  </div>

  <!-- CONTACT DETAILS -->
  <div class="card">
    <h3>Postal Address</h3>

    <div class="contact-grid">

      <div class="contact-item">
        <strong>National Centre for Disease Control</strong>
        22 – Sham Nath Marg,<br>
        Delhi – 110 054
      </div>

      <div class="contact-item">
        <strong>Website</strong>
        <a href="https://ncdc.mohfw.gov.in/" target="_blank">ncdc.mohfw.gov.in</a>
      </div>

      <div class="contact-item">
        <strong>Phone</strong>
        +91-11-23971272<br>
        +91-11-23971060
      </div>

      <div class="contact-item">
        <strong>Email</strong>
        dirnicd@nic.in
      </div>

    </div>
  </div>

</div>

</body>
</html>
<?php include("../footer.php"); ?>
