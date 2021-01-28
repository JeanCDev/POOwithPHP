<?php 

// abstract - classe que não pode ser instanciada, somente pode ser herdada
abstract class Person {

    private $name;
    private $age;
    private $sex;
    private $experience;

    public function __construct(String $name, Int $age, String $sex){
      $this->setName($name);
      $this->setAge($age);
      $this->setSex($sex);
      $this->setExp(0);
    }

    public function getName(){
      return $this->name;
    }
    public function setName(String $value){
      $this->name = $value;
    }
    public function getAge(){
      return $this->age;
    }
    public function setAge(Int $value){
      $this->age = $value;
    }
    public function getSex(){
      return $this->sex;
    }
    public function setSex(String $value){
      $this->sex = $value;
    }
    public function getExp(){
      return $this->experience;
    }
    public function setExp(Int $value){
      $this->experience += $value;
    }

    // Final - não pode ser sobreposta
    public final function earnExp(Int $value){
      $this->setExp($this->getExp() + $value);
    }

  }

?>