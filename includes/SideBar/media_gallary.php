<?php include("../header.php"); ?>
<link rel="stylesheet" href="assets/css/style.css">

<style>

/* ===== HEADER IMAGE ===== */
.header-image {
    width: 100%;
    height: 280px;
    overflow: hidden;
}
.header-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* ===== PAGE CONTAINER ===== */
.page-container {
    width: 90%;
    max-width: 1200px;
    margin: 40px auto;
    font-family: Arial, sans-serif;
}

/* Breadcrumb */
.breadcrumb {
    font-size: 14px;
    margin-bottom: 15px;
    color: #666;
}
.breadcrumb a {
    text-decoration: none;
    color: #0066cc;
}

/* Page Title */
h1 {
    font-size: 28px;
    color: #003366;
    margin-bottom: 20px;
}

/* Section Heading Block */
.section-heading {
    background: #f1f3f6;
    padding: 12px 18px;
    font-size: 18px;
    font-weight: 600;
    color: #003366;
    border-radius: 6px;
    margin-bottom: 25px;
}

/* ===== GALLERY GRID ===== */
.gallery-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 40px;
}

.gallery-item {
    overflow: hidden;
    border-radius: 6px;
}

.gallery-item img {
    width: 100%;
    height: 230px;
    object-fit: cover;
    transition: 0.3s;
}

.gallery-item img:hover {
    transform: scale(1.05);
}

/* ===== Responsive ===== */
@media (max-width: 992px) {
    .gallery-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .gallery-grid {
        grid-template-columns: 1fr;
    }

    .header-image {
        height: 180px;
    }

    h1 {
        font-size: 22px;
    }
}

</style>

<!-- HEADER IMAGE -->
<div class="header-image">
    <img src="/NCDC_MOHFW/uploads/header_image.png" alt="Media Gallery">
</div>

<div class="page-container">

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="index.php">Home</a> / Media Gallery
    </div>

    <h1>Photo Gallery</h1>

    <!-- First Event Section -->
    <div class="section-heading">
        National Centre for Disease Control, Delhi celebrated its 116th Annual Day on 30th July 2025
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/1st.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/2nd.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/3rd.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/4th.png" alt="Media Image">
        </div>
    </div>

    <!-- Second Event Section -->
    <div class="section-heading">
        A Community Awareness Programme at National Centre for Disease Control, New Delhi.
        Topics: Disaster Risks, First Aid, CPR, Fire Safety, Earthquake,
        Safety During Heatwaves & Lightning.
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/5th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/6th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/7th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/8th.png" alt="Media Image">
        </div>
    </div>

    <!-- Third Event Section -->
    <div class="section-heading">
        NPHICON 2024
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/9th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/10th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/11th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/12th.png" alt="Media Image">
        </div>
    </div>

    <!-- Forth Event Section -->
    <div class="section-heading">
        10 Director_NCDC visited CDC Hq, Atlanta, USA on 03 November 2017
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/13th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/14th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/16th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/15th.png" alt="Media Image">
        </div>
    </div>

    <!-- Fifith Event Section -->
    <div class="section-heading">
        11 NCDC _ WHO jointly organized a National Consultation
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/17th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/18th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/19th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/20th.png" alt="Media Image">
        </div>
    </div>

    <!-- Sixth Event Section -->
    <div class="section-heading">
        12 MoS VISIT TO NCDC
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/21th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/22th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/23th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/24th.png" alt="Media Image">
        </div>
    </div>

    <!-- Seventh Event Section -->
    <div class="section-heading">
        3 WORLD HEPATITIS DAY
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/25th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/26th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/28th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/27th.png" alt="Media Image">
        </div>
    </div>

        <!-- 8 Event Section -->
    <div class="section-heading">
        31st August 2017 -Foundation Day of NCDC
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/a.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/b.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/c.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/e.png" alt="Media Image">
        </div>
    </div>

    <!-- 9 Event Section -->
    <div class="section-heading">
        Workshop on strengthening AMR Surveillance
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/35th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/36th.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/d.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/d.png" alt="Media Image">
        </div>
    </div>

    <!-- 10 Event Section -->
    <div class="section-heading">
        5 NCDC officials attending 9th TEPHINET Global Scientific Conference
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/g.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/h.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/i.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/f.png" alt="Media Image">
        </div>
    </div>

    <!-- 11 Event Section -->
    <div class="section-heading">
        6th_National_Consultation
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/j.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/k.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/l.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/m.png" alt="Media Image">
        </div>
    </div>

    <!-- 12 Event Section -->
    <div class="section-heading">
        7th Indian EIS Conference
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/n.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/o.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/p.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/q.png" alt="Media Image">
        </div>
    </div>

    <!-- 13 Event Section -->
    <div class="section-heading">
        8 Integrated Working Group Meeting for Development of National Action
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/r.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/s.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/t.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/u.png" alt="Media Image">
        </div>
    </div>

    <!-- 14 Event Section -->
    <div class="section-heading">
        9 A meeting of TWG was held to Develop National Laboratory
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/v.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/w.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/x.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/v.png" alt="Media Image">
        </div>
    </div>

        <!-- 15 Event Section -->
    <div class="section-heading">
        Division of Establishment & Strengthing of New Branches
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/41.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/42.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/43.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/44.png" alt="Media Image">
        </div>
    </div>

    <!-- 16 Event Section -->
    <div class="section-heading">
        EIS Programme
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/45.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/46.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/47.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/48.png" alt="Media Image">
        </div>
    </div>

    <!-- 17 Event Section -->
    <div class="section-heading">
        IDSP National Review Workshop, Lucknow
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/51.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/52.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/53.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/54.png" alt="Media Image">
        </div>
    </div>

    <!-- 18 Event Section -->
    <div class="section-heading">
        NCDC Celebrates Vigilance Week
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/55.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/56.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/57.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/58.png" alt="Media Image">
        </div>
    </div>

    <!-- 19 Event Section -->
    <div class="section-heading">
        Training program for medical officer, Technicians
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/61.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/62.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/63.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/64.png" alt="Media Image">
        </div>
    </div>

    <!-- 20 Event Section -->
    <div class="section-heading">
        Regional Field Epidemiology Training programme on Prevention and control of Communicable Diseases (2nd to 25th January, 2023) at NCDC, Delhi.
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/71.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/72.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/73.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/74.png" alt="Media Image">
        </div>
    </div>

    <!-- 21 Event Section -->
    <div class="section-heading">
        Vector surveillance and Examination of Stool samples
    </div>

    <div class="gallery-grid">
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/81.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/82.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/83.png" alt="Media Image">
        </div>
        <div class="gallery-item">
            <img src="/NCDC_MOHFW/uploads/media_gallary/84.png" alt="Media Image">
        </div>
    </div>
</div>

<?php include("../footer.php"); ?>
