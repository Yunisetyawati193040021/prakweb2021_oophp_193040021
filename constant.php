<?php
// define hanya bisa dideklarasikan di global scope
// define("NAMA", "Yuni Setyawati");
// echo NAMA;

// echo '<br>';
// // const bisa dideklarasikan di dalam class
// const UMUR = 20;
// echo UMUR;

// class Coba {
//   const NAMA = "Aji Fattah";
// }

// echo "<h1>" . COBA::NAMA . "</h1>";


// // Magic Constant
// echo _FILE_;

// function coba() {
//   return _FUNCTION_;
// }

// echo coba();

class Coba {
  public $kelas = __CLASS__;
}

$obj = new Coba();
echo $obj->kelas;