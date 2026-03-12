<?php include("../header.php"); ?>

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

/* ===== SECOND SIDEBAR ===== */
.disease-sidebar{
  width:230px;
  background:#f5f9fc;
  border-radius:10px;
  padding:15px;
  display:none;
}

.disease-sidebar h4{
  font-size:16px;
  margin-bottom:10px;
  border-bottom:2px solid #0fa6a6;
  padding-bottom:5px;
}

.disease-sidebar ul{
  list-style:none;
  padding:0;
}

.disease-sidebar li{
  padding:10px;
  cursor:pointer;
  border-radius:6px;
}

.disease-sidebar li.active,
.disease-sidebar li:hover{
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
</style>

<!-- PAGE CONTENT -->
<div class="about-page">

  <!-- LEFT SIDEBAR -->
  <aside class="about-sidebar">
    <ul>
      <li class="active" data-tab="ICE1">IEC on Non-Communicable Diseases</li>
      <li data-tab="ICE2">IEC Material on Zoonotic Disease</li>
      <li data-tab="ICE3">IEC Material in English and Hindi for 2019 nCoV</li>
      <li data-tab="ICE4">IEC on AMR (General Public)</li>
    </ul>
  </aside>

  <!-- SECOND SIDEBAR -->
  <aside class="disease-sidebar" id="diseaseSidebar">
    <h4>Zoonotic Diseases</h4>
    <ul>
      <li data-disease="Anthrax">Anthrax</li>
      <li data-disease="Brucellosis">Brucellosis</li>
      <li data-disease="CCHF">CCHF</li>
      <li data-disease="KFD">KFD</li>
      <li data-disease="NIPAH">NIPAH</li>
      <li data-disease="Rabies">Rabies</li>
      <li data-disease="Scrub Typhus">Scrub Typhus</li>
      <li data-disease="Leptospirosis">Leptospirosis</li>
      <li data-disease="Snake Bite">Snake Bite</li>
    </ul>
  </aside>

  <!-- RIGHT CONTENT -->
  <main class="about-main">

    <div class="breadcrumb">Home › IEC</div>

    <!-- TAB 1 -->
    <div id="ICE1" class="tab-content active">
      <h1>IEC on Non-Communicable Diseases</h1>
      <ol>
        <li><a href="/NCDC_MOHFW/uploads/pdf/Diabetes Mellitus English FAQs.pdf" target="_blank">Diabetes Mellitus English FAQs<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/Diabetes Mellitus Hindi FAQ.pdf" target="_blank">Diabetes Mellitus Hindi FAQs<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/Hypertension English FAQs.pdf" target="_blank">Hypertension English FAQs<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/Hypertension Hindi FAQs.pdf" target="_blank">Hypertension Hindi FAQs<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/Obesity English FAQs.pdf" target="_blank">Obesity English FAQs<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/Obesity Hindi FAQs.pdf" target="_blank">Obesity Hindi FAQs<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
      </ol>
    </div>

    <!-- TAB 2 -->
    <div id="ICE2" class="tab-content">
      <h1>IEC Material on Zoonotic Disease</h1>
      <div id="diseaseContent">
        <p>Please select a disease from the sidebar.</p>
      </div>
    </div>

    <!-- TAB 3 -->
    <div id="ICE3" class="tab-content">
      <h1>IEC Material in English and Hindi for 2019 nCoV</h1>
      <ol>
        <li><a href="/NCDC_MOHFW/uploads/pdf/9901658731580990655.pdf" target="_blank">ENG POSTER 1(2034 KB)<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/72376594811580990705.pdf" target="_blank">ENG POSTER 2(2159 KB)<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/35145498521580990783.pdf" target="_blank">ENG China Poster 3(2136 KB)<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/484495991580990823.pdf" target="_blank">ENG POSTER 4(1996 KB)<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/15453498041580998555.pdf" target="_blank">Hindi POSTER 1(1885 KB)s<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/51284310011580998584.pdf" target="_blank">Hindi POSTER 2(2027 KB)<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/7536476681580998615.pdf" target="_blank">Hindi China Poster 3(1987 KB)<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/71991413251580998639.pdf" target="_blank">Hindi POSTER 4(1857 KB)<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/18888913411654849546.pdf" target="_blank">Poster 1<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
      </ol>
    </div>

    <!-- TAB 4 -->
    <div id="ICE4" class="tab-content">
      <h1>IEC on AMR (General Public)</h1>
    </div>

  </main>
</div>

<script>
document.addEventListener("DOMContentLoaded", function(){

  const tabs = document.querySelectorAll(".about-sidebar li");
  const contents = document.querySelectorAll(".tab-content");
  const diseaseSidebar = document.getElementById("diseaseSidebar");

  tabs.forEach(tab=>{
    tab.addEventListener("click", ()=>{
      tabs.forEach(t=>t.classList.remove("active"));
      contents.forEach(c=>c.classList.remove("active"));

      tab.classList.add("active");
      document.getElementById(tab.dataset.tab).classList.add("active");

      diseaseSidebar.style.display = (tab.dataset.tab === "ICE2") ? "block" : "none";
    });
  });

  // Disease click
  document.querySelectorAll(".disease-sidebar li").forEach(disease=>{
    disease.addEventListener("click", ()=>{
      document.querySelectorAll(".disease-sidebar li")
        .forEach(d=>d.classList.remove("active"));

      disease.classList.add("active");

      if(disease.dataset.disease === "Anthrax"){
        document.getElementById("diseaseContent").innerHTML = `
          <h2>Anthrax</h2>
          <ul>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Anthrax Billboard.pdf" 
                 target="_blank">
                Anthrax Billboard <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Anthrax Book.pdf" 
                 target="_blank">
                Anthrax Book <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Anthrax Pamphlet.pdf" 
                 target="_blank">
                Anthrax Pamphlet <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Anthrax Poster.pdf" 
                 target="_blank">
                Anthrax Poster <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
          </ul>
        `;
      }

      if(disease.dataset.disease === "Brucellosis"){
        document.getElementById("diseaseContent").innerHTML = `
          <h2>Brucellosis</h2>
          <ul>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Brucellosis Billboard.pdf" 
                 target="_blank">
                Brucellosis Billboard <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Brucellosis Book.pdf" 
                 target="_blank">
                Brucellosis Book <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Brucellosis Pamphlet.pdf" 
                 target="_blank">
                Brucellosis Pamphlet <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Brucellosis Poster.pdf" 
                 target="_blank">
                Brucellosis Poster <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
          </ul>
        `;
      }

      if(disease.dataset.disease === "CCHF"){
        document.getElementById("diseaseContent").innerHTML = `
          <h2>CCHF</h2>
          <ul>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/CCHF Pamphlet.pdf" 
                 target="_blank">
                CCHF Pamphlet <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
          </ul>
        `;
      }

      if(disease.dataset.disease === "KFD"){
        document.getElementById("diseaseContent").innerHTML = `
          <h2>KFD</h2>
          <ul>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/KFD Billboard.pdf" 
                 target="_blank">
                KFD Billboard <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/KFD Book.pdf" 
                 target="_blank">
                KFD Book <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/KFD Pamphlet.pdf" 
                 target="_blank">
                KFD Pamphlet <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/KFD Poster.pdf" 
                 target="_blank">
                KFD Poster <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
          </ul>
        `;
      }

      if(disease.dataset.disease === "NIPAH"){
        document.getElementById("diseaseContent").innerHTML = `
          <h2>NIPAH</h2>
          <ul>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/NIPAH Pamphlet.pdf" 
                 target="_blank">
                NIPAH Pamphlet <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
          </ul>
        `;
      }

      if(disease.dataset.disease === "Rabies"){
        document.getElementById("diseaseContent").innerHTML = `
          <h2>Rabies</h2>
          <ul>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Rabies Billboard.pdf" 
                 target="_blank">
                Rabies Billboard <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Rabies Book.pdf" 
                 target="_blank">
                Rabies Book <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/PEP-Protocal.pdf" 
                 target="_blank">
                PEP-Protocol <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Decision-Tree-Poster.pdf" 
                 target="_blank">
                Decision Tree Poster <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="https://rabiesfreeindia.mohfw.gov.in/iec" 
                 target="_blank">
                For IEC Material on Rabies...Click Here
              </a>
            </li>
          </ul>
        `;
      }

      if(disease.dataset.disease === "Scrub Typhus"){
        document.getElementById("diseaseContent").innerHTML = `
          <h2>Scrub Typhus</h2>
          <ul>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Scrub Typhus Billboard.pdf" 
                 target="_blank">
                Scrub Typhus Billboard <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Scrub Typhus Book.pdf" 
                 target="_blank">
                Scrub Typhus Book <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Scrub Typhus Pamphlet.pdf" 
                 target="_blank">
                Scrub Typhus Pamphlet <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Scrub Typhus Poster.pdf" 
                 target="_blank">
                Scrub Typhus Poster <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
          </ul>
        `;
      }

      if(disease.dataset.disease === "Leptospirosis"){
        document.getElementById("diseaseContent").innerHTML = `
          <h2>Leptospirosis</h2>
          <ul>
            <li>
              Data nhi h
            </li>
          </ul>
        `;
      }

      if(disease.dataset.disease === "Snake Bite"){
        document.getElementById("diseaseContent").innerHTML = `
          <h2>Snake Bite</h2><br>
          <ul>
          <h3>Protocol of Snake Bite</h3>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/PEP-Protocol.pdf" 
                 target="_blank">
                Protocol for Initial Management of Snake Bite at Health Facilities (PHP/CHC) <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li><br><br>
           <h3>Does & Don’t Snake Bite</h3>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Does-Dont-English.pdf" 
                 target="_blank">
                English <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Does-Dont-Hindi.pdf" 
                 target="_blank">
                Hindi <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li><br><br>
            <h3>Snake Bite Prevention Film</h3>
            <li>
              <a href="https://www.youtube.com/watch?v=NRV0dPqvwaA" 
                 target="_blank">
                Snake Bite Prevention Film
              </a>
            </li><br><br>
            <h3>Snake Bite Booklet Hindi & English</h3>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Snake-bite-Booklet-HINDI-CURVED.pdf" 
                 target="_blank">
                Snake Bite Booklet Hindi <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li>
            <li>
              <a href="/NCDC_MOHFW/uploads/pdf/Snakebite-booklet-english-Curved.pdf" 
                 target="_blank">
                Snake Bite Booklet English <img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
              </a>
            </li><br><br>
            <h3>Radio Jingle on Snake Bite</h3>
            <li>
              <a href="/NCDC_MOHFW/uploads/Audio/Radio-Jingle.wav" 
                 target="_blank">
                Radio Jingle
              </a>
            </li>
          </ul>
        `;
      }

    });
  });

});
</script>


<?php include("../footer.php"); ?>
