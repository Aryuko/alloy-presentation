<?php

require_once "alloy/view.php";
use Alloy\View;

$master = View::Get("views/master.html");
$what = View::Get("views/what.html");

$master->SetData("content", $what);
$master->SetData("title", "What? - Essence");
    
$master->render();

?>