<?php

  class Account{

    public $number;
    protected $type;
    private $owner;
    private $amount;
    private $status;

    public function __construct($number, $type, $owner){
      $this->setNumber($number);
      $this->setType($type);
      $this->setOwner($owner);
      $this->setStatus(true);
      $this->openAccount($type);
    }

    public function getNumber(){
      return $this->number;
    }
    public function setNumber($value){
      $this->number = $value;
    }
    public function getType(){
      return $this->type;
    }
    public function setType($value){
      $this->type = $value;
    }
    public function getOwner(){
      return $this->owner;
    }
    public function setOwner($value){
      $this->owner = $value;
    }
    public function getAmount(){
      return $this->amount;
    }
    public function setAmount($value){
      $this->amount = $value;
    }
    public function getStatus(){
      return $this->status;
    }
    public function setStatus($value){
      $this->status = $value;
    }

    public function openAccount($type){

      $this->setType($type);
      $this->setStatus(true);

      if($type == 'cp'){
         $this->setAmount(150);
      } else{
        $this->setAmount(50);
      }

    }

    public function closeAccount(){

      if($this->getAmount() > 0){
        echo 'Ainda há dinheiro na conta <br>';
      } else if($this->getAmount() < 0){
        echo "A conta está em débito <br>";
      } else{
        $this->setStatus(false);
      }

    }

    public function deposit($value){

      if($this->getStatus() == true){
        $this->setAmount($this->getAmount() + $value);
      } else{
        echo 'Essa conta não existe <br>';
      }

    }

    public function withdraw($value){

      if($this->getStatus() == true && $value <= $this->getAmount()){
        $this->setAmount($this->getAmount() - $value);
      } else{
        echo 'Não há dinheiro o suficiente <br>';
      }

    }

    public function monthlyPayment(){
      if ($this->getType() == 'cp') {
        $value = 20;
      } else{
        $value = 12;
      }

      if($this->getStatus()==true && $this->getAmount() > $value){
        $this->setAmount($this->getAmount() - $value);
      } else{
        echo 'Valor insuficiente na conta <br>';
      }

    }

  }

?>