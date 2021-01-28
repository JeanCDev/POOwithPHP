<?php 

  interface Publication {

    public function open();
    public function close();
    public function switchPage($value);
    public function nextPage();
    public function previousPage();

  }

?>