<?php 
  require_once('Person.php');
  class User extends Person{

    private $login;
    private $watchedVideos;

    public function __construct(String $name, Int $age, String $sex, String $login, Int $watchedVideos){
      parent::__construct($name, $age, $sex);
      $this->setLogin($login);
      $this->setWatchedVideos($watchedVideos);
    }

    public function getLogin(){
      return $this->login;
    }
    public function setLogin($value){
      $this->login = $value;
    }
    public function getWatchedVideos(){
      return $this->watchedVideos;
    }
    public function setWatchedVideos($value){
      $this->watchedVideos = $value;
    }

    public function watchOneMore(){
      $this->setWatchedVideos($this->getWatchedVideos() + 1);
    }

  }
