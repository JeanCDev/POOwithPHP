<?php 

// abstract - classe que não pode ser instanciada, somente pode ser herdada
abstract class Person {

    public $name;
    public $age;
    public $sex;

    public function __construct($name, $age, $sex){
      $this->setName($name);
      $this->setAge($age);
      $this->setSex($sex);
    }

    public function getName(){
      return $this->name;
    }
    private function setName($value){
      $this->name = $value;
    }
    public function getAge(){
      return $this->age;
    }
    private function setAge($value){
      $this->age = $value;
    }
    public function getSex(){
      return $this->sex;
    }
    private function setSex($value){
      $this->sex = $value;
    }

    // Final - não pode ser sobreposta
    public final function birthday(){
      $this->setAge($this->getAge() + 1);
    }

  }

?>