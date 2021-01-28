<?php

  require_once('interfaceController.php');

  // interface serve para criar um padrão a se seguir quanto aos métodos
  class TvController implements Controller{

    private $volume;
    private $on;
    private $playing;

    public function __construct(){
      $this->setVolume(50);
      $this->setOn(false);
      $this->setPlaying(false);
    }

    public function getVolume(){
      return $this->volume;
    }
    public function setVolume($value){
      $this->volume = $value;
    }
    public function getOn(){
      return $this->on;
    }
    public function setOn($value){  
      $this->on = $value;
    }
    public function getPlaying(){
      return $this->playing;
    }
    public function setPlaying($value){
      $this->playing = $value;
    }

    public function turnOn(){
      $this->setOn(true);
    }
    public function turnOff(){
      $this->setOn(false);
    }
    public function mute(){
      $this->setVolume(0);
    }
    public function unmute(){
      $this->setVolume(50);
    }
    public function play(){
      $this->setPlaying(true);
    }
    public function pause(){
      $this->setPlaying(false);
    }
    public function moreVolume(){
      $this->setVolume($this->getVolume() + 2);
    }
    public function lessVolume(){
      $this->setVolume($this->getVolume() - 2);
    }

  }
