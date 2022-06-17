<?php

require_once __DIR__.'/movie.php';



$il_settimo_sigillo = new Movie('Il settimo Sigillo',['Svensk Filmindustri', 'SVT'],['Italian', 'English']);
$uncharted = new Movie('Uncharted', ['Columbia Pictures', 'Atlas Entertainment', 'Arad Productions', 'PlayStation Productions', 'Ayuntamiento de Madrid', 'Naughty Dog'],['Italian', 'English']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  

  <title>Movie</title>
</head>
<body>
  <h1 class="text-center">I miglior film di sempre</h1> 

  <ul>
    <li>  
      <h2><?php echo $il_settimo_sigillo->getTitle() ?></h2>
      <ul>
        <li>Casa di produzione:</li>
        <?php foreach ($il_settimo_sigillo->getProducer() as $producer) : ?>
          <li><?php echo $producer ?></li>
        <?php endforeach; ?>
      </ul>
      <br>
      <ul>
        <li>Lingua film:</li>
        <?php foreach ($uncharted->getLanguage() as $language) : ?>
          <li><?php echo $language ?></li>
        <?php endforeach; ?>
      </ul>


    </li>
    <li>  
      <h2><?php echo $uncharted->getTitle() ?></h2>
      <ul>
        <li>Casa di produzione:</li>
        <?php foreach ($uncharted->getProducer() as $producer) : ?>
          <li><?php echo $producer ?></li>
        <?php endforeach; ?>
      </ul>
      <br>
      <ul>
        <li>Lingua film:</li>
        <?php foreach ($uncharted->getLanguage() as $language) : ?>
          <li><?php echo $language ?></li>
        <?php endforeach; ?>
      </ul>

    </li>

   
  </ul>
</body>
</html>