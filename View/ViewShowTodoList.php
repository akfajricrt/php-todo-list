<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";

function ViewShowTodoList(){

  while(true){

    showTodoList();

    echo "MENU" . PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. Keluar" . PHP_EOL;

    $pilihan = input("Pilih");

    if ($pilihan == "1") {
      ViewAddTodoList();
    }elseif ($pilihan == "2") {
      ViewRemoveTodoList();
    }else if ($pilihan == "x") {
      break;
    }else{
      echo "Data Inputan Tidak tersedia";
    }
  }

  echo "Sampai Jumpa Lagi" . PHP_EOL;
  
}