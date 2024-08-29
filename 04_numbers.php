<?php

    // PHP Numbers

    /*
        Integer
        Float
        Number Strings

        Infinity
        NaN
    */

    // Validate PHP Integer
    $x = 5985;
    var_dump(is_int($x));

    $y = 59.85;
    var_dump(is_int($y));

    // Validate PHP Float
    $a = 2.32;
    var_dump(is_float($a));

    $b = 10.365;
    var_dump(is_double(10.365));

    // Validate PHP Infinity
    $x = 1.9e411;
    var_dump($x);

    // Validate PHP NaN
    $x = acos(8);
    var_dump($x);

    // Validate PHP String Numeric
    $x = 5985;
    var_dump(is_numeric($x));

    $x = "5985";
    var_dump(is_numeric($x));
    $x = "59.85" + 100;
    var_dump(is_numeric($x));

    $x = "Hello";
    var_dump(is_numeric($x));

?>