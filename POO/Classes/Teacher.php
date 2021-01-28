<?php 

  require_once('Person.php');

  class Teacher extends Person{

    public $specialty;
    public $salary;

    public function __construct(){ 
      
      
    }

    public function getSpecialty(){
      return $this->specialty;
    }
    public function setSpecialty($value){
      $this->specialty = $value;
    }
    public function getSalary(){
      return $this->salary;
    }
    public function setSalary($value){
      $this->salary = $value;
    }

    public function salaryRaise($value){
      $this->setSalary($this->getSalary() + $value);
    }

  }

?>
