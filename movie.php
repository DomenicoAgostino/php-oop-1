<?php 
class Movie{
  private $title;
  private $producer;
  private $language;

  public function __construct($_title, $_producer, $_language){
    $this->setTitle($_title);
    $this->producer = $_producer;
    $this->language = $_language;
  }

  // SETTER

  public function setTitle($_title){
    $this->title = $_title ;
  }
  public function setProducer($_producer){
    $this->producer = $_producer ;
  }
  public function setLanguage($_language){
    $this->language = $_language ;
  }


  // GETTER
  public function getTitle(){
    return $this->title;
  }
  public function getroducer(){
    return $this->producer;
  }
  public function getLanguage(){
    return $this->language;
  }
}


?>