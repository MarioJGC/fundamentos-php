<?php
    
    // Constants are like variables, except that once they are defined they cannot be changed or undefined.

    define("LARAVEL", "https://laravel.com/docs/11.x");
    echo LARAVEL;

    // PHP const Keyword
    const MY_CAR = "Toyota";
    echo MY_CAR;

    /* 
        **** defince vs const ****

        const cannot be created inside another block scope, like inside a function or inside an if statement.
        define can be created inside another block scope.
    */ 

    // PHP Constant Arrays
    define("CARS",[
        "Ford",
        "Mercedes Benz",
        "Mazda"
    ]);

    echo CARS[0];

    // Constants are globals
    define("HI", "Hello World!");

    function myTest() {
        echo HI;
    }

    myTest();

?>