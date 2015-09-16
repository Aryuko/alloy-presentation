<?php

require_once "alloy/view.php";
use Alloy\View;

$master = View::Get("views/master.html");
$home = View::Get("views/home.html");

$master->SetData("content", $home);
$master->SetData("title", "Essence");
    
$master->render();

?>