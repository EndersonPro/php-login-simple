<?php 

    class Database{
        private $servername;
        private $user;
        private $password;
        private $dbname;

        public function __construct(){
            $this->servername = 'localhost';
            $this->user = 'root';
            $this->password = '14Junio98*';
            $this->dbname = 'db_login';
        }

        public function connect(){
            $conn = new mysqli($this->servername,$this->user,$this->password,$this->dbname);
            return $conn;
        }


    }