<?php
// Guest House / PG Hostel Booking
?>
<?php include("../header.php"); ?>

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

/* ===== PAGE CONTENT ===== */
.page-container{
  width:90%;
  max-width:1100px;
  margin:40px auto;
  font-family: Arial, sans-serif;
}

.breadcrumb{
  font-size:14px;
  margin-bottom:15px;
  color:#666;
}

.breadcrumb a{
  text-decoration:none;
  color:#0066cc;
}

.page-container h1{
  font-size:28px;
  margin-bottom:20px;
  color:#003366;
}

.payment-link a{
  color:#d9534f;
  font-weight:bold;
  text-decoration:none;
}

.payment-link a:hover{
  text-decoration:underline;
}

.important-note{
  background:#fff3cd;
  padding:15px;
  border-left:5px solid #ffc107;
  margin:20px 0;
  font-size:15px;
}

.important-note ul{
  margin-top:10px;
}

.warning{
  color:red;
  font-weight:bold;
  margin-top:10px;
}

ol{
  margin-top:20px;
  padding-left:20px;
}

ol li{
  margin-bottom:10px;
}
</style>

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="Header Image of NCDC Website">
</div>

<div class="page-container">

  <!-- Breadcrumb -->
  <div class="breadcrumb">
    <a href="/NCDC_MOHFW/index.php">Home</a> &rsaquo; Guest House / PG Hostel Booking
  </div>

  <!-- Page Title -->
  <h1>Guest House / PG Hostel Booking</h1>

  <!-- Payment Section -->
  <p class="payment-link">
    Please <a href="https://bharatkosh.gov.in/" target="_blank">CLICK HERE</a> for online payment of the following:
  </p>
<br><br>
  <h3>Guest House & PG Hostel Charges (NCDC, Delhi)</h3>

  <!-- Important Note -->
  <br>
    <strong>Note:</strong> While making payment online in NTRP/Bharatkosh, please select the following options carefully:

    <ul>
      <li>
        <strong>PAO:</strong> 021186 – PAO (NICD), Delhi  
        (Now: National Centre for Disease Control, Delhi)
      </li>
      <li>
        <strong>DDO:</strong> 221187 – Director, National Institute of Communicable Diseases,  
        22 Alipur Road, Delhi – 110054  
        (Now: 22, Sham Nath Marg, Delhi – 110054)
      </li>
    </ul>

    <div class="warning">
      If the user selects the wrong PAO/DDO, the fee once paid shall not be refunded and must be paid again to avail the service.
    </div>
  

  <!-- Instructions -->
  <ol>
    <li>Fill in all the required details carefully.</li>
    <li>Complete the online payment process.</li>
    <li>After successful payment, download the receipt/challan/transaction copy.</li>
    <li>Submit the payment receipt to this office to avail the service.</li>
  </ol>

</div>

<?php include("../footer.php"); ?>
