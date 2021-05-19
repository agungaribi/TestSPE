<?php

	$n = 1634;
	
	if (narcissistic($n))
		echo "true";
	else
		echo "false";
	
	function narcissistic($n)
	{
		$l = strlen($n);
		$nilai = $n;
		$total = 0;
	 
		while ($nilai)
		{
			$total += pow($nilai % 10, $l);
			$nilai = (int)$nilai / 10;
		}
		return ($n == $total);
	}
	