<?php
// NCDC Newsletter Page
?>
<?php include("../header.php"); ?>

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
  display:block;
}

/* ===== PAGE CONTENT ===== */
.page-container{
  width:90%;
  max-width:1200px;
  margin:40px auto;
  font-family: Arial, sans-serif;
  line-height:1.6;
}

/* Breadcrumb */
.breadcrumb{
  font-size:14px;
  margin-bottom:15px;
  color:#666;
}
.breadcrumb a{
  text-decoration:none;
  color:#0066cc;
}

/* Headings */
h1{
  font-size:28px;
  color:#003366;
  margin-bottom:20px;
}
h2{
  font-size:22px;
  margin-top:40px;
  color:#003366;
  border-bottom:2px solid #ddd;
  padding-bottom:5px;
}

/* ===== Responsive Table ===== */
.info-table{
  width:100%;
  border-collapse:collapse;
  margin-top:20px;
  overflow-x:auto;
  display:block;
}
.info-table th, .info-table td{
  border:1px solid #ccc;
  padding:10px;
  text-align:left;
}
.info-table th{
  background:#f2f2f2;
  width:30%;
}

/* Section Titles */
.section-title{
  margin-top:40px;
  font-size:20px;
  color:#003366;
  border-bottom:1px solid #ccc;
  padding-bottom:5px;
}

/* ===== Member Cards ===== */
.member-card{
  border:1px solid #ddd;
  padding:15px;
  background:#fafafa;
  border-radius:6px;
  box-shadow:0 2px 6px rgba(0,0,0,0.05);
  transition:0.3s;
}
.member-card:hover{
  box-shadow:0 4px 10px rgba(0,0,0,0.1);
}

/* Grid Layout for Desktop */
@media (min-width:768px){
  .editorial-grid{
    display:grid;
    grid-template-columns: repeat(2, 1fr);
    gap:20px;
  }
}

@media (min-width:1100px){
  .editorial-grid{
    grid-template-columns: repeat(3, 1fr);
  }
}

/* ===== Newsletter List ===== */
.newsletter-list ul{
  list-style-type: disc;
  padding-left:20px;
}
.newsletter-list li{
  margin-bottom:12px;
}
.newsletter-list a{
  text-decoration:none;
  color:#003366;
}
.newsletter-list a:hover{
  text-decoration:underline;
}
.pdf-icon{
  width:18px;
  vertical-align:middle;
  margin-left:6px;
}

/* ===== Mobile Adjustments ===== */
@media (max-width:768px){

  .header-image{
    height:180px;
  }

  h1{
    font-size:22px;
  }

  h2{
    font-size:18px;
  }

  .page-container{
    margin:20px auto;
  }

  .member-card{
    margin-bottom:15px;
  }
}

</style>


<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="NCDC Newsletter Header">
</div>

<div class="page-container">

  <div class="breadcrumb">
    <a href="/NCDC_MOHFW/index.php">Home</a> › NCDC Newsletter
  </div>

  <h1>About the NCDC Newsletter</h1>

  <p>
    Epidemiology division brings out a quarterly newsletter reflecting the key
activities of NCDC in the past quarter. It has several interesting sections such
as the lead story section, outbreak section, monitoring disease trends, NCDC
news, etc. The lead story focuses on a current issue of topical interest.
Several interesting emergency responses including outbreaks investigated and
rapid assessments in disasters led by NCDC, new initiatives, coordination
activities under any division, International Health Regulations are also
covered. Communicable disease trends from various programme such as Integrated
Disease Programme, National Vector Borne Disease Control Programme among others
are featured in the monitoring disease trends section. The newsletter is widely
circulated among the public health and medical fraternity. It is available
online on the NCDC website.
  </p>

  <!-- Newsletter Particulars -->
  <h2>Newsletter Particulars</h2>

  <table class="info-table">
    <tr><th>Title</th><td>NCDC Newsletter</td></tr>
    <tr><th>Frequency</th><td>Quarterly</td></tr>
    <tr><th>Publisher</th><td>National Centre for Disease Control</td></tr>
    <tr><th>Advisor</th><td>Prof. (Dr.) Atul Goel, DGHS & Director NCDC</td></tr>
    <tr><th>Chief Editor</th><td>Dr. Anil Kumar, Principal Advisor</td></tr>
    <tr><th>Copyright</th><td>NCDC</td></tr>
    <tr><th>Starting Year</th><td>2012</td></tr>
    <tr><th>Language</th><td>English</td></tr>
    <tr><th>Publication Format</th><td>Online</td></tr>
    <tr><th>Phone No.</th><td>011-23913148, 23922132</td></tr>
    <tr><th>Email</th><td>ncdcnewsletter21[at]gmail[dot]com</td></tr>
    <tr><th>Website</th><td>www.ncdc.mohfw.gov.in</td></tr>
    <tr><th>Address</th><td>22, Shamnath Marg, Civil Lines, Delhi-110054</td></tr>
  </table>

  <!-- Editorial Board -->
  <div class="section-title">Editorial Board</div>

  <div class="member-card">
    <strong>Advisor</strong><br>
    <strong>Name:</strong> Prof. (Dr.) Atul Goel<br>
    <strong>Designation:</strong> DGHS & Director, NCDC<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Mail:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
  </div>

  <div class="member-card">
    <strong>Chief Editor</strong><br>
    <strong>Name:</strong> Dr. Anil Kumar<br>
    <strong>Designation:</strong> Principal Advisor, NCDC<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>

  <div class="member-card">
    <strong>Executive Editor</strong><br>
    <strong>Name:</strong> Dr. Sandhya Kabra<br>
    <strong>Designation:</strong> Additional Director & HoD, Hepatitis & Biotechnology<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>


  <div class="member-card">
    <strong>Assistant Executive Editor</strong><br>
    <strong>Name:</strong> Dr. Meera Dhuria<br>
    <strong>Designation:</strong> Joint Director & DPHE & NCD Division<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>


  <div class="section-title">Editorial Panel</div>

  <div class="member-card">
    <strong>Name:</strong> Dr. Sunil Gupta<br>
    <strong>Designation:</strong> Principal Consultant<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>

<div class="member-card">
    <strong>Name:</strong> Dr. S. K. Jain<br>
    <strong>Designation:</strong> Advisor, Epidemiology Division<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>

<div class="member-card">
    <strong>Name:</strong> Dr. Arti Bahl<br>
    <strong>Designation:</strong> Additional Director & Head, Epidemiology Division<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>

<div class="member-card">
    <strong>Name:</strong> Dr. Aakash Shrivastava<br>
    <strong>Designation:</strong> Addl. Director & Head, Centre for Environmental & Occupational Health, Climate Change & Health<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>

<div class="member-card">
    <strong>Name:</strong> Dr. Simrita Singh<br>
    <strong>Designation:</strong> Additional Director & HoD, Centre for AIDS and Related Diseases<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>

<div class="member-card">
    <strong>Name:</strong> Dr. Tanzin Dikid<br>
    <strong>Designation:</strong> Joint Director, Epidemiology Division<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>

<div class="member-card">
    <strong>Name:</strong> Dr. Himanshu Chauhan<br>
    <strong>Designation:</strong> Joint Director & HOD, Integrated Disease Surveillance Programme<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>

<div class="member-card">
    <strong>Name:</strong> Dr. Simmi Tiwari<br>
    <strong>Designation:</strong> Joint Director & HOD, Centre for Medical Entomology and Vector Management<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>

<div class="member-card">
    <strong>Name:</strong> Dr. Vinay Garg<br>
    <strong>Designation:</strong> Joint Director & Head, DPD<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>

<div class="member-card">
    <strong>Name:</strong> Dr. Monil Singhai<br>
    <strong>Designation:</strong> Joint Director, CAZD<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>

<div class="member-card">
    <strong>Name:</strong> Dr. Purva Sarkate<br>
    <strong>Designation:</strong> Joint Director & Head, Enterovirus Division<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>

<div class="section-title">Editorial Coordinator</div>
  <div class="member-card">
    <strong>Name:</strong> Dr. Suneet Kaur<br>
    <strong>Designation:</strong> Deputy Director, Epidemiology Division<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>

<div class="section-title">Design and Layout</div>
  <div class="member-card">
    <strong>Name:</strong> Mr. Abhishek<br>
    <strong>Designation:</strong> Technical Officer, Epidemiology Division<br>
    <strong>Address:</strong> 22, Shamnath Marg, Civil Lines, Delhi-110054<br>
    <strong>Email:</strong> dirnicd[at]nic[dot]in, ncdcnewsletter21[at]gmail[dot]com<br>
</div>


  <!-- Newsletter Issues -->
  
<?php
include("../../config/db.php"); // DB connection

$newsQuery = mysqli_query($conn,"SELECT * FROM ncdc_newsletters WHERE status=1 ORDER BY id DESC");
?>

<!-- Newsletter Issues -->
<div class="section-title">Recent Newsletter Issues</div>

<div class="newsletter-list">
  <ul>
    <?php while($row = mysqli_fetch_assoc($newsQuery)) { ?>
      <li>
        <a href="/NCDC_MOHFW/uploads/newsletter/<?php echo $row['pdf_file']; ?>" target="_blank">
          <?php echo $row['title']; ?>
        </a>
        <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
      </li>
    <?php } ?>
  </ul>
</div>

</div>

<?php include("../footer.php"); ?>
