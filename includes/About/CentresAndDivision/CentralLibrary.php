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
.about-page{
  display:flex;
  gap:30px;
  width:100%;
  margin:0;             
  padding:30px 40px;
  align-items:flex-start;
}

/* SIDEBAR */
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
.back-btn{
  display:inline-block;
  margin-bottom:15px;
  padding:8px 16px;
  background:#0b77b7;
  color:#fff;
  text-decoration:none;
  border-radius:6px;
  font-size:14px;
  font-weight:500;
  transition:0.3s;
}

.back-btn:hover{
  background:#095a8a;
}
.about-main{
  flex:1;
}
.tab-content{
  display:none;
}
.tab-content.active{
  display:block;
}

.breadcrumb{
  font-size:14px;
  color:#0b77b7;
}
.library-section {
  max-width: 1100px;
  margin: 40px auto;
  padding: 30px;
  background: #ffffff;
  font-family: "Times New Roman", serif;
  color: #555;
  line-height: 1.7;
  box-shadow: 0 0 10px rgba(0,0,0,0.05);
}

.library-section h2 {
  text-align: center;
  font-size: 28px;
  color: #2c3e50;
  margin-bottom: 20px;
  border-bottom: 2px solid #ddd;
  padding-bottom: 10px;
}

.library-section p {
  font-size: 16px;
  margin-bottom: 12px;
  text-align: justify;
}

.library-section ul {
  margin: 15px 0 15px 30px;
}

.library-section ul li {
  font-size: 16px;
  margin-bottom: 8px;
}
/* ===== LIBRARY IMAGE GALLERY ===== */
.library-gallery{
  margin-top:30px;
}

.gallery-slider{
  position:relative;
  max-width:100%;
  overflow:hidden;
  border-radius:10px;
}

.gallery-slider img{
  width:100%;
  height:420px;
  object-fit:cover;
  display:none;
}

.gallery-slider img.active{
  display:block;
}

.gallery-btn{
  position:absolute;
  top:50%;
  transform:translateY(-50%);
  background:rgba(11,119,183,0.8);
  color:#fff;
  border:none;
  font-size:22px;
  width:40px;
  height:40px;
  border-radius:50%;
  cursor:pointer;
}

.gallery-btn.left{
  left:15px;
}

.gallery-btn.right{
  right:15px;
}


/* ===== CONTACT US SECTION ===== */
.contact-section{
  max-width:900px;
  background:#ffffff;
  padding:30px;
  border-radius:10px;
  box-shadow:0 0 10px rgba(0,0,0,0.05);
  font-family:"Times New Roman", serif;
  color:#555;
}

.contact-section h2{
  font-size:26px;
  color:#2c3e50;
  margin-bottom:20px;
  border-bottom:2px solid #ddd;
  padding-bottom:10px;
}

.contact-item{
  display:flex;
  margin-bottom:15px;
  font-size:16px;
}

.contact-item span{
  min-width:180px;
  font-weight:600;
  color:#333;
}

/* ===============================
   RESPONSIVE STAFF SECTION
================================ */

.staff-section{
  padding: 20px;
}

/* Titles */
.section-title{
  font-size: 26px;
  margin-bottom: 20px;
}

.sub-title{
  font-size: 18px;
  margin: 25px 0 15px;
  font-weight: 600;
}

/* Staff Card */
.staff-card.horizontal{
  display: flex;
  align-items: center;
  background: #f1f1f1;
  border-radius: 8px;
  padding: 15px;
  margin-bottom: 15px;
  gap: 20px;
}

/* Staff Image */
.staff-card img{
  width: 110px;
  height: 130px;
  object-fit: cover;
  border-radius: 6px;
  background: #fff;
  flex-shrink: 0;
}

/* Staff Info */
.staff-info{
  flex: 1;
}

.staff-info h4{
  font-size: 18px;
  margin-bottom: 6px;
}

.staff-info p{
  margin: 3px 0;
  color: #444;
  font-size: 15px;
}

.staff-info .email{
  margin-top: 6px;
  color: #0c4da2;
  word-break: break-word;
}

.no-data{
  color: #777;
  font-style: italic;
}


/* ===============================
   TABLET VIEW (≤ 768px)
================================ */
@media (max-width: 768px){
  .section-title{
    font-size: 22px;
  }

  .sub-title{
    font-size: 17px;
  }

  .staff-card.horizontal{
    padding: 12px;
  }

  .staff-card img{
    width: 95px;
    height: 115px;
  }

  .staff-info h4{
    font-size: 16px;
  }

  .staff-info p{
    font-size: 14px;
  }
}


/* ===============================
   MOBILE VIEW (≤ 480px)
================================ */
@media (max-width: 480px){

  .staff-section{
    padding: 15px;
  }

  .section-title{
    font-size: 20px;
    text-align: center;
  }

  .sub-title{
    font-size: 16px;
    text-align: center;
  }

  .staff-card.horizontal{
    flex-direction: column;
    text-align: center;
  }

  .staff-card img{
    width: 120px;
    height: 140px;
    margin: 0 auto 10px;
  }

  .staff-info h4{
    font-size: 17px;
  }

  .staff-info p{
    font-size: 14px;
  }
}




@media(max-width:600px){
  .contact-item{
    flex-direction:column;
  }
  .contact-item span{
    margin-bottom:5px;
  }
}






/* RESPONSIVE */
@media(max-width:480px){
  .header-image{
    height:140px;
  }
  .about-page{
    flex-direction:column;
    padding:20px 15px;
  }
  .about-sidebar{
    width:100%;
  }
   .library-section {
    padding: 20px;
  }
  .library-section h2 {
    font-size: 24px;
  }
  .gallery-slider img{
    height:260px;
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
    <div class="breadcrumb">Home › Centre and Division of NCDC › Central Library </div><BR><BR>
    <h1>Central Library</h1>
<!-- Introduction -->
    <div id="tab1" class="tab-content active">
  <div class="library-section">

    <h2>Brief Note on Central Library</h2>

    <p>
      NCDC is the prestigious library in the country, which has got archival literature in the field of Malaria and other vector borne 
      diseases prevalent in the country. One Archival book on Entomology published as early as <strong>1745</strong> is available in the library.
    </p>

    <p>
      The library has literature on all the vector-borne diseases, Bacteriology, Parasitology, Microbiology, Infectious Diseases, 
      Mycology, Biochemistry and Immunology etc.
    </p>

    <ul>
      <li>The NCDC library has a total of 37724 books and bound journals, 123 Thesis/ Dissertation.</li>
      <li>Library provides internet & Wi-fi facilities to faculty and users of the Library</li>
      <li>Books and Journals are issued to members on demand following rules and regulations.</li>
      <li>Readers from other institutions/organizations are allowed only for consultation.</li>
    </ul>

    <p>
      The library subscribes <strong>newspapers (45) and Magazines (32),</strong> both in English and Hindi. Daily Health news clippings are scanned from the 
      selected English and Hindi Newspapers and Magazines. The news items on subjects related to health and diseases are retrieved and provided 
      for information to Director, NCDC.
    </p>

    <ul>
      <li>Books on Administration, Accounts, Budget, Service & legal matter and RTI were also procured on demand.</li>
      <li>Regularly provides literature (CD-Alert, Laboratory Manuals) on various subjects of interest to the research workers and participants attending various courses at the Institute.</li>
      <li>Library provides manuals and other materials published by NCDC/NCVBDC.</li>
      <li>Provides photocopying and reference Services to the readers and the faculty on request.</li>
      <li>Works of Accessioning, Classification, Cataloguing and filing of Cataloguing cards are done.</li>
      <li>Reference articles are arranged from National Medical Library and provided on request to the members of the Library</li>
      <li>Daily shelving work for arranging of books, journals, Newspapers /Magazines/bound volumes/Non serial publications/WHO publication(about 40-50 books).</li>
      <li>Daily counter work which includes issue/return of books.</li>
      <li>Annual Reports are received from other organizations / Institutes and kept for reference in the library.</li>
    </ul>

    <div class="library-gallery">
  <!-- <h2>Central Library Gallery</h2> -->

  <div class="gallery-slider">
    <img src="/NCDC_MOHFW/uploads/images/central_library_1.jpg" class="active" alt="Central Library View">
    <img src="/NCDC_MOHFW/uploads/images/central_library_2.jpg" alt="Library Reading Area">
    <img src="/NCDC_MOHFW/uploads/images/central_library_3.jpg" alt="Library Book Shelves">

    <button class="gallery-btn left" onclick="prevImage()">‹</button>
    <button class="gallery-btn right" onclick="nextImage()">›</button>
  </div>
</div>
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
  AND division = 'Central Library'
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
              AND division = 'Central Library'
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



<div id="tab3" class="tab-content"></div>
<div id="tab4" class="tab-content"></div>
<div id="tab5" class="tab-content"></div>
<div id="tab6" class="tab-content"></div>

<!--Contact US -->
<div id="tab7" class="tab-content">
  <div class="contact-section">

    <h2>Contact Us</h2>

    <div class="contact-item">
      <span>Full Mailing Address:</span>
      <div>
        Central Library,<br>
        National Centre for Disease Control,<br>
        Ministry of Health and Family Welfare.
      </div>
    </div>

    <div class="contact-item">
      <span>Email:</span>
      <div>N/A</div>
    </div>

    <div class="contact-item">
      <span>Phone:</span>
      <div>011-23966065</div>
    </div>

    <div class="contact-item">
      <span>Fax:</span>
      <div>N/A</div>
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

let currentIndex = 0;
const images = document.querySelectorAll('.gallery-slider img');

function showImage(index){
  images.forEach(img => img.classList.remove('active'));
  images[index].classList.add('active');
}

function nextImage(){
  currentIndex = (currentIndex + 1) % images.length;
  showImage(currentIndex);
}

function prevImage(){
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  showImage(currentIndex);
}
</script>

<?php include("../../footer.php"); ?>
