<?php 
    class School 
    {
        public $school_name ;

        protected $password = "1234567";

        private $result = "This is private";

        public function __construct($school_name)
        {
            $this->school_name = $school_name;
        }

        public function organize(){
            echo "We are organizing lot of students";
        }

        public function attendance(){
            echo "Hello Attendance from school";
        }

        protected function library(){
            echo "Libray is from school <br>";
            
            $this->questionpaper();
            echo $this->result;
        }

        private function questionpaper(){
            echo "We are making question papers <br>";
        }
        
        
    }

    class Teacher extends School{
     
        public $name ;
        public $phone_number;

        public function __construct($name , $phone_number)
        {
            $this->name = $name;
            $this->phone_number = $phone_number;
        }

        public function teaching(){
            echo "I am teaching lots of students";
        }

        public function attendance(){
            echo "Hello Attendance from school and Teacher <br>";
            $this->library();
            echo $this->password;

        }


    }

    $school = new School("Wellup");

    // $school->attendance();


    $teacher = new Teacher("Adnan Sir","018798879");

    $teacher->school_name = "Wellup";

    // echo $teacher->name;
    // echo $teacher->phone_number;
    // echo $teacher->school_name;
    $teacher->attendance();
    // $teacher->library();
    // echo $teacher->password;

    

    

?>