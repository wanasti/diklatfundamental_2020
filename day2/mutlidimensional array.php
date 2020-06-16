<?php
$marks = array (
	"mohammad"=> array (
		"physics" =>30,
		"maths" =>30,
		"chemistry" =>39),
		
	"qadir"=> array (
		"physics" =>40,
		"maths" =>35,
		"chemistry" =>29),
		
	"zara"=> array (
		"physics" =>30,
		"maths" =>40,
		"chemistry" =>39),
		);
	
	/*accessing multi-dimensional array values */
	echo "marks for mohammad is physics : " ;
	echo $marks ['mohammad']['physics'] . "<br />";
	
	echo "marks for qadir is physics : " ;
	echo $marks ['qadir']['maths'] . "<br />";
	
	echo "marks for zara is physics : " ;
	echo $marks ['zara']['physics'] . "<br />";
	
?>