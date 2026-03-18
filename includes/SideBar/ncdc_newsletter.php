<?php
// NCDC Newsletter Page
?>
<?php include("../header.php"); ?>

<style>

/* ===== HEADER IMAGE ===== */

.header-image{
  width:100%;
  height:300px;
  overflow:hidden;
}

.header-image img{
  width:100%;
  height:100%;
  object-fit:cover;
}

/* ===== PAGE CONTAINER ===== */

.page-container{
  width:92%;
  max-width:1200px;
  margin:40px auto;
  font-family:"Times New Roman", Times, serif;
  line-height:1.7;
}

/* ===== BREADCRUMB ===== */

.breadcrumb{
  font-size:14px;
  margin-bottom:20px;
  color:#666;
}

.breadcrumb a{
  text-decoration:none;
  color:#0b77b7;
  font-weight:600;
}

/* ===== HEADINGS ===== */

h2{
  font-size:30px;
  color:#0b2e59;
  margin-bottom:20px;
  border-left:5px solid #0b77b7;
  padding-left:10px;
}

.section-title{
  margin-top:50px;
  font-size:22px;
  font-weight:700;
  color:#0b2e59;
  border-bottom:3px solid #0b77b7;
  padding-bottom:8px;
}

/* ===== TABLE ===== */

.info-table{
  width:100%;
  border-collapse:collapse;
  margin-top:25px;
  background:#fff;
  box-shadow:0 2px 10px rgba(0,0,0,0.08);
}

.info-table th{
  background:#0b77b7;
  color:white;
  padding:12px;
  width:30%;
  text-align:left;
}

.info-table td{
  padding:12px;
  border-bottom:1px solid #eee;
}

.info-table tr:hover{
  background:#f9fbff;
}

/* ===== GRID ===== */

.editorial-grid{
  display:grid;
  grid-template-columns:1fr;   /* Ek row me ek hi card */
  gap:20px;
  margin-top:25px;
}

/* ===== MEMBER CARD ===== */

.member-card{
  border-radius:8px;
  padding:18px;
  background:white;
  border:1px solid #e3e3e3;
  box-shadow:0 3px 10px rgba(0,0,0,0.06);
  transition:all .3s ease;
}

.member-card:hover{
  transform:translateY(-4px);
  box-shadow:0 6px 16px rgba(0,0,0,0.12);
}

.member-card strong{
  color:#0b2e59;
}

/* ===== NEWSLETTER LIST ===== */

.newsletter-list{
  margin-top:25px;
}

.newsletter-list ul{
  list-style:none;
  padding:0;
}

.newsletter-list li{
  background:#ffffff;
  border:1px solid #e6e6e6;
  padding:14px 16px;
  margin-bottom:12px;
  border-radius:6px;
  display:flex;
  justify-content:space-between;
  align-items:center;
}

.newsletter-list li:hover{
  background:#f5faff;
  border-color:#0b77b7;
}

.newsletter-list a{
  text-decoration:none;
  color:#0b2e59;
  font-weight:600;
}

.pdf-icon{
  width:20px;
}

/* ===== MOBILE ===== */

@media(max-width:768px){

.header-image{
height:180px;
}

h2{
font-size:24px;
}

.section-title{
font-size:20px;
}

}

</style>


<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" alt="NCDC Newsletter">
</div>


<div class="page-container">

<div class="breadcrumb">
<a href="/NCDC_MOHFW/index.php">Home</a> › NCDC Newsletter
</div>


<h2>About the NCDC Newsletter</h2>

<p>
Epidemiology division brings out a quarterly newsletter reflecting the key
activities of NCDC in the past quarter including outbreak investigations,
monitoring disease trends, emergency responses and public health initiatives.
The newsletter is circulated among public health professionals and is available
online on the NCDC website.
</p>


<!-- Newsletter Particulars -->

<div class="section-title">Newsletter Particulars</div>

<table class="info-table">

<tr><th>Title</th><td>NCDC Newsletter</td></tr>
<tr><th>Frequency</th><td>Quarterly</td></tr>
<tr><th>Publisher</th><td>National Centre for Disease Control</td></tr>

<tr>
<th>Advisor</th>
<td>
Dr. Sunita Sharma, Director General of Health Services, NCDC<br><br>
Prof (Dr.) Ranjan Das, Director, NCDC
</td>
</tr>

<tr><th>Chief Executive Editor</th><td>Dr. Anil Kumar</td></tr>

<tr><th>Phone No.</th><td>011-23913148, 23922132</td></tr>

<tr><th>Email</th><td>ncdcnewsletter21[at]gmail[dot]com</td></tr>

<tr><th>Address</th><td>22, Shamnath Marg, Civil Lines, Delhi-110054</td></tr>

</table>


<!-- Editorial Board -->

<div class="section-title">Editorial Board</div>

<div class="editorial-grid">

<div class="member-card">

<strong>Advisors</strong><br><br>

<strong>1. Dr. Sunita Sharma</strong><br>
Designation: Director General of Health Services<br>
Email: dirnicd[at]nic[dot]in<br>
Address: 22 Shamnath Marg, Civil Lines, Delhi-110054

<br><br>

<strong>2. Prof (Dr.) Ranjan Das</strong><br>
Designation: Director, NCDC<br>
Email: dirnicd[at]nic[dot]in<br>
Address: 22 Shamnath Marg, Civil Lines, Delhi-110054

</div>

<div class="member-card">
<strong>Chief Executive Editor</strong><br><br>
<strong>Name:</strong> Dr. Anil Kumar<br>
<strong>Designation:</strong> Principal Advisor, NCDC<br>
<strong>Email:</strong> ncdcnewsletter21[at]gmail[dot]com<br>
<strong>Address:</strong> 22 Shamnath Marg, Civil Lines, Delhi-110054
</div>

<div class="member-card">
<strong>Executive Editor</strong><br><br>
<strong>Name:</strong> Dr. Meera Dhuria<br>
<strong>Designation:</strong> Joint Director, NCDC<br>
<strong>Email:</strong> ncdcnewsletter21[at]gmail[dot]com<br>
<strong>Address:</strong> 22 Shamnath Marg, Civil Lines, Delhi-110054
</div>

<div class="member-card">
<strong>Guest Editor</strong><br><br>
<strong>Name:</strong> Dr. Aniket Chowdhury<br>
<strong>Designation:</strong> Assistant Director, NCDC<br>
<strong>Email:</strong> ncdcnewsletter21[at]gmail[dot]com<br>
<strong>Address:</strong> 22 Shamnath Marg, Civil Lines, Delhi-110054
</div>

</div>


<!-- Editorial Members -->

<div class="section-title">Editorial Board Members</div>

<div class="editorial-grid">

<div class="member-card">
<strong>Name:</strong> Dr. Aakash Srivastava<br>
<strong>Designation:</strong> Additional Director & Head, CEOH-CCH Division, NCDC, Delhi<br>
<strong>Address:</strong> National Centre for Disease Control, 22 Shamnath Marg, Civil Lines, Delhi-110054
</div>

<div class="member-card">
<strong>Name:</strong> Dr. Arti Bahl<br>
<strong>Designation:</strong> Additional Director & Head, Epidemiology<br>
<strong>Address:</strong> National Centre for Disease Control, 22 Shamnath Marg, Civil Lines, Delhi-110054
</div>

<div class="member-card">
<strong>Name:</strong> Dr. Ashutosh Biswas<br>
<strong>Designation:</strong> Director<br>
<strong>Address:</strong>AIIMS Bhubaneswar, Odisha-751019
</div>

<div class="member-card">
<strong>Name:</strong> Dr. Mala Chhabra<br>
<strong>Designation:</strong> Senior Consultant, Microbiology<br>
<strong>Address:</strong> ABVIMS & Dr RML Hospital, New Delhi
</div>

<div class="member-card">
<strong>Name:</strong>Dr. Manas Kundu<br>
<strong>Designation:</strong>Director, All India Institute of Hygiene & Public Health<br>
<strong>Address:</strong>Chittaranjan Avenue, Kolkata-700073
</div>

<div class="member-card">
<strong>Name:</strong>Dr. Manju Rahi<br>
<strong>Designation:</strong>Director, ICMR-Vector Control Research Centre<br>
<strong>Address:</strong>Indira Nagar, Puducherry - 605006
</div>

<div class="member-card">
<strong>Name:</strong>Dr. Naveen Gupta<br>
<strong>Designation:</strong>Additional Director & Head, Microbiology-Respiratory & Teratogenic viruses and Cenre for One Health Division<br>
<strong>Address:</strong>NCDC, Delhi
</div>

<div class="member-card">
<strong>Name:</strong>Dr. Rajesh Bhatia<br>
<strong>Designation:</strong>Advisor, ADB (Former Director of Infection Diseases SEARO-WHO)<br>
</div>

<div class="member-card">
<strong>Name:</strong>Dr. Ramesh Agarwal<br>
<strong>Designation:</strong>Director Professor, Department of Medicine<br>
<strong>Address:</strong>LHMC & Smt SK Hospital, New Delhi
</div>

<div class="member-card">
<strong>Name:</strong>Dr. Ruchi Jain<br>
<strong>Designation:</strong>Joint Director<br>
<strong>Address:</strong>RHO office, Rajasthan
</div>

<div class="member-card">
<strong>Name:</strong>Dr. S Venkatesh<br>
<strong>Designation:</strong>Former DGHS & Director NCDC<br>
</div>

<div class="member-card">
<strong>Name:</strong>Dr. Sandeep Garg<br>
<strong>Designation:</strong>Director Professor, Department of Medicine<br>
<strong>Address:</strong>LHMC & SK Hospital, New Delhi
</div>

<div class="member-card">
<strong>Name:</strong>Dr. Simmi Tiwari<br>
<strong>Designation:</strong>Joint Director & OIC, Centre for One Health<br>
<strong>Address:</strong>NCDC, Delhi -  110054
</div>

<div class="member-card">
<strong>Name:</strong>Dr. Tanu Jain<br>
<strong>Designation:</strong><br>Director, National Center for Vector Borne Diseases Control<BR>
<strong>Address:</strong>Ministry of Health and Family Welfare, Delhi -  110054
</div>

<div class="member-card">
<strong>Name:</strong>Dr. Tanzin Dikid<br>
<strong>Designation:</strong>Additioanl Director, National AIDS Control Organization (NACO)<br>
<strong>Address:</strong>Janpath, New Delhi
</div>

<div class="member-card">
<strong>Name:</strong>Dr. Tushar Nanasahed Nale<br>
<strong>Designation:</strong>DADG<br>
<strong>Address:</strong>DGHS, Nirman Bhawan , New Delhi
</div>

<div class="member-card">
<strong>Publiser</strong><br><br>
<strong>Name:</strong> Sh. Prakash Doval<br>
<strong>Designation:</strong> Assistant Director(Admin), PBA<br>
<strong>Address:</strong>NCDC, 22 Shamnath Marg, Civil Lines, Delhi-110054
</div>

<div class="member-card">
<strong>Publising Body</strong><br><br>
National Centre for Disease Control(NCDC)
</div>

<div class="member-card">
<strong>Editorial Team</strong><br><br>
<strong>Name:</strong>Dr. Ramesh Chandra<br>
<strong>Designation:</strong> Joint Director<br>
<strong>Address:</strong> NCDC, 22 Shamnath Marg, Civil Lines, Delhi-110054<br><br>

<strong>Name:</strong>Dr. Ajit Shewale<br>
<strong>Designation:</strong> Joint Director<br>
<strong>Address:</strong> NCDC, 22 Shamnath Marg, Civil Lines, Delhi-110054<br><br>

<strong>Name:</strong>Dr. Shubhangi D. Kulsange<br>
<strong>Designation:</strong> Joint Director<br>
<strong>Address:</strong> NCDC, 22 Shamnath Marg, Civil Lines, Delhi-110054<br><br>

<strong>Name:</strong>Dr. Rameshwar Sorokhaibam<br>
<strong>Designation:</strong>CMO (NFSG)<br>
<strong>Address:</strong> NCDC, 22 Shamnath Marg, Civil Lines, Delhi-110054<br><br>

<strong>Name:</strong>Dr. Shubha Garg<br>
<strong>Designation:</strong> Joint Director<br>
<strong>Address:</strong> NCDC, 22 Shamnath Marg, Civil Lines, Delhi-110054<br><br>
</div>

<div class="member-card">
<strong>Journal Co-ordinators</strong><br><br>
<strong>Name:</strong>Dr. Pritikumari Patel<br>
<strong>Designation:</strong> Assistant Director<br>
<strong>Address:</strong>NCDC, 22 Shamnath Marg, Civil Lines, Delhi-110054<br><br>

<strong>Name:</strong>Dr. Purbasha Bera<br>
<strong>Designation:</strong> Joint Director<br>
<strong>Address:</strong>NCDC, 22 Shamnath Marg, Civil Lines, Delhi-110054
</div>

<div class="member-card">
<strong>Design Support</strong><br><br>
NCDC IT Unit & EIS IT Support
</div>
</div>


<?php
include("../../config/db.php");
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

<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon">

</li>

<?php } ?>

</ul>

</div>

</div>

<?php include("../footer.php"); ?>