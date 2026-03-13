<?php
include("config/db.php");

// Fetch latest media
$mediaQuery = mysqli_query($conn, "SELECT * FROM media_gallery ORDER BY id DESC LIMIT 1");
$media = mysqli_fetch_assoc($mediaQuery);

$images = [];
$title = "";

if($media){
    $title = $media['title'];
    $media_id = $media['id'];

    $imgQuery = mysqli_query($conn, "SELECT image_path FROM media_images WHERE media_id=$media_id ORDER BY id ASC");

    while($row = mysqli_fetch_assoc($imgQuery)){

        $path = $row['image_path'];

        if(strpos($path,'/NCDC_MOHFW/uploads/') === false){
            $path = '/NCDC_MOHFW/uploads/' . ltrim($path,'/');
        }

        $images[] = $path;
    }
}
?>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>

body{
font-family:'Poppins',sans-serif;
}

/* MAIN WRAPPER */

.media-training-wrapper{
display:flex;
gap:40px;
padding:40px 20px;
max-width:1200px;
margin:auto;

border-radius:10px;
flex-wrap:wrap;
}

/* MEDIA GALLERY */

.media-gallery{
flex:1 1 520px;
}

.media-header{
display:flex;
align-items:center;
justify-content:space-between;
margin-bottom:10px;
}

.media-header h2{
font-size:24px;
font-weight:700;
color:#0f172a;
}

.view-all-btn{
background:#0b5ed7;
color:#fff;
padding:8px 20px;
border-radius:25px;
text-decoration:none;
font-size:14px;
font-weight:500;
transition:0.3s;
}

.view-all-btn:hover{
background:#084298;
}

.media-title{
font-size:16px;
margin-bottom:10px;
color:#333;
font-weight:500;
}

/* MAIN IMAGE */

.main-image{
  width:100%;
  max-width:100%;
  margin:auto;
  border-radius:12px;
  overflow:hidden;
}

.main-image img{
  width:100%;
  max-height:500px;   /* height decrease */
  object-fit:cover;
  display:block;
  border-radius:10px;
}

/* THUMBNAILS */

.thumbnail-carousel-wrapper{
display:flex;
align-items:center;
justify-content:center;
margin-top:15px;
gap:10px;
}

.thumbnail-row{
display:flex;
overflow-x:auto;
scroll-behavior:smooth;
gap:10px;
padding:5px 0;
max-width:80%;
}

.thumbnail-row img{
width:90px;
height:65px;
object-fit:cover;
border-radius:6px;
cursor:pointer;
border:2px solid transparent;
flex-shrink:0;
}

.thumbnail-row img.active{
border-color:#0b5ed7;
}

/* ARROWS */

.thumb-arrow{
background:#0b5ed7;
color:#fff;
font-size:18px;
padding:6px 12px;
border:none;
border-radius:6px;
cursor:pointer;
}

.thumb-arrow:hover{
background:#084298;
}

/* TRAINING PROGRAMMES */

.training-programmes{
flex:1 1 350px;
}

.training-programmes h2{
font-size:24px;
font-weight:700;
margin-bottom:20px;
}

.training-list{
display:flex;
flex-direction:column;
gap:12px;
}

.training-item{
  font-weight:600;
  font-size:17px;
  padding:16px 18px;
  background:#f5f7fa;
  border-radius:10px;
  border:1px solid #e2e8f0;
  transition:0.3s;
}

.training-item:hover{
background:#e2e8f0;
transform:translateX(3px);
}

/* RESPONSIVE */

@media(max-width:992px){

.media-training-wrapper{
flex-direction:column;
}

.main-image{
max-width:100%;
}

.thumbnail-row{
max-width:90%;
}

}

</style>


<script>

function changeMedia(el){

const thumbnails=document.querySelectorAll('.thumbnail-row img');

document.getElementById('mainMediaImage').src=el.src;

thumbnails.forEach(img=>img.classList.remove('active'));

el.classList.add('active');

}

function scrollThumbnails(direction){

const thumbnails=document.querySelectorAll('.thumbnail-row img');

if(thumbnails.length===0) return;

const activeIndex=Array.from(thumbnails).findIndex(img=>img.classList.contains('active'));

let newIndex=activeIndex+direction;

if(newIndex<0) newIndex=0;

if(newIndex>=thumbnails.length) newIndex=thumbnails.length-1;

changeMedia(thumbnails[newIndex]);

thumbnails[newIndex].scrollIntoView({
behavior:'smooth',
inline:'center'
});

}

</script>


<div class="media-training-wrapper">


<!-- MEDIA GALLERY -->

<div class="media-gallery">

<div class="media-header">

<h2>Media Gallery</h2>

<a href="/NCDC_MOHFW/media-gallery.php" class="view-all-btn">
View All
</a>

</div>

<?php if($title){ ?>

<div class="media-title">
<?php echo htmlspecialchars($title); ?>
</div>

<?php } ?>

<?php if(!empty($images)){ ?>

<div class="main-image">
<img id="mainMediaImage" src="<?php echo $images[0]; ?>">
</div>

<div class="thumbnail-carousel-wrapper">

<button class="thumb-arrow" onclick="scrollThumbnails(-1)">
&lt;
</button>

<div class="thumbnail-row">

<?php foreach($images as $index=>$img){ ?>

<img src="<?php echo $img; ?>"
onclick="changeMedia(this)"
class="<?php echo $index==0?'active':''; ?>">

<?php } ?>

</div>

<button class="thumb-arrow" onclick="scrollThumbnails(1)">
&gt;
</button>

</div>

<?php }else{ ?>

<p>No media available.</p>

<?php } ?>

</div>


<!-- TRAINING PROGRAMMES -->

<div class="training-programmes">

<h2>Training Programmes</h2>

<div class="training-list">

<div class="training-item" onclick="window.location='/NCDC_MOHFW/includes/Academics/teaching-training.php?tab=tab1'">
India Epidemic Intelligence Service Programme
</div>

<div class="training-item" onclick="window.location='/NCDC_MOHFW/includes/Academics/teaching-training.php?tab=tab2'">
Intermediate Field Epidemiology Training Programme (AIIH&PH, Kolkata)
</div>

<div class="training-item" onclick="window.location='/NCDC_MOHFW/includes/Academics/teaching-training.php?tab=tab3'">
Intermediate-Field Epidemiology Training Programme (NIPHTR, Mumbai)
</div>

<div class="training-item" onclick="window.location='/NCDC_MOHFW/includes/Academics/teaching-training.php?tab=tab4'">
SectorConnect
</div>

<div class="training-item" onclick="window.location='/NCDC_MOHFW/includes/Academics/teaching-training.php?tab=tab5'">
Regional Field Epidemiology Training Programme (FETP)
</div>

<div class="training-item" onclick="window.location='/NCDC_MOHFW/includes/Academics/teaching-training.php?tab=tab6'">
Two-week Field Epidemiology Training Programme (FETP)
</div>

<div class="training-item" onclick="window.location='/NCDC_MOHFW/includes/Academics/teaching-training.php?tab=tab7'">
Regional Training Programme on Prevention and Control of Communicable Diseases for Paramedics
</div>

</div>

</div>


</div>