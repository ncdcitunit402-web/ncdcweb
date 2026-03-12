<?php include("../header.php"); ?>


<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" alt="NCDC Header">
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Training and Fellowship Program</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: #f9f9f9;
    }

    /* Header Image */
    .header-image {
      width: 100%;
      height: 200px;
      overflow: hidden;
    }
    .header-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }

    /* Page Layout */
    .page-container {
      display: flex;
      gap: 30px;
      padding: 20px 40px;
      align-items: flex-start;
    }

    /* Sidebar */
    .sidebar {
      width: 260px;
      background: #f0f8ff;
      border-radius: 10px;
      padding: 15px;
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
    }
    .sidebar li {
      padding: 10px 15px;
      margin-bottom: 10px;
      cursor: pointer;
      border-radius: 5px;
      transition: 0.3s;
    }
    .sidebar li.active,
    .sidebar li:hover {
      background-color: #00a5b5;
      color: white;
    }

    /* Main Content */
    .main-content {
      flex: 1;
    }
    .main-content h1, .main-content h2, .main-content h3 {
      color: #003366;
    }
    .program-list {
      list-style: none;
      padding-left: 0;
    }
    .program-list li {
      margin-bottom: 12px;
      display: flex;
      align-items: center;
    }
    .program-list li img {
      width: 20px;
      height: 20px;
      margin-left: 10px;
    }

    /* Back Button */
    .back-btn {
      display: inline-block;
      padding: 10px 20px;
      background: #00a5b5;
      color: white;
      border-radius: 25px;
      text-decoration: none;
      margin-top: 20px;
    }
    .back-btn:hover {
      background: #007f8a;
    }
    /* Tab Content Control */
.tab-content {
  display: none;
}
.tab-content.active {
  display: block;
}
.roman-list {
  list-style-type: upper-roman;
  margin-left: 30px;   /* controls left margin */
  padding-left: 20px;
}
.roman-list li {
  margin-bottom: 10px;
}


    /* Responsive */
    @media (max-width: 768px) {
      .page-container {
        flex-direction: column;
      }
      .sidebar {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <!-- Page Container -->
  <div class="page-container" >

    <!-- Sidebar -->
    <aside class="sidebar">
      <ul>
        <li class="active" data-tab="objectives">Objectives</li>
        <li data-tab="seminars">Workshop Seminars</li>
      </ul>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
      <h1>Training and Fellowship Program</h1><br>

      <!-- Objectives Tab -->
      <div id="objectives" class="tab-content active">
      <ul class="program-list">
        <li><a href="/NCDC_MOHFW/uploads/pdf/File649.pdf" target="_blank">WORKSHOP: Building the bridge between air quality, weather, and health<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/File683.pdf" target="_blank">Guest Lecture by Padmashri Prof. Dr. P.K. Rajgopalan at NCDC<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/62818199551532083906.pdf" target="_blank">World Environment Day celebration on 5th June 2018<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li><br><br>
      </ul>

      <h2>World Health Day – 7th April</h2><br>
      <ul class="program-list">
        <li><a href="/NCDC_MOHFW/uploads/pdf/File590.pdf" target="_blank">World Health Day 2016 Invitation in Hindi<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/File591.pdf" target="_blank">World Health Day 2016 Invitation in English<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
        <li><a href="/NCDC_MOHFW/uploads/pdf/File592.pdf" target="_blank">World Health Day 2016 Agenda<img src="/NCDC_MOHFW/uploads/images/pdf-icon.png" class="pdf-icon" alt="PDF"></a></li>
      </ul>
</div>


      <!-- Workshop Seminars Tab -->
      <div id="seminars" class="tab-content">
        <h2>Participation in Conferences Workshops Seminars Symposia WHO & Other International Fellowships</h2><br>
        <h4>Headquarters</h4><br>
        <h3><strong>Dr. R.L. Ichhpujani, Consultant (Micro) & HOD, CARD</strong></h3><br>
        <ol type="I" class="roman-list">
          <li>Meeting of NRLs at NARI, Pune from 16 & 17.10.2008</li>
          <li>Four days Workshop organized by NACO at NARI to create parity between the four NRLs on quality for evaluations and batch testing of kits from 21 to 24.07.2008 at NARI, Pune. The workshop involved coordinating plan and procedures between NARI, NCDC, NICED and NIMHANS.</li>
          <li>Meeting of review of progress made in evaluation of various rapid diagnostic kits under the chairmanship of Special Secretary (DG) and Spl., D.G. & Director, NCDC on 30.06.2008 at Nirman Bhavan, New Delhi</li>
        </ol>


        <br><h3><strong>Dr. R.L. Ichhpujani, Consultant (Micro) & HOD, CARD and Dr. Rohit Chawla, Assistant Director, CARD</strong></h3><br>
        <ol type="I" class="roman-list">
          <li>NRLs meeting at NIB, NOIDA from 23.09.2008 to 25.09.2008.</li>
          <li>Consortium meeting of NRLs at NARI, Pune, 16.09.2008 and 17.09.2008.</li>
          <li>Consortium meeting of NRLs at NARI, Pune on 22.08.2008 and 23.08.2008..</li>
          <li>One day workshop on Dried Blood Spot (DBS) based HIV testing as an expert, which was organized by the Centre
for Community Medicine, AIIMS, New Delhi on 15.07.2008 at NCDC, Delhi along-with Mr. Charan Singh,
Laboratory Technician</li>
        </ol>

        <br><h3><strong>Dr. Rohit Chawla, Assistant Director, CARD</strong></h3><br>
        <ol type="I" class="roman-list">
          <li>Workshop at NARI, Pune on “Testing on Dried Blood Spot (DBS)” on 19 & 20.03.2009 (along with Mr. Charan
Singh, Laboratory Technician and Mr. Pritam Singh, Laboratory Technician).</li>
          <li>Guest lecture on” Internal Quality Control in HIV Testing” on 19 and 20.02.2009 for Doctors and technicians,
respectively during the training progamme on “External Quality Assessment Program for HIV Testing” Organized
by Department of Microbiology, Maulana Azad Medical College, New Delhi.</li>
          <li>Meeting of experts to examine and finalize the LT training module prepared by NACO held on 23.12.2008 to
24.12.2008 at NACO, New Delhi</li>
          <li>Consortium meeting of NRLs at NARI, Pune from 17.11.2008 and 18.11.2008</li>
          <li>Meeting of the Selection Committee for the post of Medico social worker conducted by CCRH, New Delhi at ART
Centre Safdarjung Hospital, New Delhi on 30.09.2008.</li>
          <li>A didactic session on “How to setup an HIV laboratory – an overview” on 7.08.2008 at LRS Institute of TB and
Respiratory Diseases, New Delhi.</li>
          <li>Meeting on finalization of QOL for Clinical Study on HIV Infection & Review of the Ongoing Studies at
CCRH Heqs., New Delhi on 24.07.2008</li>
          <li>Technical Committee meeting for the finalization of specification and procurement of Western blot test kits,
under the Chairmanship of Addl. Project Director, DSACS held on 13.05.2008 at DSACS, Rohini, Delhi</li>
          <li>Meeting of the Nodal Officers/Incharges of the Sentinel Surveillance Sites for the year 2007 (both the
testing as well as the blood collection sites) held on 28.05.2008 at MAMC, Delhi</li>
          <li>Task Force Committee meeting for finalization of protocols on HIV/AIDS, held on 4.04.2008 in Central Council
for Research in Homoeopathy, New Delhi</li>
          <li>Annual Sentinel Surveillance for HIV Infection – 2007 – National Surveillance Review meeting of supervision
and monitoring by Regional Institutes and Central and Central Team Members, held on 21 & 22.04.2008 at
NIHFW, New Delhi.</li>
          <li>Consultative meeting of the CDC experts, national experts and representative of national reference
laboratories held on programmatic issues related to testing for pre-batch lot release of test kits and
confirmation of HIV status of children under 18 months of age on 28.04.2008</li>
          <li>Technical Committee meeting for the finalization of specification and procurement of Western blot test kits,
held on 23.04.2008 at DSACS, Delhi.</li>
        </ol>

        <br><h3><strong>Dr. Rohit Chawla, Assistant Director, CARD and Dr. Arti Bahl, Assistant Director,
CARD</strong></h3><br>
        <ol type="I" class="roman-list">
          <li>Training of trainer (TOT) as faculty members for the Master of Public Health – Field Epidemiology (MPH –FE)
from 23.09.2008 to 26.09.2008 at NCDC, Delhi.</li>
          <li>Meeting on the issues related to rapid diagnostic kits available in the country under the Chairmanship of
Dr. Shiv Lal, Additional D.G. & Director on 08.05.2008 in Nirman Bhavan, New Delhi.</li>
        </ol>

        <br><h3><strong>Dr. Arti Bahl, Assistant Director, CARD</strong></h3><br>
        <ol type="I" class="roman-list">
          <li>Dr. Arti Bahl, Assistant Director conducted interview as an expert for the post of Lab. Technicians, held in Delhi State AIDS Control Society, on 2.05.2008.</li>
        </ol>

        <br><h3><strong>Mr. H.L. Meena, ARO</strong></h3><br>
        <ol type="I" class="roman-list">
          <li>Participated in WHO-in-country Fellowship training for the course entitled “Regional Field Epidemiology 
            Training Programme for Paramedics” w.e.f. 18.11.2008 to 15.12.2008 at NCDC, Delhi.</li>
        </ol>

                <br><h3><strong>Mr. Sushil Kumar, Laboratory Technician, CARD</strong></h3><br>
        <ol type="I" class="roman-list">
          <li>Participated in WHO-in-country Fellowship training in the field of “Cytology for Lab. Technicians and Pathologists” w.e.f. 
            from 5.01.2009 for a period of three month at ICPO (ICMR), NOIDA (UP).</li>
        </ol>

                <br><h3><strong>Mrs. Surbhi Mahajan, Laboratory Technician, CARD</strong></h3><br>
        <ol type="I" class="roman-list">
          <li>Participated in WHO-in-country Fellowship training in the field of “Laboratory Genetics in Three Areas : Molecular Genetics, 
            Cytogenetics, Biochemical Genetics” w.e.f. from 5.01.2009 for a period of three month at AIIMS, New Delhi</li>
        </ol>

        <br><h3><strong>Mr. Riki Palit and Ms. Sumedha Lamba, Counselors, CARD</strong></h3><br>
        <ol type="I" class="roman-list">
          <li>Induction training of counselors organized by DSACS at IHBAS, Delhi from 14 to 26.11.2008</li>
        </ol>

        <br><h3><strong>Ms. Sumedha Lamba, Counselor, CARDD</strong></h3><br>
        <ol type="I" class="roman-list">
          <li>One day district level workshop to develop linkage between ICTC organized by DSACS on 24.10.2008 at Richi Rich Banquet Hall, Shalimar Bagh, Delhi (attended by Ms. Sumedha Lamba, Counsellor).</li>
        </ol>

        <br><h3><strong>Dr. Sukhvir Singh Deputy Director, Department of Parasitic Diseases</strong></h3><br>
        <ol type="I" class="roman-list">
          <li>Dr. Arti Bahl, Assistant Director conducted interview as an expert for the post of Lab. Technicians, held in Delhi State AIDS Control Society, on 2.05.2008.</li>
          <li>Review meeting of Programme Officers of Yaws Eradication Programme (YEP), 24.04 2008 and 25.04 2008, NCDC, Delhi</li>
          <li>Sixth Task Force meeting on YEP under the chairmanship of DGHS, GOI, 11.02.2009, Nirman Bhawan, Delhi</li>
          <li>Review meeting of Programme Officers of Yaws Eradication Programme (YEP), 16.03.2009 and 17.03.2009, NCDC, Delhi</li>
        </ol>

        <br><h3><strong>Dr. Uma Chawla, Joint Director, Division of Epidemiology</strong></h3><br>
        <ol type="I" class="roman-list">
          <li>Third meeting of the Heads of National Coordination Committee to implement the SAARC Social Charter SAARC Secretariat Islamabad, Pakistan, 4.11.2008 to 5.11.2008.</li>
        </ol>

        <br><h3><strong>Dr. Uma Chawla, Joint Director & Dr. Avdhesh Kumar, Joint Director, Division of Epidemiology</strong></h3><br>
        <ol type="I" class="roman-list">
          <li>Workshop on strengthening of Post Disaster Surveillance National Institute of Disaster Management, Ministry of Home Affairs, Govt. Of India, IP Estate, MG Marg, New Delhi, 23.03.2009 to 24.03.2009</li>
          <li>Regional Media Sensitization meet GOI in partnership with UNICEF, Kolkata, 27.03.2009</li>
          <li>Meeting of World Bank Review Mission for IDSP, World Bank, Delhi, 21 – 22.01.2009</li>
          <li>Meeting of World Bank Review Mission for IDSP, World Bank, Bhuwaneshwar, Hyderabad, 14.01.2009 to 17.01.2009 and 18.01.2009 to 20.01.2009</li>
          <li>Participated in SAARC expert group meeting on Disease Surveillance and Rapid Health Response, SAARC Secretariat & NCDC, Ashoka Hotel, New Delhi, 26 – 27.11.2008</li>
        </ol>

        <br><h3 class="section-title">
  <strong>Dr. Avdhesh Kumar, Joint Director, Division of Epidemiology</strong>
</h3>

<ol class="roman-list">
  <li>Meeting on National Influenza Centres in Western Pacific and South East Asia Region, Tokyo, Japan, 21.04.2008 to 24.04.2008</li>
  <li>Meeting on strengthening Influenza Diagnosis and Networking, Pune, 13.05.2008 to 16.05.2008</li>
  <li>Workshop on preparedness, control and containment of Avian Influenza, DAHDF, Bengaluru & Jalandhar, March 2009</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. J.A. Khan, Deputy Director, Division of Epidemiology</strong>
</h3>

<ol class="roman-list">
  <li>Meeting to review implementation of National Rural Drinking Water Quality Monitoring and Surveillance, Nirman Bhawan, 18.07.2008</li>
  <li>Meeting with WHO, PHFI, NICD & NIMR on curriculum development for District Vector Borne Disease Control Consultants, 2.07.2008 & 14.07.2008</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. G.R. Chaudhury, Assistant Director, Division of Epidemiology</strong>
</h3>

<ol class="roman-list">
  <li>WHO Training on Scientific Writing, Manesar, Haryana, 22.11.2008 to 25.11.2008</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. Arvind Rai, Joint Director & Head, Division of Biochemistry</strong>
</h3>

<ol class="roman-list">
  <li>Consultative meeting on certification of NRLs and HIV test kits at NACO, 28.04.2008</li>
  <li>Meeting on strengthening influenza diagnosis and networking, Pune, 13–16.05.2008</li>
  <li>DPR consultancy meeting for NCDC project, Nirman Bhawan, 14.08.2008</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. D.S. Rawat, Joint Director, Division of Biochemistry & Biotechnology</strong>
</h3>

<ol class="roman-list">
  <li>Workshop at NIB, Noida on weeding out old analytical records, 26.09.2008</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. Sunil Gupta, Joint Director, Division of Microbiology</strong>
</h3>

<ol class="roman-list">
  <li>63rd National / 1st International Conference on TB & Chest Diseases, New Delhi, 8–10.09.2008</li>
  <li>Indo-US Joint Working Group Workshop on Counter Terrorism, Chennai, 16–19.09.2008</li>
  <li>Faculty in Disaster Management Training Programme, NIDM, New Delhi</li>
  <li>Expert in Yaws Eradication Programme Review Meetings</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. Somenath Karmakar, Joint Director, Division of Microbiology</strong>
</h3>

<ol class="roman-list">
  <li>WHO–GOI collaborative orientation workshop on healthy environmental clusters, New Delhi, 30.05.2008</li>
</ol>

<br><h3 class="section-title">
  <strong>Mr. Ramesh Aggarwal, Deputy Director, Division of Microbiology</strong>
</h3>

<ol class="roman-list">
  <li>National Influenza Centres Meeting, Tokyo, Japan, 21.04.2008 to 24.04.2008</li>
  <li>Emory University / NSITE Applied Biosafety Training held at NIV, Pune. 9 -13.02.2009</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr Sonia Malik, Assistant Director and Ms Meena Dutta, Research Assistant, Division of Microbiology</strong>
</h3>

<ol class="roman-list">
  <li>Ten days Training on Polio virus isolation at ERC, Mumbai 10.11.2008 -19.11.2008</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. Veena Mittal, Joint Director & Head, Division of Zoonosis</strong>
</h3>

<ol class="roman-list">
  <li>Organized and attended as faculty training course on Animal Bite Management for pilot project cities, October, 2008 & January 2009
  <li>Expert group meeting to develop IEC material at NICD, Delhi under pilot project on Rabies, August, 2008</li>
  <li>Attended as faculty ‘Second National Conference of Indian Academy of Tropical Parasitology’, AIIMS, Delhi – October, 2008</li>
  <li>Training course on Surveillance and control of plague at Bangalore, Sept-Oct, 2008.</li>
  <li>Participated in Meetings held under IDSP for the strengthening of laboratory component of IDSP</li>
  <li>Meeting regarding the utilization of rapid diagnostic kits for various communicable diseases, Nirman Bhavan, Delhi</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. Veena Mittal, Joint Director & Head, Dr. D. Bhattacharya, Joint Director , Dr. U.V.S. Rana, Joint Director & Dr. Mala Chhabra, Joint Director, Division of Zoonosis</strong>
</h3>
<ol class="roman-list">
  <li>Brainstorming Meeting on Emerging Zoonoses organized by Public Health Foundation of India, New Delhi on 18th March, 2009.</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. D. Bhattacharya, Joint Director, Division of Zoonosis</strong>
</h3>
<ol class="roman-list">
  <li>Biosafety Level 3 applied training course at National Institute of Virology (NIV) Pune from 9.02.2009 to 13.02.2009.</li>
<li>Facilitated hands on training courses on laboratory diagnosis of Dengue and Chikungunya fever for microbiologists and laboratory technicians of sentinel surveillance hospitals of Delhi on 17.06.2008 to 18 .06.2008 and 24.06.2008 to 25.06.2008.</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. U.V.S. Rana, Joint Director, Division of Zoonosis</strong>
</h3>
<ol class="roman-list">
  <li>Brainstorming Meeting to develop Roadmap for combating zoonoses in India organized by Public Health Foundation of India, New Delhi on 13.06.2008.</li>
  <li>Workshop on Rodent Control organized by the Department of Agriculture, Govt. of Gujarat, Gandhi Nagar on 6.01.2009 to 7.01.2009.</li>
  <li>Sensitization meeting on Prevention and Control of Anthrax in Koraput District of Orissa on 3.03.2009 for Medical, Animal Husbandry and Forest Officials.</li>
  <li>Expert group meeting on informal consultation to adopt syllabus and modeules for regional course on tropical diseases at Manesar, Haryana on 23.02.2009 and 24.02.2009</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. N. P. Singh, Addl. Director, Statistical Monitoring Evaluation Cell</strong>
</h3>
<ol class="roman-list">
  <li>National Conference of Ministers in Charge of Statistics of States/ UTs” organised by National Statistical Commission at New Delhi on 9.09.2008</li>
</ol>

<br><h3 class="section-title">
  <strong>Shri P. K. Dhamija, Joint Director, Statistics, Statistical Monitoring Evaluation Cell</strong>
</h3>
<ol class="roman-list">
  <li>A One Week Training of the Trainers for the Staff of NICD Branches’ conducted by the NICD.</li>
</ol>

<br><h3 class="section-title">
  <strong>Shri K. C. Meena, Sr. Statistical Officer and Shri L P Meena, Statistical Investigator, Statistical Monitoring Evaluation Cell</strong>
</h3>
<ol class="roman-list">
  <li>“Induction Training Programme – Module I” for in-service Subordinate Statistical Service Officials’ during 23.02.2009 – 6.03.2009 at Data Processing Division, National Sample Survey Organisation, Ministry of Statistics and Programme Implementation, at Kolkata.</li>
</ol>

<br><h3 class="section-title">
  <strong>NCDC Branches</strong>
</h3>
<br><h3 class="section-title">
  <strong>Sh. T. C. Pathak, Insect collector</strong>
</h3>
<ol class="roman-list">
  <li>Regional field epidemiology programme for paramedics from 18.11.2008 to 15.12.2008</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. N. Balakrishnan, Assistant Director and Officer-in-charge, Coonoor Branch</strong>
</h3>
<ol class="roman-list">
  <li>Bio-ecology of mosquitoes in Nilgiris hills and surrounding areas with special reference 
    to disease vectors. Proceedings of the International Congress of Global Warming on Bio- diversity 
    Management on Conservation at Bharathiyar University, Coimbatore 9 to 12.02.2009.</li>
</ol>

<br><h3 class="section-title">
  <strong>Sh.C. Annadurai, Laboratory Assistant, Coonoor Branch</strong>
</h3>
<ol class="roman-list">
  <li>WHO In-country fellowship training programme on Prevention and control of Communicable Diseases at NICD, Delhi, From 17.11.2008 to 18.12.2008</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr R Panda, Assistant Director & Incharge, Jagdalpur Branch</strong>
</h3>
<ol class="roman-list">
  <li>Training programme for supervisors attended from 04.08.2008 and 08.08.2008</li>
  <li>One day consultation meeting future vision and expectation from NCDC, Delhi</li>
  <li>Training cum sensitization meeting on Anthrax Prevention and Control at Koraput on 3.3.2009 along with Dr. U.V.S. Rana, Jt. Director, NICD, Delhi participated.</li>
  <li>Review Meeting of Programme Officers of Yaws Eradication Programme at NICD, Delhi on 23.05.2008 to 24.05.2008.</li>
  <li>Field Supervisor for Field Epidemiology Training Programme NICD, Delhi, 04.08.2008</li>
  <li>Demonstration & training of finger prick method of blood collection for participants of different States during Review meeting of State Programme Officers on YEP, NICD, Delhi, 25.04.2008</li>
  <li>Review meeting of Programme Officers at NICD, Delhi under YEP, NICD, Delhi 24.4.2008 to 25.4.2008</li>
  <li>Branch Officer’s Review meeting, Scientific Symposium and Foundation Day, celebration, NICD, Delhi, 29.7.2008 to 30.7.2008</li>
  <li>Symposium “Climate and Health” and training of field supervisor for F.E.T.P. course, NICD, Delhi, 27.7.08 to 9.8.08</li>
  <li>6th Meeting of Task Force on YEP at Nirman Bhawan, New Delhi, NICD, Delhi, 9.2.09 to 12.2.09</li>
  <li>Task Force meeting on Yaws Eradication Programme , Nirman Bhawan, New Delhi, 11.2.2009</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr.M.K.Showkath Ali, Joint Director & Incharge, Kozhikode Branch</strong>
</h3>
<ol class="roman-list">
  <li>NCDC Consultation meeting with Stake Holders – States and Union Territories, 9.6.08, NICD, Delhi.</li>
  <li>Interview for selection of Epidemiologists, Entomologists and Microbiologists at State/District level in IDSP, 17.11.08 & 18.11.08, Thiruvananthapuram</li>
  <li>Dr.M.K.Showkath Ali, Joint Director & Head attended the Training of Field Supervisors in Field Epidemiology Training Programme from 4.8.2008 to 8.8.2008 at NICD, Delhi</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. M.K.Showkath Ali, Joint Director & Incharge & Dr.R.Rajendran, Assistant Director, Kozhikode Branch</strong>
</h3>
<ol class="roman-list">
  <li>Meeting with the Hon’ble Minister for Health & Family Welfare, Govt. of Kerala for allotment of space for locating the branch, 31.10.08, Trivandrum8</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. R.Rajendran, Assistant Director, Kozhikode Branch</strong>
</h3>
<ol class="roman-list">
  <li>Report releasing ceremony of MDA Programme 2007, 18.4.2008, S.N.College, Cherthala</li>
  <li>Workshop for Community Policing for Security and Well being, 18.4.2008, S.N.College, Cherthala</li>
  <li>Seminar on Communicable Diseases and Control measures, 24.4.2008, Cherthala Municipality</li>
  <li>Awareness on Vector born Diseases and Control, 20.6.2008 & 21.6.2008, Cherthala</li>
  <li>Zonal Seminar on Wetland and Communicable Diseases, 26.8.2008, St.Joseph’s College for Women, Alappuzha</li>
  <li>UGC Sponsored National Seminar on Application of Biotechnology in Acqaculture “Acqatech 2008”, 28.8.2009, S.N.College, Cherthala</li>
  <li>Workshop on Community Health and Bio security, 16.9.2008 & 20.9.2008, S.N.College, Cherthala</li>
  <li>Arogya Suraksha Yatra, 18.9.2008, Alappuzha Dist.Panchayat</li>
  <li>Class on lymphatic filariasis and MDA for Medical Officers and District Programme Officers organized by DMO, Alappuzha, 5.11.2008 & 6.11.2008, Alappuzha, Dr.R.Rajendran</li>
  <li>Municipal level Health awareness camp, 04.03.09, Cherthala Municipality</li>
  <li>National Seminar on “Recent trends in Dignosis and Control of Animal Diseases” with special reference to Public helath and presented a paper 13.3.2009 & 14.3.2009, Ernakulam.</li>
  <li>Dr.R.Rajendran, Assistant Director attended a Three months WHO in country Fellowship Training Programme in”Epidemiology for Researchers and Scientists” at All India Institute of Hygiene and Public Health, Kolkata from 17.11.2008 to 13.02.2009</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr.K. Regu, Deputy Director, Kozhikode Branch</strong>
</h3>
<ol class="roman-list">
  <li>District level MDA Inauguration, 11.11.08, Kozhikode</li>
  <li>WHO Workshop on the revision of the “Manuel on Vector Surveillance”</li>
  <li>5-01-2009 to 09-01-2009, NICD, Delhi</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. Ram Singh, Assistant Director and Officer-in-charge, Patna Branch</strong>
</h3>
<ol class="roman-list">
  <li>Chairman of selection committee for selecting the Drivers at Rajendra Memorial Research Institute of Medical Science at Patna on 25.04.08</li>
  <li>Departmental Promotion Committee meeting as an expert member of committee at Central Water Board( Govt. of India) Patna from 22.01.09 to 23.01.09. &11.02.09.</li>
  <li>Scientific symposium on 45th foundation day of NICD Delhi on 28.07.2008.</li>
  <li>Training of field supervisors for Field Epidemiology Programme from 04.08.08 to 08.08.08 at NICD Delhi</li>
  <li>Workshop on Hindi Day on 26.09.08 at Directorate of Rice Development, Patna</li>
  <li>Kala-azar control programme meeting at Bihar Vidhan Parishad Secretariat on 17.12.08</li>
  <li>Workshop on “Entomological Surveillance of vector Borne Diseases” from 05.01.2009 to 09.01.09 at NICD Delhi.</li>
  <li>Meeting of the technical committee on the MSF Kala-azar treatment project in Vaishali district, Bihar state on 18 .03.09</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. S.K. Patnaik, Joint Director and Officer-in-Charge, Rajahmundry Branch</strong>
</h3>
<ol class="roman-list">
  <li>Yaws eradication: Past efforts and future perspectives Conducted by WHO , Geneva</li>
</ol>

<br><h3 class="section-title">
  <strong>Dr. Shaukat Kamal, Assistant Director and Officer-in-charge, Varanasi Branch</strong>
</h3>
<ol class="roman-list">
  <li>Trainers training in Field Epidemiology NCDC, Delhi, 4.08.2008 to 8.08.2008</li>
  <li>20th National Congress of Parasitology at NEHU, Shillong, 2.11.2008 to 8.11.2008</li>
  <li>20th National Congress of Parasitology held at NEHU , Shillong from 3.11.2008 to 5.11.2008</li>
  <li>Five days Trainers Training in Field Epidemiology (Supported by WHO) conducted by Division of Epidemiology, NCDC, Delhi from 4 to 8.08.2008</li>
</ol>
      </div>
      <a href="/NCDC_MOHFW/index.php" class="back-btn">← Back</a>
    </main>

  </div>
<script>
    const tabs = document.querySelectorAll('.sidebar li');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        // Remove active class from all tabs
        tabs.forEach(t => t.classList.remove('active'));
        // Add active to clicked tab
        tab.classList.add('active');

        // Show corresponding content
        const target = tab.getAttribute('data-tab');
        contents.forEach(c => {
          if(c.id === target) {
            c.classList.add('active');
          } else {
            c.classList.remove('active');
          }
        });
      });
    });
  </script>
</body>
</html>
<?php include("../footer.php"); ?>
