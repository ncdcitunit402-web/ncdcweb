<?php
// Institutional_Committee.php
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

  <h1 class="committee-title">Institutional Committee</h1>

  <p class="committee-subtitle">
    The various committees constituted under NCDC are as follows:
  </p>

  <div class="committee-grid">

    <div class="committee-card">1. Departmental Promotion / Review Committee</div>
    <div class="committee-card">2. House Allotment & Estate Committee</div>

    <div class="committee-card">3. Library Committee</div>
    <div class="committee-card">4. Purchase Committee (Material Supply)-I</div>

    <div class="committee-card">5. Purchase Committee (Stationery)-II</div>
    <div class="committee-card">6. Building Maintenance & Development Committee</div>

    <div class="committee-card">7. Condemnation Board</div>
    <div class="committee-card">8. Equipment Maintenance Committee</div>

    <div class="committee-card">9. Goods Receiving Committee</div>
    <div class="committee-card">10. Technical Evaluation Committee</div>

    <div class="committee-card">11. Sexual Harassment Committee</div>
    <div class="committee-card">12. NCDC Web Committee</div>

    <div class="committee-card">13. Security Committee</div>
    <div class="committee-card">14. Scientific Committee of NCDC</div>

    <div class="committee-card">15. BID Evaluation Committee</div>
    <div class="committee-card">16. Vehicle Expenditure Monitoring Committee</div>

    <div class="committee-card">17. Biomedical Waste Management Committee</div>
  </div>

</div>
