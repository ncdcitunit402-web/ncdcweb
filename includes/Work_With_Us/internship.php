<?php include("../header.php"); ?>


<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" alt="NCDC Header">
</div>

<?php
include("../../config/db.php");

$query = "SELECT * FROM internships 
          WHERE status=1 
          ORDER BY id ASC";
$result = mysqli_query($conn, $query);
?>

<style>
/* HEADER IMAGE */
.header-image{
  width:100%;
  height:260px;
  overflow:hidden;
}
.header-image img{
  width:100%;
  height:100%;
  object-fit:cover;
}

/* PAGE */
.internship-wrapper{
  max-width:1200px;
  margin:40px auto;
  padding:0 20px;
  font-family: "Times New Roman", Times, serif;
  color: black;
}

.breadcrumb{
  font-size:14px;
  color:#666;
  margin-bottom:10px;
}

.internship-wrapper h1{
  font-size:32px;
  font-weight:700;
  margin-bottom:20px;
}

.intro-text{
  font-size:16px;
  line-height:1.8;
  margin-bottom:25px;
  font-family:"Times New Roman", Times, serif;
}

/* TABLE */
.table-responsive{
  overflow-x:auto;
}

table{
  width:100%;
  border-collapse:collapse;
  background:#fff;
}

th{
  background:#eef3f6;
  padding:14px;
  font-size:15px;
  text-align:left;
}

td{
  padding:14px;
  border-bottom:1px solid #ddd;
  font-size:15px;
}

tr:hover{
  background:#f9fcff;
}

/* MOBILE VIEW */
@media(max-width:768px){
  table thead{
    display:none;
  }

  table tr{
    display:block;
    margin-bottom:15px;
    border:1px solid #ddd;
    border-radius:8px;
    padding:10px;
  }

  table td{
    display:block;
    text-align:right;
    position:relative;
    padding-left:50%;
    border:none;
    font-size:14px;
  }

  table td::before{
    content: attr(data-label);
    position:absolute;
    left:10px;
    top:10px;
    font-weight:600;
    text-align:left;
  }
  .internship-details {
  background-color: #f5f9fc;
  border-left: 4px solid #0073e6;
  padding: 80px;
  border-radius: 8px;
  margin-left: 80%;
  font-family: Arial, sans-serif;
  line-height: 1.6;
}

.internship-details ul {
  list-style-type: disc;
  margin-left: 20px;
}

.internship-details li {
  margin-bottom: 15px;
}

.internship-details li strong {
  color: #0073e6;
}
}
</style>

<div class="internship-wrapper" >

  <div class="breadcrumb">Home › Internship</div>

  <h1>Internship</h1>

  <p class="intro-text">
    Admission Notice for MPH (Field Epidemiology) at NCDC under GGSIP University for 2024-25 session.
    <a href="https://ipu.admissions.nic.in/schedule-notices/" target="_blank">
        https://ipu.admissions.nic.in/schedule-notices/
    </a>  MPH (FE) (CET CODE-412)_Inviting Applications Forms 
    of Master of Public Health (Field Epidemiology) for Academic Session 2024-2025 , Dated 30.07.2024. <br>  
<h2>NCDC Internship Programme</h2><br>
NCDC is introducing a regular calendar of internship in the various technical divisions, as per details below: Technical 
Division wise eligibility, number of seats and period of internship:
  </p>

  <div class="table-responsive">
    <table>
      <thead>
        <tr>
          <th>Sr. No.</th>
          <th>Name of Division</th>
          <th>Eligibility Required for Internship</th>
          <th>No. of Tentative Seats / Year</th>
          <th>Period of Internship Duration</th>
        </tr>
      </thead>
      <tbody>
      <?php
      if(mysqli_num_rows($result)>0){
        $i=1;
        while($row=mysqli_fetch_assoc($result)){
      ?>
        <tr>
          <td data-label="Sr. No."><?= $i++; ?></td>
          <td data-label="Division Name"><?= $row['division_name']; ?></td>
          <td data-label="Eligibility"><?= $row['eligibility']; ?></td>
          <td data-label="Seats"><?= $row['seats']; ?></td>
          <td data-label="Duration"><?= $row['duration']; ?></td>
        </tr>
      <?php }} else { ?>
        <tr>
          <td colspan="5">No internship data available.</td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
<br><br>
  <p>
  ** Perusing MPH second year or completed MPH from recognized University  
  ** MSc Internship (With or without thesis) from recognized University  
  The other details are as under:
</p>

<div class="internship-details">
  <ul>
    <li>
      <strong>Internship cycle:</strong> Initially NCDC will offer two internship cycles in a year. 
      The first cycle will be open from January, for which the application will be accepted in the month of Oct–Dec of the preceding year. 
      The second cycle will be from 1 June, for which applications will be received from April to May of the year. 
      Applications will be closed 15 days prior to the start of the internship.
    </li>

    <li>
      <strong>Fees:</strong> NCDC will offer the internship free of cost. However, no stipend will be paid to prospective interns. 
      Based on availability and individual assessment, hostel facilities may be made available as per norms. 
      No long leaves will be admissible during internship. Emergency leaves may be sanctioned on recommendation of the departmental head.
    </li>

    <li>
      <strong>Certificate:</strong> On successful completion of the internship period, and based on recommendation of the departmental head, a certificate will be awarded.
    </li>
  </ul>
</div><br><br>
<p>
  <strong>1.Application Process:</strong> Interested applicants who fit the eligibility criterion can apply through an  <a href="https://docs.google.com/forms/d/e/1FAIpQLSdNoue7diVBMW2fltdkDgpnMsKjsiFtOCsSPK8H7SuGEhLFNg/closedform?pli=1" target="_blank">
        online form
    </a> which will be 
  available on NCDC website and payment of a nominal application fee of Rs 500/ through demand draft in the name of Director NCDC. 
  Additional supporting documents such as a support letter from the University (if pursuing a course) and at least three letters of 
  recommendations supporting relevant experience will be expected from the candidate. NCDC will communicate acceptance after the process 
  of screening and approvals from competent authority. If a large number of applicants apply, NCDC may introduce a process of screening and selection.
</p>

</div>

<?php include("../footer.php"); ?>
