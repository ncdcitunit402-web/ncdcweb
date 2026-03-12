<?php
// includes/glimpse-programme.php

include __DIR__ . '/../config/db.php';
include __DIR__ . '/pdf_helper.php';

/**
 * Fetch PDFs by section
 */
function getGlimpseData($conn, $section) {
    $stmt = $conn->prepare(
        "SELECT title, pdf_file, created_at 
         FROM glimpse_details 
         WHERE section = ? AND status = 1 
         ORDER BY created_at DESC"
    );
    $stmt->bind_param("s", $section);
    $stmt->execute();
    return $stmt->get_result();
}

/**
 * Check if file is NEW (last 7 days)
 */
function isNew($date) {
    return (strtotime($date) >= strtotime('-7 days'));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Glimpse | NCDC</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
/* ================= GLOBAL FIX ================= */
html, body {
  width: 100%;
  max-width: 100%;
  overflow-x: hidden !important;
  margin: 0;
  padding: 0;
  font-family: "Poppins", sans-serif;
}

* {
  box-sizing: border-box;
}

/* ================= GLIMPSE SECTION ================= */
.glimpse-section {
  background: linear-gradient(135deg, #1da2d8, #1fc8a4);
  padding: 30px 0;
  overflow-x: hidden;
}

.container {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 15px;
}

/* ================= GRID ================= */
.glimpse-grid {
  display: grid;
  grid-template-columns: 2.2fr 1.3fr;
  gap: 30px;
  width: 100%;
}

/* ================= LEFT PANEL ================= */
.important-wrapper {
  background: #ffffff;
  border-radius: 14px;
  padding: 20px;
  width: 100%;
}

/* Tabs */
.tabs {
  display: flex;
  flex-wrap: wrap;
  border-bottom: 1px solid #ddd;
}

.tab-btn {
  padding: 12px 14px;
  background: #f2f2f2;
  border: none;
  cursor: pointer;
  font-weight: 600;
  font-size: 14px;
}

.tab-btn.active {
  background: #fff;
  border-bottom: 3px solid #0b5ed7;
  color: #0b5ed7;
}

.tab-panel {
  display: none;
  padding: 18px 0;
}

.tab-panel.active {
  display: block;
}

.pdf-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.pdf-list li {
  padding: 8px 0;
}

.pdf-list a {
  text-decoration: none;
  color: #000;
  font-weight: 500;
}

.tag.new {
  background: #28a745;
  color: #fff;
  font-size: 11px;
  padding: 2px 6px;
  border-radius: 4px;
  margin-left: 6px;
}

.view-more {
  display: inline-block;
  margin-top: 12px;
  padding: 8px 18px;
  background: #0b5ed7;
  color: #fff;
  border-radius: 20px;
  text-decoration: none;
  font-weight: 600;
}

/* ================= RIGHT PANEL ================= */
.glimpse-right {
  width: 100%;
}

.glimpse-right h2 {
  color: #fff;
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 18px;
}

/* PROGRAMME SCROLL */
.programme-scroll {
  max-height: 460px;
  overflow: hidden;
  width: 100%;
}

.programme-card {
  display: flex;
  align-items: center;
  width: 100%;
  background: #ffffff;
  padding: 14px;
  margin-bottom: 12px;
  border-radius: 12px;
  font-weight: 600;
  color: #333;
  text-decoration: none;
}

.programme-card::before {
  content: "";
  width: 36px;
  height: 36px;
  background: #e6efff;
  border-radius: 50%;
  margin-right: 12px;
  flex-shrink: 0;
}

.programme-card:hover {
  background: #0b5ed7;
  color: #fff;
}
.pdf-icon{
  width:16px;
  height:16px;
  margin-left:6px;
  vertical-align:middle;
}

.pdf-list li{
  display:flex;
  align-items:center;
  gap:6px;
  flex-wrap:wrap;
}
/* ================= GLIMPSE UI ENHANCEMENT ================= */

/* TOP BUTTONS */
.glimpse-top-actions{
  display:flex;
  gap:12px;
  margin-bottom:18px;
  flex-wrap:wrap;
}

.glimpse-btn{
  background:#0b5ed7;
  color:#fff;
  padding:8px 18px;
  border-radius:999px;
  text-decoration:none;
  font-weight:600;
  font-size:14px;
  transition:.3s;
}

.glimpse-btn:hover{
  background:#084298;
  transform:translateY(-1px);
}

/* PDF LIST */
.pdf-list.enhanced{
  list-style:none;
  padding:0;
  margin:0;
}

.pdf-item{
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:10px 6px;
  border-bottom:1px dashed #e2e8f0;
}

.pdf-item:last-child{
  border-bottom:none;
}

.pdf-left{
  display:flex;
  align-items:center;
  gap:10px;
  max-width:85%;
}

.pdf-left a{
  color:#111;
  text-decoration:none;
  font-weight:500;
  line-height:1.4;
}

.pdf-left a:hover{
  color:#0b5ed7;
  text-decoration:underline;
}

/* PDF ICON */
.pdf-icon{
  width:18px;
  height:18px;
  flex-shrink:0;
}

/* NEW TAG */
.tag.new{
  background:#22c55e;
  color:#fff;
  font-size:11px;
  padding:3px 8px;
  border-radius:999px;
  font-weight:600;
}
/* ===== CD ALERT CARD ===== */
.cdalert-card{
  background:#fff;
  border:1px solid #e2e2e2;
  border-radius:12px;
  padding:18px 20px;
  display:flex;
  justify-content:space-between;
  align-items:center;
  gap:20px;
  box-shadow:0 4px 12px rgba(0,0,0,0.06);
}

.cdalert-left{
  display:flex;
  align-items:flex-start;
  gap:14px;
}
.cdalert-text h5{
  margin:0;
  font-size:18px;
  font-weight:700;
  color:#000;
}

.cdalert-text p{
  margin:6px 0 0;
  font-size:14px;
  color:#555;
  line-height:1.5;
}
/* VIEW MORE BUTTON */
.view-more-btn{
  background:linear-gradient(135deg,#0b5ed7,#0d6efd);
  color:#fff;
  padding:10px 18px;
  border-radius:25px;
  font-size:14px;
  font-weight:600;
  text-decoration:none;
  white-space:nowrap;
  transition:0.3s;
}

.view-more-btn:hover{
  background:linear-gradient(135deg,#084298,#0b5ed7);
  transform:translateX(4px);
}



/* MOBILE FIX */
@media(max-width:600px){
  .pdf-left{
    max-width:75%;
  }
  .view-more-btn{
    align-self:flex-end;
    margin-top:10px;
  }
  .cdalert-card{
    flex-direction:column;
    align-items:flex-start;
  }
}


/* ================= MOBILE FIX (MOST IMPORTANT) ================= */
@media (max-width: 992px) {
  .glimpse-grid {
    grid-template-columns: 1fr !important; /* 👈 FORCE STACK */
  }

  .important-wrapper,
  .glimpse-right {
    width: 100%;
  }

  .glimpse-right h2 {
    text-align: center;
  }

  
.programme-scroll {
    max-height: 300px;
    overflow: hidden;
  }
  
}

@media (max-width: 768px) {
  body {
    overflow-x: hidden !important;
  }
}

</style>
</head>

<body>

<!-- ================= GLIMPSE SECTION ================= -->
<section class="glimpse-section">
  <div class="container glimpse-grid">

    <!-- LEFT PANEL -->
    <div class="important-wrapper">

      <!-- Tabs -->
      <div class="tabs">
        <button class="tab-btn active" data-tab="glimpse">Important Glimpse</button>
        <button class="tab-btn" data-tab="cdalert">CD Alert</button>
        <button class="tab-btn" data-tab="employee">Employee Corner</button>
        <button class="tab-btn" data-tab="events">Upcoming Events</button>
      </div>

      <!-- Important Glimpse -->
<div class="tab-panel active" id="glimpse">

  <!-- TOP BUTTONS -->
  <div class="glimpse-top-actions">
  <a href="includes/WeeklyOutbreaks.php"  class="glimpse-btn">
    Weekly Outbreaks
  </a>
  <a href="includes/AirPollution.php"  class="glimpse-btn">
    Air Pollution
  </a>
  
</div>


  <ul class="pdf-list enhanced">
<?php
$res = getGlimpseData($conn, 'Important Glimpse');
if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        echo '<li class="pdf-item">
                <div class="pdf-left">
                  <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
                  <a href="'.$row['pdf_file'].'" target="_blank">
    '.$row['title'].' ('.getPDFSize($row['pdf_file']).')
</a>

                </div>';

        if (isNew($row['created_at'])) {
            echo '<span class="tag new">NEW</span>';
        }

        echo '</li>';
    }
} else {
    echo '<li>No records available</li>';
}
?>
</ul>

</div>


      <!-- CD Alert -->
<div class="tab-panel" id="cdalert">

 <div class="cdalert-card">
    
      <div class="cdalert-text">
        <h5>An important tool for Rapid Dissemination of Information towards Control of Diseases.</h5><br>
        <p>
          CD Alert is a monthly newsletter of the National Centre for Diseases Control, Directorate General of Health Services, 
          to disseminate information on various aspects of communicable diseases to medical fraternity and health administrators. 
          It is widely circulated to different parts of the country including Directorates of Health Services of different States, 
          Districts, Primary health Centres, Medical Colleges and individuals. Many a times, the important topics covered in CD Alert 
          have been reproduced, in part or whole, by Indian Medical Association for dissemination of knowledge. The first issue was published 
          in August 1997 on emerging and reemerging diseases and a total of seventy five issues have been published so far.
        </p>
      
    </div>

    <a href="includes/cdalert.php" class="view-more-btn">
      View More →
    </a>
</div>

</div>


      <!-- Employee Corner -->
<div class="tab-panel" id="employee">
  <ul class="pdf-list enhanced">
    <?php
    $res = getGlimpseData($conn, 'Employee Corner');
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            echo '<li class="pdf-item">
                    <div class="pdf-left">
                      <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
                      <a href="'.$row['pdf_file'].'" target="_blank">
    '.$row['title'].' ('.getPDFSize($row['pdf_file']).')
</a>

                    </div>';

            if (isNew($row['created_at'])) {
                echo '<span class="tag new">NEW</span>';
            }

            echo '</li>';
        }
    } else {
        echo '<li>No records available</li>';
    }
    ?>
  </ul>
</div>


      <!-- Upcoming Events -->
<div class="tab-panel" id="events">
  <ul class="pdf-list enhanced">
    <?php
    $res = getGlimpseData($conn, 'Upcoming Events');
    if ($res->num_rows > 0) {
        while ($row = $res->fetch_assoc()) {
            echo '<li class="pdf-item">
                    <div class="pdf-left">
                      <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
                      <a href="'.$row['pdf_file'].'" target="_blank">
    '.$row['title'].' ('.getPDFSize($row['pdf_file']).')
</a>

                    </div>';

            if (isNew($row['created_at'])) {
                echo '<span class="tag new">NEW</span>';
            }

            echo '</li>';
        }
    } else {
        echo '<li>No records available</li>';
    }
    ?>
  </ul>
</div>

    </div>

    <!-- RIGHT PANEL (PROGRAMME LIST) -->
<div class="glimpse-right">
  <h2>National Health Programme</h2>

  <div class="programme-scroll">
    <?php
    $prog = mysqli_query(
        $conn,
        "SELECT programme_name, page_slug
         FROM programmes 
         WHERE status = 'active' 
         ORDER BY programme_name ASC"
    );

    if ($prog && mysqli_num_rows($prog) > 0) {
        while ($row = mysqli_fetch_assoc($prog)) {

            $link = '/NCDC_MOHFW/includes/About/CentresAndDivision/' . $row['page_slug'];

            echo '<a class="programme-card" href="' . htmlspecialchars($link) . '">
                    ' . htmlspecialchars($row['programme_name']) . '
                  </a>';
        }
    } else {
        echo '<p style="color:#fff;">No programmes available</p>';
    }
    ?>
  </div>
</div>


  </div>
</section>

<!-- ================= TAB + AUTO SCROLL SCRIPT ================= -->
<script>
document.querySelectorAll('.tab-btn').forEach(btn => {
  btn.onclick = () => {
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));

    btn.classList.add('active');
    document.getElementById(btn.dataset.tab).classList.add('active');
  };
});

const scrollBox = document.querySelector('.programme-scroll');
let speed = window.innerWidth <= 768 ? 0.5 : 1;

// duplicate content once
scrollBox.innerHTML += scrollBox.innerHTML;

function autoScroll(){
  scrollBox.scrollTop += speed;
  if(scrollBox.scrollTop >= scrollBox.scrollHeight / 2){
    scrollBox.scrollTop = 0;
  }
}

let interval = setInterval(autoScroll, 30);

scrollBox.addEventListener('mouseenter', () => clearInterval(interval));
scrollBox.addEventListener('mouseleave', () => interval = setInterval(autoScroll, 30));
scrollBox.addEventListener('touchstart', () => clearInterval(interval));
scrollBox.addEventListener('touchend', () => interval = setInterval(autoScroll, 30));
</script>

</body>
</html>
