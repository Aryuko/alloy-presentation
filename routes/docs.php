<?php

require_once "alloy/view.php";
use Alloy\View;

$master = View::Get("views/master.html");
$docs = View::Get("views/docs.html");

$master->SetData("content", $docs);
    
$master->render();

?>