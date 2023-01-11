<?php 
    class  Person{
        public static $height;
        public static $weight;
        public static $hello = "60";

        public function __construct($h,$w){
            self::$height = $h;
            self::$weight = $w;
        }

        public static function personBody(){
            echo "You height is ". self::$height . "<br>";
            echo "You weight is ". self::$weight . "<br>";
        }

        public static function helloWorld(){
            echo "Hello world";
        }
    }

    // $per = new Person(5.7,90);
    // $per->personBody();

    // Person::personBody();
    // Person::$height;

    Person::helloWorld();

    echo Person::$hello;

    


    


    



?>