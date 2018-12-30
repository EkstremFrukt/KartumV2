<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:700" rel="stylesheet">
  <title>Kartum</title>
</head>

<body>
  <div class="galleri-wrapper">
    <div class="galleri-grid">
      <?php
        $dirname = "assets/bilder/geiter/";
        $images = glob($dirname."*.jpg");
          foreach($images as $image) {
              echo '<a href="'.$image.'"> <img src="'.$image.'" class="bilder"><br/>';
          }
      ?>
    </div>
  </div>

</body>
</html>
