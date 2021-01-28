<?php 

require_once('interfaceVideo.php');
class Video implements interfaceVideo{

  private $title;
  private $rank;
  private $views;
  protected $likes;
  protected $playing;

  public function __construct(String $title){
    $this->setTitle($title);
    $this->setRank(1);
    $this->setViews(0);
    $this->likes = 0;
    $this->playing = false;
  }

  public function getTitle(){
    return $this->title;
  }
  public function setTitle($value){
    $this->title = $value;
  }
  public function getRank(){
    return $this->rank;
  }
  public function setRank($value){

    $average = 1;

    if($this->getViews() > 0){
      $average = ($this->getRank() + $value) / $this->getViews();
    } 

    $this->rank = $average;
  }
  public function getViews(){
    return $this->views;
  }
  public function setViews(Int $value){
    $this->views = $value;
  }

  public function play(){
    $this->playing = true;
  }

  public function pause(){
    $this->playing = false;
  }

  public function like(){
    $this->likes++;
  }

}