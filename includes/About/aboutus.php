
<?php
include("../header.php");
$activeTab = isset($_GET['tab']) ? $_GET['tab'] : 'about';
?>


<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="Header Image of NCDC Website">
</div>
<style>
.header-image {
  width: 100%;
  height: 260px;
  overflow: hidden;
}

.header-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

/* Tablet */
@media (max-width: 768px){
  .header-image{
    height: 180px;
  }
}

/* Mobile */
@media (max-width: 480px){
  .header-image{
    height: 140px;
  }
}
/* ===== ABOUT PAGE STYLE ===== */

.about-page{
  display:flex;
  width:100%;
  margin:auto;
  padding:30px 20px;
  font-family:"Times New Roman", Times, serif;
}

/* SIDE MENU */
.about-sidebar{
  width:260px;
  background:#f5f9fc;
  border-radius:10px;
  padding:15px;
  height:650px;
}

.about-sidebar ul{
  list-style:none;
  margin:0;
  padding:0;
}

.about-sidebar li{
  padding:14px 16px;
  margin-bottom:8px;
  cursor:pointer;
  font-size:16px;
  border-radius:8px;
}

.about-sidebar li.active,
.about-sidebar li:hover{
  background:#0fa6a6;
  color:#fff;
}

/* MAIN CONTENT */
.about-main{
  flex:1;
  padding-left:40px;
}

.breadcrumb{
  font-size:14px;
  margin-bottom:15px;
}

.about-main h1{
  font-size:30px;
  margin-bottom:20px;
}

.about-main p{
  font-family: "Times New Roman", Times, serif;
  font-size: 17px;
  line-height: 1.8;
  margin-right: 40px;   /* space from right side */
  text-align: justify;
}

.about-main li{
  font-size:17px;
  line-height:1.8;
  text-align:justify;
}

/* TAB CONTENT */
.tab-content{
  display:none;
}

.tab-content.active{
  display:block;
}

/* DIVISION TITLE */
.division-title{
  font-size:22px;
  font-weight:bold;
  color:#003366;
  margin:40px 0 20px;
}

/* WHO'S WHO CARD */
.whos-card{
  display:flex;
  background:#f2f2f2;
  border-radius:10px;
  padding:15px;
  margin-bottom:20px;
  align-items:center;
}

.whos-img img{
  width:120px;
  height:140px;
  object-fit:cover;
  border-radius:6px;
  border:1px solid #ccc;
}

.whos-info{
  padding-left:20px;
}

.whos-info h3{
  margin:0;
  font-size:20px;
}

.whos-info .desig{
  font-weight:bold;
  margin:6px 0;
}

.whos-info p{
  margin:4px 0;
  font-size:15px;
}
.container {
  max-width: 1200px;
  margin: 30px auto;
  padding: 20px;
}

h1 {
  text-align: center;
  color: #0b3c5d;
  margin-bottom: 5px;
}

.date {
  text-align: center;
  margin-bottom: 30px;
  color: #555;
}

.division-card {
  background: #fff;
  border-radius: 8px;
  margin-bottom: 30px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.08);
  padding: 20px;
}

.division-card h2 {
  color: #0b3c5d;
  border-left: 5px solid #0b3c5d;
  padding-left: 10px;
  margin-bottom: 15px;
  font-size: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 15px;
}

table thead {
  background: #0b3c5d;
  color: #fff;
}

table th, table td {
  padding: 10px 12px;
  border: 1px solid #ddd;
  text-align: left;
}

table tbody tr:nth-child(even) {
  background: #f9f9f9;
}

.contractual {
  background: #f1f5f9;
  border-left: 4px solid #ff9800;
  padding: 10px 15px;
  border-radius: 4px;
}

.contractual h3 {
  color: #ff9800;
  margin-bottom: 5px;
  font-size: 16px;
}

.contractual ul {
  list-style: none;
}

.contractual li {
  padding: 4px 0;
}

/* MOBILE */
@media(max-width:768px){
  .whos-card{
    flex-direction:column;
    text-align:center;
  }
  .whos-info{
    padding-left:0;
    margin-top:10px;
  }
}



/* MOBILE */
@media(max-width:768px){
  .about-page{
    flex-direction:column;
  }
  .about-sidebar{
    width:100%;
  }
  .about-main{
    padding-left:0;
    margin-top:20px;
    margin-right: 0px;
  }
  .about-main p{
    margin-right: 0;   /* if paragraph has right margin */
  }
}






</style>

<div class="about-page">

  <!-- LEFT SIDE MENU -->
  <aside class="about-sidebar">
  <ul>
    <li class="<?= $activeTab == 'about' ? 'active' : '' ?>" data-tab="about">About</li>
    <li class="<?= $activeTab == 'whoswho' ? 'active' : '' ?>" data-tab="whoswho">Who's Who</li>
    <li class="<?= $activeTab == 'mandate' ? 'active' : '' ?>" data-tab="mandate">Mandate</li>
    <li class="<?= $activeTab == 'achievements' ? 'active' : '' ?>" data-tab="achievements">Major Achievements</li>
    <li class="<?= $activeTab == 'functions' ? 'active' : '' ?>" data-tab="functions">Functions</li>
    <li class="<?= $activeTab == 'former' ? 'active' : '' ?>" data-tab="former">Former Directors of NCDC</li>
    <li class="<?= $activeTab == 'staff' ? 'active' : '' ?>" data-tab="staff">NCDC Staff</li>
    <li class="<?= $activeTab == 'structure' ? 'active' : '' ?>" data-tab="structure">Organisation Structure</li>
    <li class="<?= $activeTab == 'committee' ? 'active' : '' ?>" data-tab="committee">Institutional Committee</li>
    <li class="<?= $activeTab == 'Administrative' ? 'active' : '' ?>" data-tab="Administrative">Administrative Wing</li>
    <li class="<?= $activeTab == 'centersandivision' ? 'active' : '' ?>" data-tab="centersandivision">Centers & Divisions Under NCDC</li>
  </ul>
</aside>


  <!-- RIGHT CONTENT AREA -->
  <main class="about-main">

    <div class="breadcrumb">
      <a href="/NCDC_MOHFW/index.php">Home</a> › About Us
    </div>

    <!-- ABOUT -->
    <section id="about" class="tab-content <?= $activeTab == 'about' ? 'active' : '' ?>">
      <div class="about-wrapper">
      <h1>About</h1>
      <p>
        The National Institute of Communicable Diseases (NICD) had its origin as Central Malaria Bureau, established at 
        Kasauli (Himachal Pradesh) in 1909 and following expansion was renamed in 1927 as the Malaria Survey of India. 
        The organization was shifted to Delhi in 1938 and called as the Malaria Institute of India (MII). In view of the 
        drastic reduction achieved in the incidence of malaria under National Malaria Eradication Programme (NMEP), 
        Government of India decided to reorganize and expand the activities of the institute to cover other communicable diseases. 
        Thus, on July 30, 1963 the erstwhile MII was renamed as NICD to shoulder these additional responsibilities. </p><br>
        <p>The institute was established to function as a national centre of excellence for control of communicable diseases. 
        The function of the institute also included various areas of training and research using multi-disciplinary integrated approach. 
        The institute was, in addition, expected to provide expertise to the States and Union Territories (UTs) on rapid health assessment 
        and laboratory based diagnostic services. Surveillance of communicable diseases and outbreak investigation also formed an 
        indispensable part of its activities.</p><br>
        <p>The NICD campus at Delhi covers an approximate areas of 15.35 acres which includes the former official residence of Commander 
        in Chief of the Indian Army and now houses the administrative block, library, divisions of epidemiology and parasitic diseases. 
        The Institute is one of its unique kind in the city of Delhi having so much of green area with about 80% as open area. 
        The Institute has got three large sprawling lawns with well maintained plants as well as a number of smaller garden islands. 
        The headquarters of the directorate of National Anti Malaria Programme (NAMP), now named as National Vector Borne Disease Control
        Programme (NVBDCP) is also located in the NCDC campus. The facilities available in the campus include research laboratories, 
        a large lecture hall, well equipped conference and seminar rooms, animal house, fish hatcheries and two hostels with a total 
        capacity to accommodate about 125 trainees and a well maintained canteen. The campus has the facilities of play grounds for volleyball,
        badminton etc. as well as for indoor facilities like carom, gymnasium etc.</p><br>

        <p>The Institute is under administrative control of the Director General of Health Services, Ministry of Health and Family Welfare, 
        Govt. of India. The Director, an officer of the Public Health sub-cadre of Central Health Service, is the administrative and 
        technical head of the Institute. The Institute has its headquarters in Delhi and has 8 out-station branches located at Alwar 
        (Rajasthan), Bengaluru (Karnataka), Kozikode (Kerela), Coonoor (Tamil Nadu), Jagdalpur (Chattisgarh), Patna (Bihar), 
        Rajahmundry (Andhra Pradesh) and Varanasi (Uttar Pradesh). There are several technical Divisions at the headquarters of 
        the institute i.e. Centre for Epidemiology and Parasitic Diseases (Dept. of Epidemiology, Dept. Parasitic Disease) Division 
        of Microbiology, Division of Zoonosis, Centre for HIV/AIDS and related diseases, Centre for Medical Entomology and Vector Management, 
        Division of Malariology and Coordination, Division of Biochemistry and Biotechnology. In each division there are several sections and 
        laboratories dealing with different communicable diseases. The divisions have well equipped laboratories with modern equipments capable 
        of undertaking tests using latest technology. The activities of each division are supervised by an officer in-charge, supported by medical 
        and non-medical scientists, research officers and other technical and paramedical staff. Every Division is equipped with its own 
        independent Seminar Room. The institute has a 24 x 7 Disease Monitoring Cell operating round the clock to respond to enquiries related 
        to disease outbreak along-with video-conferencing facility to interact with the network of disease surveillance centres in the states 
        and districts. The branches are also well equipped and staffed to carry out field studies, training activites and research..</p><br>
 
        <p style="font-weight: bold; font-size: 25px;">National Centre for Disease Control Film (Hindi & English Version)</p>
        <p style="font-weight: bold; font-size: 18px;">
  <a href="https://www.youtube.com/watch?v=MgZ-CZLRivg" target="_blank" style="text-decoration:none; color:#0b77b7;">
    NCDC Film in Hindi Version
  </a>
</p>

        <p style="font-weight: bold; font-size: 18px;">
  <a href="https://www.youtube.com/watch?v=6YzGmkmewBk" target="_blank" style="text-decoration:none; color:#0b77b7;">
    NCDC Film in English Version
  </a>
</p>

</div> 
      
    </section>

    <!-- WHO'S WHO -->
<?php
include("../../config/db.php");

$result = mysqli_query($conn,
  "SELECT * FROM whos_who 
   WHERE status=1 
   ORDER BY division, display_order ASC"
);

$currentDivision = "";
?>


<section id="whoswho" class="tab-content <?= $activeTab == 'whoswho' ? 'active' : '' ?>">

  <h1>Who's Who</h1>

<div class="container">
  <h1>Division Wise Officer List</h1>
  <p class="date">Data as on <strong>08.01.2026</strong></p>

  <!-- Division Card -->
  <div class="division-card">
    <h2>Director Office</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Dr. Ranjan Das</td>
          <td>Director</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Shri Mukesh Kumar</td>
          <td>Private Secretary</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Division Card -->
  <div class="division-card">
    <h2>Biosafety and Biological Threat Reduction Division</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Dr. Naveen Kumar Gupta</td>
          <td>Additional Director & HOD</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Dr. Madhumita Barua (Micro)</td>
          <td>Joint Director & OIC</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Dr. Nidhi Saini (Micro)</td>
          <td>Joint Director</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Dr. Mahesh H. Waghmare</td>
          <td>Joint Director</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Dr. Priyanjali Shingare</td>
          <td>Assistant Director (Micro)</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Dr. Vikash Ranjan</td>
          <td>Assistant Director & OIC of GSS & MT Cell</td>
        </tr>
      </tbody>
    </table>

    <div class="contractual">
      <h3>Contractual</h3>
      <ul>
        <li><strong>Dr. Harshita Singh</strong> – DAD (Micro) (Contract Basis)</li>
      </ul>
    </div>
  </div>


  <!-- Bio-Technology Division & Viral Hepatitis Lab -->
  <div class="division-card">
    <h2>Bio-Technology Division & Viral Hepatitis Lab</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
  <td>1</td>
  <td>Dr. Sandhya Kabra (Micro)</td>
  <td>Additional Director (HAG) & HOD</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr. Partha Rakshit (Micro)</td>
  <td>Joint Director (VH)</td>
</tr>
<tr>
  <td>3</td>
  <td>Dr. Preeti Madan (GDMO)</td>
  <td>CMO (NFSG), NHM, MOH&amp;FW (VH)</td>
</tr>
<tr>
  <td>4</td>
  <td>Dr. Hemlata (Micro)</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>5</td>
  <td>Dr. Hema Gogia (PH)</td>
  <td>Assistant Director (VH)</td>
</tr>
      </tbody>
    </table>
  </div>

    <!-- CE&OH and Climatic Change Health (CE&OH & CCH) -->
  <div class="division-card">
    <h2>CE&OH and Climatic Change Health (CE&OH & CCH)</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
  <td>1</td>
  <td>Dr. Aakash Shrivastava</td>
  <td>Additional Director &amp; Head</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr. Aniket Chowdhury</td>
  <td>Assistant Director</td>
</tr>
<tr>
  <td>3</td>
  <td>Dr. Shubham Yadav</td>
  <td>MO</td>
</tr>
      </tbody>
    </table>
  </div>

      <!-- Centre for AIDS & Related Diseases (CARD) -->
  <div class="division-card">
    <h2>Centre for AIDS & Related Diseases (CARD)</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
  <td>1</td>
  <td>Dr. Monil Singhai</td>
  <td>Joint Director &amp;& &amp;OIC </td>
</tr>
<tr>
  <td>2</td>
  <td>Dr. Patel Pritikumari</td>
  <td>Assistant Director</td>
</tr>
      </tbody>
    </table>
  </div>

  <!-- CENTRE FOR ARBOVIRAL ZOONOTIC DISEASE -->
  <div class="division-card">
    <h2>CENTRE FOR ARBOVIRAL ZOONOTIC DISEASE</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
  <td>1</td>
  <td>Dr. Naveen Kumar Gupta</td>
  <td>Additional Director &amp; HOD</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr Aarti Tewari (Micro)</td>
  <td>Joint Director &amp; OIC</td>
</tr>
<tr>
  <td>3</td>
  <td>Dr. Shubha Garg (Micro)</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>4</td>
  <td>Dr E Kavitha</td>
  <td>Assistant Director (Micro)</td>
</tr>

      </tbody>
    </table>
  </div>

  <!-- Centre for Bacterial Diseases & Drug Resistance -->
  <div class="division-card">
    <h2>Centre for Bacterial Diseases & Drug Resistance</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
  <td>1</td>
  <td>Dr Lata Kapoor (Micro)</td>
  <td>Additional Director &amp; HOD</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr Madhu Raikwar</td>
  <td>Sr. CMO (SAG)</td>
</tr>
<tr>
  <td>3</td>
  <td>Dr Bibhash Nandi (Micro)</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>4</td>
  <td>Dr. Stuti Kaushik</td>
  <td>Assistant Director (Micro)</td>
</tr>
<tr>
  <td>5</td>
  <td>Dr. Anuja Gupta</td>
  <td>Assistant Director (Micro)</td>
</tr>
      </tbody>
    </table>
  </div>

  <!-- Centre for Medical Entomology and Vector Management -->
  <div class="division-card">
    <h2>Centre for Medical Entomology and Vector Management</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
  <td>1</td>
  <td>Dr Shaukat Kamal</td>
  <td>Additional Director &amp; HoD</td>
</tr>
      </tbody>
    </table>
    <div class="contractual">
      <h3>Contractual</h3>
      <ul>
        <li><strong>Mr Ajay Kumar Kumawat</strong> – DAD (Ent.) (Contract Basis)</li>
        <li><strong>Ms Aathira V. Dev</strong> – DAD (Ent.) (Contract Basis)</li>
        <li><strong>Ms K. Aswini</strong> – DAD (Ent.) (Contract Basis)</li>
        <li><strong>Ms Pooja</strong> – DAD (Ent.) (Contract Basis)</li>
      </ul>
    </div>
  </div>

   <!-- CENTRE FOR ONE HEALTH -->
  <div class="division-card">
    <h2>CENTRE FOR ONE HEALTH</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
  <td>1</td>
  <td>Dr. Naveen Kumar Gupta</td>
  <td>Additional Director &amp; HOD</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr. Simmi Tiwari (PH)</td>
  <td>Joint Director &amp; OIC</td>
</tr>
<tr>
  <td>3</td>
  <td>Dr. Ajit Dadaji Shewale (PH)</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>4</td>
  <td>Dr. Jitesh Shamsundar Kuwatada</td>
  <td>Assistant Director</td>
</tr>
      </tbody>
    </table>
  </div>

  <!-- Division for Parasitic Diseases -->
  <div class="division-card">
    <h2>Division for Parasitic Diseases</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
  <td>1</td>
  <td>Dr Arti Bahl</td>
  <td>Addl. Director &amp; HoD</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr Girish Kumar Makhija (PH)</td>
  <td>Joint Director &amp; OIC</td>
</tr>
<tr>
  <td>3</td>
  <td>Dr Raghavendra A. Honnakamble (PH)</td>
  <td>Assistant Director</td>
</tr>
<tr>
  <td>4</td>
  <td>Dr. Ashna Bhasin</td>
  <td>Assistant Director</td>
</tr>
      </tbody>
    </table>
  </div>

   <!-- Enterovirus Division -->
  <div class="division-card">
    <h2>Enterovirus Division</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
  <td>1</td>
  <td>Dr. Simrita Singh (Micro)</td>
  <td>Additional Director &amp; HOD</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr Purva Pankaj Sarkate (Micro)</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>3</td>
  <td>Dr Purbasha Bera (Micro)</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>4</td>
  <td>Dr. Anupam Kumar Anveshi</td>
  <td>Assistant Director (Micro)</td>
</tr>
      </tbody>
    </table>
  </div>

  <!-- Epidemiology Division (EPID) -->
  <div class="division-card">
    <h2>Epidemiology Division (EPID)</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
  <td>1</td>
  <td>Dr Arti Bahl (PH)</td>
  <td>Additional Director &amp; HOD</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr Avdhesh Kumar (PH)</td>
  <td>Advisor</td>
</tr>
<tr>
  <td>3</td>
  <td>Dr Rameshwar Sorokhaibam</td>
  <td>CMO (NFSG)</td>
</tr>
<tr>
  <td>4</td>
  <td>Dr Ramesh Chandra (PH)</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>5</td>
  <td>Dr Suneet Kaur (PH)</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>6</td>
  <td>Mrs. Kanchan Bhardwaj</td>
  <td>Private Secretary</td>
</tr>
      </tbody>
    </table>
  </div>

  <!-- Establishment & Strengthening of New Branches of NCDC -->
  <div class="division-card">
    <h2>Establishment & Strengthening of New Branches of NCDC</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
  <td>1</td>
  <td>Dr. Anubhav Srivastava</td>
  <td>Joint Director &amp; OIC</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr Dhara B Shah (Micro)</td>
  <td>Deputy Director</td>
</tr>
<tr>
  <td>3</td>
  <td>Sh Joy Mukherjee</td>
  <td>Administrative Officer</td>
</tr>
      </tbody>
    </table>
  </div>

  <!-- IDSP -->
  <div class="division-card">
    <h2>Integrated Health Information Platform</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
        <tr>
  <td>1</td>
  <td>Dr Himanshu Chauhan (PH)</td>
  <td>Additional Director &amp; HOD</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr Alok Mathur</td>
  <td>Sr. CMO (SAG)</td>
</tr>
<tr>
  <td>3</td>
  <td>Dr Shikha Vardhan</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>4</td>
  <td>Dr Saurabh Goel (PH)</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>5</td>
  <td>Dr Meera Dhuria</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>6</td>
  <td>Dr Pranay Kumar Verma (PH)</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>7</td>
  <td>Dr Shubhangi D. Kulsange</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>8</td>
  <td>Smt Meenakshi Sharma (SSS)</td>
  <td>Senior Statistical Officer</td>
</tr>
      </tbody>
    </table>
  </div>


  <!-- IHR, Division of Public Health Preparedness & NCD / Biochemistry & Toxicology -->
  <div class="division-card">
    <h2>IHR, Division of Public Health Preparedness & NCD / Biochemistry & Toxicology</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
<tr>
  <td>1</td>
  <td>Dr Meera Dhuria</td>
  <td>Joint Director &amp; OIC</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr Priyanka Kundra</td>
  <td>Senior Medical Officer</td>
</tr>
<tr>
  <td>3</td>
  <td>Dr Gajjala Siva Prasad</td>
  <td>Senior Medical Officer</td>
</tr>
      </tbody>
    </table>
  </div>

  <!-- SM&EC -->
  <div class="division-card">
    <h2>SM&EC</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
<tr>
  <td>1</td>
  <td>Sh. Sunil Prakash Bhardwaj</td>
  <td>Additional Director & HoD and PBA (Admin & Finance)</td>
</tr>
      </tbody>
    </table>
  </div>

    <!-- PLANNING BUDGETING & ADMINISTRATION (PBA) -->
  <div class="division-card">
    <h2>PLANNING BUDGETING & ADMINISTRATION (PBA)</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
<tr>
  <td>1</td>
  <td>Sh. Sunil Prakash Bhardwaj</td>
  <td>Additional Director (HAG) &amp; HoD and PBA (Admin &amp; Finance)</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr Sanket Vasant Kulkarni (PH)</td>
  <td>Joint Director &amp; HOD (PBA)</td>
</tr>
<tr>
  <td>3</td>
  <td>Sh Prakash Doval</td>
  <td>Assistant Director (Admn.)</td>
</tr>
<tr>
  <td>4</td>
  <td>Sh Balram Kashyap</td>
  <td>Administrative Officer &amp; Security Officer</td>
</tr>
      </tbody>
    </table>
  </div>

   <!-- FINANCE -->
  <div class="division-card">
    <h2>FINANCE</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
<tr>
  <td>1</td>
  <td>Sh. Sunil Prakash Bhardwaj</td>
  <td>Additional Director &amp; HoD and PBA (Admin &amp; Finance)</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr Ramesh Chandra (PH)</td>
  <td>Joint Director &amp; HOD (PBA-Finance) and DDO</td>
</tr>
<tr>
  <td>3</td>
  <td>Sh Atul Kumar Shukla</td>
  <td>SSO</td>
</tr>
      </tbody>
    </table>
  </div>

     <!-- PARLIAMENT & COORDINATION CELL -->
  <div class="division-card">
    <h2>PARLIAMENT & COORDINATION CELL</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
<tr>
  <td>1</td>
  <td>Dr Arti Bahl</td>
  <td>Addl. Director &amp; HoD</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr Ashna Bhasin</td>
  <td>Assistant Director</td>
</tr>
<tr>
  <td>3</td>
  <td>Dr Anupam Kumar Anveshi</td>
  <td>Assistant Director (Micro)</td>
</tr>
      </tbody>
    </table>
  </div>

      <!-- NCDC UPGRADATION CELL -->
  <div class="division-card">
    <h2>NCDC UPGRADATION CELL</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
<tr>
  <td>1</td>
  <td>Dr Hema Gogia</td>
  <td>Assistant Director (PH) & OIC</td>
</tr>
      </tbody>
    </table>
  </div>

        <!-- NCDC MAINTENANCE CELL -->
  <div class="division-card">
    <h2>NCDC MAINTENANCE CELL</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
<tr>
  <td>1</td>
  <td>Dr Rameshwar Sorokhaibam</td>
  <td>Joint Director & HOD</td>
</tr>
      </tbody>
    </table>
  </div>

        <!-- LIBRARY -->
  <div class="division-card">
    <h2>LIBRARY</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
<tr>
  <td>1</td>
  <td>Dr Madhu Raikwar</td>
  <td>Sr. CMO (SAG) & HOD</td>
</tr>
<tr>
  <td>2</td>
  <td>Sh P S Hada</td>
  <td>Asstt. Lib. & Inf. Officer</td>
</tr>
      </tbody>
    </table>
  </div>

         <!-- STORES -->
  <div class="division-card">
    <h2>STORES</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
<tr>
  <td>1</td>
  <td>Dr Ankur Garg</td>
  <td>Deputy Director & HOD</td>
</tr>
      </tbody>
    </table>
  </div>

           <!-- NCDC (HQ) – CONSULTANTS & ADVISORS -->
  <div class="division-card">
    <h2>NCDC (HQ) – CONSULTANTS & ADVISORS</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
<tr>
  <td>1</td>
  <td>Dr Anil Kumar</td>
  <td>Principal Advisor</td>
</tr>
<tr>
  <td>2</td>
  <td>Mrs Manjeet Sharma</td>
  <td>Private Secretary</td>
</tr>
      </tbody>
    </table>
  </div>

            <!-- Dte GHS (Nirman Bhawan Delhi) -->
  <div class="division-card">
    <h2>Dte GHS (Nirman Bhawan Delhi)</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
<tr>
  <td>1</td>
  <td>Dr Nishant Kumar (PH)</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>2</td>
  <td>Dr Rupali Roy (PH)</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>3</td>
  <td>Dr Navin Verma</td>
  <td>Joint Director</td>
</tr>
<tr>
  <td>4</td>
  <td>Dr Avinash Sunthlia (GDMO)</td>
  <td>Senior Medical Officer &amp; Chief Security Officer</td>
</tr>

      </tbody>
    </table>
  </div>
  <h1>Branches</h1>

              <!-- NCDC, Kozhikode Branch -->
  <div class="division-card">
    <h2>NCDC, Kozhikode Branch</h2>
    <table>
      <thead>
        <tr>
          <th>S.No</th>
          <th>Name of Officer</th>
          <th>Designation</th>
        </tr>
      </thead>
      <tbody>
<tr>
  <td>1</td>
  <td>Dr. Shilpa Krishna K.</td>
  <td>MO &amp; OIC &amp; DDO</td>
</tr>
      </tbody>
    </table>
    <div class="contractual">
      <h3>Contractual</h3>
      <ul>
        <li><strong>Ms Athira Sugathan</strong> – DAD (Ent.) (Contract Basis)</li>
        <li><strong>Dr J Selvakumari</strong> – DAD (Ent.) (Contract Basis)</li>
      </ul>
    </div>
  </div>

  <!-- NCDC, Jaipur Branch -->
<div class="division-card">
  <h2>NCDC, Jaipur Branch</h2>
  <table>
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name of Officer</th>
        <th>Designation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Dr Naveen Chharang</td>
        <td>Additional Director &amp; OIC</td>
      </tr>
    </tbody>
  </table>
</div>

<!-- NCDC, Bengaluru Branch -->
<div class="division-card">
  <h2>NCDC, Bengaluru Branch</h2>
  <table>
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name of Officer</th>
        <th>Designation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Dr Sayana Bhaskaran</td>
        <td>SMO &amp; OIC &amp; DDO</td>
      </tr>
    </tbody>
  </table>
  <div class="contractual">
      <h3>Contractual</h3>
      <ul>
        <li><strong>Mrs. Monika Singh</strong> – DAD (Micro.) (Contract Basis)</li>
      </ul>
    </div>
</div>

<!-- NCDC, Raipur Branch -->
<div class="division-card">
  <h2>NCDC, Raipur Branch</h2>
  <table>
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name of Officer</th>
        <th>Designation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Dr Sandeep S. Jogdand</td>
        <td>Joint Director &amp; OIC (Additional Charge)</td>
      </tr>
    </tbody>
  </table>
  <div class="contractual">
      <h3>Contractual</h3>
      <ul>
        <li><strong>Mr T A Arvind</strong> – DAD (Ent.) (Contract Basis)</li>
      </ul>
    </div>
</div>

<!-- NCDC, Mangalagiri Branch -->
<div class="division-card">
  <h2>NCDC, Mangalagiri Branch</h2>
  <table>
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name of Officer</th>
        <th>Designation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Dr. Praveen Madala</td>
        <td>Joint Director &amp; OIC &amp; DDO</td>
      </tr>
    </tbody>
  </table>
</div>

<!-- NCDC, Patna Branch -->
<div class="division-card">
  <h2>NCDC, Patna Branch</h2>
  <table>
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name of Officer</th>
        <th>Designation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Dr Mazhar Hussain</td>
        <td>Chief Medical Officer (NFSG) &amp; OIC &amp; DDO</td>
      </tr>
    </tbody>
  </table>
</div>

<!-- NCDC, Chennai Branch -->
<div class="division-card">
  <h2>NCDC, Chennai Branch</h2>
  <table>
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name of Officer</th>
        <th>Designation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Dr. Ardra Kurian</td>
        <td>SMO &amp; OIC &amp; DDO</td>
      </tr>
    </tbody>
  </table>
</div>

<!-- NCDC, Varanasi Branch -->
<div class="division-card">
  <h2>NCDC, Varanasi Branch</h2>
  <table>
    <thead>
      <tr>
        <th>S.No</th>
        <th>Name of Officer</th>
        <th>Designation</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Dr Prateek Kumar Singh</td>
        <td>Senior Medical Officer &amp; OIC</td>
      </tr>
    </tbody>
  </table>
</div>
  <!-- Repeat same structure for other divisions -->
</div>

</body>
</html>

</section>

<!-- mandate -->
<section id="mandate" class="tab-content <?= $activeTab == 'mandate' ? 'active' : '' ?>">
  <?php include("mandate.php"); ?>
</section>

   

<!-- ACHIEVEMENTS -->
<section id="achievements" class="tab-content <?= $activeTab == 'achievements' ? 'active' : '' ?>">
  <?php include("achievement.php"); ?>
</section>



    <!-- FUNCTIONS -->
    <section id="functions" class="tab-content <?= $activeTab == 'functions' ? 'active' : '' ?>">
  <?php include("functions.php"); ?>
</section>

    <!-- OTHER SECTIONS (EMPTY FOR NOW) -->
    <section id="former" class="tab-content <?= $activeTab == 'former' ? 'active' : '' ?>">
  <?php include("former_director.php"); ?>
</section>

<section id="staff" class="tab-content <?= $activeTab == 'staff' ? 'active' : '' ?>">
  <?php include("ncdc_staff.php"); ?>
</section>

<section id="structure" class="tab-content <?= $activeTab == 'structure' ? 'active' : '' ?>">
  <?php include("Organisations_Structure.php"); ?>
</section>

<section id="committee" class="tab-content <?= $activeTab == 'committee' ? 'active' : '' ?>">
  <?php include("Institutional_Committee.php"); ?>
</section>

<section id="Administrative" class="tab-content <?= $activeTab == 'Administrative' ? 'active' : '' ?>">
  <?php include("Administrative.php"); ?>
</section>

<section id="centersandivision" class="tab-content <?= $activeTab == 'centersandivision' ? 'active' : '' ?>">
  <?php include("centersandivision.php"); ?>
</section>

    

  </main>
</div>

<script>
const tabs = document.querySelectorAll(".about-sidebar li");
const contents = document.querySelectorAll(".tab-content");

tabs.forEach(tab => {
  tab.addEventListener("click", () => {

    // Remove active class
    tabs.forEach(t => t.classList.remove("active"));
    contents.forEach(c => c.classList.remove("active"));

    // Add active class
    tab.classList.add("active");
    document.getElementById(tab.dataset.tab).classList.add("active");
  });
});

</script>
<?php include("../footer.php"); ?>
