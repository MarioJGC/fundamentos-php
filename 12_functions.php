<?php

    // Create a Function
    function hello(){
        echo "Hello World!";
    }

    // Call a Function
    hello();

    // PHP Function Arguments
    function hear($fname){
        echo "$fname hear!";
    }

    hear("Josh");

    // PHP Default Argument Value
    function setHeight($minheight = 50) {
        echo "The height is : $minheight <br>";
    }
      
    setHeight(350);
    setHeight();
    setHeight(135);
    setHeight(80);

    // PHP Functions - Returning values
    function suma($a = 0, $b = 0){
        return ($a + $b);
    }

    echo (suma(3,4));

    // Variable Number of Arguments
    function sumMyNumbers(...$x) {
        $n = 0;
        $len = count($x);
        for($i = 0; $i < $len; $i++) {
          $n += $x[$i];
        }
        return $n;
      }
      
      $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
      echo $a;

?>