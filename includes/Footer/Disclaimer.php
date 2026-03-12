

<?php include("../header.php"); ?>

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="Header Image of NCDC Website">
</div>

<style>
/* ===== DISCLAIMER PAGE ===== */
.disclaimer-container {
    max-width: 900px;
    margin: 30px auto;
    background-color: #fff;
    padding: 30px 35px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    font-family: 'Poppins', Arial, sans-serif;
    color: #333;
}

.disclaimer-container h1 {
    font-size: 2em;
    color: #0a3d62;
    margin-bottom: 20px;
}

.disclaimer-container p {
    font-size: 1em;
    line-height: 1.7;
    margin-bottom: 15px;
}

.disclaimer-container strong {
    color: #0a3d62;
}

/* Breadcrumb Styling */
.breadcrumb {
    font-size: 0.9em;
    color: #666;
    margin-bottom: 15px;
}

/* ===== HEADER IMAGE ===== */
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

/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
    .disclaimer-container {
        padding: 25px 20px;
        margin: 20px;
    }
    .disclaimer-container h1 {
        font-size: 1.6em;
    }
}

@media (max-width: 480px) {
    .header-image {
        height: 140px;
    }
    .disclaimer-container {
        padding: 20px 15px;
        margin: 15px;
    }
    .disclaimer-container h1 {
        font-size: 1.4em;
    }
    .disclaimer-container p {
        font-size: 0.95em;
    }
}

</style>
<!-- Disclaimer Content -->
<div class="container" style="max-width:800px; margin:30px auto; background:#fff; padding:25px; border-radius:8px; box-shadow:0 2px 6px rgba(0,0,0,0.1);">
    <div class="breadcrumb" style="font-size:0.9em; margin-bottom:10px; color:#666;">
        Home &rsaquo; Disclaimer
    </div>
    <h1 style="font-size:1.8em; margin-bottom:15px; color:#0a3d62;">Disclaimer</h1>
    <p>Though all efforts have been made to ensure the accuracy of the content on this website, the same should not be construed as a statement of 
        law or used for any legal purposes. Ministry of Health  & Family Welfare accepts no responsibility in relation to the accuracy, 
        completeness, usefulness or otherwise, of the contents. Users are advised to verify/check any information, and to obtain any appropriate 
        professional advice before acting on the information provided on this website.</p>
</div>
<?php include("../footer.php"); ?>