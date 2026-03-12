<?php
// scoll.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>NCDC | Programme Logos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<style>
/* ================= GLOBAL ================= */
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: "Poppins", sans-serif;
}

body {
  overflow-x: hidden;
}

/* ================= LOGO SECTION ================= */
.logo-section {
  background: #ffffff;
  padding: 40px 0;
}

.logo-container {
  max-width: 1200px;
  margin: auto;
  padding: 0 15px;
}

/* ================= SCROLL WRAPPER ================= */
.logo-scroll-wrapper {
  position: relative;
  overflow: hidden;
  width: 100%;
}

.logo-track {
  display: flex;
  gap: 40px;
  animation: scroll 25s linear infinite;
  width: max-content;
}

/* Pause on hover */
.logo-scroll-wrapper:hover .logo-track {
  animation-play-state: paused;
}

/* ================= LOGO CARD ================= */
.logo-item {
  flex: 0 0 auto;
  width: 180px;
  height: 100px;
  background: #fff;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.logo-item img {
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}

/* ================= ANIMATION ================= */
@keyframes scroll {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-50%);
  }
}

/* ================= MOBILE ================= */
@media (max-width: 768px) {
  .logo-track {
    gap: 20px;
    animation-duration: 35s;
  }

  .logo-item {
    width: 140px;
    height: 80px;
  }
}
</style>
</head>

<body>

<section class="logo-section">
  <div class="logo-container">

    <div class="logo-scroll-wrapper">
      <div class="logo-track">

        <!-- LOGOS -->
        <div class="logo-item">
  <a href="https://mohfw.gov.in/" target="_blank" rel="noopener noreferrer">
    <img src="assets/images/mohfw.png" alt="MoHFW">
  </a>
</div>

        <div class="logo-item">
          <a href="https://www.notto.mohfw.gov.in/" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/notto.png" alt="NOTTO"></a>
        </div>

        <div class="logo-item">
          <a href="https://naco.mohfw.gov.in/" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/naco.png" alt="NACO"></a>
        </div>

        <div class="logo-item">
          <a href="https://www.psa.gov.in/oneHealthMission" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/onehealth.png" alt="One Health Mission"></a>
        </div>

        <div class="logo-item">
          <a href="https://rabiesfreeindia.mohfw.gov.in/" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/rabies.png" alt="National Rabies Control Programme"></a>
        </div>

        <div class="logo-item">
          <a href="https://ihip.mohfw.gov.in/idsp/#!/home" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/idsp.png" alt="IDSP"></a>
        </div>
        <div class="logo-item">
          <a href="https://www.icmr.gov.in/" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/icmr.png" alt=""></a>
        </div>
        <div class="logo-item">
          <a href="https://dgehs.delhi.gov.in/" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/dghc.png" alt=""></a>
        </div>
        <div class="logo-item">
          <a href="https://www.aiims.edu/index.php/en" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/aiims.png" alt=""></a>
        </div>
        <div class="logo-item">
          <a href="https://nihfw.ac.in/" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/nihfw.png" alt=""></a>
        </div>
        <div class="logo-item">
          <a href="https://dghs.mohfw.gov.in/national-tuberculosis-elimination-programme.php" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/Mask-Group.png" alt=""></a>
        </div>

        <!-- DUPLICATE FOR SMOOTH LOOP -->
        <div class="logo-item">
  <a href="https://mohfw.gov.in/" target="_blank" rel="noopener noreferrer">
    <img src="assets/images/mohfw.png" alt="MoHFW">
  </a>
</div>

        <div class="logo-item">
          <a href="https://www.notto.mohfw.gov.in/" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/notto.png" alt=""></a>
        </div>

        <div class="logo-item">
          <a href="https://naco.mohfw.gov.in/" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/naco.png" alt=""></a>
        </div>

        <div class="logo-item">
          <a href="https://www.psa.gov.in/oneHealthMission" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/onehealth.png" alt=""></a>
        </div>

        <div class="logo-item"><a href="https://rabiesfreeindia.mohfw.gov.in/" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/rabies.png" alt=""></a>
        </div>

        <div class="logo-item">
          <a href="https://ihip.mohfw.gov.in/idsp/#!/home" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/idsp.png" alt=""></a>
        </div>
        <div class="logo-item">
          <a href="https://www.icmr.gov.in/" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/icmr.png" alt=""></a>
        </div>
        <div class="logo-item">
          <a href="https://dgehs.delhi.gov.in/" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/dghc.png" alt=""></a>
        </div>
        <div class="logo-item">
          <a href="https://www.aiims.edu/index.php/en" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/aiims.png" alt=""></a>
        </div>
        <div class="logo-item">
          <a href="https://nihfw.ac.in/" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/nihfw.png" alt=""></a>
        </div>
        <div class="logo-item">
          <a href="https://dghs.mohfw.gov.in/national-tuberculosis-elimination-programme.php" target="_blank" rel="noopener noreferrer">
          <img src="assets/images/Mask-Group.png" alt=""></a>
        </div>
      </div>
    </div>

  </div>
</section>

</body>
</html>
