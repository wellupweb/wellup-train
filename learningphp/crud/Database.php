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
                echo "Something went wrong Please check this message: ". $this->link->connect_error;
                die();
            }else{
                return $this->link;
                
            }
        }

        public function select($sql){
            $result = $this->link->query($sql);
            if($result){
                return $result;
            }else{
                return false;
            }
        }

    }


?>