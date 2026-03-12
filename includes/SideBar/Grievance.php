<?php
// grivance.php
?>
<?php include("../header.php"); ?>
<link rel="stylesheet" href="/NCDC_MOHFW/assets/css/style.css">

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="Header Image of NCDC Website">
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Redressal of Grievances</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f5f7fa;
        }
        .page-title {
            font-weight: 700;
            color: #0d3b66;
        }
        .card-custom {
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            border: none;
        }
        .profile-img {
            width: 120px;
            height: 140px;
            object-fit: cover;
            border-radius: 8px;
        }
        .section-title {
            margin-top: 40px;
            font-weight: 600;
            color: #0d3b66;
        }
    </style>
</head>
<body>

<div class="container py-5">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Grievance</li>
        </ol>
    </nav>

    <!-- Page Heading -->
    <h2 class="page-title mb-4">Redressal of Grievances</h2>

    <!-- Description -->
    <p>
        The main objective of the exercise to issue the Citizen’s Charter of an organization is to improve the quality of public services. 
        This is done by letting people know the mandate of the concerned Ministry/ Department/ Organization, how one can get in touch with its 
        officials, what to expect by way of services and how to seek a remedy if something goes wrong. The Citizen’s Charter does not by itself 
        create new legal rights, but it surely helps in enforcing existing rights. This website provides the details of Citizen’s Charter of 
        National Centre for Disease Control, New Delhi.
    </p>

    <p>
        Complaint received on the portal will be routed through file to specific department/(s) and information regarding the 
        grievance would be received as early as possible. The same would be uploaded on the portal.
    </p>
    <p>
        A Grievances Officer in the institute has been appointed to look into the grievances on the website. 
        There is also a coordinator who coordinates all the activities with specific departments.
    </p>

    <!-- Nodal Officer Section -->
    <h4 class="section-title">Nodal Officer</h4>

    <div class="card card-custom p-4 mt-3">
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="/NCDC_MOHFW/uploads/images/aarti.jpg" alt="Dr Aarti Tewari" class="profile-img">
            </div>
            <div class="col-md-9">
                <h5 class="mb-1">Dr. Aarti Tewari</h5>
                <p class="mb-1">Joint Director and Section In-charge</p>
                <p class="mb-1">MBBS, MD</p>
                <p class="mb-0"><strong>Phone:</strong> 011-20832460</p>
            </div>
        </div>
    </div>

    <!-- Coordinator Section -->
    <h4 class="section-title">Coordinator</h4>

    <div class="card card-custom p-4 mt-3">
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="/NCDC_MOHFW/uploads/images/prakash.jpg" alt="Mr Prakash Doval" class="profile-img">
            </div>
            <div class="col-md-9">
                <h5 class="mb-1">Mr. Prakash Doval</h5>
                <p class="mb-1">Coordinator</p>
                <p class="mb-0"><strong>Phone:</strong> 011-20832461</p>
            </div>
        </div>
    </div>

</div>

</body>
</html>
<?php include("../footer.php"); ?>