<?php
 
 require_once __DIR__ . "/../Model/TodoList.php";
 require_once __DIR__ . "/../Helper/Input.php";
 require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";


function ViewAddTodoList(){

  echo "MENAMBAH TODO" . PHP_EOL;

  $todo = input("Todo (tekan x jika batal)");

  if ($todo == "x") {
    echo "Batal Menambahkan Todo" . PHP_EOL;
  }else{
    addTodoList($todo);
  }
  
}