<?php
include("../../config/db.php");

$result = mysqli_query(
  $conn,
  "SELECT title FROM achievements 
   WHERE status=1 
   ORDER BY display_order ASC"
);
?>

<style>
/* ===== ACHIEVEMENTS ===== */
.achievements-wrapper{
  background:#fff;
}

.achievements-title{
  font-size:32px;
  font-weight:700;
  color:#0b2e5f;
  margin-bottom:30px;
}

.achievement-item{
  display:flex;
  gap:18px;
  padding:18px 0;
  border-bottom:1px solid #e6e6e6;
}

.achievement-icon{
  width:44px;
  height:44px;
  background:#f5a623;
  color:#fff;
  border-radius:50%;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:20px;
}

.achievement-text{
  font-size:16px;
  line-height:1.6;
  color:#333;
}
</style>

<div class="achievements-wrapper">

  <h1 class="achievements-title">Major Achievements</h1>

  <?php while($row = mysqli_fetch_assoc($result)) { ?>

    <div class="achievement-item">
      <div class="achievement-icon">📅</div>
      <div class="achievement-text">
        <?php echo htmlspecialchars($row['title']); ?>
      </div>
    </div>

  <?php } ?>
<button class="back-btn" onclick="window.location.href='/NCDC_MOHFW/index.php'">Back</button>
</div>
