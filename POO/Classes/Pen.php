<?php

  class Pen{

    public $model;
    public $color;
    protected $charge;
    protected $closed;

    public function getColor(){
      return $this->color;
    }
    public function setColor($value){
      $this->color = $value;
    }
    public function getModel(){
      return $this->model;
    }
    public function setModel($value){
      $this->model = $value;
    }
    public function getCharge(){
      return $this->charge;
    }
    public function setCharge($value){
      $this->charge = $value;
    }
    public function getClosed(){
      return $this->closed;
    }
    public function setClosed($value){
      $this->closed = $value;
    }
    

    public function __construct($model, $color, $charge, $closed){
      $this->setModel($model);
      $this->setColor($color);
      $this->setCharge($charge);
      $this->setClosed($closed);
    }

    public function write($string){

      if($this->closed){
        echo 'Não é possível escrever com a caneta tampada <br>';
      } else{
        echo $string;
      }
      
    }



  }

?>