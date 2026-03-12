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
/* ===== TAB CONTENT ===== */
.tab-content{
  display: none;
}

.tab-content.active{
  display: block;
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

}

@media(max-width:480px){
  .header-image{
    height:140px;
  }
}


</style>

<!-- PAGE CONTENT -->
<div class="about-page">

  <!-- LEFT SIDEBAR -->
  <aside class="about-sidebar">
    <ul>
      <li class="active" data-tab="tab1">Introduction</li>
      <li data-tab="tab2">Staff Details</li>
      <li data-tab="tab3">Activities</li>
      <li data-tab="tab4">Research and Publication</li>
      <li data-tab="tab5">Unit/Laboratories</li>
      <li data-tab="tab6">Contact Us</li>
    </ul>
  </aside>

  <!-- RIGHT CONTENT -->
  <main class="about-main">

    <div class="breadcrumb">
      Home › Alwar Branch<BR>
      <h1>Alwar Branch</h1>
    </div>

    <!-- TAB 1 -->
    <div id="tab1" class="tab-content active">
      <h3>Introduction</h3>
      <p><strong>Mandate of the Branch:</strong>To Impart field training to different categories of medical and paramedical health 
      personnel admitted to various training courses being conducted at National Centre for Disease Control, Delhi. To Undertake 
      research, and provide service in the field of communicable diseases. To undertake investigation of outbreaks and formulations 
      of measures to control. Support to various National Health Programmes such as Pulse polio Immunization Programme and other given 
      by H.Q. Services provided include Widal test, Malaria parasite testing & water examination. Training in public Health i.e. FETP, 
      Paramedical FETP, MPH, Malaria & NVBDCP, EIS like Courses &during health emergency situation like flood, earthquake, cyclone, 
      tsunami, Covid-19 & outbreak/ epidemic etc. Support to intensive pulse polio programme (IPPI) & training in various courses given 
      by HQ NCDC</p>
    </div>

    <!-- TAB 2 -->
    <div id="tab2" class="tab-content">
      <h3>Staff Details</h3>
    </div>

    <!-- TAB 3 -->
    <div id="tab3" class="tab-content">
     <h3>Activities</h3>
    </div>

     <!-- TAB 4 -->
    <div id="tab4" class="tab-content">
     <h3>Research and Publication</h3>
    </div>

     <!-- TAB 5 -->
    <div id="tab5" class="tab-content">
     <h3>Unit/Laboratories</h3>
    </div>

     <!-- TAB 6 -->
    <div id="tab6" class="tab-content">
     <h3>Contact Us</h3>
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

    });
  });
});
</script>


<?php include("../footer.php"); ?>
