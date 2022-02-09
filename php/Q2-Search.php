<?php
    $num = 1839;
    $digit = 3;
    $n = $num;
    echo "<h1 style='color:green'>Search a given digit in a number</h1>";
    echo "<h3>num = $num</h3>";
    echo "<h3>digit = $digit</h3>";
    while($num > 0){
        $rem = $num % 10;
        if($rem == $digit){
            echo "$digit is occured in $n";
            return 0;
        }
        $num = $num/10;
    }
    echo "$digit is not occured in $n";
?>
