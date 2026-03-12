<?php
include("config/db.php");

// Fetch the latest media
$mediaQuery = mysqli_query($conn, "SELECT * FROM media_gallery ORDER BY id DESC LIMIT 1");
$media = mysqli_fetch_assoc($mediaQuery);

$images = [];
$title = "";

if($media){
    $title = $media['title'];
    $media_id = $media['id'];

    // Fetch images for this media
    $imgQuery = mysqli_query($conn, "SELECT image_path FROM media_images WHERE media_id=$media_id ORDER BY id ASC");
    while($row = mysqli_fetch_assoc($imgQuery)){
        // Ensure full path
        $path = $row['image_path'];
        if(strpos($path, '/NCDC_MOHFW/uploads/') === false){
            $path = '/NCDC_MOHFW/uploads/' . ltrim($path, '/');
        }
        $images[] = $path;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo htmlspecialchars($title); ?> | NCDC</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
* { box-sizing: border-box; margin: 0; padding: 0; }

body {
  font-family: "Poppins", sans-serif;
  background: #ffffff;
  color: #000;
}

/* Wrapper for gallery + training */
.media-training-wrapper {
  display: flex;
  gap: 30px;
  padding: 40px 20px;
  max-width: 1200px;
  margin: auto;
  flex-wrap: wrap;
}

/* ===== MEDIA GALLERY ===== */
.media-gallery {
  flex: 1 1 500px;
}

.media-header {
  margin-bottom: 15px;
}

.media-header h2 {
  font-size: 22px;
  font-weight: 600;
  color: #0b5ed7;
}

.media-header h4 {
  font-size: 18px;
  margin-top: 6px;
  font-weight: 500;
  color: #333;
}

.main-image {
  width: 100%;
  max-width: 500px;   /* maximum width of the main image */
  margin: 15px auto;  /* center horizontally with top/bottom spacing */
  border-radius: 14px;
  overflow: hidden;
}

.main-image img {
  width: 100%;
  height: auto;
  display: block;
  border: 1px solid #ddd;
  border-radius: 10px;
}

.thumbnail-row {
  display: flex;
  gap: 10px;
  margin-top: 12px;
  flex-wrap: wrap;
}

.thumbnail-row img {
  width: 100px;
  height: 70px;
  object-fit: cover;
  border-radius: 6px;
  cursor: pointer;
  border: 2px solid transparent;
  transition: all 0.2s;
}

.thumbnail-row img.active {
  border-color: #0b5ed7;
  transform: scale(1.05);
}

/* ===== TRAINING PROGRAMMES ===== */
.training-programmes {
  flex: 1 1 350px;
}

.training-programmes h2 {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 15px;
}

.training-list {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.training-item {
  font-weight: bold;
  font-size: 15px;
  padding: 14px 16px;
  background: #f5f5f5;
  border-radius: 10px;
  border: 1px solid #000;
  cursor: default; /* no link style */
}

.training-item a {
  text-decoration: none;
  color: #000;
}

/* Hover style */
.training-item:hover {
  background: #e8f0ff;
}
.thumbnail-carousel-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  gap: 10px;
}

.thumbnail-row {
  display: flex;
  overflow-x: auto;
  scroll-behavior: smooth;
  gap: 10px;
  padding: 5px 0;
  max-width: 80%;  /* centered width */
}

.thumbnail-row img {
  width: 90px;
  height: 65px;
  object-fit: cover;
  border-radius: 6px;
  cursor: pointer;
  border: 2px solid transparent;
  flex-shrink: 0; /* keep size fixed */
}

.thumbnail-row img.active {
  border-color: #0b5ed7;
}

.thumb-arrow {
  background: #0b5ed7;
  color: #fff;
  font-size: 18px;
  padding: 6px 12px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: 0.3s;
}

.thumb-arrow:hover {
  background: #084298;
}

/* Mobile responsiveness */
@media (max-width: 768px) {
  .thumbnail-row {
    max-width: 90%;
  }
  .thumb-arrow {
    padding: 5px 10px;
    font-size: 16px;
  }
}


/* RESPONSIVE */
@media (max-width: 992px){
  .media-training-wrapper {
    flex-direction: column;
    padding: 20px 15px;
  }
  .thumbnail-row img {
    width: 80px;
    height: 60px;
  }
}
@media (max-width: 576px){
  .thumbnail-row img {
    width: 70px;
    height: 50px;
  }
  .training-item {
    font-size: 14px;
    padding: 12px 14px;
  }
}
</style>

<script>
function changeMedia(el){
    const thumbnails = document.querySelectorAll('.thumbnail-row img');
    document.getElementById('mainMediaImage').src = el.src;
    thumbnails.forEach(img => img.classList.remove('active'));
    el.classList.add('active');
}

function scrollThumbnails(direction){
    const thumbnails = document.querySelectorAll('.thumbnail-row img');
    const row = document.getElementById('thumbnailRow');

    if(thumbnails.length === 0) return;

    const activeIndex = Array.from(thumbnails).findIndex(img => img.classList.contains('active'));
    let newIndex = activeIndex + direction;

    if(newIndex < 0) newIndex = 0;
    if(newIndex >= thumbnails.length) newIndex = thumbnails.length - 1;

    // Update main image
    changeMedia(thumbnails[newIndex]);

    // Scroll thumbnail into view
    thumbnails[newIndex].scrollIntoView({ behavior: 'smooth', inline: 'center' });
}
</script>


</head>

<body>

<div class="media-training-wrapper">

  <!-- MEDIA GALLERY -->
  <div class="media-gallery">
    <div class="media-header">
      <h2>Media Gallery</h2>
      <?php if($title) echo "<h4>" . htmlspecialchars($title) . "</h4>"; ?>
    </div>

    <?php if(!empty($images)): ?>
      <div class="main-image">
          <img id="mainMediaImage" src="<?php echo $images[0]; ?>" alt="Media Image">
      </div>

      <div class="thumbnail-carousel-wrapper">
  <button class="thumb-arrow left" onclick="scrollThumbnails(-1)">&lt;</button>
  
  <div class="thumbnail-row" id="thumbnailRow">
    <?php foreach($images as $index=>$img): ?>
      <img src="<?php echo $img; ?>" 
           onclick="changeMedia(this)" 
           class="<?php echo $index==0?'active':''; ?>">
    <?php endforeach; ?>
  </div>

  <button class="thumb-arrow right" onclick="scrollThumbnails(1)">&gt;</button>
</div>

    <?php else: ?>
      <p>No media available.</p>
    <?php endif; ?>
  </div>

  <!-- TRAINING PROGRAMMES -->
  <div class="training-programmes">
    <h2>Training Programmes</h2>
    <div class="training-list">
      <div class="training-item" onclick="window.location='/NCDC_MOHFW/includes/Academics/teaching-training.php?tab=tab1'">India Epidemic Intelligence Service Programme</div>
      <div class="training-item" onclick="window.location='/NCDC_MOHFW/includes/Academics/teaching-training.php?tab=tab2'">Intermediate Field Epidemiology Training Programme (AIIH&PH, Kolkata)</div>
      <div class="training-item" onclick="window.location='/NCDC_MOHFW/includes/Academics/teaching-training.php?tab=tab3'">Intermediate-Field Epidemiology Training Programme (NIPHTR, Mumbai)</div>
      <div class="training-item" onclick="window.location='/NCDC_MOHFW/includes/Academics/teaching-training.php?tab=tab4'">SectorConnect</div>
      <div class="training-item" onclick="window.location='/NCDC_MOHFW/includes/Academics/teaching-training.php?tab=tab5'">Regional Field Epidemiology Training Programme (FETP)</div>
      <div class="training-item" onclick="window.location='/NCDC_MOHFW/includes/Academics/teaching-training.php?tab=tab6'">Two-week Field Epidemiology Training Programme (FETP)</div>
      <div class="training-item" onclick="window.location='/NCDC_MOHFW/includes/Academics/teaching-training.php?tab=tab7'">Regional Training Programme on Prevention and Control of Communicable Diseases for Paramedics</div>
    </div>
  </div>

</div>

</body>
</html>
