<?php
    include("init.php");
                        
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    for($i=0;$i<count($tables);$i++)
    {
        $sql = "select * from ".$tables[$i];
        $result = $conn->query($sql);
        $result2 = $conn->query($sql) ->fetch_assoc();
        echo "<table><tr>";
        foreach ($result2 as $key => $value) {
            echo "<th>".$key."</th>";
        }
        echo "</tr>";
        while($row = $result->fetch_array(MYSQLI_NUM))
        {   
            echo "<tr>";
            for($j=0;$j < count($row);$j++)
            {
                echo "<td>".$row[$j]."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }                     
    $conn->close();

?>