<?php
include("../../config/db.php");

/* FETCH SECTIONS */
$sections = mysqli_query($conn, "SELECT * FROM admin_sections WHERE status=1");
$sectionList = [];
while($s = mysqli_fetch_assoc($sections)){
  $sectionList[] = $s;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Administrative Wing</title>

<style>
*{ box-sizing:border-box; }
body{
  font-family:"Segoe UI", Arial, sans-serif;
  background:#f4f6f9;
  margin:0;
  padding:16px;
}
.container{
  max-width:1300px;
  margin:auto;
}

/* ===== LAYOUT ===== */
.admin-layout{
  display:flex;
  gap:20px;
}

/* ===== LEFT SIDEBAR ===== */
.admin-sidebar{
  width:260px;
  background:#fff;
  border-radius:10px;
  box-shadow:0 2px 10px rgba(0,0,0,.08);
  overflow:hidden;
}
.admin-sidebar ul{
  list-style:none;
  padding:0;
  margin:0;
}
.admin-sidebar li{
  padding:14px 18px;
  border-bottom:1px solid #eee;
  cursor:pointer;
  font-weight:600;
}
.admin-sidebar li.active,
.admin-sidebar li:hover{
  background:#0b77b7;
  color:#fff;
}

/* ===== CONTENT AREA ===== */
.admin-content{
  flex:1;
}

/* ===== SECTION BOX ===== */
.section-box{
  display:none;
  background:#fff;
  border-radius:10px;
  padding:18px;
  box-shadow:0 2px 10px rgba(0,0,0,0.08);
}
.section-box.active{
  display:block;
}
.section-title{
  font-size:20px;
  font-weight:700;
  color:#0b77b7;
  border-bottom:2px solid #e6eef6;
  padding-bottom:6px;
  margin-bottom:16px;
}

/* ===== STAFF GRID ===== */
.staff-grid{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
  gap:16px;
}

/* ===== STAFF CARD ===== */
.staff-card{
  background:#f9fbfd;
  border-radius:10px;
  padding:14px;
  display:flex;
  gap:12px;
  border:1px solid #e1e8f0;
}
.staff-card img{
  width:90px;
  height:110px;
  object-fit:cover;
  border-radius:8px;
}
.staff-info h4{
  margin:0 0 4px;
  font-size:16px;
}
.staff-info p{
  margin:2px 0;
  font-size:14px;
  color:#444;
}
.badge{
  display:inline-block;
  background:#e63946;
  color:#fff;
  font-size:12px;
  padding:2px 8px;
  border-radius:6px;
  margin-bottom:4px;
}

/* ===== MOBILE ===== */
@media(max-width:768px){
  .admin-layout{
    flex-direction:column;
  }
  .admin-sidebar{
    width:100%;
  }
  .staff-card{
    flex-direction:column;
    align-items:center;
    text-align:center;
  }
  .staff-card img{
    width:100px;
    height:120px;
  }
}
</style>
</head>

<body>

<div class="container">
<h2>Administrative Wing</h2>

<div class="admin-layout">

  <!-- ===== LEFT SIDEBAR ===== -->
  <div class="admin-sidebar">
    <ul>
      <?php foreach($sectionList as $i=>$sec){ ?>
        <li class="<?= $i==0?'active':'' ?>"
            onclick="showSection('section<?= $sec['id']; ?>', this)">
          <?= $sec['section_name']; ?>
        </li>
      <?php } ?>
    </ul>
  </div>

  <!-- ===== RIGHT CONTENT ===== -->
  <div class="admin-content">

    <?php foreach($sectionList as $i=>$sec){ ?>
    <div id="section<?= $sec['id']; ?>" class="section-box <?= $i==0?'active':'' ?>">

      <div class="section-title"><?= $sec['section_name']; ?></div>

      <div class="staff-grid">
      <?php
      $staff = mysqli_query($conn,"
        SELECT * FROM administrative_staff
        WHERE section_id='".$sec['id']."' AND status=1
        ORDER BY is_director DESC, name ASC
      ");

      if(mysqli_num_rows($staff)==0){
        echo "<p>No staff available.</p>";
      }

      while($row = mysqli_fetch_assoc($staff)){
      ?>
        <div class="staff-card">
          <img src="/NCDC_MOHFW/uploads/administrative/<?= $row['photo']; ?>"
               onerror="this.src='/NCDC_MOHFW/assets/no-photo.png';">
          <div class="staff-info">
            <?php if($row['is_director']){ ?>
              <span class="badge">Director</span>
            <?php } ?>
            <h4><?= $row['name']; ?></h4>
            <p><strong><?= $row['designation']; ?></strong></p>
            <p><?= $row['qualification']; ?></p>
            <p>📞 <?= $row['phone']; ?></p>
            <p>✉️ <?= $row['email']; ?></p>
          </div>
        </div>
      <?php } ?>
      </div>

    </div>
    <?php } ?>

  </div>
</div>
</div>

<script>
function showSection(id, el){
  document.querySelectorAll('.section-box').forEach(sec=>{
    sec.classList.remove('active');
  });
  document.querySelectorAll('.admin-sidebar li').forEach(li=>{
    li.classList.remove('active');
  });
  document.getElementById(id).classList.add('active');
  el.classList.add('active');
}
</script>

</body>
</html>
