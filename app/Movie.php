<?php
class Movie {
  public $title;
  public $original_title;
  public $original_language;
  public $production_country;
  public $year;
  public $running_time;

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
}