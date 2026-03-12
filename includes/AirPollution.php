<?php include("header.php"); ?>

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

/* ===== PAGE ===== */
body{
  font-family:"Segoe UI", Arial, sans-serif;
  background:#fff;
}

.page-wrapper{
  max-width:1100px;
  margin:40px auto;
  padding:0 20px;
}

.breadcrumb{
  font-size:14px;
  color:#666;
  margin-bottom:10px;
}

.page-wrapper h1{
  font-size:30px;
  font-weight:700;
  margin-bottom:30px;
}

/* ===== GIF GRID ===== */
.gif-grid{
  display:grid;
  grid-template-columns:repeat(4, 1fr);
  gap:20px;
}

.gif-card{
  background:#f8f9fa;
  border-radius:14px;
  padding:12px;
  text-align:center;
  box-shadow:0 4px 12px rgba(0,0,0,0.08);
  transition:.3s;
}

.gif-card:hover{
  transform:translateY(-4px);
}

.gif-card img{
  width:100%;
  height:220px;
  object-fit:contain;
  border-radius:10px;
}

/* RESPONSIVE */
@media(max-width:992px){
  .gif-grid{
    grid-template-columns:repeat(2, 1fr);
  }
}

@media(max-width:480px){
  .header-image{
    height:140px;
  }
  .page-wrapper h1{
    font-size:24px;
  }
  .gif-grid{
    grid-template-columns:1fr;
  }
}
</style>

<div class="page-wrapper">

  <div class="breadcrumb">Home › IEC Material on Air Pollution</div>

  <h1>IEC Material on Air Pollution</h1>

  <!-- GIF SECTION -->
  <div class="gif-grid">
    <div class="gif-card">
      <img src="/NCDC_MOHFW/uploads/gifs/air1.gif" alt="Air Pollution GIF 1">
    </div>

    <div class="gif-card">
      <img src="/NCDC_MOHFW/uploads/gifs/air2.gif" alt="Air Pollution GIF 2">
    </div>

    <div class="gif-card">
      <img src="/NCDC_MOHFW/uploads/gifs/air3.gif" alt="Air Pollution GIF 3">
    </div>

    <div class="gif-card">
      <img src="/NCDC_MOHFW/uploads/gifs/air4.gif" alt="Air Pollution GIF 4">
    </div>
  </div>

</div>

<?php include("footer.php"); ?>
