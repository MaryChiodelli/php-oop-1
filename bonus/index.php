<?php
include_once __DIR__ . '/app/Movie.php';
include_once __DIR__ . '/app/Actor.php';

$coco = new Movie('Coco', 'Coco', 'inglese', 'Stati Uniti d\'America', 2017, 105);
$coco->cast = [
  new Actor('Luca', 'Tesei'),
  new Actor('Simone', 'Iuè'),
  new Actor('Emiliano', 'Coltorti'),
  new Actor('Fabrizio', 'Russotto')
];

$cattivissimo_me = new Movie('Cattivissimo me', 'Despicable Me', 'inglese', 'Stati Uniti d\'America', '2010', 95);
$cattivissimo_me->cast = [
  new Actor('Max', 'Giusti'),
  new Actor('Edoardo', 'Stoppacciaro'),
  new Actor('Nanni', 'Baldini'),
  new Actor('Manuela', 'Andrei')
];

$ballerina = new Movie('Ballerina', 'Ballerina', 'inglese', 'Francia, Canada', 2016, 89);
$ballerina->cast = [
  new Actor('Emanuela', 'Ionica'),
  new Actor('Eleonora', 'Abbagnato'),
  new Actor('Alex', 'Polidori'),
  new Actor('Sara', 'Labidi')
];

$oceania = new Movie('Oceania', 'Moana', 'inglese', 'Stati Uniti d\'America', '2016', 107);
$oceania->cast = [
  new Actor('Emanuela', 'Ionica'),
  new Actor('Chiara', 'Grispo'),
  new Actor('Sophie', 'Giuliani'),
  new Actor('Sophie', 'Giuliani')
];

$movies = [$coco, $cattivissimo_me, $ballerina, $oceania];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Movies</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <main>
    <div class="container">
      <ul class="row">
        <?php
        foreach($movies as $movie) {
        ?>
        <li class="col">
          <div class="card">
            <h2 class="title"><?= $movie->title ?></h2>
            <div class="original-title"><?= $movie->original_title ?></div>
            <div class="lang"><?= $movie->original_language ?></div>
            <div class="year"><?= $movie->year ?></div>
            <div class="time"><?= $movie->running_time ?> min</div>
            <p><?= $movie->getCastString() ?></p>
          </div>
        </li>
        <?php
        }
        ?>
      </ul>
    </div>
  </main>
</body>
</html>