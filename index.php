<?php
include __DIR__ . '/app/Movie.php';

$coco = new Movie('Coco', 'Coco', 'inglese', 'Stati Uniti d\'America', 2017, 105);
$cattivissimo_me = new Movie('Cattivissimo me', 'Despicable Me', 'inglese', 'Stati Uniti d\'America', 2010, 95);

var_dump($coco);
var_dump($cattivissimo_me);