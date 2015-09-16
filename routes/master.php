<?php

require_once "alloy/view.php";
use Alloy\View;

$master = View::Get("views/master.html");


$master->render();

?>