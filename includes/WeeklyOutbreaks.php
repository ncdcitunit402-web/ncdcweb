<?php include("header.php"); ?>
<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" alt="NCDC Header">
</div>

<?php
include("../config/db.php");

$sql = "SELECT year, week_no, pdf_file 
        FROM weekly_outbreaks 
        WHERE status = 1 
        ORDER BY year DESC, week_no ASC";

$result = mysqli_query($conn, $sql);

$data = [];
while($row = mysqli_fetch_assoc($result)){
  $data[$row['year']][] = $row;
}
?>

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

/* ===== PAGE ===== */
.weekly-wrapper{
  max-width:1200px;
  margin:40px auto;
  padding:0 20px;
  font-family:"Segoe UI", Arial, sans-serif;
}

.breadcrumb{
  font-size:14px;
  color:#666;
  margin-bottom:10px;
}

.weekly-wrapper h1{
  font-size:30px;
  margin-bottom:25px;
}

/* ===== YEAR CARD ===== */
.year-card{
  border:1px solid #e2e2e2;
  border-radius:10px;
  margin-bottom:20px;
  background:#fff;
  box-shadow:0 6px 14px rgba(0,0,0,0.06);
}

.year-header{
  background:linear-gradient(135deg,#0b5ed7,#0d6efd);
  color:#fff;
  padding:16px 20px;
  font-size:20px;
  font-weight:700;
  cursor:pointer;
  display:flex;
  justify-content:space-between;
  align-items:center;
  border-radius:10px 10px 0 0;
}

.year-header span{
  width:30px;
  height:30px;
  border-radius:50%;
  background:#fff;
  color:#0d6efd;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:20px;
  font-weight:bold;
}

/* ===== WEEK GRID ===== */
.week-grid{
  padding:20px;
  display:grid;
  grid-template-columns:repeat(auto-fill, minmax(120px, 1fr));
  gap:15px;
}

/* Hide all weeks by default */
.week-item{
  display:none;
}

/* Show first 5 weeks */
.week-item.visible{
  display:block;
}

/* Show all on expand */
.year-card.active .week-item{
  display:block;
}

.week-item{
  border:1px solid #ddd;
  border-radius:8px;
  padding:14px 10px;
  text-align:center;
  background:#fff;
  transition:0.3s;
}

.week-item:hover{
  background:#f0f4ff;
  transform:translateY(-4px);
}

.week-item a{
  text-decoration:none;
  color:#000;
  font-weight:600;
  display:block;
}

.week-item img{
  width:22px;
  margin-top:8px;
}

/* ===== MOBILE ===== */
@media(max-width:600px){
  .weekly-wrapper h1{
    font-size:24px;
  }
}
</style>

<div class="weekly-wrapper">

  <div class="breadcrumb">Home › Weekly Outbreaks</div>
  <h1>Weekly Outbreaks</h1>

  <?php foreach($data as $year => $weeks){ ?>
    <div class="year-card">
      <div class="year-header">
        <?php echo $year; ?>
        <span>+</span>
      </div>

      <div class="week-grid">
        <?php 
        $count = 0;
        foreach($weeks as $week){
          $count++;
        ?>
          <div class="week-item <?php echo ($count <= 8) ? 'visible' : ''; ?>">
            <a href="<?php echo $week['pdf_file']; ?>" target="_blank">
              Week <?php echo $week['week_no']; ?>
              <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png">
            </a>
          </div>
        <?php } ?>
      </div>
    </div>
  <?php } ?>

</div>

<script>
document.querySelectorAll(".year-header").forEach(header => {
  header.addEventListener("click", () => {
    const card = header.parentElement;
    const icon = header.querySelector("span");

    card.classList.toggle("active");
    icon.textContent = card.classList.contains("active") ? "−" : "+";
  });
});
</script>

<?php include("footer.php"); ?>
