<?php
// scroll.php
?>

<style>
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
  height: 120px;
  background: #fff;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding:10px;
}

.logo-item img {
  max-width: 100%;
  max-height: 80px;
  width: auto;
  height: auto;
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


<section class="logo-section">
  <div class="logo-container">

    <div class="logo-scroll-wrapper">
      <div class="logo-track">

        <!-- LOGOS -->

        <div class="logo-item">
          <a href="https://mohfw.gov.in/" target="_blank">
            <img src="assets/images/mohfw.png" alt="MoHFW">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://www.notto.mohfw.gov.in/" target="_blank">
            <img src="assets/images/notto.png" alt="NOTTO">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://naco.mohfw.gov.in/" target="_blank">
            <img src="assets/images/naco.png" alt="NACO">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://www.psa.gov.in/oneHealthMission" target="_blank">
            <img src="assets/images/onehealth.png" alt="One Health">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://rabiesfreeindia.mohfw.gov.in/" target="_blank">
            <img src="assets/images/rabies.png" alt="Rabies Control">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://ihip.mohfw.gov.in/idsp/#!/home" target="_blank">
            <img src="assets/images/idsp.png" alt="IDSP">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://www.icmr.gov.in/" target="_blank">
            <img src="assets/images/icmr.png" alt="ICMR">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://dgehs.delhi.gov.in/" target="_blank">
            <img src="assets/images/dghc.png" alt="DGHS">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://www.aiims.edu/index.php/en" target="_blank">
            <img src="assets/images/aiims.png" alt="AIIMS">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://nihfw.ac.in/" target="_blank">
            <img src="assets/images/nihfw.png" alt="NIHFW">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://dghs.mohfw.gov.in/national-tuberculosis-elimination-programme.php" target="_blank">
            <img src="assets/images/Mask-Group.png" alt="TB Programme">
          </a>
        </div>


        <!-- DUPLICATE FOR SMOOTH SCROLL -->

        <div class="logo-item">
          <a href="https://mohfw.gov.in/" target="_blank">
            <img src="assets/images/mohfw.png" alt="MoHFW">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://www.notto.mohfw.gov.in/" target="_blank">
            <img src="assets/images/notto.png" alt="NOTTO">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://naco.mohfw.gov.in/" target="_blank">
            <img src="assets/images/naco.png" alt="NACO">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://www.psa.gov.in/oneHealthMission" target="_blank">
            <img src="assets/images/onehealth.png" alt="One Health">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://rabiesfreeindia.mohfw.gov.in/" target="_blank">
            <img src="assets/images/rabies.png" alt="Rabies Control">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://ihip.mohfw.gov.in/idsp/#!/home" target="_blank">
            <img src="assets/images/idsp.png" alt="IDSP">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://www.icmr.gov.in/" target="_blank">
            <img src="assets/images/icmr.png" alt="ICMR">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://dgehs.delhi.gov.in/" target="_blank">
            <img src="assets/images/dghc.png" alt="DGHS">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://www.aiims.edu/index.php/en" target="_blank">
            <img src="assets/images/aiims.png" alt="AIIMS">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://nihfw.ac.in/" target="_blank">
            <img src="assets/images/nihfw.png" alt="NIHFW">
          </a>
        </div>

        <div class="logo-item">
          <a href="https://dghs.mohfw.gov.in/national-tuberculosis-elimination-programme.php" target="_blank">
            <img src="assets/images/Mask-Group.png" alt="TB Programme">
          </a>
        </div>

      </div>
    </div>

  </div>
</section>