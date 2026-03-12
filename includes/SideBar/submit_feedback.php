<?php
include("../../config/db.php"); // DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $description = $_POST['description'];
    $reply_expected = $_POST['reply_expected'];

    $sql = "INSERT INTO feedback 
            (name, address, mobile, phone, email, description, reply_expected) 
            VALUES 
            ('$name', '$address', '$mobile', '$phone', '$email', '$description', '$reply_expected')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Feedback submitted successfully'); window.location='feedback.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
