<?php
class Kvadr implements TrojrozmernyObrazec
{
	private $stranaA;

	private $stranaB;
  private $stranaC;

	public function __construct($stranaA, $stranaB, $stranaC)
	{
		$this->stranaA = $stranaA;
		$this->stranaB = $stranaB;
    $this->stranaC = $stranaC;
	}

	public function ziskejStranuA()
	{
		return $this->stranaA;
	}

	public function ziskejStranuB()
	{
		return $this->stranaB;
	}

  public function ziskejStranuC()
	{
		return $this->stranaC;
	}
  
	public function ziskejObjem()
	{
		return $this->stranaA * $this->stranaB * $this->stranaC;
	}
  public function ziskejPovrch()
  {
    return 2*(($this->stranaA*$this->stranaB) + ($this->stranaB*$this->stranaC) + ($this->stranaC*$this->stranaA));
  }
}