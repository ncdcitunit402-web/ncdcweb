<?php include("../header.php"); ?>
<link rel="stylesheet" href="/NCDC_MOHFW/assets/css/style.css">

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
      <li class="active" data-tab="tab1">Epi-Dis-PHERE-(Publication of Health Resilience) Quarterly e-Journal of National Centre for Disease Control (NCDC)</li>
      <li data-tab="tab2">About Epi-Dis-PHERE-(Publication of Health Resilience) Quarterly e-Journal of National Centre for Disease Control (NCDC)</li>
      <li data-tab="tab3">Editorial Board</li>
      <li data-tab="tab4">Issues (Current)</li>
      <li data-tab="tab5">Issues (Archives)</li>
      <li data-tab="tab6">Instruction to Authors</li>
      <li data-tab="tab7">Editorial and Peer Review</li>
      <li data-tab="tab8">Contact Us</li>
    </ul>
  </aside>

  <!-- RIGHT CONTENT -->
  <main class="about-main">

    <div class="breadcrumb">
      Home › Epi-Dis-PHERE- (Publication of Health Resilience) Quarterly e-Journal of National Centre for Disease Control (NCDC)
    </div>

    <!-- TAB 1 -->
    <div id="tab1" class="tab-content active">
      <h3>Epi-Dis-PHERE-(Publication of Health Resilience) Quarterly e-Journal of National Centre for Disease Control (NCDC)</h3>
    </div>

    <!-- TAB 2 -->
    <div id="tab2" class="tab-content">
      <h3>About Epi-Dis-PHERE-(Publication of Health Resilience) Quarterly e-Journal of National Centre for Disease Control (NCDC):</h3>
    </div>

    <!-- TAB 3 -->
    <div id="tab3" class="tab-content">
     <h3>Editorial Advisory Board<br>
Volume 1 | Issue 1 | January 2025<br>
Language- English<br>
Starting Year – 2025</h3>
    </div>

     <!-- TAB 4 -->
    <div id="tab4" class="tab-content">
     <h3>Volume 1 | Issue 1 | January 2025</h3>
    </div>

     <!-- TAB 5 -->
    <div id="tab5" class="tab-content">
     <h3>Issues (Archives)</h3>
    </div>

     <!-- TAB 6 -->
    <div id="tab6" class="tab-content">
     <h3>Instructions to Authors</h3>
    </div>

     <!-- TAB 7 -->
    <div id="tab5" class="tab-content">
     <h3>Editorial and Peer Review</h3>
    </div>

     <!-- TAB 8 -->
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
