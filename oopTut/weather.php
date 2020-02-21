<?php

//static property practice

class Weather {
  public static $conditions = ['cold', 'mild', 'hot'];

  public static function convertToFarenheight() {

  }

  public static function determineCondition() {

  }
}
//the way to access static properties
print_r(Weather::$conditions);