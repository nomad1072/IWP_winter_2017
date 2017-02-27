<?php

function outer($a) {

    function rowMax($k,$a) {

        $max = 0;
		for($i = 0; $i < count($a); $i++) {
			if($k == $i) {
				for($j = 0; $j < count($i); $j++) {
                     if($a[$i][$j] > $max) {
                     	$max = $a[$i][$j];
                     }
				}
			}
		}
		return $max;

	}
	for($i = 0; $i < count($a); $i++) {
		for($j = 0; $j < count($i); $j ++) {

			$max_in_row = rowMax($i,$a);
		}
		echo "maximum of row: ".$i." is".$max_in_row;
	}

	

}
$a = array(array(1,2,3,4,5),array(2,3,4,5,6));



?>