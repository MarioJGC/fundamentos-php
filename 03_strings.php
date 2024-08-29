<?php

    $x = "Hello World!";
    echo "Hear, $x";

    // String length (strlen)
    echo strlen($x);

    // Word count ( str_word_count() )
    echo str_word_count($x);

    // Search for text within a String
    echo strpos($x,"Hello");


    /* ========= Modify Strings ========= */

    // Upper Case
    $l = "hello world";
    echo strtoupper($l);

    // lower Case
    $l = "HELLO WORLD";
    echo strtolower($l);

    // Replace String
    $z = "Hello World!";
    echo str_replace("Hello","Hola",$z); 

    // Reverse String
    $z = "Hello World!";
    echo strrev($z);

    // Remove whitespace
    $o = " Hello World!  "; 
    echo trim($o);


    // Convert String to Array
    $g = "Hello World";
    $r = explode(" ", $g);


    /* ========= Concatenate Strings ========= */

    $a = "Hello";
    $b = "World";
    $c = $a . $b;
    echo $c;
    $c = $a . " " . $c;
    echo $c;
    echo "$a $b";

    /* ========= Slicing Strings ========= */

    // PHP Slicing
    $d = "Hello World";
    echo substr($d,0,3);

    // PHP Slice to the End
    $x = "Hello World!";
    echo substr($x,6);

?>