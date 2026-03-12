<?php
// centersandivision.php
?>
<style>
    /* ===== INSTITUTIONAL COMMITTEE ===== */

.committee-wrapper{
  background:#ffffff;
  padding:10px 5px;
}

.committee-title{
  font-size:32px;
  font-weight:700;
  color:#0b2e5f;
  margin-bottom:15px;
}

.committee-subtitle{
  font-size:16px;
  color:#333;
  margin-bottom:25px;
}

.committee-grid{
  display:grid;
  grid-template-columns: repeat(2, 1fr);
  gap:18px 22px;
}

.committee-card{
  background:#eef5f2;
  border-radius:12px;
  padding:16px 20px;
  font-size:15px;
  font-weight:500;
  color:#2b2b2b;
  border:1px solid #e0e6e3;
  transition:all 0.3s ease;
}

.committee-card:hover{
  background:#e6f3ef;
  transform:translateY(-2px);
}

/* ===== MOBILE VIEW ===== */
@media(max-width:768px){
  .committee-grid{
    grid-template-columns:1fr;
  }

  .committee-title{
    font-size:26px;
  }
}

</style>

<div class="committee-wrapper">

  <h1 class="committee-title">Centres an Divisions Under NCDC</h1>

  <div class="committee-grid">

    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/CentralLibrary.php';"
style="cursor:pointer;">1. Central Library</div>
    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/AIDS.php';"
style="cursor:pointer;">2. Centre for AIDS and Related Diseases</div>

    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/ArboviralandZoonoticDiseases.php';"
style="cursor:pointer;">3. Centre for Arboviral and Zoonotic Diseases</div>
    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/BacterialDisease.php';"
style="cursor:pointer;">4. Centre for Bacterial Disease and Drug Resistance and Antimicrobial Resistance Containment</div>

    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/CEOH.php';"
style="cursor:pointer;">5. Centre for Environmental & Occupational Health, Climate Change & Health</div>
    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/CMEVM.php';"
style="cursor:pointer;">6. Centre for Medical Entomology and Vector Management</div>

    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/COH.php';"
style="cursor:pointer;">7. Centre for One Health</div>
    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/DPD.php';"
style="cursor:pointer;">8. Department of Parasitic Disease</div>

    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/DBT.php';"
style="cursor:pointer;">9. Division of Biochemistry and Toxicology</div>
    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/DE.php';"
style="cursor:pointer;">10. Division of Epidemiology</div>

    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/DMRT.php';"
style="cursor:pointer;">11. Division of Microbiology - Respiratory & Teratogenic Viruses</div>
    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/DSME.php';"
style="cursor:pointer;">12. Division of Statistical Monitoring & Evaluation</div>

    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/ED.php';"
style="cursor:pointer;">13. Enterovirus Division</div>
    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/IDSP.php';"
style="cursor:pointer;">14. Integrated Disease Surveillance Programme (IDSP)</div>

    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/MRVDD.php';"
style="cursor:pointer;">15. Microbiology - Respiratory Viruses Division and TB Division</div>
    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/NPMU.php';"
style="cursor:pointer;">16. NPMU- Establishment and strengthening</div>

    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/PHPNCD.php';"
style="cursor:pointer;">17. Public Health Preparedness & Non-Communicable Diseases</div>
    <div class="committee-card" onclick="window.location.href='/NCDC_MOHFW/includes/About/CentresAndDivision/VHBD.php';"
style="cursor:pointer;">18. Viral Hepatitis & Biotechnology Division</div>
  </div>

</div>
