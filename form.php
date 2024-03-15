<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "piekarnia_staneczek";

$table = $_POST["table"];

$keys = array_keys($_POST);
$id = [];

$conn = new mysqli($servername, $username, $password,$database);

$sql_ = "select * from dostawcy";
if(true)
{
    $result = $conn->query($sql_);
    $keys = array_keys($result -> fetch_assoc());
    foreach($keys as $key => $value)
    {
        $id[$key] = $value;
    }
}
$sql = "INSERT INTO".$table."(";
$count = 0;
foreach($keys as $key => $value)
{
    if($count==0)
    {
      $sql = $sql."'".$value."'";
      $count +=1;
    }
    else
    {
      $sql = $sql.",'".$value."'";
    }
}
$sql = $sql.") VALUES (";
$count2 = 0;
foreach($_POST as $key => $value)
{
  if($count2 == 0)
  {
    $sql = $sql."'NULL'";
    $count2 += 1;
  }
  else
  {
    $sql = $sql.",'".$value."'";
  }
}
$sql = $sql.");";
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
else
{
  echo "Connected successfully";
}
if(true)
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