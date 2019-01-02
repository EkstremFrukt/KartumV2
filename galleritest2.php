<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="galleristyle2.css">
  <title>Document</title>
</head>
<body>
  <!-- Images used to open the lightbox -->
  <div class="wrapper">
    <div class="row">
      <div class="column">
        <?php
          $dirname = "assets/bilder/geiter/";
          $images = glob($dirname."*.jpg");
          $counter = 1;
            foreach($images as $image) {
                $lengde = count($images);

                if ($counter%4 == 1) {
                echo '<img src="'.$image.'" onclick="openModal();currentSlide('.$counter.')">';

                }
                $counter++;
              }
        ?>
        </div>

        <div class="column">
          <?php
          $counter = 1;
              foreach($images as $image) {

                  if ($counter%4 == 2) {
                  echo '<img src="'.$image.'" onclick="openModal();currentSlide('.$counter.')">';
                  }
                  $counter++;
                }
          ?>
          </div>
          <div class="column">
            <?php
            $counter = 1;
                foreach($images as $image) {

                    if ($counter%4 == 3) {
                    echo '<img src="'.$image.'" onclick="openModal();currentSlide('.$counter.')">';
                    }
                    $counter++;
                  }
            ?>
            </div>
            <div class="column">
              <?php
              $counter = 1;
                  foreach($images as $image) {

                      if ($counter%4 == 0) {
                      echo '<img src="'.$image.'" onclick="openModal();currentSlide('.$counter.')">';
                      }
                      $counter++;
                    }
              ?>
              </div>
            </div>
          </div>

  <!-- The Modal/Lightbox -->
  <div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>

    <div class="modal-content">
        <?php
        $counter2 = 1;
        foreach($images as $image) {
          echo '<div class="mySlides">';
          echo '<div class="numbertext"> '.$counter2.' / '.$lengde.'</div>';
          echo '<img src="'.$image.'">';
          echo '</div>';
          $counter2++;
        }

        ?>




      <!-- Next/previous controls -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <!-- Caption text -->
      <div class="caption-container">
        <p id="caption"></p>
      </div>


      <!-- Thumbnail image controls -->
      <?php
      /*
      $counter3 = 1;

      foreach($images as $image) {
          echo '<div class="column">';
          echo '<img class="demo" src="'.$image.'" onclick="currentSlide('.$counter3.')" alt="Mountains'.$counter3.'">';
          $counter3++;
          echo '</div>';
      }
      */
      ?>

    </div>
  </div>
  <script>
    // Open the Modal
    function openModal() {
      document.getElementById('myModal').style.display = "block";
    }

    // Close the Modal
    function closeModal() {
      document.getElementById('myModal').style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }

  </script>
</body>
</html>
