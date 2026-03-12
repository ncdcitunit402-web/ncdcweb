<?php include("header.php"); ?>

<link rel="stylesheet" href="/NCDC_MOHFW/assets/css/style.css">

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" alt="NCDC Header">
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
}
@media(max-width:768px){
  .header-image{ height:180px; }
}

/* ===== PAGE STYLE ===== */
body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
}

.breadcrumb{
  margin:15px 0;
  font-size:14px;
  color:#666;
  margin-left:60px;
  margin-right:60px;
}

h2{
  margin-top:10px;
  font-size:26px;
  color:#003366;
}

h3{
  margin-top:25px;
  font-size:20px;
}

/* ===== TABLE ===== */
.table-responsive{
  width:100%;
  overflow-x:auto;
}

table{
  width:100%;
  border-collapse:collapse;
  margin-top:15px;
}

th, td{
  padding:12px;
  border:1px solid #e0e0e0;
  text-align:left;
  vertical-align:top;
}

th{
  background:#f7f7f7;
  font-weight:bold;
}

/* keep table normal, only scroll on mobile */
@media(max-width:768px){
  table{
    min-width:700px;
  }
}
</style>

<div class="breadcrumb">Home › Screen Reader Access

<h2>Screen Reader Access</h2>

<p>
Ministry Of Health & Family Welfare, Govt. of India website complies with World Wide Web Consortium (W3C) Web Content Accessibility 
Guidelines (WCAG) 2.0 level AA. This will enable people with visual impairments access the website using assistive technologies, 
such as screen readers. The information of the website is accessible with different screen readers.
</p>

<h3>Various Screen Readers to choose from</h3>

<div class="table-responsive">
<table aria-label="List of Screen Readers">
<thead>
<tr>
  <th>Screen Reader</th>
  <th>Website</th>
  <th>Free / Commercial</th>
</tr>
</thead>
<tbody>
<tr>
  <td>Non Visual Desktop Access (NVDA)</td>
  <td><a href="http://www.nvda-project.org/" target="_blank">http://www.nvda-project.org/</a> (External website that opens in a new window)</td>
  <td>Free</td>
</tr>

<tr>
  <td>System Access To Go</td>
  <td><a href="http://www.satogo.com/" target="_blank">http://www.satogo.com/</a> (External website that opens in a new window)</td>
  <td>Free</td>
</tr>

<tr>
  <td>Thunder</td>
  <td><a href="http://www.screenreader.net/index.php?pageid=11" target="_blank">http://www.screenreader.net/index.php?pageid=11</a></td>
  <td>Free</td>
</tr>

<tr>
  <td>WebAnywhere</td>
  <td><a href="http://webanywhere.cs.washington.edu/wa.php" target="_blank">http://webanywhere.cs.washington.edu/wa.php</a> (External website that opens in a new window)</td>
  <td>Free</td>
</tr>

<tr>
  <td>Hal</td>
  <td><a href="http://www.yourdolphin.co.uk/productdetail.asp?id=5" target="_blank">http://www.yourdolphin.co.uk/productdetail.asp?id=5</a> (External website that opens in a new window)</td>
  <td>Commercial</td>
</tr>

<tr>
  <td>JAWS</td>
  <td><a href="http://www.freedomscientific.com/jaws-hq.asp" target="_blank">http://www.freedomscientific.com/jaws-hq.asp</a> (External website that opens in a new window)</td>
  <td>Commercial</td>
</tr>

<tr>
  <td>Supernova</td>
  <td><a href="http://www.yourdolphin.co.uk/productdetail.asp?id=1" target="_blank">http://www.yourdolphin.co.uk/productdetail.asp?id=1</a> (External website that opens in a new window)</td>
  <td>Commercial</td>
</tr>

<tr>
  <td>Window-Eyes</td>
  <td><a href="http://www.gwmicro.com/Window-Eyes/" target="_blank">http://www.gwmicro.com/Window-Eyes/</a> (External website that opens in a new window)</td>
  <td>Commercial</td>
</tr>

<tr>
  <td>Accessing PDF Documents with Assistive Technology</td>
  <td><a href="http://www.adobe.com/accessibility/products/reader.html" target="_blank">http://www.adobe.com/accessibility/products/reader.html</a></td>
  <td>Free</td>
</tr>
</tbody>
</table>
</div>
</div>
<?php include("footer.php"); ?>