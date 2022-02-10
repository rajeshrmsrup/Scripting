<?php
    echo "<h1>'is' replaced by 'and'</h1>";
    $str = "Art is long, life is short";

    echo "<h2 style=color:green>Before Replace</h2>";
    echo $str."<br>";

    echo "<h2 style=color:green>After Replace</h2>";
    $rStr = str_replace('is', 'and', $str);
    echo $rStr;
?>
