<?php include("../header.php"); ?>

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="Header Image of NCDC Website">
</div>
<style>
    /* ===== WEB INFORMATION MANAGER PAGE ===== */
.web-info-manager {
    max-width: 900px;
    margin: 30px auto;
    background-color: #fff;
    padding: 30px 35px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    font-family: 'Poppins', Arial, sans-serif;
    color: #333;
}

.web-info-manager h1 {
    font-size: 2em;
    color: #0a3d62;
    margin-bottom: 20px;
}

.web-info-manager p {
    font-size: 1em;
    line-height: 1.7;
    margin-bottom: 15px;
}

.web-info-manager a {
    color: #0a3d62;
    text-decoration: none;
}

.web-info-manager a:hover {
    text-decoration: underline;
}

/* Breadcrumb Styling */
.web-info-manager .breadcrumb {
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
    .web-info-manager {
        padding: 25px 20px;
        margin: 20px;
    }
    .web-info-manager h1 {
        font-size: 1.6em;
    }
}

@media (max-width: 480px) {
    .header-image {
        height: 140px;
    }
    .web-info-manager {
        padding: 20px 15px;
        margin: 15px;
    }
    .web-info-manager h1 {
        font-size: 1.4em;
    }
    .web-info-manager p {
        font-size: 0.95em;
    }
}

</style>
<!-- Web Information Manager Content -->
<div class="container web-info-manager">
    <div class="breadcrumb">
        Home &rsaquo; Web Information Manager
    </div>

    <h1>Web Information Manager</h1>

    <div class="manager-details">
        <p><strong>Dr. Ajit Dadaji Shewale</strong><br>
        Deputy Director</p>

        <p><strong>National Centre for Disease Control (NCDC)</strong><br>
        Directorate General of Health Services, Ministry of Health & Family Welfare</p>

        <p>22 Shamnath Marg, Delhi – 110 054</p>

        <p>Phone: +91-11-01123989209</p>
        <p>Email: <a href="mailto:ncdcwebcommittee@gmail.com">ncdcwebcommittee@gmail.com</a></p>
    </div>
</div>

<?php include("../footer.php"); ?>
