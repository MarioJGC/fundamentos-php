<?php

    //  while Loop
    $i = 1;
    while($i < 7){
        echo $i;
        $i++;
    }

    // for Loop
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
      }

    // foreach Loop
    $colors = array("red", "green", "blue", "yellow");
    foreach($colors as $c){
        echo ($c);
    }

    // break
    foreach ($colors as $x) {
    if ($x == "blue") break;
    echo "$x <br>";
    }

    // continue
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
          continue;
        }
        echo "The number is: $x <br>";
    }
?>