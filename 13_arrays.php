<?php

    // PHP Arrays
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);

    // Access Indexed Arrays
    echo $cars[0];

    // Change Value
    $cars[0] = "Ford";
    var_dump($cars);

    // Loop Through an Indexed Array
    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as $x) {
        echo "$x <br>";
    }

    // Array push
    array_push($cars, "Ford");

    // PHP Associative Arrays
    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    echo $car["model"];

    // Change value array asociative key : value
    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    $car["year"] = 2024;
    var_dump($car);

    // Loop Through an Associative Array
    foreach ($car as $x => $y) {
        echo "$x: $y <br>";
    }

    // Excecute a Function Item
    function myFunction() {
        echo "I come from a function!";
      }
      
    $myArr = array("Volvo", 15, myFunction());
      
    $myArr[2]();

    /*
        PHP - Sort Functions For Arrays

        sort() - sort arrays in ascending order
        rsort() - sort arrays in descending order
        asort() - sort associative arrays in ascending order, according to the value
        ksort() - sort associative arrays in ascending order, according to the key
        arsort() - sort associative arrays in descending order, according to the value
        krsort() - sort associative arrays in descending order, according to the key
    */



?>