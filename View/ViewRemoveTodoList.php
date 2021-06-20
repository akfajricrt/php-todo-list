<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";


function ViewRemoveTodoList(){

  echo "MENGHAPUS TODO" . PHP_EOL;

  $pilihan = input("Nomor (tekan x Jika Batal)");


  if ($pilihan == "x") {
    echo "Batal Menghapus Todo" . PHP_EOL;
  }else{

    $success = removeTodoList($pilihan);

    if ($success) {
      echo "Berhasil Menghapus Todo Nomor $pilihan" . PHP_EOL;
    }else{
      echo "Gagal Menghapus Todo Nomor $pilihan" . PHP_EOL;
    }
  }
  
}