<?php
class User
{
  private $name;
  private $surname;
  private $dateOfBirth;
  private $dateOfLastLogin;
  
  public function __construct($name, $surname, $dateOfBirth='1.1.1900'){
    $this->name = $name;
    $this->surname = $surname;
    $this->dateOfBirth = new DateTime($dateOfBirth);
  }
  
  public function info(){
    return $this->name." ".$this->surname." narozen ".$this->dateOfBirth->format('d.m.Y');
  }
}
?>