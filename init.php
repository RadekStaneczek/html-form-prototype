<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "baza2p";

$table = "uzytkownik";
$tables=["wyniki","zdjecia","matematycy"];

$conn = new mysqli($servername, $username, $password,$database);
$sql_ = "select * from ".$table;
?>