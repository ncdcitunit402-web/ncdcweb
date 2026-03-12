<?php include("../header.php"); 
// Get the tab from URL, default to tab1 if not set
$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'tab1';?>
<?php
// pdf_helper.php

// Function to format file size in B, KB, MB, GB
function formatSize($bytes) {
    if ($bytes >= 1073741824) {
        $bytes = number_format($bytes / 1073741824, 2) . ' GB';
    } elseif ($bytes >= 1048576) {
        $bytes = number_format($bytes / 1048576, 2) . ' MB';
    } elseif ($bytes >= 1024) {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    } else {
        $bytes = $bytes . ' B';
    }
    return $bytes;
}

// Function to get PDF size
function getPDFSize($pdfPath) {
    // $pdfPath: example "/NCDC_MOHFW/uploads/tenders/abc.pdf"
    $serverPath = $_SERVER['DOCUMENT_ROOT'] . $pdfPath; // absolute path
    if (file_exists($serverPath)) {
        return formatSize(filesize($serverPath));
    } else {
        return "0 KB";
    }
}

?>
<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" alt="Header Image of NCDC Website">
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

/* ===== PAGE LAYOUT ===== */
.about-page{
  display:flex;
  gap:25px;
  padding:20px 40px;
  align-items:flex-start;
}

/* ===== MAIN SIDEBAR ===== */
.about-sidebar{
  width:260px;
  background:#f5f9fc;
  border-radius:10px;
  padding:15px;
  position:sticky;
  top:20px;
}

.about-sidebar ul{
  list-style:none;
  padding:0;
  margin:0;
}

.about-sidebar li{
  padding:14px 16px;
  margin-bottom:8px;
  cursor:pointer;
  border-radius:8px;
  transition:0.3s;
}

.about-sidebar li.active,
.about-sidebar li:hover{
  background:#0fa6a6;
  color:#fff;
}



/* ===== RIGHT CONTENT ===== */
.about-main{
  flex:1;
  background:#fff;
  padding:20px;
  border-radius:10px;
}

.breadcrumb{
  font-size:14px;
  margin-bottom:15px;
}

.about-main h1{
  font-size:30px;
  margin-bottom:15px;
}

.about-main p, .about-main li{
  font-family:"Times New Roman", Times, serif;
  font-size:17px;
  line-height:1.8;
}

/* ===== TAB CONTENT ===== */
.tab-content{ display:none; }
.tab-content.active{ display:block; }

/* PDF ICON */
.pdf-icon{
  width:18px;
  height:18px;
  margin-left:8px;
  vertical-align:middle;
  transition:transform 0.2s ease, opacity 0.2s ease;
}

/* Hover effect */
.about-main a:hover .pdf-icon{
  transform:scale(1.1);
  opacity:0.85;
}

/* Mobile tweak */
@media(max-width:768px){
  .pdf-icon{
    width:16px;
    height:16px;
    margin-left:6px;
  }
}

/* ===== RESPONSIVE ===== */
@media(max-width:768px){
  .about-page{ flex-direction:column; padding:15px; }
  .about-sidebar, .disease-sidebar{ width:100%; position:relative; }
}

/* ===============================
   TAB CONTENT – COMMON STYLES
   =============================== */
.tab-content{
  font-family: "Times New Roman", Times, serif;
  color:#555;
  line-height:1.7;
  background:#ffffff;
  padding:25px 35px;
  border-radius:10px;
  box-shadow:0 4px 10px rgba(0,0,0,0.08);
  max-width:1200px;
  margin:20px auto;
}

/* ===============================
   HEADINGS
   =============================== */
.tab-content h1{
  font-size:28px;
  color:#0b3c5d;
  margin-bottom:15px;
  border-bottom:2px solid #0b3c5d;
  padding-bottom:8px;
}

.tab-content h2{
  font-size:20px;
  margin-top:25px;
  margin-bottom:10px;
  color:#1d5c8a;
}

/* ===============================
   TEXT & LISTS
   =============================== */
.tab-content p{
  font-size:16px;
  margin-bottom:12px;
}

.tab-content ul{
  margin-left:22px;
  margin-bottom:15px;
}

.tab-content ul li{
  font-size:16px;
  margin-bottom:6px;
}

/* ===============================
   HIGHLIGHT BOX (OPTIONAL)
   =============================== */
.info-box{
  background:#f5f9fc;
  padding:15px;
  border-left:4px solid #0b3c5d;
  border-radius:6px;
  margin:15px 0;
}

/* ===============================
   TABLES (IF ANY)
   =============================== */
.tab-content table{
  width:100%;
  border-collapse:collapse;
  margin-top:15px;
}

.tab-content table th,
.tab-content table td{
  border:1px solid #ccc;
  padding:10px;
  font-size:15px;
}

.tab-content table th{
  background:#f0f6fb;
  color:#0b3c5d;
}

/* ===============================
   RESPONSIVE – TABLET
   =============================== */
@media (max-width: 991px){
  .tab-content{
    padding:20px 25px;
  }

  .tab-content h1{
    font-size:24px;
  }

  .tab-content h2{
    font-size:18px;
  }

  .tab-content p,
  .tab-content ul li{
    font-size:15px;
  }
}
/* ===============================
   IMAGE BLOCK – RESPONSIVE
   =============================== */
.image-block{
  margin:25px 0;
  text-align:center;
}

.image-block img{
  width:100%;
  max-width:900px;
  height:auto;
  border-radius:8px;
  box-shadow:0 4px 12px rgba(0,0,0,0.12);
}

.image-caption{
  margin-top:8px;
  font-size:14px;
  color:#666;
  font-style:italic;
}

/* MOBILE OPTIMIZATION */
@media (max-width:576px){
  .image-block img{
    max-width:100%;
    border-radius:6px;
  }

  .image-caption{
    font-size:13px;
  }
}


/* ===============================
   RESPONSIVE – MOBILE
   =============================== */
@media (max-width: 576px){
  .tab-content{
    padding:15px 18px;
    margin:10px;
    box-shadow:none;
  }

  .tab-content h1{
    font-size:20px;
    line-height:1.3;
  }

  .tab-content h2{
    font-size:16px;
  }

  .tab-content p,
  .tab-content ul li{
    font-size:14px;
  }

  .tab-content ul{
    margin-left:16px;
  }
}

.image-blocks {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 30px auto;
  text-align: center;
}

.image-blocks img {
  width: 260px;          /* perfect brochure width */
  max-width: 90%;
  height: auto;
  border: 1px solid #ddd;
  padding: 6px;
  background: #fff;
}

.image-captions {
  margin-top: 12px;
  font-size: 22px;
  font-weight: bold;
  color: #000;
}

/* Mobile responsive */
@media (max-width: 768px) {
  .image-blocks img {
    width: 200px;
  }

  .image-captions {
    font-size: 18px;
  }
}
/* ===== HEADER SECTION ===== */
.eis-header{
  display:flex;
  justify-content:space-between;
  align-items:center;
  margin-bottom:20px;
}
.eis-header h1{
  font-size:28px;
  font-weight:700;
}
.eis-logo{
  max-height:90px;
}

/* ===== ROADMAP LINK ===== */
.roadmap-link{
  font-size:22px;
  font-weight:600;
  margin:20px 0;
}
.roadmap-link img{
  height:28px;
  vertical-align:middle;
  margin-left:8px;
}
.roadmap-link a{
  text-decoration:none;
  color:#000;
  font-weight:600;
}
.roadmap-link a:hover{
  text-decoration:underline;
}

/* ===== MAIN IMAGE ===== */
.main-image{
  width:100%;
  margin:20px 0;
}
.main-image img{
  width:100%;
  border-radius:4px;
}

/* ===== DESCRIPTION ===== */
.description{
  font-size:16px;
  line-height:1.6;
  margin:15px 0 30px;
}

/* ===== IMAGE BLOCKS ===== */
.image-blocks{
  display:flex;
  gap:40px;
  margin-top:20px;
}
.image-card{
  text-align:center;
}
.image-card img{
  max-width:260px;
}
.image-captions{
  margin-top:10px;
  font-weight:600;
}

/* ===== RESPONSIVE ===== */
@media(max-width:768px){
  .eis-header{
    flex-direction:column;
    gap:15px;
  }
  .image-blocks{
    flex-direction:column;
    align-items:center;
  }
}
.eis-gallery{
  display:flex;
  gap:30px;
  margin:20px 0;
}

.eis-item{
  flex:1;
  text-align:center;
}

.eis-item img{
  width:100%;
  height:auto;
  border-radius:4px;
}

.eis-caption{
  margin-top:8px;
  padding:6px 10px;
  
  color:black;
  font-size:14px;
  font-style:italic;
}

.eis-text{
  margin-top:15px;
  font-size:16px;
  line-height:1.6;
}

/* Mobile */
@media(max-width:768px){
  .eis-gallery{
    flex-direction:column;
  }
}
</style>

<!-- PAGE CONTENT -->
<div class="about-page">

  <!-- LEFT SIDEBAR -->
<aside class="about-sidebar">
  <ul>
    <li class="<?= $activeTab == 'tab1' ? 'active' : '' ?>" data-tab="tab1">India Epidemic Intelligence Service Programme</li>
    <li class="<?= $activeTab == 'tab2' ? 'active' : '' ?>" data-tab="tab2">Intermediate Field Epidemiology Training Programme (AIIH&PH, Kolkata)</li>
    <li class="<?= $activeTab == 'tab3' ? 'active' : '' ?>" data-tab="tab3">Intermediate-Field Epidemiology Training Programme (NIPHTR, Mumbai)</li>
    <li class="<?= $activeTab == 'tab4' ? 'active' : '' ?>" data-tab="tab4">Field Epidemiology Programme in One Health- SectorConnect</li>
    <li class="<?= $activeTab == 'tab5' ? 'active' : '' ?>" data-tab="tab5">Regional Field Epidemiology Training Programme (FETP)</li>
    <li class="<?= $activeTab == 'tab6' ? 'active' : '' ?>" data-tab="tab6">Two-week Field Epidemiology Training Programme (FETP)</li>
    <li class="<?= $activeTab == 'tab7' ? 'active' : '' ?>" data-tab="tab7">Regional Training Programme on Prevention and Control of Communicable Diseases for paramedics</li>
  </ul>
</aside>


 

  <!-- RIGHT CONTENT -->
  <main class="about-main">

    <div class="breadcrumb">Home › Academics</div>

    <!-- TAB 1 -->
    <div id="tab1" class="tab-content <?= $activeTab == 'tab1' ? 'active' : '' ?>">
      <div class="eis-header">
  <h1>India Epidemic Intelligence Service Programme</h1>

  <div>
    <img src="/NCDC_MOHFW/uploads/images/EIS-logo.png" class="eis-logo" alt="India EIS Logo">
    <img src="/NCDC_MOHFW/uploads/images/A-Tephinet-Accredited-Program-150x150.png" class="eis-logo" alt="TEPHINET Accredited Programme">
  </div>
</div>

<div class="roadmap-link">
  <a href="/NCDC_MOHFW/uploads/pdfOne-India-FETP-Roadmap.pdf" target="_blank">
    One India FETP Roadmap
    <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" alt="PDF">
  </a>
</div>

<!-- MAIN IMAGE -->
<div class="main-image">
  <img src="/NCDC_MOHFW/uploads/images/Picture-1.jpg" alt="One India FETP Roadmap Launch">
</div>

<!-- DESCRIPTION -->
<p class="description">
‘One India’ FETP (Field Epidemiology Training Programme) roadmap is an initiative to consolidate the efforts of different government agencies to scale up the field epidemiology training in the country and provides strategic direction for achieving the target of field epidemiology training coverage to all the districts of India in 2030. This roadmap document was launched in February 2023 during FETPICON-2023 at Varanasi by the Minister of State for Health and Family Welfare, Government of India.
</p>

<h2>India EIS Programme</h2>

<div class="eis-gallery">
  <div class="eis-item">
    <img src="/NCDC_MOHFW/uploads/images/Picture-2.jpg" alt="EIS officer collecting rodent sample during Scrub Typhus outbreak investigation, Sundargarh district, Odisha, October 2023">
    <p class="eis-caption">
      EIS officer collecting rodent sample during Scrub Typhus outbreak investigation, Sundargarh district, Odisha, October 2023
    </p>
  </div>

  <div class="eis-item">
    <img src="/NCDC_MOHFW/uploads/images/Picture-3.jpg" alt="EIS officer interacting with a community member during a diarrheal disease outbreak investigation, Sonbhadra district, Uttar Pradesh, August 2023">
    <p class="eis-caption">
      EIS officer interacting with a community member during a diarrheal disease outbreak investigation, Sonbhadra district, Uttar Pradesh, August 2023
    </p>
  </div>
</div>

<p class="eis-text">
The India Epidemic Intelligence Service (EIS) Programme is a 2-years applied epidemiology training run by the NCDC, Delhi. 
The programme is modelled after the EIS program at the US Centers for Disease Control and Prevention (CDC) and is implemented 
in technical collaboration with US CDC.
</p>
<p class="eis-text">
Participants are trained to develop public health skills while working with various public health agencies/programmes in the country. 
The state and central public health agencies forward the applications of their employees and if selected, they are deputed to NCDC for
2 years. Individual candidates with public health experience can also apply. Selection is through a highly competitive process by a 
committee of experts. The cost of training is borne by NCDC.
</p>
<h2>Master in Applied Epidemiology (MAE)</h2>
<p class="eis-text">
Participants in the India EIS training programme now have the opportunity to earn a Master in Applied Epidemiology (MAE) degree from 
the H.N.B. Medical Education University, Uttarakhand. The Master programme is integrated with the India EIS training. The participants 
will have to clear examinations conducted by the University from time to time and fulfil other requirements laid down by the University 
to earn the degree.
</p>
<h2>About TEPHINET Accreditation</h2>
<p class="eis-text">
Training Programs in Epidemiology and Public Health Interventions Network (TEPHINET) is the global network of Field Epidemiology 
Training Programs (FETPs) that also acts as the global accreditation body for FETPs worldwide. In an effort to continuously improve 
and strengthen, the India EIS Program at NCDC applied for TEPHINET accreditation in the 7th cycle and was awarded the accreditation 
in September 2023 at 1st SAFETYNET conference in Canberra, Australia. Thus, ensuring an internationally benchmarked high quality field 
epidemiology training. For detailed information please download the brochure.
</p>
<p class="eis-text">
We are now accepting applications for the new cohort 2025-2027. To submit your application, <a href="https://docs.google.com/forms/d/e/1FAIpQLSfnFKyLwjEFblKY4Id7gUxrH4FvMx-QFUEwIoamPzBKe1gj7w/closedform" target="_blank"> please click here.</a>
</p>
</div>
    </div>




    <!-- TAB 2 -->
    <div id="tab2" class="tab-content <?= $activeTab == 'tab2' ? 'active' : '' ?>">
        <!-- IMAGE BLOCK -->
  <div class="image-block">
    <img src="/NCDC_MOHFW/uploads/images/image-1.png"
         alt="Screenshot-2025-07-22-163235">
  </div>
      <h1>Intermediate Field Epidemiology Training Programme (AIIH&PH, Kolkata)</h1>
  
  <h2>About I-FETP</h2>

  <p>
    All India Institute of Hygiene & Public Health, Kolkata (AIIHPH) in collaboration with the National Centre for Disease Control, Delhi (NCDC), 
    Ministry of Health & Family Welfare, Government of India, has initiated a one-year, on-the-job Intermediate Field Epidemiology Training 
    Program (I-FETP) for the state health service officials of West Bengal, Jharkhand, and North-eastern states of India to enhance the skills 
    and capacity of the State/District Epidemiologists, Surveillance and Program Officers in the Field Epidemiology.
  </p>

  <p>
    I-FETP is modelled on the India Epidemic Intelligence Service programme (EIS) – an initiative by NCDC, in collaboration with the U.S. 
    Centers for Disease Control and Prevention (CDC), Atlanta, USA.
  </p>

  <p>
    The eligibility criteria for this training programme is a public health official aged less than 50 years working as an epidemiologist 
    or in a public health position at the state or district level (permanent or contractual).
  </p>

  <p>
    This is a one-year on-the-job training programme that comprises five contact sessions and 47 weeks of field activities at the 
    place of posting. During the training, each officer will be assigned to an expert mentor and a co-mentor to complete Core Activity 
    of Learnings (CALs) like surveillance or programme data analysis, outbreak investigations, epidemiological investigations, writing 
    scientific abstracts and reports, and delivering oral presentations.
  </p>


  <p>
    We are now accepting applications for the year 2025-2026. To submit your application, <a href="https://docs.google.com/forms/d/e/1FAIpQLSfiAVuBhGVQwc8mEoDa3NGZEt33DdXL4mkFyQzyrtru_rwOTA/viewform"
       target="_blank" class="pdf-link">please click</a> here Last date till 31st July 2025.
  </p>
<!-- IMAGE BLOCK -->
<div class="image-blocks">
  <img src="/NCDC_MOHFW/uploads/images/image-3-2-600x822.png" alt="I-FETP Brochure">
  <p class="image-captions">Brochure</p>
</div>
    </div>

    <!-- TAB 3 -->
<div id="tab3" class="tab-content <?= $activeTab == 'tab3' ? 'active' : '' ?>">
<!-- IMAGE BLOCK -->
  <div class="image-block">
    <img src="/NCDC_MOHFW/uploads/images/Screenshot-2025-07-22-163235.png"
         alt="Screenshot-2025-07-22-163235">
  </div>
  <h1>Intermediate-Field Epidemiology Training Programme (NIPHTR, Mumbai)</h1>
  
  <h2>About I-FETP</h2>

  <p>
    All India Institute of Hygiene & Public Health, Kolkata (AIIHPH) in collaboration with the National Centre for Disease Control, 
    Delhi (NCDC), Ministry of Health & Family Welfare, Government of India, has initiated a one-year, on-the-job Intermediate Field 
    Epidemiology Training Program (I-FETP) for the state health service officials of West Bengal, Jharkhand, and North-eastern states of 
    India to enhance the skills and capacity of the State/District Epidemiologists, Surveillance and Program Officers in the Field Epidemiology.
  </p>

  <p>
    I-FETP is modelled on the India Epidemic Intelligence Service programme (EIS) – an initiative by NCDC, in collaboration with 
    the U.S. Centers for Disease Control and Prevention (CDC), Atlanta, USA.
  </p>

  <p>
    The eligibility criteria for this training programme is a public health official aged less than 50 years working as an epidemiologist 
    or in a public health position at the state or district level (permanent or contractual).
  </p>

  <p>
    This is a one-year on-the-job training programme that comprises five contact sessions and 47 weeks of field activities at the place 
    of posting. During the training, each officer will be assigned to an expert mentor and a co-mentor to complete Core Activity of 
    Learnings (CALs) like surveillance or programme data analysis, outbreak investigations, epidemiological investigations, writing 
    scientific abstracts and reports, and delivering oral presentations.
  </p>


  <p>
    We are now accepting applications for the year 2025-2026. To submit your application, <a href="https://docs.google.com/forms/d/e/1FAIpQLScVmuJF4NdBGUiwANcAvEPr01eSd5i-flfm6EczMZNgoYOh_Q/viewform"
       target="_blank" class="pdf-link">please click</a> here Last date till 31st July 2025.
  </p>
<!-- IMAGE BLOCK -->
<div class="image-blocks">
  <img src="/NCDC_MOHFW/uploads/images/cover-page.png" alt="I-FETP Brochure">
  <p class="image-captions">Brochure</p>
</div>

</div>


    <!-- TAB 4 -->
<div id="tab4" class="tab-content <?= $activeTab == 'tab4' ? 'active' : '' ?>">

  <h1>Field Epidemiology Programme in One Health – SectorConnect</h1>
  <h2>SectorConnect: Enhancing Preparedness for Integrated Response Field Epidemiology Programme in One Health (FEP OH)</h2>

  <p>
    SectorConnect FEP OH is a 3-month on-the-job multi-sectoral capacity-building program for professionals from human health, animal husbandry, 
    wildlife, food safety, and points of entry, etc. at the district level using the One Health approach.
  </p>

  <p>
    The primary goal of this initiative is to strengthen the system’s capacity to respond to public health threats through a multisectoral 
    collaborative approach, enhanced intersectoral coordination, cross-leaning, and effective communication. It aims to enhance integrated 
    response through surveillance data analysis & information sharing, and joint outbreak investigation using One Health approach at the field level.
  </p>

  <p>
    The 3 months are divided into contact session period (10%) and field interval (90%). There are a total of three contact sessions 
    (one contact session per month, and each session is of three days), which are conducted at a venue within the state. Between each 
    contact session is field interval of one month (two field intervals), wherein the trainee officers, while at their duty stations, 
    complete their field assignments under the mentorship of medical and veterinary college faculty. These sessions cover a broad spectrum 
    of topics, including epidemiology, One Health, disease surveillance, joint outbreak investigation, biosafety and biosecurity, risk assessment,
    risk communication, community engagement, WASH (water, sanitation, and hygiene), vaccination, international health regulations (IHR), IHR-PVS 
    (Performance of Veterinary Services), and stakeholder analysis. During the contact session, officers also participate in case studies, group 
    exercises and interactive quizzes designed on application of one health approach in local context.
  </p>
<!-- IMAGE BLOCK -->
  <div class="image-block">
    <img src="/NCDC_MOHFW/uploads/Pilot-Batch-1-1536x517-1.jpg"
         alt="SectorConnect FEP-OH Pilot Batch Group Photo">
    <p class="image-caption">Pilot Batch – 1</p>
  </div>
  <p>
    The pilot batch of SectorConnect FEP OH has been successfully completed across nine districts under the Narmada Division of Gujarat State, 
    spanning from December 2023 to February 2024. To mark the paradigm shift that SectorConnect represents, the brand color of the training is 
    “Purple” – the color seen during dawn, marking a time of change.  SectorConnect is the dawn of a new era in collaborative preparedness, 
    laying the groundwork for a safer and healthier future for all.
  </p>
<!-- IMAGE BLOCK -->
  <div class="image-block">
    <img src="/NCDC_MOHFW/uploads/Pilot-Batch-2-scaled.jpg"
         alt="SectorConnect FEP-OH Pilot Batch Group Photo">
    <p class="image-caption">Pilot Batch – 2</p>
  </div>
  <p>
    NCDC in collaboration with DAHD completed the training of second batch of SectorConnect Field Epidemiology Programme in One Health (FEPOH) 
    at Ahmedabad, Gujarat on 12 July 2024. The valedictory session was graced by DGHS Prof (Dr) Atul Goel, Assistant commissioner Animal husbandry 
    and dairying Dr Adhiraj Mishra, Director AIIHPH Dr Ranjan Das, Assistant director Public Health Gujarat Dr R B Patel, State surveillance 
    Officer Gujarat Dr Jayesh Katira, Deputy Director Animal Husbandry Gujarat Dr Amit Kanani, Assistant Director (Technical) FSSAI Gujarat, 
    Resident Advisor FETP CDC, India Dr Kristin VanderEnde among others. From the concluding batch two teams Vadodara and Amreli received best 
    presentation award for their outbreak investigations from Prof (Dr) Atul Goel. In all 35 participants representing human health and animal 
    health from 6 districts, 2 municipal corporations and 1 APHO completed the training under the mentorship of 7 mentors from medical and 
    veterinary colleges.
  </p><br>
  <?php
$pdfPath = '/NCDC_MOHFW/uploads/pdf/Telangana_SectorConnect_News-and-Events-1.pdf';
$pdfSize = getPDFSize($pdfPath);
?>

<a href="<?php echo $pdfPath; ?>" 
   target="_blank" 
   style="color:#0b3c5d; font-weight:bold; text-decoration:underline;">
    SectorConnect: FEP OH journey starts in Telangana (<?php echo $pdfSize; ?>)
    <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
</a>
<br><br>


 <?php
// List of PDFs
$pdfs = [
    [
        'path' => '/NCDC_MOHFW/uploads/pdf/SectorConnect-Short-Course-Brochure_A4_23-Nov-1.pdf',
        'title' => 'SectorConnect Short Course FEP-OH brochure'
    ],
    [
        'path' => '/NCDC_MOHFW/uploads/pdf/Sector-Connect.pdf',
        'title' => 'Report on Stakeholder Engagement Workshop'
    ],
    [
        'path' => '/NCDC_MOHFW/uploads/pdf/SectorConnect-FEP-OH-Pilot-Report.pdf',
        'title' => 'SectorConnect FEP OH Pilot Report'
    ]
];

// Loop through each PDF
foreach($pdfs as $pdf){
    $pdfSize = getPDFSize($pdf['path']); // calculate size
    ?>
    <a href="<?php echo $pdf['path']; ?>" 
       target="_blank" 
       style="color:#0b3c5d; font-weight:bold; text-decoration:underline;">
        <?php echo $pdf['title'] . ' (' . $pdfSize . ')'; ?>
        <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
    </a>
    <br><br>
<?php
}
?>


</div>


    <!-- TAB 5 -->
<div id="tab5" class="tab-content <?= $activeTab == 'tab5' ? 'active' : '' ?>">

  <h1>Regional Field Epidemiology Training Programme (FETP)</h1>

  <p>
    NICD has been designated as the <strong>WHO Collaborating Centre for Epidemiology and Training</strong>
    since 1996. A three-month course in Field Epidemiology was initiated in the same year and has been
    conducted annually since then. This programme is one of the most prestigious public health
    training courses in the <strong>South-East Asia Region (SEAR)</strong>, designed for medical officers
    working in the field of public health.
  </p>

  <h2>Objective of the Programme</h2>
  <p>
    The objective of the course is to strengthen the technical capabilities and skills of health
    personnel by providing practical training in field epidemiology, health programme management,
    and the use of computers in public health.
  </p>

  <h2>Expected Outcomes</h2>
  <ul>
    <li>Detect epidemics through early warning signals</li>
    <li>Conduct epidemic investigations and field surveys</li>
    <li>Institute appropriate and timely responses for prevention and control of outbreaks</li>
    <li>Address health impacts of disasters and environmental health issues</li>
    <li>Collect laboratory specimens and learn proper storage and transportation techniques</li>
    <li>Provide leadership in control of endemic and epidemic-prone diseases</li>
    <li>Design, implement and evaluate disease surveillance systems</li>
    <li>Evaluate disease prevention and control measures</li>
    <li>Conduct epidemiological and statistical analysis of complex datasets</li>
    <li>Use computers effectively for data management, graphics and presentations (EPI INFO)</li>
    <li>Develop effective communication skills in public health</li>
    <li>Prepare, present and publish technical reports and articles</li>
    <li>Remain prepared for public health emergencies</li>
    <li>Train other health professionals</li>
  </ul>

  <h2>Training Methodology</h2>
  <p>
    The training methodology includes lectures, technical discussions, modular exercises,
    institutional visits, and extensive field exercises. A comprehensive review of the course
    was jointly undertaken by NICD, WHO-SEARO and experts from Thailand, Indonesia and Bangladesh
    during 2006–2007. Based on this review, ten standardized training modules were developed and
    are currently used for training.
  </p>

  <h2>Structure of the Training Programme</h2>
  <ul>
    <li>
      <strong>Initial Classroom Training (5 Weeks):</strong>
      Covers concepts of field epidemiology, epidemiological tools, biostatistics, outbreak
      investigation, disease surveillance, and disease control programme management.
    </li>
    <li>
      <strong>Field Training (6 Weeks):</strong>
      Includes community-based surveys, data collection and analysis, report writing, outbreak
      investigations, and evaluation of district-level surveillance systems.
    </li>
    <li>
      <strong>Final Phase:</strong>
      Finalization of field reports, presentations, and post-training evaluation.
    </li>
  </ul>

  <h2>Faculty</h2>
  <p>
    Faculty members include senior officers from NICD, experts from other premier institutions
    in Delhi, Directorate General of Health Services, and the regional and country offices of WHO.
  </p>

  <h2>Past Training Highlight</h2>
  <p>
    During the year <strong>2008–09</strong>, the training programme was conducted from
    <strong>12th August to 11th November 2008</strong>. A total of <strong>13 participants</strong>
    from India, Maldives, Bhutan, Nepal, and Sri Lanka attended the programme.
  </p>

  <h2>Regional Field Epidemiology Training Programme – 2023</h2>
  <p>
    The <strong>Regional Field Epidemiology Training Programme 2023</strong> continued the legacy
    of high-quality epidemiological training, focusing on strengthening regional public health
    preparedness, surveillance systems, and outbreak response capacity.
  </p>
 <p>
  <?php
$pdfPath = '/NCDC_MOHFW/uploads/pdf/43045836281675942642.pdf';
$pdfTitle = 'Regional Field Epidemiology Training Programme 2023';
$pdfSize = getPDFSize($pdfPath); // Function from pdf_helper.php
?>

<a href="<?php echo $pdfPath; ?>" 
   target="_blank" 
   style="color:#0b3c5d; font-weight:bold; text-decoration:underline;">
    <?php echo $pdfTitle . ' (' . $pdfSize . ')'; ?>
    <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
</a>
<br><br>

 </p>
</div>


<!-- TAB 6 -->
<div id="tab6" class="tab-content <?= $activeTab == 'tab6' ? 'active' : '' ?>">

  <h1>Two-week Field Epidemiology Training Programme (FETP)</h1>

  <p>
    Countries of the World Health Organization South-East Asia Region (WHO-SEAR)
    show differences in their capacities for disease surveillance and response.
    However, all countries share the need to strengthen core public health
    capacities for effective implementation of the International Health
    Regulations (IHR, 2005) at national, state and district levels.
  </p>

  <p>
    Experience has shown that it is not feasible for many countries to spare
    medical officers for long-duration training programmes such as the two-year
    or three-month Field Epidemiology Training Programmes. Keeping this
    limitation in mind, and based on experiences from similar initiatives, the
    National Institute of Communicable Diseases, with the support of the World
    Health Organization, developed a two-week competency-based training
    programme.
  </p>

  <p>
    This short-duration programme aims to build essential skills among
    peripheral health professionals in basic disease surveillance, epidemic
    preparedness and outbreak management. It serves as an important step
    towards strengthening human resources for public health and improving
    preparedness for managing outbreaks and epidemics in the region.
  </p>

  <p>
    The overall objective of the course is to strengthen the skills of
    peripheral health professionals in basic epidemiology and its practical
    application in disease surveillance and response systems. The faculty for
    the programme includes experts from NICD and other institutions, including
    professionals who have earlier completed the three-month FETP training.
  </p>

  <p>
    The training programme covers core public health topics such as basic
    epidemiology, disease surveillance, epidemic preparedness, outbreak
    investigation and response, field-based study design, field exercises,
    institutional data analysis, report writing and presentation. Course
    content is adapted according to the needs and specific public health
    context of the country where the training is conducted.
  </p>

  <p>
    The learning methodology consists of one week of classroom-based learning
    followed by one week of field-based assignments. The programme uses
    interactive lecture-cum-discussions, group work, practical field exercises,
    report writing and plenary presentations, following a “learning-by-doing”
    approach.
  </p>

  <p>
    Monitoring and evaluation of the programme are carried out using pre- and
    post-training assessment tests. Feedback from participants is regularly
    analyzed and used to improve the course content, training tools and overall
    methodology. The programme is continuously refined based on lessons learned
    from field experiences.
  </p>

</div>



   <!-- TAB 7 -->
<div id="tab7" class="tab-content <?= $activeTab == 'tab7' ? 'active' : '' ?>">

  <h1>Regional Training Programme on Prevention and Control of Communicable Diseases for Paramedics</h1>

  <p>
    Paramedical health personnel are an essential part of public health services
    and play a vital role in early detection of disease outbreaks in the
    community. To effectively manage and control infectious and preventable
    diseases, it is important to continuously strengthen their skills and
    improve the quality of disease surveillance data.
  </p>

  <p>
    While several training programmes exist for medical professionals, there
    has traditionally been limited focus on structured training for
    paramedical personnel. Recognizing this gap, the National Institute of
    Communicable Diseases (NICD) introduced a four-week
    <strong>Regional Training Programme on Prevention and Control of Communicable Diseases</strong>
    in the year 1999 for paramedical health personnel from the South-East Asia Region.
  </p>

  <p>
    This tailor-made programme is conducted once every year and aims to
    strengthen the epidemiological skills of paramedical personnel. So far,
    around <strong>150 participants</strong> from Bhutan, Maldives, Myanmar,
    Nepal, Sri Lanka, and India have successfully completed this training at NICD.
  </p>

  <p>
    The main objective of the course is to enhance the technical skills of
    paramedical personnel through practical training in prevention and control
    of communicable diseases, along with the use of computers for surveillance
    activities.
  </p>

  <p>
    The course duration is four weeks, with a strong focus on field projects and
    hands-on demonstrations. The training methodology includes lectures,
    technical discussions, modular exercises, demonstrations, institutional
    visits, and field exercises. Participants are also trained in basic computer
    skills required for disease surveillance.
  </p>

  <p>
    The training programme covers important topics such as basic epidemiology,
    basic statistics, disease surveillance, epidemic preparedness, outbreak
    investigation and response, field-based studies, surveys, and report writing
    along with presentation of findings.
  </p>

  <p>
    Monitoring and evaluation of the course are carried out using pre- and
    post-training assessment tests. Participant feedback is regularly reviewed
    and used to further improve the quality and effectiveness of the programme.
  </p>
<?php
$pdfPath = '/NCDC_MOHFW/uploads/pdf/Paramed-FETP-Brochure_2024.pdf';
$pdfTitle = 'REGIONAL FIELD EPIDEMIOLOGY TRAINING PROGRAMME ON PREVENTION & CONTROL OF COMMUNICABLE
DISEASES For Para-Medical Personnel of South East Asia Region (18th Nov - 13th Dec 2024)';
$pdfSize = getPDFSize($pdfPath); // make sure pdf_helper.php is included
?>

<a href="<?php echo $pdfPath; ?>" 
   target="_blank"
   style="color:#0b3c5d; font-weight:bold; text-decoration:underline;">
    <?php echo $pdfTitle . ' (' . $pdfSize . ')'; ?>
    <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
</a>
<br><br>

</div>

  </main>
</div>

<script>
document.addEventListener("DOMContentLoaded", function(){
  const tabs = document.querySelectorAll(".about-sidebar li");
  const contents = document.querySelectorAll(".tab-content");

  // Activate first tab by default
  if(!document.querySelector(".about-sidebar li.active")) {
    tabs[0].classList.add("active");
    contents[0].classList.add("active");
  }

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      tabs.forEach(t => t.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));
      tab.classList.add("active");
      const target = tab.getAttribute("data-tab");
      document.getElementById(target).classList.add("active");
    });
  });
});

</script>



<?php include("../footer.php"); ?>
