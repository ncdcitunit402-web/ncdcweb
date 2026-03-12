<?php
// functions.php
?>
<style>
    /* ===== FUNCTIONS SECTION ===== */

.mandate-wrapper{
  padding: 10px 20px;
  font-family:"Times New Roman", Times, serif;
}

.mandate-title{
  font-size: 28px;
  font-weight: 600;
  margin-bottom: 15px;
}

.mandate-intro{
  font-size: 16px;
  margin-bottom: 25px;
  color: #333;
  font-weight:bold;
}

/* Number + Heading */
.mandate-service{
  display: flex;
  align-items: center;
  gap: 15px;
  margin-bottom: 15px;
}

.mandate-number{
  background: #06e2f2;
  color: #000;
  font-weight: 600;
  padding: 6px 14px;
  border-radius: 6px;
  font-size: 16px;
}

.mandate-service h3{
  font-size: 20px;
  margin: 0;
}

/* Paragraph */
.mandate-text{
  font-size: 15px;
  line-height: 1.8;
  margin-bottom: 25px;
  text-align: justify;
}

/* Grey content box */
.mandate-box{
  background: #f8f8f8;
  padding: 20px;
  border-radius: 8px;
  margin-bottom: 20px;
}

.mandate-box h4{
  color: #6a1b9a;
  font-size: 16px;
  margin-bottom: 10px;
}

.mandate-box p{
  font-size: 15px;
  line-height: 1.8;
  margin: 0;
}

/* ===== MOBILE FIX ===== */
@media (max-width: 768px){
  .mandate-wrapper{
    padding: 10px;
  }

  .mandate-title{
    font-size: 24px;
  }
}

/* Referral Services checklist */

.mandate-subtitle{
  font-size: 18px;
  font-weight: 600;
  color: #6a1b9a;
  margin: 25px 0 10px;
}

.mandate-checklist{
  background: #eef6f1;
  padding: 25px;
  border-radius: 10px;
  margin: 20px 0;
}

.mandate-checklist ul{
  list-style: none;
  padding: 0;
  margin: 0;
}

.mandate-checklist li{
  position: relative;
  padding-left: 35px;
  margin-bottom: 18px;
  font-size: 15px;
  line-height: 1.7;
}

/* Tick icon */
.mandate-checklist li::before{
  content: "✓";
  position: absolute;
  left: 0;
  top: 2px;
  width: 22px;
  height: 22px;
  background: #ffffff;
  color: #2e7d32;
  border-radius: 50%;
  font-weight: bold;
  display: flex;
  align-items: center;
  justify-content: center;
}
.mandate-checklist-C{
  background: #eef6f1;
  padding: 25px;
  border-radius: 10px;
  margin: 20px 0;
}

.mandate-checklist-C ul{
  list-style: none;
  padding: 0;
  margin: 0;
  counter-reset: roman;
}

.mandate-checklist-C li{
  position: relative;
  padding-left: 40px;
  margin-bottom: 18px;
  line-height: 1.7;
  counter-increment: roman;
}

/* Tick icon */
.mandate-checklist-C li::before{
  content: counter(roman, upper-roman);
  position: absolute;
  left: 0;
  top: 2px;
  width: 26px;
  height: 26px;
  background: #ffffff;
  color: #2e7d32;
  border-radius: 50%;
  font-weight: 700;
  font-size: 13px;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Mobile Fix */
@media (max-width: 768px){
  .mandate-checklist{
    padding: 15px;
  }

  .mandate-checklist li{
    padding-left: 30px;
    font-size: 14px;
  }
  .mandate-checklist-C{
    padding: 15px;
  }

  .mandate-checklist-C li{
    padding-left: 30px;
    font-size: 14px;
  }
}
</style>
<!-- MANDATE -->

  <div class="mandate-wrapper">

  <h2 class="mandate-title">Organisations Structure</h2>

  <p class="mandate-intro">
    Trained Health Manpower Development
  </p>
  <p class="mandate-text">
    Special emphasis is given to trained health manpower development that is essential for the
successful implementation of different health programmes in the country. Besides the regular training programmes,
numerous short-term training activities are conducted every year. The course curricula of these training programmes
are designed to develop the necessary need-based skills. The participants to these courses come from different
States/Union Territories of India. In addition, trainees from some of the countries like Bangladesh, Bhutan, Sri
Lanka, Myanmar, Nepal, Maldives, Timor Leste and North Korea also participate in the training programmes. The NCDC
also conducts customized training programmes for international participants. These courses are sponsored by
international agencies like WHO, UNICEF, CDC and USAID.
  </p>

  <!-- A -->
  <div class="mandate-box">
    <p class="mandate-intro">
    Training programmes carried out by NCDC are:
  </p><br>
    <h4>1.  India EIS Programme</h4>
    <p>
      NCDC conducts two year India Epidemic Intelligence Service (EIS) Programme in
collaboration with CDC, Atlanta. The programme focuses on hands-on training in epidemiologi service
for public health professionals. Trainees engage in outbreak investigation, designing and analyzing
epidemiological studies, analysis and evaluation of surveillance data, scientific communication, and
other activities in preparation for careers as field epidemiologist. Every year nominations are
invited by an advertisement. Eligibility criteria and other details of the programme are also
available on NCDC website.
    </p><br>
<hr><br>

<br>
    <h4>2.MPH (FE) Course</h4>
    <p>
      NCDC conducts two year Master in Public Health (Field Epidemiology) course
affiliated to the Guru Gobind Singh Indraprastha University, Delhi. Total numbers of seats are 20
out of which two seats are earmarked for WHO sponsored candidates.
    </p><br>
<hr><br>

<br>
    <h4>3.Regional Field Epidemiology Training
Programme (FETP)</h4>
    <p>
      A tailor made programme for the middle and senior level health personnel from
countries of South East Asia Region to strengthen their epidemiological skill. This three month
programme is conducted once a year.
    </p><br>
<hr><br>

<br>
    <h4>4.Regional Training Programme on Prevention and
Control of Communicable Diseases</h4>
    <p>
      The four week programme is conducted once every year and is designed to augment
the capacity to understand disease dynamics in community and intervention for its prevention and
control.
    </p><br>
<hr><br>

<br>
    <h4>5.Vector Borne Diseases</h4>
    <p>
      Training of four weeks in Vector Borne Diseases is carried out in partnership
with NVBDCP, NIMR (ICMR) and NIHFW.
    </p><br>
<hr><br>

<br>
    <h4>6.Sc., MPH and Ph.D. Programme</h4>
    <p>
      NCDC is recognized as the approved centre for guiding the students under Guru
Gobind Singh Indraprastha University, Delhi other Universities.
    </p><br>
</div>

<!-- Applied Research -->
<div class="mandate-service">
    
    <h3>Applied Research</h3>
  </div>

  
  <p class="mandate-text">
    Applied research in various aspects of communicable as well as non-communicable diseases
has been one of the prime functions of the NCDC. To
achieve this, the NCDC is actively engaged in research in the following broad areas:
  </p>

  
  
    <div class="mandate-checklist-C">
      <ul>
       <li>
        <strong>Quality Control of Biologicals:</strong> The institute routinely provides quality control services for various 
        vaccines like BCG, OPV and diagnostic test kits for AIDS, Hepatitis, Meningitis, etc.
       </li>

       <li>
        <strong>Storage and supply of vaccines and other biological materials: </strong> The institute stores reagents, test kits and
        vaccines on behalf of the Directorate General of Health Services (DGHS) and distributes to various state health directorates
        and medical colleges on request. It also provides larvivorous
        fishes for the biological control of mosquitoes to various public health agencies.
       </li>

       <li>
        <strong>Entomological investigations:</strong> Includes identification of arthropods of
        medical importance specially during disease out-break situations.
       </li>

       <li>
        <strong>Evaluation of chemical compounds:</strong> The institute undertakes laboratory and field evaluation 
        of insecticides/biocides to meet the requirements of the registration committee of Central Insecticide Board.
       </li>

       <li>
        Assessment of biochemical parameters to establish clinical diagnosis e.g.Thyroid function tests etc.
       </li>
      </ul>
     </div><br>
  <br>

<!-- Specialised Services -->
 <h3>Specialised Services</h3><br>
    <p>
      The NCDC provides various referral services and technical support to individual patients,
community, medical colleges, research institutions and State
Health Directorates. These include diagnostic and clinical, teaching aids, storage and supply of vaccines and
quality control of biological. The different
services available are given below:
    </p><br>
<br>
<div class="mandate-box">

    <h4>1.  Diagnostic:</h4>
    <p>
      NCDC provides referral diagnostic services for various communicable diseases,
some of which are ordinarily not available in hospitals and medical colleges. These include
diagnosis of Cholera, Dengue, Diphtheria, Filaria, Fungal infections, Hepatitis, HIV/AIDS,
Influenza, JE, Kala-azar, Leptospirosis, Malaria, Measles, Meningitis, Rabies, Rubella, Scrub
Typhus, Soil Transmitted Helminthes, Tuberculosis, and Zika Virus Disease.
    </p><br>
<hr><br>

<br>
    <h4>2.Storage and supply of Diagnostic
Reagents:</h4>
    <p>
      The NCDC stores reagent and test kits on behalf of the Directorate General of
Health Services and distributes to various State Health Directorates and medical colleges.
    </p><br>
<hr><br>

<br>
    <h4>3.Entomological Services:</h4>
    <p>
      Includes identification of arthropods of medical importance specially during
disease outbreak situations, provides larvivorous fishes for the biological control of mosquitoes to
various public health agencies.
    </p><br>
<hr><br>

<br>
    <h4>4.Quality Control of Insecticides:</h4>
    <p>
      The NCDC undertakes laboratory and field evaluation of insecticides/biocides to
meet the requirements of the Registration Committee (RC) of Central Insecticide Board (CIB).
    </p><br>
<hr><br>

<br>
    <h4>5.Supply of research materials:</h4>
    <p>
      Various bacterial and fungal isolates, virus cell lines, Malaria, Filaria,
Kala-Azar, Rabies, Diphtheria, Meningococcus slides, live cultures and preserved materials of
arthropods are provided to medical colleges and research institutions.
    </p><br>
<hr><br>

<br>
    <h4>6.Outbreak investigations:</h4>
    <p>
      The NCDC investigates and recommends control measures for the outbreaks of
various communicable diseases to the States/UTs all over the country as well as to some
neighbouring countries.
    </p><br>
<hr><br>
    <h4>7.Verification of rumours of eradicated
diseases:</h4>
    <p>
      Guineaworm, Yaws and Poliomyelitis.
    </p><br>
<hr><br>
    <h4>8.Supply of teaching materials:</h4>
    <p>
      The NCDC provides teaching materials on various communicable diseases in
the form of slides, charts, maps, procedure manuals, pamphlets and books etc.
    </p><br>
</div>

<!-- Publications -->
 <h3>Publications</h3><br>
    <p>
      CD Alert is a technical bulletin of the NCDC, Directorate General
of Health Services, to disseminate information on various aspects of communicable diseases to medical fraternity
and health administrators. It is widely circulated to different parts of the country including Directorates of
Health Services of different States, Districts, Primary Health Centres, Medical Colleges and individuals.</p><br>
<HR><br><p>
NCDC Newsletter is a quarterly publication with the purpose to provide
a forum for sharing information on outbreaks, programme updates and information on any event of public health
importance.
    </p><br>
<br>

<button class="back-btn" onclick="window.location.href='/NCDC_MOHFW/index.php'">Back</button>