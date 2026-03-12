<?php
$conn = mysqli_connect("localhost", "root", "", "ncdc_db");

if(!$conn){
  die("❌ DB Error: " . mysqli_connect_error());
}
?>
