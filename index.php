<?php 
	$x = rand(0, 100);
	$first_number = 1;
	$second_number = 1;
	if ($x > $first_number) {
		echo "задуманное число НЕ входит в числовой ряд";
		# Условие для большего числа.
	}
	elseif ($x == $first_number) {
		echo "задуманное число входит в числовой ряд";
		# Условие для равенства.
	}
	do {	
		$second_number = $x;
		$x = $x + $first_number;
		$first_number = $second_number;
	} 
	while ($x <= $first_number);
echo "<br />".$x."<br />";
echo $first_number."<br />";
echo $second_number."<br />";
 ?>
