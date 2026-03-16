<?php
session_start();

/* ===============================
   INCLUDE DATABASE CONNECTION
   =============================== */
require_once __DIR__ . '/../config/db.php';
// include_once __DIR__.'/includes/header.php';

$error = "";

/* ===============================
   HANDLE LOGIN SUBMISSION
   =============================== */
if (isset($_POST['login'])) {

  $username = trim($_POST['username']);
  $password = $_POST['password'];

  /* Prepared Statement (SQL Injection Protection) */
  $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username = ? LIMIT 1");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result && $result->num_rows === 1) {

    $admin = $result->fetch_assoc();

    if (password_verify($password, $admin['password'])) {

      /* Prevent Session Fixation */
      session_regenerate_id(true);

      $_SESSION['admin'] = $admin['username'];

      header("Location: dashboard.php");
      exit;
    }
  }

  $error = "Invalid username or password";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Admin Login | NCDC</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Prevent caching -->
<meta http-equiv="Cache-Control" content="no-store" />
<meta http-equiv="Pragma" content="no-cache" />

<link rel="stylesheet" href="../assets/css/style.css">

<style>
.login-box {
width:360px;
margin:90px auto;
padding:25px;
background:#fff;
border:1px solid #ddd;
box-shadow:0 5px 15px rgba(0,0,0,0.15);
}

.login-box h2 {
text-align:center;
margin-bottom:20px;
color:#0b77b8;
}

.login-box input {
width:100%;
padding:10px;
margin-bottom:15px;
border:1px solid #ccc;
font-size:14px;
}

.login-box button {
width:100%;
padding:10px;
background:#0b77b8;
color:#fff;
border:none;
font-size:16px;
cursor:pointer;
}

.login-box button:hover {
background:#095c8e;
}

.error {
color:red;
text-align:center;
margin-bottom:10px;
font-size:14px;
}
</style>

</head>

<body>

<div class="login-box">

<h2>Admin Login</h2>

<?php if (!empty($error)): ?>
<div class="error"><?php echo htmlspecialchars($error); ?></div>
<?php endif; ?>

<form method="post" autocomplete="off">

<input type="text"
name="username"
placeholder="Username"
autocomplete="off"
required>

<input type="password"
name="password"
placeholder="Password"
autocomplete="off"
required>

<button type="submit" name="login">Login</button>

</form>

</div>

</body>
</html>