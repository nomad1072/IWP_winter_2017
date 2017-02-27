<?php

$student = array("sid"=>array("subject1"=>45,"subject2"=>50), "divye" => array("subject1"=>45,"subject2"=>50));

foreach($student as $key=>$value) {
	foreach($value as $key1=>$value1) {
		  echo $key1.' '.$value1;
	}
}

?>