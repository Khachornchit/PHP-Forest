<?
	$num = 4;
	$string = "This string has four words.";
	$string = ereg_replace('four', $num, $string);
	echo $string."<br>";  

	$num = '4';
	$string = "This string has four words.";
	$string = ereg_replace('four', $num, $string);
	echo $string;  
?>