<?php include("../header.php"); ?>

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="Header Image of NCDC Website">
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
  display:block;
}

/* ===== PAGE LAYOUT ===== */
.about-page{
  display:flex;
  gap:30px;
  padding:20px 40px;
  align-items:flex-start;
}

/* ===== SIDEBAR ===== */
.about-sidebar{
  width:260px;
  background:#f5f9fc;
  border-radius:10px;
  padding:15px;
  height:fit-content;
  position:sticky;
  top:20px;
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
}

.breadcrumb{
  font-size:14px;
  margin-bottom:15px;
}

.about-main h1{
  font-size:30px;
  margin-bottom:20px;
}

.about-main p,
.about-main li{
  font-family:"Times New Roman", Times, serif;
  font-size:17px;
  line-height:1.8;
  text-align:justify;
}

/* ===== TAB CONTENT ===== */
.tab-content{
  display:none;
}

.tab-content.active{
  display:block;
}

/* ===== MICROVIDEOS ===== */
.video-btn{
  background:none;
  border:none;
  color:#0b77b7;
  font-size:18px;
  cursor:pointer;
  padding:0;
  font-family:"Times New Roman", Times, serif;
}

.video-btn::before{
  content:"▶ ";
  font-weight:bold;
}

.video-btn:hover{
  text-decoration:underline;
}

.video-box{
  margin-top:25px;
  display:none;
}

.video-box video{
  width:100%;
  max-width:800px;
  border-radius:6px;
  border:1px solid #ccc;
  background:#000;
}

.nipah-pdf-list {
  list-style: none;
  padding: 0;
  margin: 20px 0;
}

.nipah-pdf-list li {
  margin-bottom: 12px;
}

.nipah-pdf-list a {
  text-decoration: none;
  color: #0b77b7;
  font-size: 17px;
  display: flex;
  align-items: center;
}

.nipah-pdf-list a:hover {
  text-decoration: underline;
}

.pdf-icon {
  display: inline-block;
  width: 28px;
  height: 28px;
  background: url('https://upload.wikimedia.org/wikipedia/commons/8/87/PDF_file_icon.svg') no-repeat center center;
  background-size: contain;
  margin-right: 8px;
}

/* ===== RESPONSIVE ===== */
@media(max-width:768px){
  .header-image{
    height:180px;
  }
  .about-page{
    flex-direction:column;
    padding:15px;
  }
  .about-sidebar{
    width:100%;
    position:relative;
  }
  .about-main{
    margin-top:20px;
  }
  .video-btn{
    font-size:16px;
  }
}

@media(max-width:480px){
  .header-image{
    height:140px;
  }
}

/* ===== MOBILE RESPONSIVE ===== */
@media(max-width: 768px){
  .nipah-pdf-list a {
    font-size: 16px;
  }

  .pdf-icon {
    width: 24px;
    height: 24px;
    margin-right: 6px;
  }
}

@media(max-width: 480px){
  .nipah-pdf-list a {
    font-size: 15px;
    flex-wrap: wrap;
  }

  .pdf-icon {
    width: 20px;
    height: 20px;
    margin-bottom: 4px;
  }
}

</style>

<!-- PAGE CONTENT -->
<div class="about-page">

  <!-- LEFT SIDEBAR -->
  <aside class="about-sidebar">
    <ul>
      <li class="active" data-tab="about">Health Information</li>
      <li data-tab="ICE">IEC Material on AMR</li>
      <li data-tab="nipah">Nipah Virus Guidelines</li>
    </ul>
  </aside>

  <!-- RIGHT CONTENT -->
  <main class="about-main">

    <div class="breadcrumb">
      Home › IEC on AMR
    </div>

    <!-- TAB 1 -->
    <div id="about" class="tab-content active">
      <h1>Health Information</h1>
      <p>
        This section provides health-related information and resources
        for professionals and the general public.
      </p>
    </div>

    <!-- TAB 2 -->
    <div id="ICE" class="tab-content">
      <h1>IEC on AMR (Healthcare & Para-professionals)</h1>

      <ol>
        <li>
          <button class="video-btn"
            data-video="https://ncdc.mohfw.gov.in/wp-content/uploads/2026/01/Merged-English-Microvideos-Healthcare-Professional.mp4">
            English Microvideos – Healthcare Professional
          </button>
        </li>

        <li>
          <button class="video-btn"
            data-video="https://ncdc.mohfw.gov.in/wp-content/uploads/2026/01/Merged-Hindi-Microvideos-Healthcare-Professional.mp4">
            Hindi Microvideos – Healthcare Professional
          </button>
        </li>

        <li>
    <!-- Posters English link -->
    <a href="/NCDC_MOHFW/uploads/pdf/Merge-Posters-in-English-Healthcare-Professional.pdf"
       target="_blank"
       style="color:#0b77b7; text-decoration:none; font-size:17px;">
       <strong>Posters in English Healthcare Professional
</strong>
    </a>
  </li>

  <li>
    <!-- Posters Hindi link -->
    <a href="/NCDC_MOHFW/uploads/pdf/Merged-posters-in-Hindi-Healthcare-Professional.pdf"
       target="_blank"
       style="color:#0b77b7; text-decoration:none; font-size:17px;">
       <strong>Posters in Hindi Healthcare Professional
</strong>
    </a>
  </li>
      </ol>

      

      <!-- VIDEO PLAYER -->
      <div class="video-box">
        <video id="amrVideo" controls>
          <source src="" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>

    <!-- TAB 3 -->
    <div id="nipah" class="tab-content">
    
  <h1>Nipah Virus Guidelines</h1>
  <p>
    As per the latest report of the Central High Level Team, Nipah Virus Disease is not a major outbreak and only local occurrence limited
    to two districts in Kerala i.e. Kozhikode & Malappuram. Available data suggests that there is no need for the general public to be
    apprehensive about the safety of individuals and their family members. The Ministry of Health and Family Welfare is closely monitoring the situation.
  </p>

  <p><strong>The advisory needs to be viewed in this context.</strong></p>

  <ul class="nipah-pdf-list">
    <li>
      <a href="/NCDC_MOHFW/uploads/pdf/NIPAH-Virus-Disease-Information-for-General-Public.pdf" target="_blank">
        <span class="pdf-icon"></span> Information about NIPAH Virus Disease (108 KB)
      </a>
    </li>
    <li>
      <a href="/NCDC_MOHFW/uploads/pdf/Advisory-for-Health-Care-Personnel.pdf" target="_blank">
        <span class="pdf-icon"></span> Advisory for Health Care Personnel (302 KB)
      </a>
    </li>
    <li>
      <a href="/NCDC_MOHFW/uploads/pdf/Case-Definitions-of-NIPAH-Virus-Disease.pdf" target="_blank">
        <span class="pdf-icon"></span> Case Definitions of NIPAH Virus Disease (192 KB)
      </a>
    </li>
    <li>
      <a href="#" target="_blank">
        <span class="pdf-icon"></span> Guidelines for Sample Collection from NIPAH Virus Case (123 KB)
      </a>
    </li>
    <li>
      <a href="#" target="_blank">
        <span class="pdf-icon"></span> Bio Safety Manual
      </a>
    </li>
    <li>
      <a href="/NCDC_MOHFW/uploads/pdf/NIPAHPamphlet.pdf" target="_blank">
        <span class="pdf-icon"></span> Poster 1
      </a>
    </li>
  </ul>

  <p><strong>Treatment Guidelines for Kerala: Nipah Virus Disease</strong></p>
  <ul class="nipah-pdf-list">
    <li>
      <a href="/NCDC_MOHFW/uploads/pdf/1-23707909461527931362.pdf" target="_blank">
        <span class="pdf-icon"></span> Treatment Guidelines for Kerala: Nipah Virus Disease(Part 1) (817 KB)
      </a>
    </li>
    <li>
      <a href="/NCDC_MOHFW/uploads/pdf/2-93768287831527931318.pdf" target="_blank">
        <span class="pdf-icon"></span> Treatment Guidelines for Kerala: Nipah Virus Disease(Part 2) (948 KB)
      </a>
    </li>
    <li>
      <a href="/NCDC_MOHFW/uploads/pdf/3-80723795631527931289.pdf" target="_blank">
        <span class="pdf-icon"></span> Treatment Guidelines for Kerala: Nipah Virus Disease(Part 3) (804 KB)
      </a>
    </li>
</ul> 
</div>


  </main>
</div>

<!-- SCRIPTS -->
<script>
document.addEventListener("DOMContentLoaded", function () {

  const tabs = document.querySelectorAll(".about-sidebar li");
  const contents = document.querySelectorAll(".tab-content");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {

      tabs.forEach(t => t.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));

      tab.classList.add("active");
      document.getElementById(tab.dataset.tab).classList.add("active");

      // stop video when changing tab
      const video = document.getElementById("amrVideo");
      if(video){
        video.pause();
      }
      document.querySelector(".video-box").style.display = "none";
    });
  });

  // Video play
  document.querySelectorAll(".video-btn").forEach(btn => {
    btn.addEventListener("click", function () {
      const video = document.getElementById("amrVideo");
      const videoBox = document.querySelector(".video-box");
      video.src = this.dataset.video;
      videoBox.style.display = "block";
      video.play();
    });
  });

});
</script>

<?php include("../footer.php"); ?>
