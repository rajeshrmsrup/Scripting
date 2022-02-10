<?php
	$fact=1;
	echo "<h1 style=color:green>Factorial from 1 to 10</h1>";
	for($i=1; $i<=10; $i++){
	  $fact=$fact * $i;
	  echo "<pre>\t$i = $fact</pre>";
	}
?>