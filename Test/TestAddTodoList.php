<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";



addTodoList("Ahmad");
addTodoList("Khoirul");
addTodoList("Fajri");

var_dump($todoList);