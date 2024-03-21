<?php
include('init.php');

$keys = array_keys($_POST);
$id = [];

if(true)
{
    $result = $conn->query($sql_);
    $keys = array_keys($result -> fetch_assoc());
    foreach($keys as $key => $value)
    {
        $id[$key] = $value;
    }
}
$sql = "INSERT INTO ".$table."(";
$count = 0;
foreach($keys as $key => $value)
{
    if($key != 0 && $key != 1 && !str_contains($value,"id"))
    {
      $sql = $sql.",".$value."";
    }
    else if($key == 1)
    {
      $sql = $sql.$value;
    }
    else if(str_contains($value,"id"))
    {
      $sql = $sql;
    }
    else
    {
      $sql = $sql;
    }
}
$sql = $sql.") VALUES (";

foreach($_POST as $key => $value)
{
  if($count == 0)
  {
    $sql = $sql."'".$value."'";
    $count += 1;
  }
  else
  {
    $sql = $sql.",'".$value."'";
  }
}
$sql = $sql.")";
print_r($sql);
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