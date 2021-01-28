<?php

require_once('User.php');
require_once('Video.php');

class View{

  protected $video;
  protected $user;

  public function __construct(Video $video, User $user){
    $this->video = $video;
    $this->user = $user;

    $this->video->setViews($this->video->getViews() + 1);
    $this->user->setWatchedVideos($this->user->getWatchedVideos() + 1);
    $this->user->setExp($this->user->getExp() + 1);
  }

  public function rank(){
    $this->video->setRank(5);
  }

  public function rankGrade($grade){
    $this->video->setRank($grade);
  }

  public function rankPercentage($percentage){
    $newGrade = 0;

    if($percentage <= 20){
      $newGrade = 3;
    } elseif($percentage <= 50){
      $newGrade = 5;
    } elseif($percentage <= 90){
      $newGrade = 8;
    } elseif($percentage == 100){
      $newGrade = 10;
    }

    $this->video->setRank($newGrade);

  } 

}
