<?php
include __DIR__ . '/app/Movie.php';

$coco = new Movie('Coco', 'Coco', 'inglese', 'Stati Uniti d\'America', 2017, 105);

$cattivissimo_me = new Movie('Cattivissimo me', 'Despicable Me', 'inglese', 'Stati Uniti d\'America', '2010', 95);

$ballerina = new Movie('Ballerina', 'Ballerina', 'inglese', 'Francia, Canada', 2016, 89);

$oceania = new Movie('Oceania', 'Moana', 'inglese', 'Stati Uniti d\'America', '2016', 107);

var_dump($coco);
var_dump($cattivissimo_me);
var_dump($ballerina);
var_dump($oceania);