<?php
// announcement.php
// DB connection ($conn) assumed already included
?>

<div class="announcement-bar">

  <div class="announcement-title">
    Announcements
  </div>

  <div class="announcement-marquee">
    <marquee behavior="scroll"
             direction="left"
             scrollamount="5"
             onmouseover="this.stop();"
             onmouseout="this.start();">

      <?php
      $sql = "SELECT * FROM announcements ORDER BY id DESC";
      $result = mysqli_query($conn, $sql);

      if ($result && mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

          $title = htmlspecialchars($row['title']);

          // Decide link (PDF or external link)
          if (!empty($row['pdf_file'])) {
              $link = $row['pdf_file'];
          } elseif (!empty($row['external_link'])) {
              $link = $row['external_link'];
          } else {
              $link = "#";
          }

          // NEW badge logic (5 days)
          $created = strtotime($row['created_at']);
          $five_days = strtotime('+5 days', $created);
          $is_new = time() <= $five_days;
      ?>

        <span class="announcement-item">
          ⭐ 
          <a href="<?= htmlspecialchars($link) ?>" target="_blank">
            <?= $title ?>
          </a>

          <?php if ($is_new) { ?>
            <span class="new-badge">NEW</span>
          <?php } ?>
        </span>

      <?php
        }
      } else {
        echo "<span>No announcements available</span>";
      }
      ?>

    </marquee>
  </div>

</div>


<!-- ================= ANNOUNCEMENT CSS ================= -->
<style>
.announcement-bar {
  display: flex;
  align-items: center;
  background: #f2f6fa;
  border-top: 3px solid #0b77b7;
  font-family: Arial, sans-serif;
}

/* TITLE */
.announcement-title {
  background: #17a2a4;
  color: #fff;
  padding: 12px 100px;
  font-weight: 600;
  white-space: nowrap;
}

/* MARQUEE */
.announcement-marquee {
  flex: 1;
  padding: 10px 15px;
}

.announcement-item {
  margin-right: 40px;
  font-weight: 500;
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.announcement-item a {
  color: #000;
  text-decoration: none;
}

.announcement-item a:hover {
  text-decoration: underline;
}

/* NEW BADGE */
.new-badge {
  background: #e91e63;
  color: #fff;
  font-size: 11px;
  padding: 2px 6px;
  border-radius: 10px;
  font-weight: 700;
  animation: blink 1.2s infinite;
}

/* BLINK EFFECT */
@keyframes blink {
  0% { opacity: 1; }
  50% { opacity: .3; }
  100% { opacity: 1; }
}

/* ========== MOBILE VIEW ========== */
@media (max-width: 768px) {
  .announcement-title {
    padding: 10px 14px;
    font-size: 14px;
  }

  .announcement-marquee {
    font-size: 14px;
  }

  .new-badge {
    font-size: 10px;
    padding: 2px 5px;
  }
}
</style>
