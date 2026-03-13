<?php
// footer.php
?>

<style>
/* ================= FOOTER ================= */
.ncdc-footer {
  background: #0b77b7;
  color: #ffffff;
  padding: 25px 15px;
  font-family: Arial, Helvetica, sans-serif;
  width: 100%;
  margin-top: auto;   
}

.ncdc-footer a {
  color: #ffffff;
  text-decoration: none;
}

.ncdc-footer a:hover {
  text-decoration: underline;
}

/* Footer Links */
.footer-links {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 10px 18px;
  font-size: 14px;
  text-align: center;
}

/* Divider */
.footer-divider {
  width: 90%;
  height: 1px;
  background: rgba(255, 255, 255, 0.4);
  margin: 18px auto;
}

/* Footer Content */
.footer-content {
  text-align: center;
  font-size: 14px;
  line-height: 1.6;
}

.footer-content p {
  margin: 6px 0;
}

.footer-code {
  font-weight: bold;
  letter-spacing: 1px;
}

/* ================= MOBILE VIEW ================= */
@media (max-width: 768px) {

  .footer-links {
    flex-direction: column;
    gap: 8px;
    font-size: 13px;
  }

  .footer-content {
    font-size: 13px;
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

 <!-- Footer Text -->
<?php
// Set the correct timezone
date_default_timezone_set('Asia/Kolkata');

// Function to get the latest modified timestamp of a folder recursively
function getLatestModifiedTime($dir) {
    $latestTime = 0;
    
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
    );

    foreach ($files as $file) {
        if ($file->isFile()) {
            $fileTime = $file->getMTime(); // get file modification time
            if ($fileTime > $latestTime) {
                $latestTime = $fileTime;
            }
        }
    }

    return $latestTime;
}

// Path to your NCDC_MOHFW folder
$folderPath = $_SERVER['DOCUMENT_ROOT'] . "/NCDC_MOHFW";

// Get latest modified time
$latestModifiedTime = getLatestModifiedTime($folderPath);
?>

<!-- Footer Text -->
<div class="footer-content">
    <p>
        Website Last Updated On 
        <strong>
            <?php echo date("M d, Y h:i A", $latestModifiedTime); ?>
        </strong>
    </p>

    <p>
        Content owned &amp; Provided by “National Centre for Disease Control”,
        Ministry of Health &amp; Family Welfare, Government of India<br>
        Designed and Developed by <strong>IT Unit, NCDC</strong>
    </p>

    <p class="footer-code">508112</p>
</div>
</footer>
