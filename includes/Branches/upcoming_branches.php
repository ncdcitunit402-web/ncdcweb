<?php include("../header.php"); ?>

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="Header Image of NCDC Website">
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Upcoming NCDC Branches</title>

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
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: #ffffff;
      color: #222;
      line-height: 1.6;
    }

    .ncdc-section {
      padding: 40px 20px;
    }

    .container {
      max-width: 1200px;
      margin: auto;
    }

    .main-heading {
      font-size: 28px;
      margin-bottom: 15px;
      font-weight: bold;
    }

    .intro-text {
      margin-bottom: 15px;
    }

    .content-wrapper {
      display: flex;
      gap: 30px;
      margin-top: 25px;
    }

    /* LEFT TEXT */
    .text-content {
      flex: 1.2;
    }

    .text-content h3 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .text-content p {
      margin-bottom: 12px;
      text-align: justify;
    }

    /* RIGHT MAP */
    .map-content {
      flex: 1;
      text-align: center;
    }

    .map-content img {
      max-width: 100%;
      height: auto;
      border: 1px solid #ddd;
      padding: 5px;
    }

    /* =========================
       MEDIA QUERIES
    ========================= */

    /* Tablet */
    @media (max-width: 992px) {
      .content-wrapper {
        flex-direction: column;
      }

      .map-content {
        margin-top: 20px;
      }
    }

    /* Mobile */
    @media (max-width: 576px) {
      .main-heading {
        font-size: 22px;
      }

      .text-content h3 {
        font-size: 18px;
      }

      .ncdc-section {
        padding: 25px 15px;
      }
      .header-image{
    height:140px;
  }
    }
  </style>
</head>

<body>

<section class="ncdc-section">
  <div class="container">

    <h2 class="main-heading">Upcoming Branches</h2>

    <p class="intro-text">
     NCDC Project Management Unit (NPMU)- Establishment and strengthening of NCDC Branches look after the work of Establishment and Strengthening of NCDC Branches.
    </p>

    <p>
      The scheme “Establishment of 30 branches (including 8 existing branches) of the National Centre for Disease Control” in all States and one 
      UT is an existing scheme which was approved by Standing Finance Committee (SFC) held on 24.04.2015. Later, an Umbrella Scheme has been 
      introduced from 2017-18 in which “Establishment and Strengthening of NCDC Branches” was one of the component. SFC for 2021-26 for 
      continuation of scheme and upgrade to meet the deficiency faced in last SFC was approved by Secretary, MoHFW.
    </p>

<br>
    <p>
       NCDC branch will support in monitoring, surveillance, rapid response and outbreak/s investigation, capacity building, referral and 
       diagnostics services with sophisticated equipment for disease of public health importance including emerging and re-emerging diseases. 
       The branches will be networked with one another and NCDC head- quarters. It will further enhance the capacity and capability of Disease 
       surveillance, outbreak/s investigation and rapid response to combat outbreak in State. Diagnostic facilities at State level will receive a 
       fillip as BSL- II level facilities in each Branch. The proposed branches in the states/ UT shall be linked with HQ as well as other state 
       branches & Regional Centers.
    </p>

    <div class="content-wrapper">

      <!-- LEFT CONTENT -->
      <div class="text-content">
        <h3>Upcoming NCDC branches in India</h3>

        <p>
          The National Centre for Disease Control (NCDC) is the nodal agency in the country for disease surveillance facilitating prevention and 
          control of communicable diseases. In coordination with the State Governments, NCDC has the capacity and capability for disease 
          surveillance, outbreak investigation, and rapid response to contain and combat outbreaks. Entomological expertise is made available 
          by a separate division dealing with entomology and vector management. NCDC also deals with Anti-Microbial Resistance (AMR), an emerging 
          area of concern with far-reaching consequences. NCDC also provides referral diagnostic support, capacity building and technical support 
          to States/UTs in the country.
        </p>

        <p>
          With headquarters at Delhi, NCDC has eight branches in Karnataka (Bengaluru), Tamil-Nadu (Coonoor), Andhra Pradesh (Rajahmundry), Kerala 
          (Kozhikode), Uttar-Pradesh (Varanasi), Bihar (Patna), Chhattisgarh (Jagdalpur) and Rajasthan (Alwar). The branches were set-up, over the 
          years, to deal with specific diseases relevant to the concerned States. The amenities and infrastructure in the said Branches is very basic 
          and minimal.
        </p>

        <p>
          Under 12th five Year Plan, a decision was taken to expand and fortify the presence of NCDC by opening NCDC branches in all the States 
          of the country. In this context, a scheme – Establishment of 30 branches (including 8 existing branches) of the National Centre for 
          Disease Control in all States and one UT (Andaman & Nicobar Island) was approved and Standing Finance Committee (SFC) was authorised 
          on 24.04.2015. Later, an Umbrella Scheme has been introduced from 2017-18 in which “Establishment and Strengthening of NCDC Branches” 
          was one of the component. The scheme is continuing after approval of SFC 2021-26 from Secretary, MoHFW.
        </p>
      </div>

      <!-- RIGHT IMAGE -->
      <div class="map-content">
        
        <img src="/NCDC_MOHFW/uploads/images/upcoming.png" alt="Upcoming NCDC Branches Map" />
      </div>

    </div>
  </div>
</section>

</body>
</html>
<?php include("../footer.php"); ?>
