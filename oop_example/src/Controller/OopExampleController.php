<?php

/**
 * @file
 * Contains \Drupal\page_example\Controller\PageExampleController.
 */

namespace Drupal\oop_example\Controller;

// Declare class usage.
use Drupal\oop_example\Classes\school;
use Drupal\oop_example\Classes\classes;
use Drupal\oop_example\Classes\teacher;
use Drupal\oop_example\Classes\student;



/**
 * Controller routines for page example routes.
 */
class OopExampleController {

  /**
   * Constructs a simple page.
   *
   * The router _content callback, maps the path 'oop-examples/oop-example'
   * to this method.
   *
   */
  public function page() {

    $school = new school('Delhi public school');
    $message = '<b>ALL SCHOOL: </b>';
    $message .= $school->get_allschool();
    $message .= '<br />';

    $class = new classes('Delhi public school');
    $message .= '<b>ALL CLASSES OF SCHOOL: </b>';
    $message .= $class->get_allclass();
    $message .= '<br />';

    $teacher = new teacher('Delhi Public school');
    $message .= '<b>ALL TEACHERS OF SCHOOL: </b>';
    $message .= $teacher->get_allteacher();
    $message .= '<br />';
    $message .= '<b>ALL TEACHERS OF CLASS: </b>';
    $message .= $teacher->get_class_wise_teacher("class2");
    $message .= '<br />';
    $message .= '<b>ALL HOD TEACHERS: </b>';
    $message .= $teacher->get_position_wise_teacher('HOD');
    $message .= '<br />';
    $message .= '<b>ALL PHYSIC TEACHERS: </b>';
    $message .= $teacher->get_subject_wise_teacher('physics');
    $message .= '<br />';

    $student = new student('Delhi public school');
    $message .= '<b>ALL STUDENTS OF CLASS: </b>';
    $message .= $student->get_class_allstudent('class4');
    $message .= '<br />';
    $message .= '<b>ALL MATHEMATICS STUDENTS: </b>';
    $message .= $student->get_subject_wise_student('Maths');
    $message .= '<br />';

    return array(
      '#markup' => '<p>' . $message . '</p>',
    );
  }

}
