<?php

/**
 * @file
 * school class.
 */

namespace Drupal\oop_example\Classes;

/**
 * school class.
 */
class school {

  // Properties
  private $schoolname;

  // Methods
  public function __construct($schoolname) {
    $this->schoolname = $schoolname; 
  }

  /**
   * Returns all school.
   */
  public function get_allschool() {
    $allschool = 'ABC school, Delhi public school, Mahatma Gandhi school';
    return $allschool;
  }
}