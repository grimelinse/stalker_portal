<?php
/*
    
*/
error_reporting(E_ALL);

include "../conf_serv.php";
include "../common.php";

$weather = new Weatherco();
$weather->update();

?>