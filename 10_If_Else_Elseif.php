<?php
  
  // if statements
  
  $x = 3;
  if ($x === 3){
      echo ("Este es el numero $x");
  }
  
  $a = 200;
  $b = 33;
  $c = 500;
  
  if ($a > $b  && $a < $c){
      echo "Both conditions are true";
  }
  
  // if...else statements
  
  $t = date("H");

    if ($t < "20") {
      echo "Have a good day!";
    } else {
      echo "Have a good night!";
    }
    
  // if...else...elseif statements
  
    if ($t < "10") {
      echo "Have a good morning!";
    } elseif ($t < "20") {
      echo "Have a good day!";
    } else {
      echo "Have a good night!";
    }
    
  // Short Hand If...Else
  
    $c = 4;
    $d = ($c == 4) ? "OK" : "INVALID";
    
    echo ($d);
    
?>