<?php
    class tecverse{
        private $conn;

        public function __construct(){
            $dbhost = "localhost";
            $dbuser = 'root';
            $dbpass = "";
            $dbname = 'db_tecverse';

            $this-> conn = mysqli_connect ($dbhost, $dbuser, $dbpass, $dbname);

            if(!$this-> conn){
                die("Database Connection Error!");
            }

        }
    }


?>