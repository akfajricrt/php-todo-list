<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Ahmad");
addTodoList("Khoirul");
addTodoList("Fajri");
addTodoList("Budi");
addTodoList("Joko");

showTodoList();

removeTodoList(2);

showTodoList();