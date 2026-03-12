<?php include("../header.php"); ?>

<!-- ================= HEADER IMAGE ================= -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" alt="Header Image of NCDC Website">
</div>

<style>
/* HEADER IMAGE */
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

/* PAGE LAYOUT */
.about-page{
  display:flex;
  gap:30px;
  max-width:1200px;
  margin:0 auto;
  padding:30px 40px;
}

/* SIDEBAR */
.about-sidebar{
  width:280px;
  background:#f5f9fc;
  border-radius:10px;
  padding:15px;
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

/* MAIN CONTENT */
.about-main{
  flex:1;
}
.breadcrumb{
  font-size:14px;
  margin-bottom:15px;
  color:#555;
}
.about-main h1{
  font-size:26px;
  margin-bottom:20px;
}

/* TAB CONTENT */
.tab-content{
  display:none;
}
.tab-content.active{
  display:block;
}

/* LIST */
.about-main ol{
  padding-left:20px;
}
.about-main ol li{
  margin-bottom:12px;
  line-height:1.7;
}
.about-main a{
  color:#000;
  text-decoration:none;
}
.about-main a:hover{
  color:#0b77b7;
  text-decoration:underline;
}
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


/* RESPONSIVE */
@media(max-width:768px){
  .about-page{
    flex-direction:column;
    padding:20px 15px;
  }
  .about-sidebar{
    width:100%;
  }
  .header-image{
    height:180px;
  }
}
</style>

<!-- ================= PAGE CONTENT ================= -->
<div class="about-page">

  <!-- LEFT SIDEBAR -->
  <aside class="about-sidebar">
    <ul>
      <li class="active" data-tab="home">Seasonal Influenza</li>
      <li data-tab="h1n1">Technical Guidelines for H1N1</li>
      <!-- <li data-tab="mohfw">MoHFW Guidelines & Reference Material</li> -->
    </ul>
  </aside>

  <!-- RIGHT CONTENT -->
  <main class="about-main">

    <div class="breadcrumb">Home › IEC › Seasonal Influenza</div>

    <!-- TAB 1 -->
    <div id="home" class="tab-content active">
      <h1>IEC on Seasonal Influenza (H1N1)</h1>
      <ol>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/d223cdfb-f708-4eb2-89fd-e7cd91a10fea.pdf" target="_blank">
            State/UT-wise, Year-wise number of cases and deaths from 2018–2025<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/977239244017012468394.pdf" target="_blank">
            Recommended Composition of Influenza Vaccine – 2024<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/53742577711688449711.pdf" target="_blank">
            Recommendation of Influenza Vaccine Composition – 2023<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/96420115851539337754.pdf" target="_blank">
            IEC on Seasonal Flu for General Public<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/32804331151679286931.pdf" target="_blank">
            State/UT-wise, Year-wise number of cases and deaths from 2010–2017<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/90384949221554289446.pdf" target="_blank">
            List of laboratories testing Influenza A (H1N1)<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
      </ol>
    </div>

    <!-- TAB 2 -->
    <div id="h1n1" class="tab-content">
      <h1>Technical Guidelines for H1N1</h1>
      <ol>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/80993440321561442011-1.pdf" target="_blank">
            Epidemiology of seasonal influenza [295 KB]<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/72513234671561442053-1.pdf" target="_blank">
            Guidelines for patient categorization [450 KB]<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/15703707541561442069.pdf" target="_blank">
            Guidelines for Providing Home Care [283 KB]<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/18096774991561442082.pdf" target="_blank">
            Guidelines on use of masks [277 KB]<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/66872871241561442115.pdf" target="_blank">
            Guidelines for clinical protocol [397 KB]<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/15059575831565261448.pdf" target="_blank">
            Guidelines for Sample Collection [606 KB]<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/78851955051561442143.pdf" target="_blank">
            Guidelines for laboratory procedures for detection of Influenza virus [1421 KB]<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/89454216461561442156.pdf" target="_blank">
            Checklist for labs for initiation of Influenza testing [258 KB]<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/96894495301561442168.pdf" target="_blank">
            Seasonal Influenza Death audit format [280 KB]<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/95451544001561442180.pdf" target="_blank">
            Individual Patient Reporting format [85 KB]<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/291584331565261487.pdf" target="_blank">
            Seasonal Influenza A Case Summary Form [305 KB]<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/27968352521660280059.pdf" target="_blank">
            Vaccine Guidelines as on July 2022 [264 KB]<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF">
          </a>
        </li>
      </ol>
    </div>

    <!-- TAB 3 -->
    <!-- <div id="mohfw" class="tab-content">
      <h1>MoHFW Guidelines & Reference Material</h1>
      <ol>
        <li>
          <a href="/NCDC_MOHFW/uploads/pdf/MOHFW-guidelines-for-Seasonal-Influenza-H1N1.pdf" target="_blank">
            Ministry of Health & Family Welfare Guidelines for Seasonal Influenza (H1N1)
          </a>
        </li>
      </ol>
    </div> -->

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

<?php include("../footer.php"); ?>
