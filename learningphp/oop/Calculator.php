<?php 
class Calculator{
    public function add($num1,$num2){
        $add = $num1 + $num2;
        echo "Your addition $add"; 
    }

    public function multi($num1,$num2){
        $multi = $num1 * $num2;
        echo "Your multiplication $multi"; 
    }

    public function subs($num1,$num2){
        $subs = $num1 - $num2;
        echo "Your substraction $subs"; 
    }
}
    

?>