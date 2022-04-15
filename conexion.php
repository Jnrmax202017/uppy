<?php

$mysqli= new mysqli("localhost","root","","ventas");
$mysqli->query("SET NAMES 'utf8'"); 
$mysqli->query("SET CHARACTER SET utf8");  
$mysqli->query("SET SESSION collation_connection = 'utf8_unicode_ci'"); 



?>