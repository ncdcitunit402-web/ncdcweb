<?php include("../header.php"); ?>
<link rel="stylesheet" href="/NCDC_MOHFW/assets/css/style.css">

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="Header Image of NCDC Website">
</div>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
  html, body {
  overflow-x: hidden;
}

/* ================= HEADER IMAGE ================= */
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

/* ================= PAGE LAYOUT ================= */
.about-page {
  display: flex;
  gap: 30px;
  padding: 20px 40px;
  align-items: flex-start;
}

/* ================= SIDEBAR ================= */
.about-sidebar {
  width: 260px;
  background: #f5f9fc;
  border-radius: 10px;
  padding: 15px;
  height: fit-content;
  position: sticky;
  top: 20px;
}

.about-sidebar ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.about-sidebar li {
  padding: 14px 16px;
  margin-bottom: 8px;
  cursor: pointer;
  font-size: 16px;
  border-radius: 8px;
  transition: 0.3s ease;
}

.about-sidebar li.active,
.about-sidebar li:hover {
  background: #0fa6a6;
  color: #fff;
}

/* ================= MAIN CONTENT ================= */
.about-main {
  flex: 1;
}

.breadcrumb {
  font-size: 14px;
  margin-bottom: 15px;
}

.about-main h1 {
  font-size: 28px;
  margin-bottom: 20px;
}

/* ================= TAB CONTENT ================= */
.tab-content {
  display: none;
  width: 100%;
}

.tab-content.active {
  display: block;
}

/* ================= CONTENT SECTION ================= */
.container {
  width: 92%;
  margin: 40px auto;
  font-family: Arial, sans-serif;
  line-height: 1.7;
}

.content-section {
  margin-bottom: 40px;
}

.content-section h2 {
  background: #003366;
  color: #fff;
  padding: 10px 15px;
  font-size: 18px;
  margin-bottom: 15px;
  border-radius: 4px;
}

.content-section h3 {
  margin-top: 20px;
  color: #0a5c8e;
}

/* ================= SKY BLUE TICK LIST ================= */
.content-section ul {
  list-style: none;
  padding-left: 0;
}

.content-section ul li {
  position: relative;
  padding-left: 28px;
  margin-bottom: 10px;
}

.content-section ul li::before {
  content: "✔";
  position: absolute;
  left: 0;
  top: 2px;
  color: #00bfff;
  font-weight: bold;
  font-size: 16px;
}

/* Ordered List Normal */
.content-section ol {
  margin-left: 20px;
}

.content-section li {
  margin-bottom: 8px;
}

/* ================= TABLE DESIGN ================= */
.table-container {
  width: 100%;
  overflow-x: auto;
  margin-top: 20px;
}

.charter-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 14px;
  min-width: 650px;
}

.charter-table th {
  background-color: #e6e6e6;
  text-align: left;
  padding: 12px;
  border: 1px solid #ccc;
  font-weight: bold;
}

.charter-table td {
  padding: 12px;
  border: 1px solid #ccc;
  vertical-align: top;
}

.sub-point {
  margin-top: 8px;
  margin-left: 15px;
}

.sub-sub {
  margin-top: 6px;
  margin-left: 20px;
  line-height: 1.6;
}

.time {
  font-weight: 500;
}

.note {
  font-size: 13px;
  color: #555;
  display: block;
  margin-top: 5px;
}

/* ================= RESPONSIVE ================= */

/* Tablet */
@media (max-width: 992px) {
  .about-page {
    padding: 20px;
    gap: 20px;
  }

  .about-sidebar {
    width: 220px;
  }
}

/* Mobile */
@media (max-width: 768px) {

  .header-image {
    height: 180px;
  }

  .about-page {
    flex-direction: column;
    padding: 15px;
  }

  .about-sidebar {
    width: 100%;
    position: relative;
  }

  .about-main {
    margin-top: 20px;
  }

  .container {
    width: 100%;
    margin: 20px auto;
  }

  .charter-table {
    font-size: 13px;
  }
}

/* Small Mobile */
@media (max-width: 480px) {

  .header-image {
    height: 140px;
  }

  .about-main h1 {
    font-size: 22px;
  }

  .content-section h2 {
    font-size: 16px;
  }
}

/* ================= TAB 2 MOBILE OPTIMIZATION ================= */

/* Make content full width on small devices */
@media (max-width: 768px) {

 

  #tab2 h1 {
    font-size: 22px;
    line-height: 1.4;
  }

  .content-section h2 {
    font-size: 16px;
    padding: 8px 12px;
  }

  .content-section ul li {
    font-size: 14px;
    line-height: 1.6;
  }

  /* Make table scroll horizontally */
  .table-container {
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;;
  }

  .charter-table {
    width: 100%;
    min-width: 500px; /* keeps table readable */
  }

  .charter-table th,
  .charter-table td {
    font-size: 13px;
    padding: 8px;
    word-break: break-word;
  }

  /* Reduce indent spacing */
  .sub-point {
    margin-left: 10px;
  }

  .sub-sub {
    margin-left: 15px;
  }

}

/* Extra small phones */
@media (max-width: 480px) {

  #tab2 h1 {
    font-size: 20px;
  }

  .content-section h2 {
    font-size: 15px;
  }

  .content-section ul li {
    font-size: 13px;
  }

  .charter-table th,
  .charter-table td {
    font-size: 12px;
    padding: 8px;
  }
}


</style>

<!-- PAGE CONTENT -->
<div class="about-page">

  <!-- LEFT SIDEBAR -->
  <aside class="about-sidebar">
    <ul>
      <li class="active" data-tab="tab1">Objectives</li>
      <li data-tab="tab2">Services provided by the Institute</li>
      <li data-tab="tab3">Training Health Manpower Development</li>
    </ul>
  </aside>

  <!-- RIGHT CONTENT -->
  <main class="about-main">

    <div class="breadcrumb">
      Home › Citizen Charter
    </div>

    <!-- TAB 1 -->
    <div id="tab1" class="tab-content active">
      <h1>Citizen Charter</h1>
      <div class="container">

    <!-- PREAMBLE SECTION -->
    <section class="content-section">
        <h2>Preamble</h2>
        <p>
            The National Centre for Disease Control (NCDC) had its origin as Central Malaria Bureau established at Kasauli (Himachal Pradesh) 
            in 1909, which after expansion was renamed in 1927 as the Malaria Survey of India. The organization was shifted to Delhi in 1938 and 
            called the Malaria Institute of India (MII). On July 30, 1963 the erstwhile MII was renamed as National Institute of Communicable 
            Diseases (NICD) to shoulder additional responsibilities. Then on completion of 100 years on July 30, 2009 NICD was renamed as National 
            Centre for Disease Control (NCDC) to meet the revised additional mandate. The institute is established to function as a National 
            centre of excellence for disease prevention and control.
        </p>
    </section>

    <!-- MANDATE SECTION -->
    <section class="content-section">
        <h2>Mandate</h2>
        <p>
            The mandate of the Institute broadly covers three areas viz. Services, Trained Healthcare Manpower Development and Research in 
            communicable diseases, their prevention and control using a multi-disciplinary integrated approach. The institute is expected to 
            provide expertise to the States and Union territories (UTs) on rapid health assessment and laboratory based diagnostic services. 
            Surveillance of communicable diseases and outbreak investigations also formed a part of its activities. The institute is also entrusted 
            with the task of developing reliable and cost-effective rapid diagnostic tools which could be effectively applied in field for control 
            of communicable diseases.
        </p>
    </section>

    <!-- ORGANIZATION STRUCTURE -->
    <section class="content-section">
        <h2>Organization Structure</h2>
        <p>
            The Institute is under administrative control of the Directorate General of Health Services, Ministry of Health and Family Welfare, 
            Govt. of India. The Director, an officer of the Public Health sub- cadre of Central Health Services, is the administrative and 
            technical head of the Institute. The Institute has its headquarters in Delhi and has 8 branches located at Alwar (Rajasthan), 
            Bengaluru (Karnataka), Kozhikode (Kerala), Coonoor (Tamil Nadu), Jagdalpur (Chhattisgarh), Patna (Bihar), Rajahmundry (Andhra Pradesh) 
            and Varanasi (Uttar Pradesh).
        </p>
    </section>

    <!-- TECHNICAL DIVISIONS -->
    <section class="content-section">
        <h2>There are following Technical Divisions at the Headquarters of the institute:</h2>

        <ol>
            <li>Centre for HIV/AIDS & Related Diseases</li>
            <li>Division of Microbiology</li>
            <li>Department of Epidemiology</li>
            <li>Department of Parasitic Diseases</li>
            <li>Division of Zoonosis</li>
            <li>Centre for Medical Entomology & Vector Management</li>
            <li>Division of Malariology & Coordination</li>
            <li>Division of Biochemistry & Toxicology</li>
            <li>Centre for Non-Communicable Diseases</li>
            <li>Integrated Disease Surveillance Programme and Statistical Monitoring & Evaluation Cell</li>
        </ol>
    </section>

</div>

    </div>

    <!-- TAB 2 -->
    <div id="tab2" class="tab-content">
      <h1>Services provided by the Institute</h1>
      <div class="container">

    <!-- A. OUTBREAK INVESTIGATIONS -->
    <section class="content-section">
        <h2>A. Outbreak Investigations</h2>
        <ul>
            <li>
                To assist the States, when required, in the investigation of outbreaks 
                of epidemic-prone diseases. 
                <strong>(No timeline can be fixed)</strong>
            </li>
            <li>
                Surveillance of epidemic-prone diseases through State/District Surveillance Units (SSU/DSU) 
                to detect outbreaks at the earliest.
                <strong>(No timeline can be fixed)</strong>
            </li>
            <li>
                Investigate rumors in cases of diseases that have been considered as eradicated/eliminated e.g. Smallpox, Guinea Worm, Yaws
                <strong>(1-7 working days of receipt of information from concerned state health authorities).</strong>
            </li>
        </ul>
    </section>

    <!-- B. DIAGNOSTIC SERVICES -->
    <section class="content-section">
        <h2>B. Diagnostic Services</h2>

        <ul>
            <li>Serological testing and confirmation of HIV infection (walk in clients: 1 working day, Referral clients: 7 working days), 
                Serological investigation for Dengue (3-4 working days), Japanese Encephalitis (3-4 working days), Chikungunya viruses 
                (3-4 working days) and Syphilis (1 working day).</li>

            <li>Lab investigation under Polio Eradication (3-30 working days), Sero-diagnosis of sporadic jaundice cases and jaundice outbreaks 
                (5-10 working days), Serological investigation for leptospirosis (3-7 working days) and Brucellosis (3-4 working days).</li>

            <li>Serological screening of high risk groups, namely medical/paramedical personnel, family members spouse/partners of hepatitis 
                B or C carriers, multi transfused individuals, antenatal women, etc. (5-10 working days)</strong></li>

            <li>Malaria diagnosis (1 working day)</li>

            <li>Absolute CD4 T-Lymphocyte Count (1 working day)</li>

            <li>Polio surveillance in Sewage water samples (3-7 working days)</li>
            
            <li>Culture report for mycobacterium tuberculosis (6-8 weeks), Species Differentiation of Mycobacterium tuberculosis (M.TB/NTM) (10-12 working days)</li>

            <li>Stool Microscopy (2 working days), Stool Culture Serotyping (7 working days) and antibiotic susceptibility testing of Salmonella, Shigella and Vibrio Cholera (7 working days)</li>

            <li>Serology Testing for Aspergillus/Cryptococcus/Histoplasma antigen detection (7 working days), Mycological diagnostic services for clinical specimens (1month)</li>

            <li>Disease investigation for toxoplasmosis (5 working days), leishmaniasis (for LD bodies- 1 working day) for promastigotes examination (7-10 working days) and neurocysticercosis (5 working days)</li>
            
            <li>Weil-Felix Test & IgM ELISA for Rickettsia (3-7 working days), ELISA for Hydatid disease (3-4 working days), IgM ELISA for Hanta virus (5-7 working days), IgM and IgG ELISA for lyme disease (5-7 working days)</li>
            
            <li>Isolation of different types of viruses such as Dengue virus (15 working days), Chikungunya virus (15 working days), JE virus (15 working days) and Rabies virus (10 working days)</li>
            
            <li>HIV/AIDS Counseling of direct walk in clients, patients and their families (1 day)</li>

            <li>Molecular diagnostic tests based on PCR/RT-PCR/gene sequencing for important epidemic-prone infectious diseases (3-10 working days) [only on samples referred from different Divisions of NCDC viz, Division of Microbiology, Division of Zoonosis, Centre for HIV/AIDS & Related Diseases etc.]</li>
        </ul>
    </section>

    <!-- C. OTHER SERVICES -->
    <section class="content-section">
        <h2>C. Other Services: Other important services provided by the Institute are</h2>

        <ul>
            <li>Quality Control of Biologicals: The institute routinely provides quality control services for various vaccines like Hepatitis 
                (15 working days), diagnostic test kits for AIDS (15 working days), etc.</li>

            <li>Storage and supply of vaccines and other biological materials: The institute stores reagents, test kits and vaccines and 
                distributes these to various state health directorates and medical colleges on request. It also provides larvivorous fish for 
                the biological control of mosquitoes to various public health agencies ( as on demand in 3-4 working days).</li>

            <li>Entomological investigations: Includes identification of arthropods of medical importance specially during disease out-break 
                situations (1-14 working days).</li>

            <li>Testing of insecticide formulations:</li>
        </ul>

        <div class="table-container">
    <table class="charter-table">
        <thead>
            <tr>
                <th style="width:8%;">S. No.</th>
                <th style="width:52%;">NAME OF THE TEST/TRIAL</th>
                <th style="width:40%;">EXPECTED TIME TO COMPLETE THE TEST AFTER RECEIVING THE SAMPLE</th>
            </tr>
        </thead>
        <tbody>

            <!-- 1 -->
            <tr>
                <td>1.</td>
                <td>
                    <strong>Laboratory bioassay/efficacy test</strong>
                    <div class="sub-point">
                        A. Larval trial per insecticide/formulations/test insect
                        <div class="sub-sub">
                            a. Bioassay persistent effect per panel<br>
                            b. Repellent effect<br>
                            c. Knock down effect
                        </div>
                    </div>
                </td>
                <td class="time">6 months</td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <div class="sub-point">
                        B. Adult trial per insecticide/formulations/test insect
                    </div>
                </td>
                <td class="time">8–12 months</td>
            </tr>

            <!-- 2 -->
            <tr>
                <td>2.</td>
                <td>
                    <strong>Field trial/evaluation</strong>
                    <div class="sub-point">
                        A. Small scale field trial
                    </div>
                </td>
                <td class="time">12–18 months</td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <div class="sub-point">
                        B. Large scale field trial
                    </div>
                </td>
                <td class="time">
                    12–24 months<br>
                    <span class="note">
                        Vary as per the requirement of the agency and number of villages where trial is to be undertaken.
                    </span>
                </td>
            </tr>

        </tbody>
    </table>
</div>


        <h3>Disaster Management</h3>
        <p>
            It includes Situational analysis of health, Initiate preventive and control measures and Establishment of surveillance system for Epidemic Prone diseases.
            <strong>(1–14 working days)</strong>
        </p>

    </section>

</div>

    </div>

    <!-- TAB 3 -->
    <div id="tab3" class="tab-content">
     <h1>Training Health Manpower Development</h1>
     <div class="container">

    <!-- A. TRAINING AND TEACHING -->
    <section class="content-section">
        <h2>A. Training and Teaching</h2>
        <p>Some important trainings imparted by the Institute are as under:</p>

        <ul>
            <li><strong>Ph.D. Programme:</strong> The Institute is recognized as the approved centre for guiding the Ph. D. students under University School of Medicine and Para Medical Health Sciences, Guru Gobind Singh Indraprastha University, Delhi.</li>

            <li><strong>Two-year MPH (FE) Course:</strong>Field Epidemiology Training Programme of 2 years – started in 2006 to strengthen field epidemiological competencies of existing health practitioners and career oriented professionals (on annual basis).</li>

            <li><strong>Conduct Three-month FETP for WHO Fellows of SEARO:</strong> a Tailor-made course for South East Asian Region (on annual basis).</li>

            <li><strong>Conduct Four week Regional Training Programme on Prevention & Control of Communicable Diseases for paramedicos:</strong> It is Tailor-made for South East Asian Region (on annual basis).</li>

            <li>Training and Technical support for water quality monitoring & surveillance (as and when required).</li>

            <li>Training in Vector Borne Diseases, partnership with NVBDCP, PHFI & NIMR (ICMR) (4 weeks, as and when financial assistance received from WHO).</li>
        </ul>
    </section>


    <!-- B. EXPERT GROUP MEETINGS -->
    <section class="content-section">
        <h2>B. Expert Group Meetings</h2>
        <p>
            The Expert Group meetings for formulation of guidelines for surveillance, management, prevention and control of various communicable 
            and non-communicable diseases are attended by experts of the respective fields, senior administrators of health services of the states 
            and programme managers from medical, veterinary, agriculture and animal husbandry departments (as and when required).
        </p>
    </section>


    <!-- C. FELLOWSHIPS -->
    <section class="content-section">
        <h2>C. Fellowships</h2>
        <p>
            Scientists, research workers and health professionals, from India and abroad on WHO fellowships are placed in the institute for 
            training and exchange of technical knowledge (as and when required).
        </p>
    </section>


    <!-- RESEARCH -->
    <section class="content-section">
        <h2>Research</h2>
         <p>Applied integrated research in following aspects of communicable as well as some aspects of non-communicable diseases is being undertaken:</p>
        <ul>
            <li>
                Operational Research is undertaken in the fields of bacteriology, virology, parasitology, immunology, epidemiology and entomology. 
                The important diseases include Cholera, Polio, Measles, Yaws, Diphtheria, Meningitis, Tetanus, Hepatitis, AIDS, Rubella, Rabies, 
                Dengue, Japanese Encephalitis, Kala-azar, Malaria, Filaria, Plague, Leptospirosis, Anthrax etc. (no period can be fixed).
            </li>

            <li>
                Laboratory and field oriented research in the transmission dynamics of arthropod borne diseases with the ultimate objective of 
                vector control (no period can be fixed).
            </li>

            <li>
                Evaluation of new formulations of insecticides and biocides and screening of indigenous herbs to evaluate their insecticidal 
                properties, studies on biological hazards of pesticides etc. (no period can be fixed).
            </li>

            <li>
                In- vitro cultures of organisms, development of reagents, rapid diagnostic tests including molecular techniques using modern 
                equipment and latest technology (no period can be fixed).
            </li>
        </ul>
    </section>


    <!-- CLIENTS -->
    <section class="content-section">
        <h2>Clients</h2>

        <ul>
            <li>Homosexual (HM) / Blood product recipient / Parenteral drug abuser (IVDU) / Heterosexual female (HSF) / Heterosexual male (HSM) / 
              Known HIV positive / Sexual partner of HIV positive [HIV P(F) / HIV P(M)] / Child born to HIV positive mother (MTCT)/People on ART/ 
              PART/ Blood Donors/ State Reference Laboratories/ STD patients and Malaria Patients.</li>

            <li>Army medical officers of AFMC, Veterinary army officers, MBBS students, Senior Medical officers of BSF, MD (CHA) and DHA final 
              year students, M. Phil, MPH and Ph. D students, post graduate students of community medicine of medical colleges, CGHS and CHS 
              officers, BHMS students and Nursing students from various Nursing Institutes of the Country.</li>

            <li>States/ implementing agencies for Guinea Worm Eradication Programme (GWEP) and Yaws Eradication Programme (YEP).</li>

            <li>Community, Medical & Para- medical staff and Research students.</li>

            <li>Surveillance Units in all States/Districts, Identified Training Institutes, Indian Space Research Organization (ISRO), National 
              Informatics Centre (NIC), etc.</li>

            <li>Individual patients, high risk individuals, patients in outbreak situation, health care facilities at every level (within and 
              outside government), Referral from hospitals and states.</li>

            <li>Airport health organization, Delhi Airport in connection with VVIP flights going abroad. Airport Authority of India, Govt. 
              Officers and Hospitals, General public by reference Laboratory support for investigation of water borne diseases.</li>

            <li>Hospitals/Centres/ Field investigation units/ Veterinary hospitals and Health care facilities at Government / 
              outside Government and Endemic states.</li>

            <li>Students/Candidates wanting to pursue various courses conducted by the Institute.</li>
        </ul>
    </section>


    <!-- EXPECTATIONS -->
    <section class="content-section">
        <h2>Expectations from Medical Experts-Staff/Patients/Individuals</h2>

        <ol>
            <li>All the samples should be collected, stored and transported in good and sterile conditions, samples should be properly labeled 
              along with the clinical and investigation details of the patient on the form provided by NCDC</li>

            <li>Sample should be appropriate and collected after proper duration of illness, it should be in good condition and during 
              transportation proper cold chain should be maintained ( Unless otherwise indicated for e.g. suspected cholera or meningococcal or 
              Homophiles infections)</li>

            <li>During epidemic/ outbreak before sending sample, inform the lab in charge /HOD in advance</li>

            <li>Researchers /Faculty /Students are expected to give sufficient details of the study/project to be conducted and must involve the 
              experts on statistics in the study from the beginning while deciding the sampling design, sample size etc.</li>
        </ol>
    </section>


    <!-- GENERAL SCHEME -->
    <section class="content-section">
        <h2>General Scheme/Services Meant for Citizens</h2>

        <ol>
            <li>Health education</li>
            <li>Counseling and HIV testing of direct walk-in clients</li>
            <li>Support to courses/trainings run at NCDC for specialized group of citizens (Medical Officers, 
              Health care workers/ Students from different Universities of India)</li>
            <li>Orientation trainings to Army Medical officers/BSF/ Veterinary medical officers, M.Sc./B.Tech./MD/M.Phil/Ph.D and 
              Nursing students from various Institutes of Country</li>
            <li>Case detection and investigation through newspaper and media scanning</li>
            <li>Laboratory services required for referred cases from government hospitals</li>
            <li>Help in outbreak investigation to State, District and Central Teams as and when desired</li>
            <li>Serological testing, proper reporting and counseling</li>
            <li>Strengthening of surveillance system for infectious diseases to detect and respond to outbreaks quickly</li>
        </ol>
    </section>

</div>

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

      // Remove active class
      tabs.forEach(t => t.classList.remove("active"));
      contents.forEach(c => c.classList.remove("active"));

      // Add active class
      tab.classList.add("active");
      const activeContent = document.getElementById(tab.dataset.tab);
      activeContent.classList.add("active");

      // ✅ SCROLL TO TOP (IMPORTANT FIX)
      window.scrollTo({
        top: document.querySelector(".about-main").offsetTop - 20,
        behavior: "smooth"
      });

    });
  });
});
</script>



<?php include("../footer.php"); ?>
