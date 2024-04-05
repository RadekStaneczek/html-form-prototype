<?php 
    class Database
    {
        private $server;
        private $username;
        private $password;
        private $database;
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
        function DisplayTables()
        {

        }
        
    }
?>