<?php
// ncdc_staff.php
?>
<style>
/* ===== CONTENT ===== */
.about-content{
  flex:1;
}

.page-title{
  font-size:32px;
  font-weight:700;
  color:#0b2e5f;
  margin-bottom:20px;
}

/* ===== STAFF LINKS ===== */
.staff-links a{
  display:block;
  color:#0097a7;
  font-size:16px;
  margin-bottom:18px;
  text-decoration:underline;
}

.staff-links a:hover{
  color:#006c7a;
}
/* ===== BACK BUTTON ===== */
.back-btn{
  margin-top:20px;
  padding:10px 35px;
  background:#2bb673;
  color:#fff;
  border:none;
  border-radius:30px;
  font-size:15px;
  cursor:pointer;
}

.back-btn:hover{
  background:#239a60;
}



/* ===== MOBILE ===== */
@media(max-width:768px){


  .page-title{
    font-size:26px;
  }
}
</style>

<main class="about-content">

    <h1 class="page-title">NCDC Staff</h1>

    <div class="staff-links">
      <a href="/NCDC_MOHFW/uploads/pdf/List-of-Officers-and-staff-of-NCDC.pdf" target="_blank">
        In position Staff at NCDC Head Quarter As on 01.10.2024
      </a>

      <a href="/NCDC_MOHFW/uploads/pdf/Parl.-Question-Dy.-No.10778.pdf" target="_blank">
        NCDC Branches Staff Position As on 06.08.2025
      </a>
    </div>

    <button class="back-btn" onclick="window.location.href='/NCDC_MOHFW/index.php'">Back</button>


  </main>