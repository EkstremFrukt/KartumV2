<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="galleristyle2.css">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:700" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <div class="gallerPickerContainer">
    <button class="galleryPicker" onclick="openGallery('Geit')">Geiter</button>
    <button class="galleryPicker" onclick="openGallery('Hest')">Hester</button>
    <button class="galleryPicker" onclick="openGallery('Diverse')">Diverse</button>
  </div>
  <!-- Images used to open the lightbox -->
  <div class="wrapper">
    <!-- GEIT GALLERY START -->
    <div id="Geit" class="gallery">
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
                  </div>

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

            <!-- GEIT GALLERY END -->

            <!-- HEST GALLERY START -->
            <div id="Hest" class="gallery" style="display:none">
              <div class="row">
                <div class="column">
                  <?php
                    $dirname = "assets/bilder/hester/";
                    $images = glob($dirname."*.jpg");
                    $counter = 1;
                      foreach($images as $image) {
                          $lengde = count($images);

                          if ($counter%4 == 1) {
                          echo '<img src="'.$image.'" onclick="openModal2();currentSlide2('.$counter.')">';

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
                            echo '<img src="'.$image.'" onclick="openModal2();currentSlide2('.$counter.')">';
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
                              echo '<img src="'.$image.'" onclick="openModal2();currentSlide2('.$counter.')">';
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
                                echo '<img src="'.$image.'" onclick="openModal2();currentSlide2('.$counter.')">';
                                }
                                $counter++;
                              }
                        ?>
                        </div>
                      </div>
                      <div id="myModal2" class="modal">
                        <span class="close cursor" onclick="closeModal2()">&times;</span>

                        <div class="modal-content">
                            <?php
                            $counter2 = $lengde;
                            foreach($images as $image) {
                              echo '<div class="mySlides2">';
                              echo '<div class="numbertext"> '.$counter2.' / '.$lengde.'</div>';
                              echo '<img src="'.$image.'">';
                              echo '</div>';
                              $counter2++;
                            }

                            ?>
                          </div>

                          <!-- Next/previous controls -->
                          <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
                          <a class="next" onclick="plusSlides2(1)">&#10095;</a>

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
                    <!-- HEST GALLERY END -->
          </div>

  <!-- The Modal/Lightbox -->

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

    // Open the Modal
    function openModal2() {
      document.getElementById('myModal2').style.display = "block";
    }

    // Close the Modal
    function closeModal2() {
      document.getElementById('myModal2').style.display = "none";
    }

    var slideIndex = 1;
    showSlides2(slideIndex);

    // Next/previous controls
    function plusSlides2(n) {
      showSlides2(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide2(n) {
      showSlides2(slideIndex = n);
    }

    function showSlides2(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides2");
      var dots = document.getElementsByClassName("demo2");
      var captionText = document.getElementById("caption2");
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
    //modal end
    //galleri
    function openGallery(galleryName) {
        var i;
        var x = document.getElementsByClassName("gallery");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        document.getElementById(galleryName).style.display = "block";
    }
  </script>
</body>
</html>
