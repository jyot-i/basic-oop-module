<?php

/**
 * @file
 * clasees class.
 */

namespace Drupal\oop_example\Classes;

/**
 * Motorcycle class.
 */
class classes extends school {
  /**
   * Returns all class.
   */
  public function get_allclass() {
  	$allclass = 'class1, class2, class3, class4, class5, class6, class7';
  	return $allclass;
  }

}
