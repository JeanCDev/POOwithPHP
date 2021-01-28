<?php 

  require_once('Person.php');

  class Student extends Person{

    public $course;
    public $registration;

    public function __construct($name, $age, $sex, $course, $registration){ 
      
        parent::__construct($name, $age, $sex);
        $this->setCourse($course);
        $this->setRegistration($registration);

    }

    public function getCourse(){
      return $this->course;
    }
    public function setCourse($value){
      $this->course = $value;
    }
    public function getRegistration(){
      return $this->registration;
    }
    public function setRegistration($value){
      $this->registration = $value;
    }

    public function payMonthlyFee(){
      echo 'Pagou a mensalidade';
    }

  }

?>
