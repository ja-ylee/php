<?php
	$arr = [];
	
	for ($i = 0, $k = 1; $i < 4; $i++) {
		for ($j = 0; $j < 2; $j++, $k++) {
			$arr[$i][$j] = $k;
		}
	}
	
	var_dump($arr);
?>