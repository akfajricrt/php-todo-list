<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";



addTodoList("ahmad");
addTodoList("Khoirul");
addTodoList("Fajri");
addTodoList("Progammer");

showTodoList();

ViewRemoveTodoList();

showTodoList();

