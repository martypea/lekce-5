<?php
class Kruh implements DvourozmernyObrazec
{
  
  private $radius;
  
  public function __construct($radius){
    $this->radius = $radius;
  }
  
  public function getRadius(){
    return $this->radius; 
  }
  public function ziskejObsah(){
    return round(pi() * pow($this->radius,2),2);
  }
  public function ziskejObvod(){
    return 2*pi()*$this->radius;
  }
}
?>