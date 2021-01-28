<?php 

  require_once('Publication.php');
  require_once('Person.php');

  class Book implements Publication{

    private $title;
    private $author;
    private $pages;
    private $currentPage;
    private $open;
    private $reader;

    public function __construct($title, $author, $pages, $reader){
      $this->setTitle($title);
      $this->setAuthor($author);
      $this->setPages($pages);
      $this->setReader($reader);
      $this->setCurrentPage(0);
      $this->setOpen(false);
    }

    private function getTitle(){
      return $this->title;
    }
    private function setTitle($value){
      $this->title = $value;
    }
    private function getAuthor(){
      return $this->author;
    }
    private function setAuthor($value){
      $this->author = $value;
    }
    private function getPages(){
      return $this->pages;
    }
    private function setPages($value){
      $this->pages = $value;
    }
    private function getCurrentPage(){
      return $this->currentPage;
    }
    private function setCurrentPage($value){
      $this->currentPage = $value;
    }
    private function getOpen(){
      return $this->open;
    }
    private function setOpen($value){
      $this->open = $value;
    }
    private function getReader(){
      return $this->reader;
    }
    private function setReader($value){
      $this->reader = $value;
    }
    
    public function open(){
      $this->setOpen(true);
    }

    public function close(){
      $this->setOpen(false);
    }

    public function details(){

      echo "Livro: " . $this->getTitle() . "; Escrito por: " .
        $this->getAuthor() . "; Página totais: " . $this->getPages() . 
        "; Sendo lido por: " . $this->getReader()->getName() . 
        "; Atualmente na página: ". $this->getCurrentPage() .'<br>';

    }

    public function switchPage($value){
      
      if($value > $this->getPages()){
        $this->setCurrentPage(0);  
      } else{
        $this->setCurrentPage($value);
      }
      
    }

    public function nextPage(){
      $this->setCurrentPage($this->getCurrentPage() + 1);
    }

    public function previousPage(){
      $this->setCurrentPage($this->getCurrentPage() - 1);
    }
    

  }

?>