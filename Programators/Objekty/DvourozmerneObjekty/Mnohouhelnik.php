<?php
class Mnohouhelnik implements DvourozmernyObrazec
{
  private $delkaStrany;
  private $pocetUhlu;
  
  public function __construct($delkaStrany, $pocetUhlu){
    $this->delkaStrany = $delkaStrany;
    $this->pocetUhlu = $pocetUhlu;
  }
  
  public function ziskejObsah(){
    return (0.25 * pow($this->delkaStrany,2) * $this->pocetUhlu * tan(M_PI_2 - (M_PI / $this->pocetUhlu)));
  }
  
  public function ziskejDelkuStrany(){
    return $this->delkaStrany;
  }
  
  public function ziskejPocetUhlu(){
    return $this->pocetUhlu;
  }
  public function ziskejObvod(){
    return $this->delkaStrany*$this->pocetUhlu;
  }
  
}
?>