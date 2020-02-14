<?php

/**
 * @file
 * teacher class.
 */

namespace Drupal\oop_example\Classes;

/**
 * Vehicle class.
 */
class teacher extends classes {
  
  /**
   * Returns all teachers.
   */
  public function get_allteacher() {
    $allteacher = 'Ankesh, Akash, Arit, Shreyal, Ruchie, Anubhav';
    return $allteacher;
  }

  /**
   * @param $position
   *   position Name
   *
   * Returns position wise teacher.
   */
  public function get_position_wise_teacher($position) {
  	switch ($position) {
      case "HOD":
      $position_wise_teacher = 'Ankesh, Akash, Teacher1, Teacher2';
      break;
      case "senior":
      $position_wise_teacher = 'Arit, Shreyal';
      break;
      default:
      $position_wise_teacher = '!!OOPS, NO data for provided subject';
    }
    return $position_wise_teacher;
  }

  /**
   * @param $subject
   *   subject Name
   *
   * Returns subject wise teachers.
   */
  public function get_subject_wise_teacher($subject) {
  	switch ($subject) {
      case "physics":
      $subject_wise_teacher = 'Ankesh, Akash';
      break;
      case "chemistry":
      $subject_wise_teacher = 'Arit, Shreyal';
      break;
      case "Maths":
      $subject_wise_teacher = 'Jyoti, Nupur';        
      break;
      default:
      $subject_wise_teacher = '!!OOPS. No teacher found for given subject.';
    }
    return $subject_wise_teacher;
  }

  /**
   * @param $class
   *   class Name
   *
   * Returns class wise teachers.
   */
  public function get_class_wise_teacher($class) {
    switch ($class) {
      case "class1": 
      case "class2": 
      case "class3":
      $class_wise_teacher = 'Ankesh, Akash, Anubhav';
      break;
      case "class4": 
      case "class5": 
      case "class6":
      $class_wise_teacher = 'Ruchie, Nupur, Jyoti';
      break;
      case "class7":
      $class_wise_teacher = 'Pooja, Sourabh';        
      break;
      default:
      $class_wise_teacher = '!!OOPS. No such class exits.';
    }
    return $class_wise_teacher;
  }

}
