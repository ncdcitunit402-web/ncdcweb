<?php
// slider.php
// REQUIRE DB CONNECTION ($conn) already included in index.php
?>

<!-- ================= HERO SLIDER ================= -->
<div class="hero-slider">
  <div class="hero-slides">

    <?php
    $sliderQuery = "SELECT * FROM sliders ORDER BY id DESC";
    $sliderResult = mysqli_query($conn, $sliderQuery);

    if ($sliderResult && mysqli_num_rows($sliderResult) > 0) {
      while ($slide = mysqli_fetch_assoc($sliderResult)) {
    ?>
        <div class="hero-slide">
          <img src="/NCDC_MOHFW/uploads/slider/<?php echo $slide['image']; ?>" alt="Slider Image">

        </div>
    <?php
      }
    } else {
      echo "<div class='hero-slide'><p style='color:#fff;text-align:center'>No slider images found</p></div>";
    }
    ?>

  </div>

  <!-- Slider Navigation -->
  <div class="hero-nav">
    <button class="hero-prev">&#10094;</button>
    <button class="hero-next">&#10095;</button>
  </div>
</div>

<!-- ================= SLIDER CSS ================= -->
<style>
.hero-slider {
  width: 100%;
  height: 420px;
  position: relative;
  overflow: hidden;
  background: #000;
}

.hero-slides {
  display: flex;
  height: 100%;
  transition: transform 0.8s ease-in-out;
}

.hero-slide {
  min-width: 100%;
  height: 100%;
}

.hero-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;     /* FULL WIDTH – NO BLACK BARS */
  object-position: center;
}


/* Navigation Arrows (Bottom Right like NCDC) */
.hero-nav {
  position: absolute;
  bottom: 25px;
  right: 30px;
  display: flex;
  gap: 12px;
}

.hero-prev,
.hero-next {
  background: #0b77b7;
  color: #fff;
  border: none;
  width: 42px;
  height: 42px;
  border-radius: 50%;
  cursor: pointer;
  font-size: 18px;
}

.hero-prev:hover,
.hero-next:hover {
  background: #085a8a;
}

/* ========== MOBILE VIEW ========== */
@media (max-width: 768px) {
  .hero-slider {
    height: 260px;
  }

  .hero-nav {
    bottom: 15px;
    right: 15px;
  }

  .hero-prev,
  .hero-next {
    width: 36px;
    height: 36px;
    font-size: 16px;
  }
}
</style>

<!-- ================= SLIDER JS ================= -->
<script>
let sliderIndex = 0;
const sliderTrack = document.querySelector('.hero-slides');
const totalSlides = document.querySelectorAll('.hero-slide').length;

function moveSlider(i) {
  sliderIndex = (i + totalSlides) % totalSlides;
  sliderTrack.style.transform = `translateX(-${sliderIndex * 100}%)`;
}

document.querySelector('.hero-prev').onclick = () => moveSlider(sliderIndex - 1);
document.querySelector('.hero-next').onclick = () => moveSlider(sliderIndex + 1);

// Auto Slide
setInterval(() => moveSlider(sliderIndex + 1), 5000);
</script>
