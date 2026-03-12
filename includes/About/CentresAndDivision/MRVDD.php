<?php include("../../header.php"); ?>
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
.about-page{
  display:flex;
  gap:30px;
  width:100%;
  margin:0;             
  padding:30px 40px;
  align-items:flex-start;
}

/* SIDEBAR */
.about-sidebar{
  width:280px;
  background:#f5f9fc;
  border-radius:10px;
  
}
.about-sidebar ul{
  list-style:none;
  padding:0;
  margin:0;
}
.about-sidebar li{
  padding:12px 15px;
  margin-bottom:8px;
  cursor:pointer;
  border-radius:6px;
  font-size:15px;
  color:#333;
}
.about-sidebar li.active,
.about-sidebar li:hover{
  background:#0b77b7;
  color:#fff;
}
.back-btn{
  display:inline-block;
  margin-bottom:15px;
  padding:8px 16px;
  background:#0b77b7;
  color:#fff;
  text-decoration:none;
  border-radius:6px;
  font-size:14px;
  font-weight:500;
  transition:0.3s;
}

.back-btn:hover{
  background:#095a8a;
}
.breadcrumb{
  font-size:14px;
  color:#0b77b7;
}
.tab-content{
  display:none;
}
.tab-content.active{
  display:block;
}
/* ===============================
   RESPONSIVE STAFF SECTION
================================ */

.staff-section{
  padding: 20px;
}

/* Titles */
.section-title{
  font-size: 26px;
  margin-bottom: 20px;
}

.sub-title{
  font-size: 18px;
  margin: 25px 0 15px;
  font-weight: 600;
}

/* Staff Card */
.staff-card.horizontal{
  display: flex;
  align-items: center;
  background: #f1f1f1;
  border-radius: 8px;
  padding: 15px;
  margin-bottom: 15px;
  gap: 20px;
}

/* Staff Image */
.staff-card img{
  width: 110px;
  height: 130px;
  object-fit: cover;
  border-radius: 6px;
  background: #fff;
  flex-shrink: 0;
}

/* Staff Info */
.staff-info{
  flex: 1;
}

.staff-info h4{
  font-size: 18px;
  margin-bottom: 6px;
}

.staff-info p{
  margin: 3px 0;
  color: #444;
  font-size: 15px;
}

.staff-info .email{
  margin-top: 6px;
  color: #0c4da2;
  word-break: break-word;
}

.no-data{
  color: #777;
  font-style: italic;
}


/* ===============================
   TABLET VIEW (≤ 768px)
================================ */
@media (max-width: 768px){
  .section-title{
    font-size: 22px;
  }

  .sub-title{
    font-size: 17px;
  }

  .staff-card.horizontal{
    padding: 12px;
  }

  .staff-card img{
    width: 95px;
    height: 115px;
  }

  .staff-info h4{
    font-size: 16px;
  }

  .staff-info p{
    font-size: 14px;
  }
}


/* ===============================
   MOBILE VIEW (≤ 480px)
================================ */
@media (max-width: 480px){

  .staff-section{
    padding: 15px;
  }

  .section-title{
    font-size: 20px;
    text-align: center;
  }

  .sub-title{
    font-size: 16px;
    text-align: center;
  }

  .staff-card.horizontal{
    flex-direction: column;
    text-align: center;
  }

  .staff-card img{
    width: 120px;
    height: 140px;
    margin: 0 auto 10px;
  }

  .staff-info h4{
    font-size: 17px;
  }

  .staff-info p{
    font-size: 14px;
  }
}



/* RESPONSIVE */
@media(max-width:480px){
  .header-image{
    height:140px;
  }
  .about-page{
    flex-direction:column;
    padding:20px 15px;
  }
  .about-sidebar{
    width:100%;
  }
}
</style>

<!-- ================= PAGE CONTENT ================= -->
<div class="about-page">

  <!-- LEFT SIDEBAR -->
  <aside class="about-sidebar">
    <ul>
      <li class="active" data-tab="tab1">Introduction</li>
      <li data-tab="tab2">Staff Details</li>
      <li data-tab="tab3">Activities</li>
      <li data-tab="tab4">Research and Publication</li>
      <li data-tab="tab5">Technical Guidelines</li>
      <li data-tab="tab6">Unit/Laboratories</li>
      <li data-tab="tab7">Contact Us</li>
    </ul>
  </aside>

  <!-- RIGHT CONTENT -->
  <main class="about-main">
    <a href="/NCDC_MOHFW/includes/About/aboutus.php" class="back-btn">← Back</a>
    <div class="breadcrumb">Home › Centre and Division of NCDC › Microbiology - Respiratory Viruses Division and TB Division </div><BR><BR>
    <h1>Microbiology - Respiratory Viruses Division and TB Division</h1>

    <!-- TAB 1 -->
    <div id="tab1" class="tab-content active">
      <h2></h2>
    </div>

    <!-- Staff Details -->
<div id="tab2" class="tab-content">
  <div class="staff-section">

    <h2 class="section-title">Staff Details</h2>

    <!-- =========================
         HEAD OF THE DIVISION
    ========================== -->
    <h3 class="sub-title">Head of the Division</h3>

    <?php
include("../../../config/db.php");

$hod_sql = "SELECT * FROM staff
WHERE status = 1
  AND division = 'Microbiology - Respiratory Viruses Division and TB Division'
  AND (designation LIKE '%HOD%' OR designation LIKE '%Director%')
ORDER BY id ASC
LIMIT 1;
";

$hod_result = mysqli_query($conn, $hod_sql);

if($hod_result && mysqli_num_rows($hod_result) > 0){
  $hod = mysqli_fetch_assoc($hod_result);
?>
  <div class="staff-card horizontal">
    <img src="/NCDC_MOHFW/<?php echo $hod['photo'] ?: 'assets/img/user.png'; ?>">

    <div class="staff-info">
      <h4><?php echo htmlspecialchars($hod['staff_name']); ?></h4>
      <p><?php echo htmlspecialchars($hod['degree']); ?></p>
      <p><?php echo htmlspecialchars($hod['designation']); ?></p>

      <?php if($hod['email']){ ?>
        <p class="email">
          <i class="fa fa-envelope"></i>
          <?php echo $hod['email']; ?>
        </p>
      <?php } ?>
    </div>
  </div>
<?php
} else {
  echo "<p class='no-data'>HOD details not available.</p>";
}
?>


    <!-- =========================
         OTHER STAFF
    ========================== -->
    <h3 class="sub-title">Other Staff in the Division</h3>

    <?php
$staff_sql = "SELECT * FROM staff
              WHERE status = 1
              AND division = 'Microbiology - Respiratory Viruses Division and TB Division'
              AND designation NOT LIKE '%HOD%'
              AND designation NOT LIKE '%Director%'
              ORDER BY id ASC";

$staff_result = mysqli_query($conn, $staff_sql);

if($staff_result && mysqli_num_rows($staff_result) > 0){
  while($row = mysqli_fetch_assoc($staff_result)){
?>
    <div class="staff-card horizontal">
      <img src="/NCDC_MOHFW/<?php echo $row['photo'] ?: 'assets/img/user.png'; ?>">

      <div class="staff-info">
        <h4><?php echo htmlspecialchars($row['staff_name']); ?></h4>
        <p><?php echo htmlspecialchars($row['degree']); ?></p>
        <p><?php echo htmlspecialchars($row['designation']); ?></p>

        <?php if($row['email']){ ?>
          <p class="email">
            <i class="fa fa-envelope"></i>
            <?php echo $row['email']; ?>
          </p>
        <?php } ?>
      </div>
    </div>
<?php
  }
} else {
  echo "<p class='no-data'>No staff found.</p>";
}
?>


  </div>
</div>


  </main>
</div>

<!-- ================= TAB SCRIPT ================= -->
<script>
document.querySelectorAll('.about-sidebar li').forEach(item => {
  item.addEventListener('click', () => {
    document.querySelectorAll('.about-sidebar li').forEach(li => li.classList.remove('active'));
    document.querySelectorAll('.tab-content').forEach(tab => tab.classList.remove('active'));

    item.classList.add('active');
    document.getElementById(item.dataset.tab).classList.add('active');
  });
});
</script>

<?php include("../../footer.php"); ?>
