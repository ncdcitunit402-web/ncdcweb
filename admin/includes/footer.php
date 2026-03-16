<?php
// footer.php
?>

<style>

/* ===== BODY FIX FOR STICKY FOOTER ===== */
html, body{
  height:100%;
  margin:0;
  display:flex;
  flex-direction:column;
}

main{
  flex:1;
}

/* ================= FOOTER ================= */

.ncdc-footer{
  background: linear-gradient(135deg,#0b77b7,#075a8a);
  color:#ffffff;
  padding:30px 15px;
  font-family:"Times New Roman", Times, serif;
  width:100%;
  text-align:center;
  box-shadow:0 -4px 10px rgba(0,0,0,0.2);
  margin-bottom:10;
}

/* Links */

.footer-links{
  display:flex;
  flex-wrap:wrap;
  justify-content:center;
  gap:12px 20px;
  font-size:15px;
  margin-bottom:10px;
}

.footer-links a{
  color:#ffffff;
  text-decoration:none;
  padding:5px 8px;
  transition:0.3s;
  border-radius:4px;
}

.footer-links a:hover{
  background:rgba(255,255,255,0.15);
  text-decoration:none;
}

/* Divider */

.footer-divider{
  width:85%;
  height:1px;
  margin:20px auto;
  background:rgba(255,255,255,0.4);
}

/* Footer Content */

.footer-content{
  font-size:14px;
  line-height:1.7;
}

.footer-content p{
  margin:6px 0;
}

.footer-content strong{
  color:#ffd54f;
}

/* Code */

.footer-code{
  margin-top:10px;
  font-weight:bold;
  letter-spacing:2px;
  font-size:15px;
}

/* MOBILE */

@media(max-width:768px){

  .footer-links{
    flex-direction:column;
    gap:8px;
    font-size:14px;
  }

  .footer-content{
    font-size:13px;
  }

}

</style>

<footer class="ncdc-footer">

<!-- Footer Links -->

<div class="footer-links">
<a href="/NCDC_MOHFW/includes/Footer/Disclaimer.php">Disclaimer</a>
<a href="/NCDC_MOHFW/includes/Footer/Copyright_Policy.php">Copyright Policy</a>
<a href="/NCDC_MOHFW/includes/Footer/Hyper_Linking_Policy.php">Hyper Linking Policy</a>
<a href="/NCDC_MOHFW/includes/Footer/Terms&Conditions.php">Terms &amp; Conditions</a>
<a href="/NCDC_MOHFW/includes/Footer/Privacy_Policy.php">Privacy Policy</a>
<a href="/NCDC_MOHFW/includes/Footer/Website_Policies.php">Website Policies</a>
<a href="/NCDC_MOHFW/includes/Footer/Accessibility_Statement.php">Accessibility Statement</a>
<a href="/NCDC_MOHFW/includes/Footer/Web_Information_Manager.php">Web Information Manager</a>
</div>

<div class="footer-divider"></div>

<?php

date_default_timezone_set('Asia/Kolkata');

function getLatestModifiedTime($dir){

    $latestTime = 0;

    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
    );

    foreach ($files as $file){
        if($file->isFile()){
            $fileTime = $file->getMTime();

            if($fileTime > $latestTime){
                $latestTime = $fileTime;
            }
        }
    }

    return $latestTime;
}

$folderPath = $_SERVER['DOCUMENT_ROOT']."/NCDC_MOHFW";

$latestModifiedTime = getLatestModifiedTime($folderPath);

?>

<div class="footer-content">

<p>
Website Last Updated On
<strong>
<?php echo date("M d, Y h:i A",$latestModifiedTime); ?>
</strong>
</p>

<p>
Content owned &amp; Provided by <br>
“National Centre for Disease Control”,<br>
Ministry of Health &amp; Family Welfare,<br>
Government of India
</p>

<p>
Designed and Developed by <strong>IT Unit, NCDC</strong>
</p>

<p class="footer-code">508112</p>

</div>

</footer>