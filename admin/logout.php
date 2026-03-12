<?php
session_start();

/* Destroy all session data */
session_unset();
session_destroy();

/* Redirect after 2 seconds */
header("refresh:2;url=login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Logging Out | Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
/* ================= LOGOUT PAGE STYLE ================= */
body{
  margin:0;
  height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:#f5f7fa;
  font-family: Arial, Helvetica, sans-serif;
}

.logout-box{
  background:#ffffff;
  padding:35px 40px;
  border-radius:8px;
  text-align:center;
  box-shadow:0 6px 20px rgba(0,0,0,0.15);
  max-width:420px;
  width:90%;
}

.logout-box h2{
  color:#0b77b7;
  margin-bottom:10px;
}

.logout-box p{
  font-size:15px;
  color:#333;
  margin-bottom:20px;
}

.spinner{
  width:38px;
  height:38px;
  border:4px solid #ddd;
  border-top:4px solid #0b77b7;
  border-radius:50%;
  margin:0 auto;
  animation:spin 1s linear infinite;
}

@keyframes spin{
  100%{ transform:rotate(360deg); }
}

/* Mobile */
@media(max-width:600px){
  .logout-box{
    padding:28px 22px;
  }
}
</style>
</head>

<body>

<div class="logout-box">
  <h2>Logged Out Successfully</h2>
  <p>You have been safely logged out.<br>
     Redirecting to login page…</p>
  <div class="spinner"></div>
</div>

</body>
</html>
