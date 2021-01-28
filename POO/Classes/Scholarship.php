<?php 

  require_once('Student.php');

  class Scholarship extends Student{

    private $collegeScholarship;

    public function __construct($name, $age, $sex, $course, $registration, $collegeScholarship){ 
      
      parent::__construct($name, $age, $sex, $course, $registration);
      $this->setScholarship($collegeScholarship);

    }

    public function getScholarship(){
      return $this->collegeScholarship;
    }
    public function setScholarship($value){
      $this->collegeScholarship = $value;
    }

    // sobrepor um método da classe pai é o polimorfismo
    public function payMonthlyFee(){
      echo 'Pagou a mensalidade, com '.$this->getScholarship().'% de desconto';
    }

    public function renewCollegeScholarship(){
      echo 'Renovou a Bolsa de estudos';
    }

  }

?>
