<?php 
	$x = rand(0, 1);
	$first_number = 1;
	$second_number = 1;
	if ($x > $first_number) {
		echo "���������� ����� �� ������ � �������� ���";
		# ������� ��� �������� �����.
	}
	elseif ($x ==+ $first_number) {
		echo "���������� ����� ������ � �������� ���";
		# ������� ��� ���������.
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