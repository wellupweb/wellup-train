<?php 
    class Database{
        private $host = HOST;
        private $user = USER;
        private $password = PASSWORD;
        private $database = DATABASE;

        public $link;

        public function __construct()
        {
            return $this->connectDB();
        }

        private function connectDB(){
            $this->link = new mysqli($this->host, $this->user, $this->password, $this->database);
            if( $this->link->connect_error){
                echo $this->link->connect_error;
                die();
            }else{
                echo "Connected Successfully";
                return $this->link;
                
            }
        }

    }


?>