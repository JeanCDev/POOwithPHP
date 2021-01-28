<?php
interface Controller{

  public function turnOn();
  public function turnOff();
  public function mute();
  public function unmute();
  public function play();
  public function pause();
  public function moreVolume();
  public function lessVolume();

}

?>