<?php
// mandate.php
?>
<style>
    /* ===== MANDATE SECTION ===== */

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

  <h2 class="mandate-title">Mandate</h2>

  <p class="mandate-intro">
    The mandate of the Institute broadly covers three areas viz. services,
    trained health manpower development and research.
  </p>

  <!-- SERVICE SECTION -->
  <div class="mandate-service">
    <span class="mandate-number">1</span>
    <h3>Service</h3>
  </div>

  <p class="mandate-text">
    The Institute takes leading role in undertaking investigations of disease outbreaks 
    all over the country employing epidemiological and diagnostic tools. It also provides
     referral diagnostic services to individuals, community, medical colleges, research institutions 
     and state health directorates. The service component provided by the Institute also includes making
      available scientific research material, teaching aids, storage and supply of vaccines and quality control of biologicals.
    A brief of different services provided are mentioned below.
  </p>

  <!-- A -->
  <div class="mandate-box">
    <h4>A. Outbreak investigations</h4>
    <p>
      The institute investigates and recommends control measures for the out-break of various
       communicable diseases in the States/UTs all over the country as well as to some neighbouring 
       countries in the South East Asia Region. The institute also undertakes monitoring of outbreaks 
       through-out the country, especially during its early rising phase by collecting information from the 
       states and districts. The institute conducts emergency preparedness training for the officials in the state 
       as well as investigates rumors in cases of diseases that have been considered as eradicated e.g. Smallpox case rumors.
    </p>
<hr>  
    <!-- B. REFERRAL SERVICES -->
    <h4 class="mandate-subtitle">B. Referral Services</h4>
     <p class="mandate-text">
      <strong>Referral Diagnostic Services:</strong> The institute provides referral diagnostic services for various
      communicable diseases of microbial origin specially for those for which diagnostic
      facilities are ordinarily not available in hospitals and medical colleges. These include:
     </p>

     <div class="mandate-checklist">
      <ul>
       <li>
        <strong>Viral diseases-</strong> Poliomyelitis, Measles, Coxsackie virus, other 
        Enteroviruses,Hepatitis virus, AIDS, Rabies, Arbo-viral infections, Rubella, Cytomegalovirus etc.
       </li>

       <li>
        <strong>Bacterial diseases-</strong> Meningitis, Diphtheria, Acute Respiratory Infections, Cholera and
        newer Entero-pathogens, Plague, Anthrax, Leptospirosis, Brucellosis ,Rickettsioses etc.
       </li>

       <li>
        <strong>Mycotic diseases-</strong> Common fungal infections, superficial as well as deep.
       </li>

       <li>
        <strong>Parasitic Diseases-</strong> Malaria, Kala-azar, Hydatidosis.
       </li>
      </ul>
     </div>
<hr>
    <!-- C. Other Services -->
    <h4 class="mandate-subtitle">C. Other Services</h4>
     <p class="mandate-text">
      <strong>The Institute also provides other important services some of which are as follows:</strong> 
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
     </div>
 </div>
<br><br>


  <!-- Trained Health Manpower Development -->
  <div class="mandate-service">
    <span class="mandate-number">2</span>
    <h3>Trained Health Manpower Development</h3>
  </div>

  <p class="mandate-text">
    This component of the mandate of the Institute is addressed through the following activities
  </p>

  <!-- A -->
  <div class="mandate-box">
    <h4>A. Training</h4>
    <p>
      Special emphasis is given to trained health man-power development that is essential for the successful
       implementation of different health programmes in the country. Besides the regular training programmes,
        numerous short-term training activities are conducted every year. The course curricula of these training 
        programmes are designed to develop the necessary need-based skills. The participants to these courses come 
        from different States/Union Territories of India. In addition, trainees from some of the neighbouring countries 
        like Bangladesh, Bhutan, Sri Lanka, Myanmar and Nepal also participate in some of the training programmes. 
        The institute also conducts separate training programmes specifically designed for international participants.
         Some of these courses are sponsored by international agencies like WHO, UNICEF, World Bank and USAID. The institute
          has developed training modules on different communicable diseases based on its field experiences, which are extensively
           used during training programmes at NICD. The trainees in various Epidemiology courses are exposed
       to the application of computers and related softwares in Epidemiology and disease surveillance.
    </p><br>
<hr>  <br>
    <!-- B. -->
    <h4>B. Expert group meetings</h4>
    <p>
      The Institute organizes meetings for formulation of guidelines for surveillance, management, prevention and 
      control of various communicable and non-communicable diseases. The meetings are attended by experts of the 
      respective field, senior administrators of health services of the states, programme managers from medical, veterinary, agriculture and animal husbandry departments.
    </p>
<br><hr><br>  
    <!-- C. -->
    <h4>C. Supply of teaching and research material</h4>
    <p>
      The institute provides teaching material on various communicable diseases in the form of slides,
      charts, maps, procedure manuals, pamphlets, books etc. to Medical Colleges and Teaching Institutions. 
      Various bacterial and fungal isolates, cell lines, slides of malaria, filaria, kala-azar, rabies, diphtheria,
      meningococcus, live cultures and preserved materials of arthropods
      are also provided to medical colleges and research institutions on request.
    </p>
<br><hr><br>
    <!-- D. -->  
    <h4>D. Fellowships</h4>
    <p>
      Scientists, research workers and health professionals, from India and abroad on WHO fellowships
      are placed in the institute for training and exchange of technical knowledge
    </p>
 </div>


  <!-- Research -->
  <div class="mandate-service">
    <span class="mandate-number">3</span>
    <h3>Research</h3>
  </div>

  <p class="mandate-text">
    Applied integrated research in various aspects of communicable as well as some aspects of non-communicable diseases
    has been one of the prime functions of the Institute. To achieve this, the institute is actively engaged in research in the following broad areas.
  </p>

  <!-- A -->
  <div class="mandate-box">
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
     </div>
 </div>
<button class="back-btn" onclick="window.location.href='/NCDC_MOHFW/index.php'">Back</button>
</div>