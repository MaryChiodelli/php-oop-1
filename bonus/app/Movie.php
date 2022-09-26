<?php
include_once __DIR__ . '/Actor.php';

class Movie {
  public $title;
  public $original_title;
  public $original_language;
  public $production_country;
  public $year;
  public $running_time;
  public $cast;

  function __construct($title, $original_title, $original_language, $production_country, $year, $running_time) {
    $this->title = $title;
    $this->original_title = $original_title;
    $this->original_language = $original_language;
    $this->production_country = $production_country;
    $this->setYear($year);
    $this->running_time = $running_time;
  }

  public function setYear($year) {
    if (!is_int($year) && is_numeric($year)) {
      $this->year = intval($year);
    } else {
      $this->year = $year;
    }
  }

  public function getCastString() {
    $str_cast = [];
    foreach($this->cast as $actor) {
      $full_name = $actor->name . ' ' . $actor->last_name;
      $str_cast[] = $full_name;
    }
    return implode(', ', $str_cast);
  }
}