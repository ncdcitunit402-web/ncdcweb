
<?php
include_once __DIR__ . '/security_headers.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet" href="/NCDC_MOHFW/assets/css/style.css">
<!-- Google Translate -->
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    includedLanguages: 'en,hi',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script>

<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style>
  .goog-te-banner-frame,
.skiptranslate {
  display: none !important;
}
body {
  top: 0 !important;
}
#google_translate_element {
  height:0;
  overflow:hidden;
}
  /* ================= TOP UTILITY BAR ================= */
.top-utility {
  background: #f4f6f8;
  border-bottom: 1px solid #ddd;
  font-size: 13px;
}

.top-inner {
  width: 95%;
  margin: auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 6px 0;
}

.top-left a {
  text-decoration: none;   /* remove underline */
  color: #000;             /* text color */
  font-weight: 500;
}

.top-left a:hover {
  color: #0b6aa2;          /* hover color */
  text-decoration: none;
}

.top-right {
  display: flex;
  align-items: center;
  gap: 14px;
}

.top-right a {
  text-decoration: none;
  color: #000;
}

.font-controls span {
  border: 1px solid #aaa;
  padding: 2px 6px;
  cursor: pointer;
}

.top-right select {
  padding: 3px;
  font-size: 12px;
}

/* ================= HEADER ================= */
.header-inner {
  width: 100%;
  margin: auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 14px;
  background: #fff;
  
}

.header-left {
  display: flex;
  gap: 15px;
  align-items: center;
}

.emblem {
  width: 60px;
}

.title-text h1 {
  margin: 0;
  font-size: 26px;
  font-weight: 700;
}

.title-text p {
  margin-top: 4px;
  font-size: 14px;
  line-height: 1.4;
}

.header-right img {
  height: 55px;
  margin-left: 10px;
}



/* DROPDOWN */
.nav-item .dropdown {
  position: absolute;
  top: 100%;
  left: 0;
  min-width: 280px;
  background: #fff;
  box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  display: none;
  z-index: 1000;
  opacity: 0;
  transition: opacity 0.2s ease;
}

/* SHOW DROPDOWN ON HOVER OR JS OPEN */
.nav-item:hover .dropdown,
.nav-item.open .dropdown {
  display: block;
  opacity: 1;
}

/* DROPDOWN LINKS */
.nav-item .dropdown a {
  display: block;
  padding: 10px 20px;
  font-size: 14px;
  color: #000 !important;
  text-decoration: none !important;
  border-bottom: 1px solid #eee;
}

.nav-item .dropdown a:hover {
  background-color: #f0f0f0;
}
 /* ================= NAVIGATION BAR ================= */
.main-nav {
  background: #0a77b7;
  width: 100%;
  margin: auto;
  border-radius: 10px;
  display: flex;
  justify-content: space-around;
  align-items: center;
  padding: 10px 20px;   /* thoda compact */
}

/* Navigation Links */
.main-nav a {
  color: #fff;
  font-size: 16px;      /* size decreased */
  font-weight: 400;     /* not bold */
  text-decoration: none;
  padding: 8px 12px;    /* compact button spacing */
  transition: 0.3s ease;
}

/* Hover Effect */
.main-nav a:hover {
  color: #ffdede;
}

/* Nav Item */
.nav-item {
  position: relative;
  cursor: pointer;
  font-weight: 600;
  font-family: "Times New Roman", Times, serif;
}



/* ================= HAMBURGER ================= */
.hamburger{
  display:none;
  font-size:26px;
  cursor:pointer;
  padding:10px 14px;
  color:#fff;
}

/* ================= SIDE MENU ================= */
.overlay{
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:100%;
  background:rgba(0,0,0,0.5);
  display:none;
  z-index:998;
}

.side-menu{
  position: fixed;
  top: 0;
  left: -320px;
  width: 320px;
  height: 100vh;          /* full height */
  background: #fff;
  transition: 0.3s ease;
  z-index: 9999;
  display: flex;
  flex-direction: column; /* important */
}

.side-menu.active {
  left: 0;   /* 👈 left se slide hoga */
}


/* HEADER inside side menu */
.side-header{
  flex-shrink: 0;        /* important */
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px;
  background: #0b77b7;
}


.side-header .tab{
  background:none;
  border:none;
  color:#fff;
  font-size:14px;
  padding:8px 10px;
  cursor:pointer;
}

.side-header .tab.active{
  border-bottom:2px solid #fff;
}

.close-btn{
  font-size: 22px;
  cursor: pointer;
  color: #fff;
  margin-left: auto;
}

/* SIDE CONTENT */
.side-content{
  display:none;
  padding:10px;
  flex: 1;  
  overflow-y: auto;
}

.side-content.active{
  display:block;
}

.side-content a{
  display:block;
  padding:10px;
  border-bottom:1px solid #eee;
  color:#333;
  text-decoration:none;
}
.dropdown {
  position: relative;
}

.sub-dropdown {
  display: none;
  position: absolute;
  left: 0;
  top: 100%;
  background: #ffffff;
  min-width: 220px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  z-index: 999;
}

.sub-dropdown a {
  display: block;
  padding: 10px 15px;
  text-decoration: none;
  color: #000;
  font-size: 14px;
}

.sub-dropdown a:hover {
  background: #f1f1f1;
}

.dropdown-toggle {
  cursor: pointer;
}

/* ================= GOOGLE TRANSLATE HIDE ================= */
.goog-te-banner-frame,
.goog-te-banner-frame.skiptranslate{
  display:none !important;
}

.goog-tooltip,
.goog-text-highlight{
  display:none !important;
}

body{
  top:0px !important;
}

.accessibility{
  position: relative;
  display: inline-block;
  margin-left: 8px;
}

.accessibility-btn{
  background: transparent;
  border: none;
  font-size: 18px;
  cursor: pointer;
}

.accessibility-menu{
  display: none;
  position: absolute;
  top: 28px;
  right: 0;
  background: #000;
  border-radius: 4px;
  overflow: hidden;
  z-index: 9999;
}

.accessibility-menu button{
  display: block;
  width: 45px;
  padding: 6px 0;
  background: #000;
  color: #fff;
  border: none;
  font-size: 13px;
  font-weight: 600;
  cursor: pointer;
}

.accessibility-menu button:hover{
  background: #ffc107;
  color: #000;
}
.social-dropdown{
  position:relative;
  display:inline-block;
  margin-left:10px;
}

.social-btn{
  background:#fff;
  border:1px solid #ccc;
  padding:6px 8px;
  border-radius:4px;
  cursor:pointer;
  font-size:16px;
}

.social-btn:hover{
  background:#f0f0f0;
}

.social-menu{
  display:none;
  position:absolute;
  right:0;
  top:40px;
  background:#fff;
  min-width:40px;
  box-shadow:0 4px 12px rgba(0,0,0,0.15);
  border-radius:6px;
  overflow:hidden;
  z-index:999;
}

.social-menu a{
  display:flex;
  align-items:center;
  gap:10px;
  padding:10px 12px;
  text-decoration:none;
  color:#333;
  font-size:14px;
  transition:0.3s;
}

.social-menu a:hover{
  background:#f5f5f5;
}

/* Brand Colors */
.facebook i{ color:#1877F2; }
.twitter i{ color:#000000; }
.youtube i{ color:#FF0000; }
.instagram i{ 
  background:linear-gradient(45deg,#f58529,#dd2a7b,#8134af,#515bd4);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}
.title-link{
  text-decoration: none;
  color: inherit;
  display: inline-block;
}

.title-link:hover{
  text-decoration: none;
  color: inherit;
  color: #0a77b7;
}




/* ================= DESKTOP ================= */
@media(min-width:769px){

  .hamburger{
    display:block;
  }

  /* Sirf MENU tab hide hoga */
  .side-header .tab:first-child{
    display:none;
  }

}


/* ================= MOBILE ================= */
@media(max-width:768px){
  .hamburger{
    display:block;
  }
  .side-header{
    display:flex;
  }
}

/* ================= MOBILE NAV FIX ================= */
@media (max-width: 768px) {
  .main-nav a,
  .main-nav .nav-item {
    display: none !important;   /* hide all menu items */
  }

  .main-nav .hamburger {
    display: block !important;  /* show only hamburger */
  }

  .main-nav {
    justify-content: flex-start; /* keep hamburger on left */
  }
}
/* SEARCH CONTAINER */
.search-container{
position:relative;
display:inline-block;
}

/* SEARCH ICON */
.search-icon-btn{
background:#fff;
border:1px solid #ccc;
padding:6px 8px;
border-radius:4px;
cursor:pointer;
font-size:16px;
}

.search-icon-btn:hover{
background:#f0f0f0;
}

/* SEARCH BOX */
.search-box{
position:absolute;
top:40px;
right:0;
width:300px;
background:#fff;
border:1px solid #ddd;
box-shadow:0 5px 15px rgba(0,0,0,0.2);
border-radius:6px;
padding:10px;
display:none;
z-index:9999;
}

/* INPUT */
.search-box input{
width:100%;
padding:8px;
border:1px solid #ccc;
border-radius:4px;
outline:none;
}

/* CLOSE BUTTON */
.search-close{
position:absolute;
right:12px;
top:12px;
border:none;
background:none;
font-size:16px;
cursor:pointer;
}

/* RESULTS */
#searchResults{
margin-top:8px;
max-height:250px;
overflow-y:auto;
}

.search-item{
padding:8px;
border-bottom:1px solid #eee;
}

.search-item:hover{
background:#f5f5f5;
}


</style>

<script>
function toggleDropdown(event){
  event.stopPropagation();
  const item = event.currentTarget;
  const isOpen = item.classList.contains("open");
  document.querySelectorAll(".nav-item").forEach(i => {
    i.classList.remove("open");
  });
  if(!isOpen){
    item.classList.add("open");
  }
}

function openMenu(){
  const isMobile = window.innerWidth <= 768;

  document.getElementById("sideMenu").style.left = "0";
  document.getElementById("overlay").style.display = "block";

  // Side header always visible (mobile + desktop)
  document.querySelector('.side-header').style.display = 'flex';

  if(isMobile){
    showTab('menu');
  }else{
    showTab('cat');
  }
}

function closeMenu(){
  document.getElementById("sideMenu").style.left = "-320px";
  document.getElementById("overlay").style.display = "none";
}

function showTab(tab){
  document.querySelectorAll('.side-content').forEach(el => el.classList.remove('active'));
  document.getElementById(tab).classList.add('active');
}

function toggleEstablished() {
  const dropdown = document.getElementById("establishedBranches");
  dropdown.style.display =
    dropdown.style.display === "block" ? "none" : "block";
}


let currentSize = 100; // percentage

function toggleAccessibility(){
  const menu = document.getElementById("accessibilityMenu");
  menu.style.display = menu.style.display === "block" ? "none" : "block";
}

function setFontSize(type){
  if(type === -1 && currentSize > 80){
    currentSize -= 10;
  }
  if(type === 1 && currentSize < 130){
    currentSize += 10;
  }
  if(type === 0){
    currentSize = 100;
  }

  document.body.style.fontSize = currentSize + "%";
}

/* Outside click close */
document.addEventListener("click", function(e){
  if(!e.target.closest(".accessibility")){
    document.getElementById("accessibilityMenu").style.display = "none";
  }
});
function toggleSocial(){
  var menu = document.getElementById("socialMenu");
  menu.style.display = (menu.style.display === "block") ? "none" : "block";
}

document.addEventListener("click", function(event){
  var dropdown = document.querySelector(".social-dropdown");
  if(!dropdown.contains(event.target)){
    document.getElementById("socialMenu").style.display = "none";
  }
});

function changeLang(val){
  var lang = val === "hi" ? "/en/hi" : "/en/en";
  document.cookie = "googtrans=" + lang + "; path=/";
  location.reload();
}

document.addEventListener("DOMContentLoaded", function(){

  const searchInput = document.getElementById("searchInput");
  const searchResults = document.getElementById("searchResults");

  if(!searchInput) return;

  searchInput.addEventListener("keyup", function(){

    let q = this.value.trim();

    if(q.length < 2){
      searchResults.style.display = "none";
      return;
    }

    fetch("/NCDC_MOHFW/includes/search.php?q=" + encodeURIComponent(q))
    .then(response => response.text())
    .then(data => {

      if(data.trim() === ""){
        searchResults.innerHTML = "<div class='search-item'>No results found</div>";
      }else{
        searchResults.innerHTML = data;
      }

      searchResults.style.display = "block";
    });

  });

});
function openSearch(){
  document.getElementById("searchBox").style.display="block";
  document.getElementById("searchInput").focus();
}

function closeSearch(){
  document.getElementById("searchBox").style.display="none";
  document.getElementById("searchResults").innerHTML="";
}
</script>

<!-- <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->

</head>

<body>
<!-- GOOGLE TRANSLATE CONTAINER (HIDDEN) -->
<!-- <div id="google_translate_element" style="display:none;"></div> -->

<!-- FORCE REMOVE GOOGLE TOP BAR -->
<script>
setInterval(function () {
  if (document.querySelector('.goog-te-banner-frame')) {
    document.querySelector('.goog-te-banner-frame').style.display = 'none';
    document.body.style.top = '0px';
  }
}, 500);

function skipToContent(e){
    e.preventDefault();

    // Hide Navbar
    var navbar = document.querySelector(".navbar"); 
    if(navbar){
        navbar.style.display = "none";
    }

    // Scroll to Main Content
    document.getElementById("main-nav").scrollIntoView({
        behavior: "smooth"
    });
}
 window.onload = function() {
    var cookies = document.cookie.split(';');
    cookies.forEach(function(c) {
      if (c.trim().startsWith('googtrans=')) {
        var val = c.trim().split('=')[1];
        if (val === '/en/hi') {
          document.querySelector('select').value = 'hi';
        }
      }
    });
  }

</script>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>NCDC | MOHFW</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- ================= TOP UTILITY ================= -->
<div class="top-utility">
  <div class="top-inner">

    <div class="top-left">
  <a href="https://www.mohfw.gov.in/" target="_blank">
    Ministry of Health & Family Welfare
  </a> |
  <a href="https://www.mygov.in/" target="_blank">
    Government of India
  </a>
</div>

    <div class="top-right">
      <a href="#mainNav">Skip to Main Content</a>
      <a href="/NCDC_MOHFW/includes/sitemap.php">Sitemap</a>
      <a href="/NCDC_MOHFW/includes/screenReader.php">Screen Reader Access</a>

      <!-- Social Media Dropdown -->
      <div class="social-dropdown">
        <button class="social-btn" onclick="toggleSocial()" aria-label="Social Media">
          <i class="fas fa-share-alt"></i>
        </button>

        <div class="search-container">

  <!-- Search Icon -->
  <button class="search-icon-btn" onclick="openSearch()" aria-label="Search">
    <i class="fas fa-search"></i>
  </button>

  <!-- Search Box -->
  <div class="search-box" id="searchBox">

    <input type="text" id="searchInput" placeholder="Search NCDC..." autocomplete="off">

    <button class="search-close" onclick="closeSearch()">✕</button>

    <div id="searchResults"></div>

  </div>

</div>

        <div class="social-menu" id="socialMenu">
  <a href="https://x.com/NCDCMoHFW" target="_blank" class="twitter">
    <i class="fa-brands fa-x-twitter"></i>
  </a>

  <a href="https://www.youtube.com/@NCDC_India" target="_blank" class="youtube">
    <i class="fa-brands fa-youtube"></i>
  </a>

  <a href="https://www.instagram.com/ncdc_mohfw" target="_blank" class="instagram">
    <i class="fa-brands fa-instagram"></i>
  </a>
</div>
      </div>

      <div class="accessibility">
        <button class="accessibility-btn" onclick="toggleAccessibility()" aria-label="Accessibility Options">♿</button>
        <div class="accessibility-menu" id="accessibilityMenu">
          <button onclick="setFontSize(-1)">A-</button>
          <button onclick="setFontSize(0)">A</button>
          <button onclick="setFontSize(1)">A+</button>
        </div>
      </div>

      <select onchange="changeLang(this.value)">
        <option value="en">English</option>
        <option value="hi">Hindi</option>
      </select>

      <div id="google_translate_element"></div>
    </div> <!-- top-right -->

  </div>
</div>
<!-- ================= LOGO ROW ================= -->
  <div class="header-inner">

    <div class="header-left">
      <img src="/NCDC_MOHFW/assets/images/emblem.png" class="emblem">

      <a href="https://ncdc.mohfw.gov.in/"  rel="noopener noreferrer" class="title-link">
  <div class="title-text">
    <h1>National Centre for Disease Control</h1>
    <p>
      Directorate General of Health Services, Ministry of Health & Family Welfare<br>
      Government of India
    </p>
  </div>
</a>
    </div>

    <div class="header-right">
      <img src="/NCDC_MOHFW/assets/images/azadi.png">
      <img src="/NCDC_MOHFW/assets/images/ncdc-logo.png">
    </div>

  </div>



<!-- ================= NAV BAR ================= -->
<nav class="main-nav" id="mainNav">
  <div class="hamburger" onClick="openMenu()">☰</div>
  <a href="/NCDC_MOHFW/index.php" class="nav-item">Home</a>
  <!-- ABOUT US -->
  <div class="nav-item" onclick="toggleDropdown(event)">
    <a href="javascript:void(0);" class="nav-item">About Us ▾</a>

    <div class="dropdown">
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=whoswho">Who’s Who</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=mandate">Mandate</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=achievements">Major Achievements</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=functions">Functions</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=former">Former Directors of NCDC</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=staff">NCDC Staff Details</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=structure">Organisation Structure</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=committee">Institutional Committee</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=Administrative">Administrative Wing</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=centersandivision">Centers & Divisions Under NCDC</a>
    </div>
  </div>
  <!-- Branches -->
  <div class="nav-item" onclick="toggleDropdown(event)">
    <a href="#" class="nav-item">Branches ▾</a>

    <div class="dropdown">
  <a href="/NCDC_MOHFW/includes/Branches/upcoming_branches.php">
    Upcoming Branches
  </a>

  <a href="javascript:void(0);" onclick="toggleEstablished()" class="dropdown-toggle">
    Established Branches ▾
  </a>

  <div class="sub-dropdown" id="establishedBranches">
    <a href="/NCDC_MOHFW/includes/Branches/alwar.php">Alwar Branch</a>
    <a href="/NCDC_MOHFW/includes/Branches/Bengaluru.php">Bengaluru Branch</a>
    <a href="/NCDC_MOHFW/includes/Branches/coonor/introduction.php">Coonoor Branch</a>
    <a href="/NCDC_MOHFW/includes/Branches/Raipur.php">Raipur Branch</a>
    <a href="/NCDC_MOHFW/includes/Branches/Kozhikode.php">Kozhikode Branch</a>
    <a href="/NCDC_MOHFW/includes/Branches/Patna.php">Patna Branch</a>
    <a href="/NCDC_MOHFW/includes/Branches/Mangalagiri.php">Mangalagiri Branch</a>
    <a href="/NCDC_MOHFW/includes/Branches/Varanasi.php">Varanasi Branch</a>
  </div>
</div>

  </div>

  <!-- Health Information -->
  <div class="nav-item" onclick="toggleDropdown(event)">
    <a href="javascript:void(0)" class="nav-item">Health Information ▾</a>

    <div class="dropdown">
      <a href="/NCDC_MOHFW/includes/Health_Information/healthcare.php">Health Care Professional and ParaProfessional</a>
      <a href="/NCDC_MOHFW/includes/Health_Information/generalpublic.php">General Public</a>
      <a href="/NCDC_MOHFW/includes/Health_Information/seasonalinfluenza.php">Seasonal Influenza</a>
    </div>
  </div>
  
  <!-- Resource Library -->
<div class="nav-item" onclick="toggleDropdown(event)">
  <a href="javascript:void(0)" class="nav-item">Resource Library ▾</a>

  <div class="dropdown">
    <a href="/NCDC_MOHFW/includes/Resource_Library/index.php?tab=Technical%20Guidelines">
      Technical Guidelines
    </a>

    <a href="/NCDC_MOHFW/includes/Resource_Library/index.php?tab=Resource%20Material">
      Resource Material
    </a>

    <a href="/NCDC_MOHFW/includes/Resource_Library/index.php?tab=Annual%20Report">
      Annual Report
    </a>

    <a href="/NCDC_MOHFW/includes/Resource_Library/index.php?tab=Guideline%20EForm">
      Guideline of EForm
    </a>
  </div>
</div>


   <!-- Work With Us -->
  <div class="nav-item" onclick="toggleDropdown(event)">
    <a href="javascript:void(0)" class="nav-item">Work With Us ▾</a>

    <div class="dropdown">
      <a href="/NCDC_MOHFW/includes/Work_With_Us/Vacancies.php">Vacancies</a>
      <a href="/NCDC_MOHFW/includes/Work_With_Us/internship.php">Internship</a>
      <a href="/NCDC_MOHFW/includes/Work_With_Us/training_fellowship.php">Training & Fellowship Program</a>
      <a href="/NCDC_MOHFW/includes/Work_With_Us/Educational_cum_Orientation_visit_to_NCDC.php">Educational cum Orientation visit to NCDC</a>
    </div>
  </div>

  
  <!-- Academics -->
  <div class="nav-item" onclick="toggleDropdown(event)">
    <a href="javascript:void(0)" class="nav-item">Academics ▾</a>

    <div class="dropdown">
      <a href="/NCDC_MOHFW/includes/Academics/teaching-training.php">Teaching & Training</a>
      <a href="/NCDC_MOHFW/includes/Academics/ongoing-thesis.php">Ongoing thesis</a>
    </div>
  </div>
  <a href="/NCDC_MOHFW/includes/Tenders/index.php" class="nav-item">Tenders</a>
  <a href="/NCDC_MOHFW/includes/SideBar/contactus.php" class="nav-item">Contact Us</a>
  
</nav>

<!-- ================= SIDE MENU ================= -->
<div class="overlay" id="overlay" onclick="closeMenu()"></div>

<div class="side-menu" id="sideMenu">

  <div class="side-header">
    <button class="tab active" onclick="showTab('menu')">☰ MENU</button>
    <button class="tab" onclick="showTab('cat')">▦ CATEGORIES</button>
    <span class="close-btn" onclick="closeMenu()">✕</span>
  </div>
  

  <!-- MENU TAB -->
  <div class="side-content active" id="menu">
    <a href="/NCDC_MOHFW/index.php">Home</a>
    <div class="nav-item" onclick="toggleDropdown(event)">
    <a href="#">About Us ▾</a>

    <div class="dropdown">
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=whoswho">Who’s Who</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=mandate">Mandate</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=achievements">Major Achievements</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=functions">Functions</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=former">Former Directors of NCDC</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=staff">NCDC Staff Details</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=structure">Organisation Structure</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=committee">Institutional Committee</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=Administrative">Administrative Wing</a>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=centersandivision">Centers & Divisions Under NCDC</a>
    </div>
  </div>
    <!-- Branches -->
  <div class="nav-item" onclick="toggleDropdown(event)">
    <a href="#">Branches ▾</a>

    <div class="dropdown">
  <a href="/NCDC_MOHFW/includes/Branches/upcoming_branches.php">
    Upcoming Branches
  </a>

  <a href="javascript:void(0);" onclick="toggleEstablished()" class="dropdown-toggle">
    Established Branches ▾
  </a>

  <div class="sub-dropdown" id="establishedBranches">
    <a href="/NCDC_MOHFW/includes/Branches/alwar.php">Alwar Branch</a>
    <a href="/NCDC_MOHFW/includes/Branches/Bengaluru.php">Bengaluru Branch</a>
    <a href="/NCDC_MOHFW/includes/Branches/Coonoor.php">Coonoor Branch</a>
    <a href="/NCDC_MOHFW/includes/Branches/Raipur.php">Raipur Branch</a>
    <a href="/NCDC_MOHFW/includes/Branches/Kozhikode.php">Kozhikode Branch</a>
    <a href="/NCDC_MOHFW/includes/Branches/Patna.php">Patna Branch</a>
    <a href="/NCDC_MOHFW/includes/Branches/Mangalagiri.php">Mangalagiri Branch</a>
    <a href="/NCDC_MOHFW/includes/Branches/Varanasi.php">Varanasi Branch</a>
  </div>
</div>

  </div>
    <!-- Health Information -->
  <div class="nav-item" onclick="toggleDropdown(event)">
    <a href="javascript:void(0)">Health Information ▾</a>

    <div class="dropdown">
      <a href="/NCDC_MOHFW/includes/Health_Information/healthcare.php">Health Care Professional and ParaProfessional</a>
      <a href="/NCDC_MOHFW/includes/Health_Information/generalpublic.php">General Public</a>
      <a href="/NCDC_MOHFW/includes/Health_Information/seasonalinfluenza.php">Seasonal Influenza</a>
    </div>
  </div>
      <!-- Resource Library -->
<div class="nav-item" onclick="toggleDropdown(event)">
  <a href="javascript:void(0)">Resource Library ▾</a>

  <div class="dropdown">
    <a href="/NCDC_MOHFW/includes/Resource_Library/index.php?tab=Technical%20Guidelines">
      Technical Guidelines
    </a>

    <a href="/NCDC_MOHFW/includes/Resource_Library/index.php?tab=Resource%20Material">
      Resource Material
    </a>

    <a href="/NCDC_MOHFW/includes/Resource_Library/index.php?tab=Annual%20Report">
      Annual Report
    </a>

    <a href="/NCDC_MOHFW/includes/Resource_Library/index.php?tab=Guideline%20EForm">
      Guideline of EForm
    </a>
  </div>
</div>
     <!-- Work With Us -->
  <div class="nav-item" onclick="toggleDropdown(event)">
    <a href="javascript:void(0)">Work With Us ▾</a>

    <div class="dropdown">
      <a href="/NCDC_MOHFW/includes/Work_With_Us/Vacancies.php">Vacancies</a>
      <a href="/NCDC_MOHFW/includes/Work_With_Us/internship.php">Internship</a>
      <a href="/NCDC_MOHFW/includes/Work_With_Us/training_fellowship.php">Training & Fellowship Program</a>
      <a href="/NCDC_MOHFW/includes/Work_With_Us/Educational_cum_Orientation_visit_to_NCDC.php">Educational cum Orientation visit to NCDC</a>
    </div>
  </div>
    <!-- Academics -->
  <div class="nav-item" onclick="toggleDropdown(event)">
    <a href="javascript:void(0)">Academics ▾</a>

    <div class="dropdown">
      <a href="/NCDC_MOHFW/includes/Academics/teaching-training.php">Teaching & Training</a>
      <a href="/NCDC_MOHFW/includes/Academics/ongoing-thesis.php">Ongoing thesis</a>
    </div>
  </div>
    <a href="/NCDC_MOHFW/includes/Tenders/index.php">Tenders</a>
    <a href="/NCDC_MOHFW/includes/SideBar/contactus.php">Contact Us</a>
  </div>

  <div class="side-content" id="cat">
    <a href="/NCDC_MOHFW/includes/SideBar/contactus.php">How to Reach NCDC</a>
    <a href="/NCDC_MOHFW/includes/SideBar/guest.php">Guest House & PG Hostel</a>
    <a href="/NCDC_MOHFW/includes/SideBar/ncdc_newsletter.php">NCDC Newsletter</a>
    <a href="/NCDC_MOHFW/includes/SideBar/Epi-Dis-PHERE.php">Epi-Dis-PHERE-Publication of Health Resilience Quarterly e-journal of National Centre for Disease Control NCDC</a>
    <a href="/NCDC_MOHFW/includes/SideBar/NPHICON_2024.php">NPHICON 2024</a>
    <a href="/NCDC_MOHFW/includes/SideBar/media_gallary.php">Media Gallery</a>
    <a href="/NCDC_MOHFW/includes/SideBar/Citizen_Charter.php">Citizen Charter</a>
    <a href="/NCDC_MOHFW/includes/SideBar/Grievance.php">Grievance</a>
    <a href="/NCDC_MOHFW/includes/SideBar/RTI.php">RTI</a>
    <a href="/NCDC_MOHFW/includes/SideBar/help.php">Help</a>
    <a href="/NCDC_MOHFW/includes/SideBar/feedback2.php">Feedback</a>
  </div>

</div> 

</body>
</html>