<?php
    echo "<h1 style='color:green'>Sorting</h1>";
    $CrsSem = array("MCA"=>"2nd", "Mca"=>"3nd", "BCA"=>"6th", "BCA"=>"1st", "Btech"=>"7th", "Bsc"=>"1st");

    echo "<h3>---Sorting with respect to the KEY, in ascending order---</h3>";
    ksort($CrsSem);
    echo "<pre>KEY\tVALUE<br>";
    echo "--------------<br>";
    foreach($CrsSem as $x=>$x_value)
        echo $x, "\t", $x_value,"<br>";
    echo "</pre>"; 

    echo "<h3>---Sorting with respect to the VALUE, in descending order---</h3>";
    arsort($CrsSem);
    echo "<pre>KEY\tVALUE<br>";
    echo "--------------<br>";
    foreach($CrsSem as $x=>$x_value)
        echo $x, "\t", $x_value,"<br>";
    echo "</pre>";
?>