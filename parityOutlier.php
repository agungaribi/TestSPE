<?php
	$data = array(3, 4, 0, 100, 4, 11, 1602, 36);
	
	$count = count($data);
	$odd = 0;
	$even = 0;
	$cycleOdd = 0;
	$cycle = 0;
	
	for($i = 0; $i < $count; $i++) {
		if ($data[$i] % 2 == 0) {
			$cycle++;
			$even = $data[$i];
		} else {
			$odd = $data[$i];
		}
	}
		
	if ($cycle > 1) {
		echo $odd;
	} else {
		echo $even;
	}
