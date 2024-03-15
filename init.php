<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "szkola";

$table = "wychowawca";
$tables=["klasa","uczen","wychowawca"];

$conn = new mysqli($servername, $username, $password,$database);
$sql_ = "select * from ".$table;
?>