<?php

require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../View/ViewAddTodoList.php";

addTodoList("Ahmad");
addTodoList("Khoirul");
addTodoList("Fajri");


ViewAddTodoList();

showTodoList();

