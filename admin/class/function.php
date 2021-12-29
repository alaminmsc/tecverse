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

        public function admin_login($data){
            $admin_email = $data['admin_email'];
            $admin_password = md5($data['admin_pass']);


            $query = "SELECT * FROM admin_info WHERE admin_email = '$admin_email' && admin_password ='$admin_password'";

            if(mysqli_query($this->conn, $query)){
                $admin_info = mysqli_query($this->conn, $query);

                if($admin_info){
                    header("location:template.php");
                    $admin_data = mysqli_fetch_assoc($admin_info);
                    session_start();
                    $_SESSION['adminID'] = $admin_data['admin_id'];
                    $_SESSION['admin_name'] = $admin_data['admin_name'];

                }else{
                    die('Password not matched'.mysqli_error($this->conn));
                }

            }


        }
    }


?>