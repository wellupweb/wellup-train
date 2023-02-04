<?php
    include "../config/config.php";
    include "../lib/Database.php";
    class Authentication{
        protected $db;
        public function __construct()
        {
            $this->db = new Database();
        }

        public function login($email,$password){
            if($email == "" || $password == ""){
                return "Field is Required!!";
            }

            $pass = md5($password);

            $loginSql = "select * from users where email = '$email' and password = '$pass'";
            

            $checkLogin = $this->db->select($loginSql);

            if($checkLogin->num_rows > 0){
                $loggedUser = $checkLogin->fetch_assoc();
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['name'] = $loggedUser['name'];
                $_SESSION['email'] = $loggedUser['email'];
                header("Location: dashboard.php");
            }else{
                return "Creds Are Invalid!!";
            }
        }
    }


?>