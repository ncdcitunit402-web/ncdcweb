<section class="about-director-section">

  <div class="container">

    <!-- ABOUT NCDC -->
    <div class="about-box">
      <h2>About NCDC</h2>

      <p>
        The National Institute of Communicable Diseases (NICD) had its origin as Central Malaria Bureau, 
        established at Kasauli (Himachal Pradesh) in 1909 and following expansion was renamed in 1927 as the 
        Malaria Survey of India. The organization was shifted to Delhi in 1938 and called as the Malaria Institute 
        of India (MII). In view of the drastic reduction achieved in the incidence of malaria under National Malaria 
        Eradication Programme (NMEP), Government of India decided to reorganize and expand the activities of the institute
        to cover other communicable diseases. Thus, on July 30, 1963 the erstwhile MII was renamed as NICD to 
        shoulder these additional responsibilities.
<BR><BR>
The institute was established to function as a national centre of excellence for control of communicable diseases. 
The function of the institute also included various areas of training and research using multi-disciplinary integrated approach.</p>
      <a href="/NCDC_MOHFW/includes/About/aboutus.php?tab=about" class="read-more-btn">Read More →</a>
    </div>

    <!-- DIRECTOR DESK -->
    <div class="director-box">
      <h3 style="text-align: justify; line-height: 1.0; color: #333; font-family: Times New Roman, Times, serif;">From the Director’s Desk</h3>

      <div class="director-profile">
        <img src="assets/images/director.jpg" alt="Director">
        <div class="director-info">
          <strong style="text-align: justify; line-height: 1.0; color: #333; font-family: Times New Roman, Times, serif;">Prof. (Dr.) RANJAN DAS</strong>
          <p style="text-align: justify; line-height: 1.0; color: #333; font-family: Times New Roman, Times, serif;">MBBS, MD, PGCHM, PGCHFWM, CCFE, FIPHA</p>
        </div>
      </div>

      <p class="greeting" style="text-align: justify; line-height: 1.0; color: #333; font-family: Times New Roman, Times, serif;">Namaskar !</p>

      <p style="text-align: justify; line-height: 1.0; color: #333; font-family: Times New Roman, Times, serif;">
        <BR> I consider it an honour and a great responsibility to be in charge
         of the historic and prestigious National Centre for Disease Control (NCDC) India, 
         as its 26 th Director. Six months have elapsed since charge was assumed, and it is time to re-look at the spectrum of national and international public health work
         being done by this organization and the path needed to be adapted now, and in future.
      </p>

      <a href="/NCDC_MOHFW/includes/director_desk.php" class="read-more-btn">Read More →</a>
    </div>

  </div>

</section>

<style>
    /* =========================
   ABOUT + DIRECTOR SECTION
========================= */
.about-director-section {
  padding: 60px;
  background: #fff;
  font-family: "Times New Roman", Times, serif;
}

.container {
  max-width: 100%;
  margin: auto;
  padding: 0 20px;
  display: flex;
  gap: 90px;
}

/* LEFT */
.about-box {
  flex: 2;
}

.about-box h2 {
  font-size: 28px;
  margin-bottom: 20px;
  font-family: "Times New Roman", Times, serif;
}

.about-box p {
  line-height: 1.7;
  margin-bottom: 15px;
  color: #333;
  text-align: justify;
  font-family: "Times New Roman", Times, serif;
  font-size: 18px;
  
}

/* RIGHT */
.director-box {
  flex: 1;
  background: #eef4ff;
  padding: 12px 15px;
  border-radius: 6px;
  font-family: "Times New Roman", Times, serif;
  line-height: 1.4;
}

.director-box h3 {
  margin-bottom: 15px;
}

.director-profile {
  text-align: center;           /* centers everything */
  margin-bottom: 20px;
}

.director-profile img {
  width: 160px;
  height: auto;
  
  display: block;
  margin: 0 auto 12px;          /* centers image */
}

.director-info strong {
  display: block;               /* moves name below image */
  font-size: 16px;
  font-weight: 700;
  margin-bottom: 5px;
}

.director-info p {
  margin: 0;
  font-size: 14px;
  color: #555;
}


.greeting {
  font-weight: 600;
  margin-top: 10px;
}

/* BUTTON */
.read-more-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  float: right;    
  padding: 10px 22px;
  background-color: #0aa7a5;
  color: #0b0b0bff;
  font-size: 14px;
  font-weight: bold;
  text-decoration: none;

  border-radius: 25px;
  transition: all 0.3s ease;
  white-space: nowrap;
}

/* Hover (Desktop) */
.read-more-btn:hover {
  background-color: #088f8c;
  transform: translateX(3px);
}

/* Focus (Accessibility) */
.read-more-btn:focus {
  outline: 2px solid #005fcc;
  outline-offset: 2px;
}


/* =========================
   MOBILE RESPONSIVE
========================= */
@media (max-width: 768px) {

  .container {
    flex-direction: column;
  }

  .about-box h2 {
    font-size: 22px;
  }

  .director-profile {
    flex-direction: column;
    align-items: flex-start;
  }

  .director-profile img {
    width: 130px;
  }
  .read-more-btn {
    padding: 12px 20px;
    font-size: 13px;
    border-radius: 22px;
  }

}

</style>