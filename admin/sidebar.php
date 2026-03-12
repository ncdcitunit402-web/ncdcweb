<?php
if(!isset($_SESSION['admin'])){
  header("Location: login.php");
  exit;
}
include("includes/session_check.php");
?>
<style>
/* ================= ADMIN LAYOUT ================= */
.admin-wrapper{
  display:flex;
  min-height:70vh;
  background:#f4f6f9;
  
 
}

/* ================= SIDEBAR ================= */
.admin-sidebar{
  width:260px;
  background:linear-gradient(180deg,#0b77b7,#094d73);
  padding:20px 15px;
  color:#fff;
  transition:0.3s;
  border-right:2px solid #000;
  border-left:2px solid #000;
}

.admin-sidebar h3{
  text-align:center;
  margin-bottom:25px;
  font-size:18px;
  letter-spacing:1px;
  border-bottom:1px solid rgba(255,255,255,0.3);
  padding-bottom:12px;
}

/* MENU ITEMS */
.admin-sidebar a{
  display:flex;
  align-items:center;
  gap:10px;
  color:#fff;
  padding:12px 14px;
  margin-bottom:10px;
  border-radius:6px;
  text-decoration:none;
  font-size:15px;
  background:rgba(255,255,255,0.08);
  transition:0.3s;
}

.admin-sidebar a span{
  font-size:18px;
}

/* HOVER EFFECT */
.admin-sidebar a:hover{
  background:#ffffff;
  color:#0b77b7;
  transform:translateX(6px);
}

/* LOGOUT */
.admin-sidebar .logout{
  background:#b71c1c;
}
.admin-sidebar .logout:hover{
  background:#fff;
  color:#b71c1c;
}

/* ================= CONTENT ================= */
.admin-content{
  flex:1;
  padding:30px;
  background:#ffffff;
}

/* ================= MOBILE VIEW ================= */
.menu-toggle{
  display:none;
  background:#0b77b7;
  color:#fff;
  padding:10px 15px;
  cursor:pointer;
  font-size:16px;
}

@media(max-width:768px){

  .admin-wrapper{
    flex-direction:column;
  }

  .menu-toggle{
    display:block;
  }

  .admin-sidebar{
    width:100%;
    display:none;
  }

  .admin-sidebar.active{
    display:block;
  }

  .admin-content{
    padding:20px;
  }
}
</style>

<!-- MOBILE MENU BUTTON -->
<div class="menu-toggle" onclick="toggleSidebar()">☰ Admin Menu</div>

<!-- SIDEBAR -->
<div class="admin-sidebar" id="adminSidebar">
  <h3>ADMIN PANEL</h3>
  <!--<a href="msg.php">Message for Admin</a> -->
  <a href="pages/slider.php"> Slider</a>

<!-- <a href="javascript:void(0)"
   onclick="loadPage('pages/announcement.php'); closeSidebar();">
   📢 Announcement
</a> -->
<a href="pages/announcement.php">Announcement</a>
<a href="manage_glimpse.php">Manage Glimpse</a>
<a href="manage_media_gallary.php">Manage Media Gallary</a>
<a href="manage_staff.php">Manage Staff</a>
<a href="manage_administrative_wing.php">Manage Administrative Wing</a>
<a href="manage_resource.php">Manage Resource Library</a>
<a href="manage_vaccany.php">Manage Vacancy</a>
<a href="manage_internship.php">Manage Internship</a>
<a href="manage_tenders.php">Manage Tenders</a>
<a href="manage_newsletter.php">Manage NewsLetter</a>
<!-- <a href="javascript:void(0)"
   onclick="loadPage('pages/users.php'); closeSidebar();">
    Users
</a> -->

<a href="manage_weeklyoutbreaks.php">Manage Weekly Out Breaks</a>
<!-- <a href="manage_whoswho.php">Manage WhosWho</a> -->










  <a href="logout.php" class="logout">
    <span>🚪</span> Logout
  </a>
</div>

<script>
function loadPage(page){
  fetch("load.php?page="+page)
    .then(res => res.text())
    .then(data => {
      document.getElementById("adminContent").innerHTML = data;
      if(window.innerWidth < 768){
        document.getElementById("adminSidebar").classList.remove("active");
      }
    });
}

function toggleSidebar(){
  document.getElementById("adminSidebar").classList.toggle("active");
}

function closeSidebar(){
  if (window.innerWidth <= 768) {
    document.getElementById("adminSidebar").classList.remove("active");
  }
}
</script>
