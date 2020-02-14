<?php

/**
 * @file
 * student class.
 */

namespace Drupal\oop_example\Classes;

/**
 * student class.
 */
class student extends teacher {

  /**
   * Returns all student.
   */
  function get_allstudent() {
    $allstudent = 'Jyoti, Nupur, Palak, Ruchie, student124, student12, student11, student121';
    return $allstudent;
  }
  /**
   * @param $subject
   *   Subject Name
   *
   * Returns subject wise student.
   */
  function get_subject_wise_student($subject) {
    switch ($subject) {
      case "physics":
      $subject_wise_student = 'Ankesh, Akash';
      break;
      case "chemistry":
      $subject_wise_student = 'Arit, Shreyal';
      break;
      case "Maths":
      $subject_wise_student = 'Jyoti, Nupur';        
      break;
      default:
      $subject_wise_student = '!!OOPS, No student found for this subject';
    }
    return $subject_wise_student;
  }

  /**
   * @param $teacher
   *   teacher Name
   *
   * Returns subject wise student.
   */
  function get_student_under_teacher($teacher) {
    switch ($teacher) {
      case "Ankesh":
      case "Akash":
      $teacher_wise_student = 'Student1, Student2, Student3, Student4';
      break;
      case "Anubhav":
      case "Shreyal":
      $teacher_wise_student = 'Student5, Student6';
      break;
      case "Arit":
      case "Ruchie":
      $teacher_wise_student = 'Student7, Student8, Student9, Student10';        
      break;
      default:
      $teacher_wise_student = '!!OOPS, No student found for this teacher';
    }
    return $teacher_wise_student;
  }


  /**
   * @param $class
   *   class Name
   *
   * Returns class wise student.
   */
  function get_class_allstudent($class) {
    switch ($class) {
      case "class1":
      case "class2":
      case "class3":
      $class_all_student = 'Student11, Student12, Student13';
      break;
      case "class4":
      case "class5": 
      case "class6":
      $class_all_student = 'Student14, Student15, Student16, Student17, Student18, Student119, Student11';
      break;
      case "class7":
      $class_all_student = 'Student10, Student11, Student156';        
      break;
      default:
      $class_all_student = '!!OOPS. No such class exits.';
    }
    return $class_all_student;
  }



}
