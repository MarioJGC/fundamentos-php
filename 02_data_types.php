<?php

    // Data Types
    /*
        String
        Integer
        Float
        Boolean
        Array
        Object
        NULL
        Resource
    */

    // Funcion que retorna el tipo de datos de una variable
    $x = 5;
    var_dump($x);

    // Variables String
    $y = "Hello World!";
    $z = "Hello World!";

    var_dump($y);
    echo "<br>";
    var_dump($z);

    // PHP Integer
    $p = 5895;
    var_dump($p);

    // PHP Float
    $l = 2.32;
    var_dump($l);

    // PHP Boolean
    $f = true;
    var_dump($f);

    // PHP Array
    $o = [1,2,3,"hello",false];

    // PHP Object

    class Car {
        public $color;
        public $model;

        public function __construct($color,$model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        
        public function message(){
            return "My car is a " . $this->color . " " . $this->model;
        }

        public function colorCar(){
            return "My car is the color " . $this->color;
        }

    }

    $myCarRed = new Car("red","Toyota");

    // Chande Data Type
    $u = 3;
    $j = (string) $u;

    var_dump($j);


?>