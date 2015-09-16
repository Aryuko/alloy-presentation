<?php

use Alloy\View;

$master = View::Get("views/master.html");
$docs = View::Get("views/docs.html");

$master->SetData("content", $docs);
$master->SetData("title", "Documentation - Essence");
    
$master->render();

?>