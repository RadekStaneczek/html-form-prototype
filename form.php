<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "piekarnia_staneczek";

$name = $_POST["name"];
$surname = $_POST["surname"];
$phone = $_POST["phone_number"];
$function = $_POST["function"];

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
$sql = "INSERT INTO pracownicy(id_pracownika,imie, nazwisko, numer_telefonu,funkcja) VALUES ('".$name."','".$surname."','".$phone."','".$function."')";

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
  echo "Connected successfully";
}
if(isset($name))
{
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
else
{
  echo "brak";
}

$conn ->close();

?>