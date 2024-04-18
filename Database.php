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
                die("Connection failed: ".$this->conn->connect_error);
            }
        }

        function DisplayTables($table ="",$addSQL = "")
        {
            $tab =[];
            if($table != "")
            {
                $tab[0] = $table;
            }
            else
            {
                $tab = $this->tables;
            }
            for($i=0;$i<count($tab);$i++)
            {
                $sql = "select * from ".$tab[$i]." ".$addSQL;
                $result = $this->conn->query($sql);
                $column = $this->conn->query($sql) ->fetch_assoc();
                
                echo "<table><tr>";
                foreach ($column as $key => $value) 
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

        function generateForm($table)
        {
            $sql = "DESCRIBE ".$table;
            $result = $this->conn->query($sql);
            $keys=[];
            while($row = $result->fetch_assoc())
            {
                $keys[] = $row['Field'];
            }
            echo "<form action='form.php' method='POST'>";
            foreach($keys as $key => $value)
            {
                if(!strpos($value,"id"))
                {
                    echo "<label for='$value'>$value</label><br><input type='text' name='$value'><br>";
                }
            }
            echo "<input type='submit' value='submit'></form>";
        }

        function makeCustomSql($table)
        {
            
            $info = "DESCRIBE ".$table;
            $content = $this->conn->query($info);
            $values=[];
            $columns=[];
            $sql = ["INSERT INTO ",$table," (",")","VALUES","(",");"];
            while($row = $content->fetch_assoc())
            {
                $columns[] =  $row['Field'];
            }
            for($i=0; $i<count($columns);$i++)
            {
                if($i == 0)
                {
                    $sql[2] = $sql[2].$columns[$i];
                }
                else
                {
                    $sql[2] = $sql[2].",".$columns[$i];
                }
            }
            foreach($_POST as $key => $value)
            {
                $sql = $sql."'".$value."'";
            }
            echo $sql;
        }
        
        function close()
        {
            $this->conn->close();
            echo "connection closed";
        }

        function open()
        {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
            echo "connection created";
        }
        
    }
?>