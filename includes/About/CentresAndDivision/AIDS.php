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

/* ===== LAYOUT ===== */
.about-page{
  display:flex;
  gap:30px;
  width:100%;
  padding:30px 40px;
  align-items:flex-start;
}

/* ===== SIDEBAR ===== */
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

/* ===== BUTTON ===== */
.back-btn{
  display:inline-block;
  margin-bottom:15px;
  padding:8px 16px;
  background:#0b77b7;
  color:#fff;
  text-decoration:none;
  border-radius:6px;
  font-size:14px;
}
.back-btn:hover{
  background:#095a8a;
}

/* ===== TAB CONTENT ===== */
.tab-content{
  display:none;
  font-family:"Times New Roman", Times, serif;
  line-height:1.7;
  padding:30px;
  max-width:1200px;
  margin:auto;
}
.tab-content.active{
  display:block;
}

/* ===== TITLES ===== */
.division-title{
  font-size:30px;
  font-weight:bold;
  color:#0b77b7;
  margin-bottom:20px;
}

h3{
  font-size:22px;
  color:#222;
  margin-top:25px;
  border-left:5px solid #0b77b7;
  padding-left:12px;
}

/* ===== TEXT ===== */
.mandate-section p{
  text-align:justify;
  margin-bottom:12px;
}

/* ===== SECTION SPACING ===== */
.officer-section,
.mandate-section,
.lab-section,
.achievement-section{
  margin-bottom:25px;
}

/* ===== DEFAULT LIST RESET ===== */
ul{
  padding-left:20px;
}
ul li{
  margin-bottom:6px;
}

/* ===== TICK LIST (ONLY MANDATE + ACHIEVEMENTS) ===== */
.mandate-list,
.achievement-section ul{
  list-style:none;
  padding-left:0;
}

.mandate-list li,
.achievement-section ul li{
  position:relative;
  padding-left:30px;
  margin-bottom:10px;
}

.mandate-list li::before,
.achievement-section ul li::before{
  content:"\f00c";
  font-family:"Font Awesome 6 Free";
  font-weight:900;
  position:absolute;
  left:0;
  top:2px;
  color:#90EE90;
}

/* ===== LAB LIST (NUMBERED - NO TICKS) ===== */
.lab-list{
  padding-left:20px;
}
.lab-list li{
  margin-bottom:8px;
  line-height:1.6;
}

/* ===== STAFF SECTION ===== */
.staff-section{
  padding:20px;
}

.staff-card.horizontal{
  display:flex;
  align-items:center;
  background:#f1f1f1;
  border-radius:8px;
  padding:15px;
  margin-bottom:15px;
  gap:20px;
}

.staff-card img{
  width:110px;
  height:130px;
  object-fit:cover;
  border-radius:6px;
}

.staff-info h4{
  font-size:18px;
  margin-bottom:6px;
}
.staff-info p{
  margin:3px 0;
  color:#444;
  font-size:15px;
}

/* ================= RESPONSIVE ================= */

/* TABLET */
@media (max-width:991px){
  .about-page{
    flex-direction:column;
    padding:20px;
  }

  .about-sidebar{
    width:100%;
  }

  .division-title{
    font-size:26px;
  }

  h3{
    font-size:20px;
  }
}

/* MOBILE */
@media (max-width:600px){
  .header-image{
    height:150px;
  }

  .tab-content{
    padding:15px;
  }

  .division-title{
    font-size:22px;
    text-align:center;
  }

  h3{
    font-size:18px;
  }

  ul li{
    font-size:15px;
  }

  .staff-card.horizontal{
    flex-direction:column;
    text-align:center;
  }

  .staff-card img{
    width:120px;
    height:140px;
  }
}

/* ===== 2nd TAB ===== */
/* ===== WRAPPER ===== */
.activity-wrapper{
  max-width:1100px;
  margin:auto;
  padding:30px;
  font-family:"Times New Roman", serif;
  line-height:1.7;
}

/* ===== MAIN HEADING ===== */
.main-heading{
  font-size:28px;
  font-weight:bold;
  color:#0b3a66;
  margin-bottom:25px;
}

/* ===== SECTION BLOCK ===== */
.activity-block{
  margin-bottom:25px;
}

/* ===== SUB HEADINGS ===== */
.activity-block h3{
  font-size:20px;
  margin-bottom:8px;
  color:#111;
}

/* ===== TEXT ===== */
.activity-block p{
  margin-bottom:8px;
}

/* ===== LIST ===== */
.activity-block ul{
  padding-left:22px;
}

.activity-block ul li{
  margin-bottom:6px;
  font-size:16px;
}

/* ===== SUB LIST ===== */
.sub-list{
  padding-left:20px;
  margin-top:6px;
}

.sub-list li{
  list-style-type:circle;
  font-size:15px;
}

/* ================= RESPONSIVE ================= */

/* TABLET */
@media (max-width: 768px){
  .activity-wrapper{
    padding:20px;
  }

  .main-heading{
    font-size:24px;
  }

  .activity-block h3{
    font-size:18px;
  }

  .activity-block ul li{
    font-size:15px;
  }
}

/* MOBILE */
@media (max-width: 480px){
  .activity-wrapper{
    padding:15px;
  }

  .main-heading{
    font-size:20px;
    text-align:center;
  }

  .activity-block h3{
    font-size:17px;
  }

  .activity-block ul{
    padding-left:18px;
  }

  .activity-block ul li{
    font-size:14px;
  }
}
/* ===== GALLERY SECTION ===== */
.gallery-section{
  max-width:1100px;
  margin:auto;
  padding:20px;
}

/* ===== SINGLE IMAGE ===== */
.image-block{
  margin-bottom:25px;
}

.image-block img{
  width:100%;
  height:auto;
  border-radius:6px;
}

/* ===== IMAGE ROW (2 IMAGES) ===== */
.image-row{
  display:flex;
  gap:20px;
  margin-bottom:10px;
}

.image-col{
  flex:1;
}

.image-col img{
  width:100%;
  height:100%;
  object-fit:cover;
  border-radius:6px;
}

/* ===== LABEL ===== */
.img-label{
  text-align:center;
  font-size:15px;
  margin:8px 0 25px;
  font-weight:500;
  color:#333;
}

/* ================= RESPONSIVE ================= */

/* TABLET */
@media (max-width:768px){
  .image-row{
    gap:15px;
  }
}

/* MOBILE */
@media (max-width:480px){
  .image-row{
    flex-direction:column;
  }

  .img-label{
    font-size:14px;
  }
}

.publication-section {
  margin-top: 30px;
}

.section-title {
  font-size: 22px;
  font-weight: bold;
  margin-bottom: 15px;
  border-left: 4px solid #0b5ed7;
  padding-left: 10px;
}

.publication-list {
  padding-left: 18px;
  font-family: Arial, Helvetica, sans-serif;
}

.publication-list li {
  margin-bottom: 12px;
  line-height: 1.6;
  text-align: justify;
  
}

.publication-list a {
  color: #0b5ed7;
  text-decoration: none;
  font-weight: 500;
}

.publication-list a:hover {
  text-decoration: underline;
}

/* MOBILE */
@media (max-width: 768px) {
  .section-title {
    font-size: 18px;
  }

  .publication-list li {
    font-size: 14px;
  }
}

.guidelines-section {
  margin-top: 30px;
}

.section-title {
  font-size: 22px;
  font-weight: bold;
  border-left: 4px solid #0b5ed7;
  padding-left: 10px;
  margin-bottom: 15px;
}

.guidelines-list {
  padding-left: 18px;
}

.guidelines-list li {
  margin-bottom: 15px;
  line-height: 1.6;
}

.guidelines-list a {
  color: #0b5ed7;
  text-decoration: none;
  font-weight: 500;
}

.guidelines-list a:hover {
  text-decoration: underline;
}

/* MOBILE */
@media (max-width: 768px) {
  .section-title {
    font-size: 18px;
  }
}
.section-title {
  font-size: 22px;
  font-weight: bold;
  margin: 25px 0 10px;
  border-left: 4px solid #0b5ed7;
  padding-left: 10px;
}

.sub-title {
  font-size: 18px;
  font-weight: 600;
  margin-top: 20px;
}

.custom-list {
  padding-left: 18px;
}

.custom-list li {
  margin-bottom: 8px;
  line-height: 1.6;
}

.custom-table {
  width: 100%;
  border-collapse: collapse;
  margin: 15px 0;
}

.custom-table th,
.custom-table td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

.custom-table th {
  background: #f2f2f2;
  font-weight: bold;
}

/* MOBILE */
@media (max-width: 768px) {
  .custom-table {
    display: block;
    overflow-x: auto;
  }
}
.contact-section {
  margin-top: 30px;
}

.contact-box {
  background: #f5f9fc;
  padding: 20px;
  border-radius: 10px;
  line-height: 1.7;
}

.contact-box p {
  margin-bottom: 10px;
}

.contact-box a {
  color: #0b5ed7;
  text-decoration: none;
}

.contact-box a:hover {
  text-decoration: underline;
}

.back-btn {
  display: inline-block;
  margin-top: 15px;
  padding: 8px 15px;
  background: #0b5ed7;
  color: #fff;
  border-radius: 6px;
  text-decoration: none;
}

.back-btn:hover {
  background: #094bb5;
}

/* MOBILE */
@media (max-width: 768px) {
  .contact-box {
    padding: 15px;
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

    <div class="breadcrumb">Home › Centre and Division of NCDC › Centre for AIDS and Related Diseases </div><BR>
    

    <!-- TAB 1 -->
<div id="tab1" class="tab-content active">

  <h2 class="division-title">Centre for AIDS and Related Diseases</h2>

  <div class="officer-section">
    <h3>Officers</h3>
    <ul>
      <li><strong>Dr. Monil Singhai</strong>, Joint Director</li>
      <li><strong>Dr. Preeti Patel</strong>, Assistant Director</li>
    </ul>
  </div>

  <div class="mandate-section">
    <h3>Mandate of the Division</h3>

    <p>
      Centre for AIDS & Related Diseases (CA&RD) Division, NCDC, was established as the Apex Laboratory for HIV in 1985 and was subsequently renamed in 1995.
      The Centre was designated as one of the first National Reference Laboratory (NRL) for HIV by NACO in 2002.
      It achieved NABL accreditation in 2011 in accordance with ISO 15189 standards and has since maintained continuous accreditation, successfully
      transitioning to subsequent versions, including ISO 15189:2022.
    </p>

    <p>
      The mandate of division is to support and strengthen national capacity for prevention, surveillance, and control of HIV and related diseases through quality 
      diagnostics, technical expertise, and evidence-based public health support.
    </p>

    <ul class="mandate-list">
      <li>The Centre provides HIV counseling and testing services to the walk-in clients, both provider-initiated and client-initiated.</li>
      <li>It is one of the 13 National Reference Laboratories (NRL) for HIV testing under the aegis of National AIDS Control Organization (NACO).</li>
      <li>The NRL is linked with 13 State Reference Laboratories (SRLs) in the states of Delhi, Haryana, Rajasthan and Jammu & Kashmir for External Quality Assessment Scheme (EQAS) for HIV testing and for confirmation of HIV serostatus of all samples with indeterminate / discordant resultsby Western Blot test.</li>
      <li>The NRL is a part of a Consortium of Kit Quality Testing Laboratories across India, with a mission to develop a national system for assuring Transfusion Transmitted Infections (TTI) test quality by a consortium with uniform approaches and procedures.</li>
      <li>The labs and units of the Centre participate in EQAS activities for HIV testing & CD4 count estimation and syphilis testing conducted by NARI Pune and VMMC &Safdarjung Hospital respectively.</li>
      <li>CARD functions as a NACO designated Referral Laboratory for HIV-2 confirmation</li>
      <li>Under HIV Sentinel Surveillance, the Centre is involved in HIV testing of Dried Blood Spot (DBS) samples and performing Quality Control testing of samples received from various Sentinel Sites in North India where the specimens are tested for four biomarkers i.e., HIV, Syphilis, HBV, and HCV.</li>
      <li>Testing of DBS samples under HIV Sentinel Surveillance for HIV, Syphilis, HBV and HCV.</li>
      <li>Absolute CD4 count and CD4 percentage estimation of HIV positive samples.</li>
      <li>Testing for Syphilis by RPR and TPHA.</li>
      <li>Capacity building activities at the Centre involve conducting EQAS Workshops for staff of linked SRLs, IEC activities for HIV/AIDS awareness.</li>
      <li>Provides technical support to the National AIDS Control Programme (NACP).</li>
      <li>CA&RD is one of the designated laboratories for HIV testing on DBS samples under National Family Health Survey-6 (NFHS-6).</li>
    </ul>

  </div>

  <div class="lab-section">
  <h3>Laboratories / Units under the Division</h3>
  <ol class="lab-list">
    <li>Integrated Counseling and Testing Centre</li>
    <li>National Reference Laboratory for HIV</li>
    <li>Immunology Laboratory</li>
    <li>STI and Opportunistic Infections Laboratory</li>
    <li>HIV Serology Laboratory</li>
    <li>Blood Collection Centre</li>
    <li>HIV-2 Referral Laboratory</li>
  </ol>
</div>

  <div class="achievement-section">
    <h3>Achievements</h3>
    <ul>
      <li>
        The Centre achieved NABL (National Accreditation Board for Testing and Calibration Laboratories) accreditation in 
        the field of medical testing in the year 2011 and is obtaining its renewal from NABL every two years as per ISO 15189:2012.
      </li>
      <li>
        The National Reference Lab (NRL) at CARD is carrying out the preparation, maintenance and biannual distribution of Proficiency testing (PT) panels for HIV 
        serology to 13 SRLs and to their linked 432 ICTCs in the Medical colleges in the states of Delhi, Rajasthan, Haryana and Jammu & Kashmir to ensure quality 
        HIV testing.
      </li>
      <li>
        The NRL has successfully conducted workshops on EQAS for HIV Testing for Lab Technicians and Technical Officers of linked SRLs annually.
      </li>
    </ul>
  </div>

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
  AND division = 'Centre for AIDS and Related Diseases'
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
              AND division = 'Centre for AIDS and Related Diseases'
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
<div id="tab3" class="tab-content">
  <div class="activity-wrapper">

    <h2 class="main-heading">
      Relevant photographs of various activities of the CA&RD division –
    </h2>

    <!-- ===== ACTIVITIES CONTENT ===== -->

    <div class="activity-block">
      <h3>Referral Diagnostic Services</h3>
      <ul>
        <li>
          Act as a national referral diagnostic services provider for HIV and related diseases, 
          including confirmation of complex, indeterminate, and discordant test results, and support to Linked State Reference Laboratories and ICTCs.
        </li>
      </ul>
    </div>

    <div class="activity-block">
      <h3>Proficiency Testing (PT) Provider</h3>
      <ul>
        <li>
          Serve as a Proficiency Testing provider for HIV, ensuring quality assurance, standardization, and capacity strengthening of linked laboratories.
        </li>
      </ul>
    </div>

    <div class="activity-block">
      <h3>Capacity Building and Training</h3>
      <p>Plan and conduct workshops, trainings, and programmes on:</p>
      <ul>
        <li>Biosafety and biosecurity</li>
        <li>Good Laboratory Practices (GLP)</li>
        <li>Quality Management Systems</li>
        <li>Diagnostic technologies</li>
      </ul>
    </div>

    <div class="activity-block">
      <h3>Expert Representation at National Level</h3>
      <ul>
        <li>
          Provide technical expertise in committees:
          <ul class="sub-list">
            <li>NACO</li>
            <li>BIS</li>
            <li>DCGI</li>
            <li>NOHM</li>
          </ul>
        </li>
        <li>
          Contribute to policy formulation and guideline development.
        </li>
      </ul>
    </div>

    <!-- ===== GALLERY STARTS (OUTSIDE LISTS) ===== -->

    <div class="gallery-section">

      <!-- IMAGE 1 -->
      <div class="image-block">
        <img src="/NCDC_MOHFW/uploads/images/AIDS_img1.png" alt="Activity 1">
        <p class="img-label">Good Laboratory Practices Refresher and flow cytometry Training for Lab Technicians for 7 states (19-22.8.2025)</p>
      </div>

      <!-- IMAGE 2 -->
      <div class="image-block">
        <img src="/NCDC_MOHFW/uploads/images/AIDS_img2.png" alt="Activity 2">
        <p class="img-label">External Quality Assurance Scheme Workshop for laboratory technicians for 13 states (1.12.2025)</p>
      </div>

      <!-- ROW 1 -->
      <div class="image-row">
        <div class="image-col">
          <img src="/NCDC_MOHFW/uploads/images/AIDS_img3.png" alt="">
        </div>
        <div class="image-col">
          <img src="/NCDC_MOHFW/uploads/images/AIDS_img4.png" alt="">
        </div>
      </div>
      <p class="img-label">HIV-awareness programme on World AIDS Day (1.12.2025)</p>

      <!-- ROW 2 -->
      <div class="image-row">
        <div class="image-col">
          <img src="/NCDC_MOHFW/uploads/images/AIDS_img5.png" alt="">
        </div>
        <div class="image-col">
          <img src="/NCDC_MOHFW/uploads/images/AIDS_img6.png" alt="">
        </div>
      </div>
      <p class="img-label">Participated in Workshop on NFHS-6</p>

    </div>

    <div class="gallery-section">

  <!-- LABEL 1 -->
  <p class="img-label"><strong>IEC activities for HIV/AIDS awareness –</strong></p>

  <div class="image-block">
    <img src="/NCDC_MOHFW/uploads/images/AIDS_img7.png">
  </div>


  <div class="image-row">
    <img src="/NCDC_MOHFW/uploads/images/AIDS_img9.png">
     <img src="/NCDC_MOHFW/uploads/images/AIDS_img11.png">
  </div>

  


  <!-- LABEL 2 -->
  <p class="img-label">The Centre has successfully organized a Nukkad Natak (street play) to raise awareness on HIV/AIDS on the occasion of World AIDS Day on 01st December 2022 for 
    all staff and officers of NCDC and NCVBDC along with daily wage workers and construction workers who are presently working in NCDC campus.</p><br><br>

    <p class="img-label"><strong>Poster Making Competition on the eve of World AIDS Day</strong></p>
  <div class="image-block">
    <img src="/NCDC_MOHFW/uploads/images/AIDS_img12.png">
  </div><br><br>


  <!-- LABEL 3 -->
  <p class="img-label"><strong>NCDC conducts Workshop on “External Quality Assessment Scheme (EQAS) for HIV testing” for 13 State Reference Laboratories (SRLs)</strong></p>

  <div class="image-row three">
    <img src="/NCDC_MOHFW/uploads/images/AIDS_img13.png">
    <img src="/NCDC_MOHFW/uploads/images/AIDS_img14.png">
    <img src="/NCDC_MOHFW/uploads/images/AIDS_img15.png">
  </div><br><br>


  <!-- LABEL 4 -->
  <p class="img-label"><strong>Hands-on Training on ELISA technique of technical staff at NCDC, Delhi</strong></p>

  <div class="image-row" style="display: flex; justify-content: center;">
    <img src="/NCDC_MOHFW/uploads/images/AIDS_img16.png">
  </div><br><br>


  <!-- LABEL 5 -->
  <p class="img-label"><strong>Training of technical staff from various laboratory divisions on Bio-medical Waste Management at Central Bio-medical Waste Storage Facility at NCDC, Delhi</strong></p>

  <div class="image-row" style="display: flex; justify-content: center;">
    <img src="/NCDC_MOHFW/uploads/images/AIDS_img18.png">
  </div>

</div>

  </div>
</div>
<div id="tab4" class="tab-content">
  <div class="publication-section">

  <h3 class="section-title">Publications</h3>

  <ul class="publication-list">

    <li>
      Agarwal, S. K., Singh, A., Anuradha, S., Singh, N. P., Sokhi, J., & Baveja, U. K. (2001). Cytokine profile in human immunodeficiency virus positive patients with and 
      without tuberculosis.<i> The Journal of the Association of Physicians of India, 49, 799–802.</i>
    </li><br>

    <li>
      Bajaj, J. S., Singh, A., Aggarwal, S. K., Chattopadhya, D., & Baveja, U. K. (2000). Synergistic immunosuppression by candida in HIV infection: a cytokine based analysis.
      <i>The Journal of Communicable Diseases, 32(1), 1–9.</i>
    </li><br>

    <li>
      Baveja, U. K., Chattopadhya, D., Khera, R., & Joshi, P. M. (2003). A cross sectional serological study of the co-infection of hepatitis B virus, hepatitis C virus and 
      human immunodeficiency virus amongst a cohort of IDUs at Delhi.<i> Indian Journal of Medical Microbiology, 21(4), 280–283.</i>
    </li><br>

    <li>
      Baweja, U. K., Talukdar, P. K., & Singh, R. (1986). A clinicoparasitological study of scabies.<i> The Journal of Communicable Diseases, 18(2), 132–135.</i>
    </li><br>

    <li>
      Chattopadhya, D., Aggarwal, R. K., Baveja, U. K., Doda, V., & Kumari, S. (1998). Evaluation of epidemiological and serological predictors of human immunodeficiency virus 
      type-1 (HIV-1) infection among high risk professional blood donors with western blot indeterminate results.<i> Journal of Clinical Virology: The Official Publication of the 
      Pan American Society for Clinical Virology, 11(1), 39–49</i>
      <a href="https://doi.org/10.1016/s0928-0197(98)00041-5" target="_blank">https://doi.org/10.1016/s0928-0197(98)00041-5</a>
    </li><br>

    <li>
      Chattopadhya, D., Baveja, U. K., Bose, M., & Kumar, A. (2002). Disease progression markers during asymptomatic phase of HIV-1 infected children with unimpaired CD4+ cell 
      values: evaluation of repeat CD4+ cell evaluation vs. other immunological parameters. <i>Journal of Tropical Pediatrics, 48(6), 340–347.</i>
      <a href="https://doi.org/10.1093/tropej/48.6.340" target="_blank">https://doi.org/10.1093/tropej/48.6.340</a>
    </li><br>

    <li>
      Chattopadhya, D., Grover, S. S., Sharma, M., Ichhpujani, R. L., & Baveja, U. K. (2003). Immune response in HIV-1-infected children with thalassaemia given a primary 
      course of DPT vaccine before acquiring HIV-1 infection.<i> Annals of Tropical Paediatrics, 23(4), 279–292.</i>
      <a href="https://doi.org/10.1179/027249303225007824" target="_blank">https://doi.org/10.1179/027249303225007824</a>
    </li><br>

    <li>
      Dwivedi, K. K., Prasad, G., Saini, S., Mahajan, S., Lal, S., & Baveja, U. K. (2007). Enteric opportunistic parasites among HIV infected individuals: associated risk 
      factors and immune status.<i> Japanese Journal of Infectious Diseases, 60(2–3), 76–81.</i>
      <a href="https://doi.org/10.7883/yoken.jjid.2007.76" target="_blank">https://doi.org/10.7883/yoken.jjid.2007.76</a>
    </li><br>

    <li>
      Gugnani, H. C., Becker, K., Fegeler, W., Basu, S., Chattopadhya, D., Baveja, U., Satyanarayana, S., Kalghatgi, T., & Murlidhar, A. (2003). Oropharyngeal carriage of 
      Candida species in HIV-infected patients in India.<i> Mycoses,</i> 46(8), 299–306.
      <a href="https://doi.org/10.1046/j.1439-0507.2003.00896.x" target="_blank">https://doi.org/10.1046/j.1439-0507.2003.00896.x</a>
    </li><br>

    <li>
      Hussain, Z., Das, B. C., Husain, S. A., Polipalli, S. K., Ahmed, T., Begum, N., Medhi, S., Verghese, A., Raish, M., Theamboonlers, A., Poovorawan, Y., & Kar, P. (2006). 
      Virological course of hepatitis A virus as determined by real time RT-PCR: Correlation with biochemical, immunological and genotypic profiles.<i> World Journal of 
      Gastroenterology, 12(29), 4683–4688.</i>
      <a href="https://doi.org/10.3748/wjg.v12.i29.4683" target="_blank">https://doi.org/10.3748/wjg.v12.i29.4683</a>
    </li><br>

    <li>
      Kaur, R., Berry, N., Mittal, S. K., Mathur, M. D., & Baveja, U. (2002). Hepatitis B virus in a select pediatric population in Delhi, India. <i>The Journal of 
      Communicable Diseases, 34(2), 146–148.</i>
    </li><br>

    <li>
      Kaur, R., Mittal, N., Bhalla, P., Reddy, B. N. S., & Baveja, U. K. (2006). Risk factors of herpes simplex virus type 2 among STD clinic attenders in Delhi, India. 
     <i> The Journal of Communicable Diseases, 38(4), 339–343.</i>
    </li><br>

    <li>
      Sehgal, R., Baveja, U. K., Chattopadhya, D., Chandra, J., & Lal, S. (2005). Pediatric HIV infection.<i> Indian Journal of Pediatrics, 72(11), 925–930.</i>
      <a href="https://doi.org/10.1007/BF02731665" target="_blank">https://doi.org/10.1007/BF02731665</a>
    </li><br>

    <li>
      Shivraj, S. O., Chattopadhya, D., Grover, G., Kumar, A., & Baveja, U. K. (2006). Role of HCV coinfection towards disease progression and survival in HIV-1 infected 
      children: a follow-up study of 10 years.<i> Journal of Tropical Pediatrics, 52(3), 206–211.</i>
      <a href="https://doi.org/10.1093/tropej/fmi103" target="_blank">https://doi.org/10.1093/tropej/fmi103</a>
    </li><br>

  </ul>

</div>
</div>
<div id="tab5" class="tab-content">
  <div class="guidelines-section">

  <h3 class="section-title">Technical Guidelines</h3>

  <ul class="guidelines-list">

    <li>
      <strong>Biosafety manual for public health laboratories</strong><br>
      <a href="/NCDC_MOHFW/uploads/pdf/AIDS_PDF1.pdf" target="_blank">
        View Document
      </a>
    </li>

    <li>
      <strong>National Strategic Plan for HIV/AIDS and STI (2017–2024)</strong><br>
      <a href="https://naco.gov.in/sites/default/files/Paving%20the%20Way%20for%20an%20AIDS%2015122017.pdf" target="_blank">
        View Document
      </a>
    </li>

    <li>
      <strong>
        Consolidating the Evidence, Building the Future: Report of Consultative Meeting on Integrated and Enhanced Epidemiology under NACP
      </strong><br>
      <a href="https://naco.gov.in/sites/default/files/National_Consultaion_Report_On_IESE.pdf" target="_blank">
        View Document
      </a>
    </li>

  </ul>

</div>
</div>
<div id="tab6" class="tab-content">
  <div class="services-section">

  <div class="image-row" style="display: flex; justify-content: center;">
  <img src="/NCDC_MOHFW/uploads/images/AIDS_img20.png">
</div>
  <h3 class="section-title">Integrated Counselling and Testing Services</h3>
  <ul class="custom-list">
    <li>Counseling for HIV/AIDS and related Diseases: Pre and post test counseling of walk-in clients attending Integrated and counseling and testing centre (ICTC).</li>
    <li>All confirmed HIV positive patients tested at ICTC are referred to Antiretroviral Therapy (ART) centers for treatment.</li>
    <li>All Syphilis positive patients are referred to STI centers for treatment and all suspected TB patients are referred to RNTCP.</li>
    <li>Provide services of Awareness on HIV/AIDS and facilitation of HIV Counseling & Testing of general population and high-risk population in different regions of Delhi.</li>
  </ul>


  <h3 class="section-title">National Reference Laboratory for HIV</h3>

  <h4 class="sub-title">2.1 Diagnostic Laboratory</h4>
  <p>The aim is to provide confirmation of HIV and Related diseases is done for walk-in, referred and HIV indeterminate samples from linked SRLs and ICTCs</p>
  <p><strong>Name of tests done with turnaround time</strong></p>
  <table class="custom-table">
    <tr>
      <th>Name of Test</th>
      <th>Turnaround Time</th>
    </tr>
    <tr><td>HIV Rapid Test (ICTC Client)</td><td>One working day</td></tr>
    <tr><td>HIV ELISA Test (Referred)</td><td>Seven working days</td></tr>
    <tr><td>HIV-1/2 Western blot (Referred)</td><td>One Month</td></tr>
    <tr><td>CD4 Count Test (Referred)</td><td>One working day</td></tr>
    <tr><td>Serological test for Syphilis test (Walk-in/Referred) (Rapid Test)</td><td>Two working days</td></tr>
    <tr><td>Serological test for Syphilis test (Walk-in/Referred) (TPHA Test)</td><td>Two working days</td></tr>
  </table>


  <h4 class="sub-title">2.2 Proficiency testing Panel Preparation Laboratory</h4>
  <p>Preparation and distribution of proficiency testing (PT) panel of HIV for linked SRLs and their associated ICTCs</p>

  <table class="custom-table">
    <tr>
      <th>Disease</th>
      <th>Sample</th>
      <th>Panel Size</th>
      <th>Test</th>
    </tr>
    <tr>
      <td>HIV-1 / HIV-2</td>
      <td>Serum / Plasma / Whole Blood</td>
      <td>State Reference Laboratories-8 members panel<br>ICTCs-4 members panel</td>
      <td>RDT, ELISA</td>
    </tr>
  </table>

  <p><strong> States covered:</strong>4 {Delhi (4), Haryana (1), Jammu & Kashmir (2), Rajasthan (6)}</p>
  <p><strong>SRLs:</strong>13</p>
  <p><strong>ICTCs:</strong>400</p>
  <p><strong>Frequency:</strong> Twice a year</p>


  <h4 class="sub-title">2.3  HIV and related diseases Surveillance Laboratory</h4>
  <h4 class="sub-title">1. a) National Family Health Survey (NFHS)</h4>

  <p>Laboratory support to generate reliable national prevalence estimates by providing technical expertise, laboratory support, and quality assurance for HIV testing as and when required</p>
  <h4 class="sub-title">1. b) Interlaboratory Comparison/Retesting</h4>
  <table class="custom-table">
    <tr>
      <th>Sample</th>
      <th>Disease</th>
      <th>Test</th>
    </tr>
    <tr><td>Serum</td><td>HIV, HBV, HCV</td><td>RDT, ELISA</td></tr>
    <tr><td>Serum</td><td>Syphilis</td><td>RDT, RPR, TPHA</td></tr>
    <tr><td>Dried Blood Spot</td><td>HIV</td><td>ELISA</td></tr>
  </table>


  <h4 class="sub-title">2.4 Kit Evaluation Laboratory</h4>

  <table class="custom-table">
    <tr>
      <th>Test</th>
      <th>Principle</th>
      <th>Panel Size</th>
    </tr>
    <tr><td>HIV</td><td>Immunochromatography/ Immunodot</td><td>~500 (100 positive + 400 Negative)</td></tr>
    <tr><td>HBV</td><td>Immunochromatography</td><td>~500 (100 positive + 400 Negative)</td></tr>
    <tr><td>HCV</td><td>Immunochromatography</td><td>~500 (100 positive + 400 Negative)</td></tr>
    <tr><td>HIV + Syphilis (Dual kit)</td><td>Immunochromatography</td><td>~575 (100 positive + 400 Negative)</td></tr>
  </table>


  <h3 class="section-title">Services Provided by CA&RD Division</h3>
  <ul class="custom-list">
    <li>Counseling for HIV/AIDS: Pre and post test counseling of walk-in clients attending Integrated and counseling and testing centre (ICTC).</li>
    <li>All confirmed HIV positive patients tested at ICTC are referred to Antiretroviral Therapy (ART) centres for treatment. All Syphilis positive patients are referred to STI centres for treatment and all suspected TB patients are referred to RNTCP.</li>
    <li>Provide services of Awareness on HIV/AIDS and facilitation of HIV Counseling & Testing of general population and high risk population in different regions of Delhi.</li>
    <li>HIV-2 referral centre: Confirmation of HIV-1+2 and HIV-2 is done for HIV positive patients referred from ART centres of Delhi, Haryana, Rajasthan, Punjab, Jammu & Kashmir, Himachal Pradesh and Chandigarh.</li>
    <li>Evaluation of diagnostic kits (Rapid and ELISA) for HIV/HBV/HCV.</li>
  </ul>


  <h4 class="sub-title">Name of tests done with turnaround time</h4>

  <table class="custom-table">
    <tr><th>Name of tests</th><th>Turnaround time</th></tr>
    <tr><td>HIV test (ICTC Client)</td><td>One working Day</td></tr>
    <tr><td>HIV test (Referred)</td><td>ELISA-: 7 Working days <br>Western blot : One month</td></tr>
    <tr><td>CD4 count test (Referred HIV Positive samples from ART centres)</td><td>One working day</td></tr>
    <tr><td>Syphilis test</td><td>Two working days</td></tr>
    <tr><td>Kit evaluation of HIV/ HBV/ HCV</td><td>10 working days</td></tr>
  </table>


  <h4 class="sub-title">Name and contact number of concerned official/officer-</h4>
  <p><strong>ICTC Counselor:</strong>011-23909327</p>
<div class="image-row">
    <img src="/NCDC_MOHFW/uploads/images/AIDS_img21.png">
  </div>
<br>
  <h4 class="sub-title">PART-II: PRIMARY SAMPLE COLLECTION</h4>
  <p>(To be filled by CARD Blood Collection Centre / Linked Centers collecting blood)</p>
  <div class="image-row">
    <img src="/NCDC_MOHFW/uploads/images/AIDS_img22.png">
  </div>
  <br>
  <h4 class="sub-title">PART-III: SUITABILITY OF SAMPLE</h4>
  <p>(To be filled by ICTC / Serology / Immunology Laboratory/ STD-OI Laboratory)</p>
  <div class="image-row">
    <img src="/NCDC_MOHFW/uploads/images/AIDS_img23.png">
  </div>

</div>
</div>
<div id="tab7" class="tab-content">
  <div class="contact-section">

  <h3 class="section-title">Contact Us</h3>

  <div class="contact-box">

    <p><strong>Full Mailing Address:</strong></p>
    <p>
      Centre for AIDS and Related Diseases (CA&RD)<br>
      National Centre for Disease Control<br>
      Ministry of Health and Family Welfare
    </p>

    <p><strong>Address Details:</strong> N/A</p>

    <p><strong>Phone:</strong> 011-20832460</p>

    <p>
      <strong>Email:</strong> 
      <a href="mailto:card.ncdc@gmail.com">card.ncdc@gmail.com</a>
    </p>

    <a href="javascript:history.back()" class="back-btn">⬅ Back</a>

  </div>

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
