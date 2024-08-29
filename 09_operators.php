<?php
    
    /*
        PHP divides the operators in the following groups:

        Arithmetic operators
        Assignment operators
        Comparison operators
        Increment/Decrement operators
        Logical operators
        String operators
        Array operators
        Conditional assignment operators
        
    */
    
    
    $x = 56;
    $y = 20;
    
    // Adition
    echo ($x + $y);
    
    // Substraction
    echo ($x - $y);
    
    // Division
    echo ($x / $y);
    
    // Modulus
    echo ($x % $y);
    
    /*
        PHP Comparison Operator
        
        
        Operator	Name	Example         	    Result
        ==	      Equal	    $x == $y	            Returns true if $x is equal to $y	
        ===	      Identical	    $x === $y	        Returns true if $x is equal to $y, and they are of the same type	
        !=	      Not equal	    $x != $y	        Returns true if $x is not equal to $y	
        <>	      Not equal	    $x <> $y	        Returns true if $x is not equal to $y	
        !==	      Not identical	    $x !== $y	    Returns true if $x is not equal to $y, or they are not of the same type	
        >	      Greater than	    $x > $y	        Returns true if $x is greater than $y	
        <	      Less than	    $x < $y	            Returns true if $x is less than $y	
        >=	      Greater than or equal to $x >= $y Returns true if $x is greater than or equal to $y	
        <=	      Less than or equal to	  $x <= $y  Returns true if $x is less than or equal to $y	
        <=>	      Spaceship	    $x <=> $y	        Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
    
    */
    
    /*
        PHP Logical Operator
        
        Operator	Name	Example	    Result
        and	        And	    $x and $y	True if both $x and $y are true	
        or	        Or	    $x or $y	True if either $x or $y is true	
        xor	        Xor	    $x xor $y	True if either $x or $y is true, but not both	
        &&	        And	    $x && $y	True if both $x and $y are true	
        ||	        Or	    $x || $y	True if either $x or $y is true	
        !	        Not	    !$x	        True if $x is not true
    */
    
    /*
        PHP Strings Operators
        
        Operator	Name	                    Example	        Result
        .	        Concatenation	            $txt1 . $txt2	Concatenation of $txt1 and $txt2	
        .=	        Concatenation assignment	$txt1 .= $txt2	Appends $txt2 to $txt1
    */
    
    /*
        PHP Array Operators
        
        Operator	Name	            Example	    Result
        +	        Union	            $x + $y	    Union of $x and $y	
        ==	        Equality	        $x == $y	Returns true if $x and $y have the same key/value pairs	
        ===	        Identity	        $x === $y	Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
        !=	        Inequality	        $x != $y	Returns true if $x is not equal to $y	
        <>	        Inequality	        $x <> $y	Returns true if $x is not equal to $y	
        !==	        Non-identity	    $x !== $y	Returns true if $x is not identical to $y
    */
    
?>
