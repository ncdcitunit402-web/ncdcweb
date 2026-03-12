<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';

if(isset($_POST['submit'])){

    $name     = trim($_POST['name']);
    $address  = trim($_POST['address']);
    $mobile   = trim($_POST['mobile']);
    $email    = trim($_POST['email']);
    $feedback = trim($_POST['feedback']);

    if($name == "" || $email == "" || $feedback == ""){
        $_SESSION['error'] = "Please fill all required fields.";
    } else {

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'ncdc.mohfw.itunit@gmail.com';
            $mail->Password   = 'jzll auny thcr dufg';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Sender
            $mail->setFrom('ncdc.mohfw.itunit@gmail.com', 'NCDC Website');

            // Receiver
            $mail->addAddress('ncdc.mohfw.itunit@gmail.com');

            // Reply to user email
            $mail->addReplyTo($email, $name);

            $mail->isHTML(false);
            $mail->Subject = "New Feedback from NCDC Website";

            $mail->Body = "
Name: $name

Address: $address

Mobile: $mobile

Email: $email

Feedback:
$feedback
";

            $mail->send();

            $_SESSION['success'] = "Feedback sent successfully!";
            header("Location: feedback2.php");
            exit();

        } catch (Exception $e) {
            $_SESSION['error'] = "Mailer Error: " . $mail->ErrorInfo;
        }
    }

    header("Location: feedback2.php");
    exit();
}
?>

<?php include("../header.php"); ?>

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="Header Image of NCDC Website">
</div>

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
.feedback-container{
    max-width:700px;
    margin:40px auto;
    background:#fff;
    padding:30px;
    border-radius:10px;
    box-shadow:0 2px 12px rgba(0,0,0,0.1);
}

.feedback-container h2{
    margin-bottom:20px;
    font-size:22px;
}

.feedback-container input,
.feedback-container textarea{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ccc;
    border-radius:6px;
    font-size:14px;
}

.feedback-container button{
    background:#0b77b7;
    color:#fff;
    border:none;
    padding:12px 20px;
    border-radius:6px;
    cursor:pointer;
    font-size:15px;
}

.feedback-container button:hover{
    background:#084f78;
}

.success-msg{
    background:#d4edda;
    color:#155724;
    padding:10px;
    border-radius:6px;
    margin-bottom:15px;
}

.error-msg{
    background:#f8d7da;
    color:#721c24;
    padding:10px;
    border-radius:6px;
    margin-bottom:15px;
}

/* Mobile Responsive */
@media(max-width:768px){
    .feedback-container{
        margin:20px;
        padding:20px;
    }
    .header-image{
    height:140px;
  }
}
</style>

<div class="feedback-container">
    <h2>Feedback Form</h2>

    <?php
    if(isset($_SESSION['success'])){
        echo '<div class="success-msg" id="successMsg">'.$_SESSION['success'].'</div>';
        unset($_SESSION['success']);
    }

    if(isset($_SESSION['error'])){
        echo '<div class="error-msg">'.$_SESSION['error'].'</div>';
        unset($_SESSION['error']);
    }
    ?>

    <form method="post">

        <input type="text" name="name" placeholder="Full Name *" required>

        <input type="text" name="address" placeholder="Address">

        <input type="text" name="mobile" placeholder="Mobile Number">

        <input type="email" name="email" placeholder="Email Address *" required>

        <textarea name="feedback" rows="5"
        placeholder="Write your feedback here... *" required></textarea>

        <button type="submit" name="submit">Send Feedback</button>

    </form>
</div>

<script>
// Hide success message after 1 minute
setTimeout(function(){
    var msg = document.getElementById("successMsg");
    if(msg){
        msg.style.display = "none";
    }
}, 60000);
</script>

<?php include("../footer.php"); ?>
