<?php

use Alloy\View;

$master = View::Get("views/master.html");
$getstarted = View::Get("views/getstarted.html");

$master->SetData("content", $getstarted);
$master->SetData("title", "Get Started - Essence");
    
$master->render();

?>