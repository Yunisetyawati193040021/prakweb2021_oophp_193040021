<?php
// define("NAMA", "Yuni Setyawati");
// echo NAMA;

// echo '<br>';
// const UMUR = 19;
// echo UMUR;

// class Coba {
//   const NAMA = "Yuni Setyawati";
// }

// echo "<h1>" . COBA::NAMA . "</h1>";

// // Magic Constant
// echo _FILE_;

// function coba() {
//   return _FUNCTION_;
// }

// echo coba();

class Coba
{
  public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;