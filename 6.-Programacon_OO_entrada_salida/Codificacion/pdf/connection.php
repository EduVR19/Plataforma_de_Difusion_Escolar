<?php
$mysqli = new mysqli("localhost", "root", "", "pde");
$mysqli->set_charset('utf8');
return $mysqli;
?>

