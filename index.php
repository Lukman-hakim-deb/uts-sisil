<?php

class Handphone
{
  public $nama;
  public $series;
  public $negara;
  public $harga;

  public function __construct($nama = "negara", $series = "series", $negara = "negara", $harga = 0)
  {
    $this->nama = $nama;
    $this->series = $series;
    $this->negara = $negara;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->series, adalah series dari handphone $this->nama";
  }
}

$Handphone1 = new Handphone("Nexian", "NX-G522", "China", 200000);
var_dump($Handphone1);

echo "<hr>";

$Handphone2 = new Handphone("Mito", "168", "China", 250000);
var_dump($Handphone2);

echo "<hr>";

$Handphone3 = new Handphone("Imo", "M109", "China", 220000);
var_dump($Handphone3);

echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

echo "<hr>";
echo $Handphone1->getLabel();
echo "<hr>";
echo $Handphone2->getLabel();
echo "<hr>";
echo $Handphone3->getLabel();
