<?php 
    class Database
    {
        private $server = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "";
        private $tables = [];

        private $conn;
        function __construct($server,$username,$password,$database,$tables)
        {
            $this->server = $server;
            $this->username = $username;
            $this->password = $password;
            $this->database = $database;
            $this->tables = $tables;

            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
            if ($this->conn->connect_error) 
            {
                die("Connection failed: " . $this->conn->connect_error);
            }
        }
        function DisplayTables($addSQL)
        {
            for($i=0;$i<count($this->tables);$i++)
            {
                $sql = "select * from ".$this->tables[$i]." ".$addSQL;
                $result = $this->conn->query($sql);
                $result2 = $this->conn->query($sql) ->fetch_assoc();

                echo "<table><tr>";

                foreach ($result2 as $key => $value) 
                {
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
        }
        function generateForm()
        {

        }
        function close()
        {
            $this->conn->close();
            echo "connection closed";
        }
        
    }
?>