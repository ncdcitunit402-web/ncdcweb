<?php include("../header.php"); ?>


<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" alt="NCDC Header">
</div>

<?php
include("../../config/db.php");

$query = "SELECT * FROM vacancies 
          WHERE status=1 
          ORDER BY last_date DESC";

$result = mysqli_query($conn, $query);
?>

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
}

/* ===== PAGE ===== */
body{
  font-family:"Segoe UI", Arial, sans-serif;
  background:#fff;
}

.tender-wrapper{
  max-width:1100px;
  margin:40px auto;
  padding:0 20px;
}

.breadcrumb{
  font-size:14px;
  color:#666;
  margin-bottom:10px;
}

.tender-wrapper h1{
  font-size:30px;
  font-weight:700;
  margin-bottom:25px;
}

/* ===== TABLE ===== */
.vacancy-table{
  width:100%;
  border-collapse:collapse;
  background:#fff;
  box-shadow:0 2px 10px rgba(0,0,0,0.06);
  border-radius:10px;
  overflow:hidden;
}

.vacancy-table thead{
  background:#0b77b7;
  color:#fff;
}

.vacancy-table th,
.vacancy-table td{
  padding:14px 16px;
  text-align:left;
}

.vacancy-table th{
  font-size:15px;
  font-weight:600;
}

.vacancy-table tbody tr{
  border-bottom:1px solid #eee;
  transition:background 0.2s ease;
}

.vacancy-table tbody tr:hover{
  background:#f6faff;
}

.vacancy-table td{
  font-size:15px;
}

/* ===== DOWNLOAD BUTTON ===== */
.pdf-btn{
  display:inline-flex;
  align-items:center;
  gap:6px;
  padding:6px 12px;
  background:#0b77b7;
  color:#fff;
  font-size:13px;
  border-radius:6px;
  text-decoration:none;
}

.pdf-btn:hover{
  background:#095f93;
}

/* ===== RESPONSIVE (MOBILE) ===== */
@media(max-width:768px){
  .vacancy-table thead{
    display:none;
  }

  .vacancy-table,
  .vacancy-table tbody,
  .vacancy-table tr,
  .vacancy-table td{
    display:block;
    width:100%;
  }

  .vacancy-table tr{
    margin-bottom:15px;
    box-shadow:0 2px 6px rgba(0,0,0,0.06);
    border-radius:8px;
    padding:10px;
  }

  .vacancy-table td{
    padding:8px 10px;
    font-size:14px;
  }

  .vacancy-table td::before{
    content:attr(data-label);
    font-weight:600;
    display:block;
    color:#555;
    margin-bottom:4px;
  }
}
</style>


<div class="tender-wrapper" >
  <div class="breadcrumb">Home › Vacancies</div>
  <h1>Vacancies</h1>

  <table class="vacancy-table">
  <thead>
    <tr>
      <th>Vacancy Title</th>
      <th style="text-align:center;">Last Date</th>
      <th style="text-align:center;">Download</th>
    </tr>
  </thead>
  <tbody>
  <?php if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){ ?>
    <tr>
      <td data-label="Vacancy Title">
        <?= $row['title']; ?>
      </td>

      <td data-label="Last Date" style="text-align:center;">
        <?= date("d M Y", strtotime($row['last_date'])); ?>
      </td>

      <td data-label="Download" style="text-align:center;">
        <a class="pdf-btn"
           href="/NCDC_MOHFW/uploads/vacancies/<?= $row['pdf_file']; ?>"
           target="_blank">
           📄 View PDF
        </a>
      </td>
    </tr>
  <?php }} else { ?>
    <tr>
      <td colspan="3" style="text-align:center; padding:20px;">
        No vacancies available.
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>

</div>

<?php include("../footer.php"); ?>
