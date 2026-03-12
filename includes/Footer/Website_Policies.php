<?php include("../header.php"); ?>

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="Header Image of NCDC Website">
</div>
<style>
    /* ===== WEBSITE POLICIES PAGE ===== */
.website-policies {
    max-width: 900px;
    margin: 30px auto;
    background-color: #fff;
    padding: 30px 35px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    font-family: 'Poppins', Arial, sans-serif;
    color: #333;
}

.website-policies h1 {
    font-size: 2em;
    color: #0a3d62;
    margin-bottom: 20px;
}

.website-policies .breadcrumb {
    font-size: 0.9em;
    color: #666;
    margin-bottom: 15px;
}

/* Policy List */
.policy-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.policy-list li {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #f5f5f5;
    padding: 12px 20px;
    margin-bottom: 12px;
    border-radius: 6px;
    transition: background 0.2s ease;
}

.policy-list li:hover {
    background: #e0e0e0;
}

.policy-list li span {
    font-weight: 500;
}

.view-btn {
    background-color: #0a3d62;
    color: #fff;
    padding: 6px 14px;
    border-radius: 4px;
    text-decoration: none;
    font-size: 0.9em;
    transition: background 0.2s ease;
}

.view-btn:hover {
    background-color: #06305a;
}

/* HEADER IMAGE */
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

/* RESPONSIVE */
@media (max-width: 768px) {
    .website-policies {
        padding: 25px 20px;
        margin: 20px;
    }
    .website-policies h1 {
        font-size: 1.6em;
    }
}

@media (max-width: 480px) {
    .header-image {
        height: 140px;
    }
    .website-policies {
        padding: 20px 15px;
        margin: 15px;
    }
    .website-policies h1 {
        font-size: 1.4em;
    }
    .policy-list li {
        flex-direction: column;
        align-items: flex-start;
        gap: 8px;
    }
    .view-btn {
        width: 100%;
        text-align: center;
    }
}

</style>
<!-- Website Policies Content -->
<div class="container website-policies">
    <div class="breadcrumb">
        Home &rsaquo; Website Policies
    </div>

    <h1>Website Policies</h1>

    <!-- <ul class="policy-list">
        <li>
            <span>Content Archival Policy</span>
            <a href="/NCDC_MOHFW/policies/content-archival-policy.pdf" target="_blank" class="view-btn">View PDF</a>
        </li>
        <li>
            <span>Content Contribution, Moderation & Approval Policy (CMAP)</span>
            <a href="/NCDC_MOHFW/policies/cmap-policy.pdf" target="_blank" class="view-btn">View PDF</a>
        </li>
        <li>
            <span>Content Review Policy</span>
            <a href="/NCDC_MOHFW/policies/content-review-policy.pdf" target="_blank" class="view-btn">View PDF</a>
        </li>
    </ul> -->
</div>

<?php include("../footer.php"); ?>
