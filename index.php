<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$sum = 0;
foreach ($numbers as $index=>$value) {
	if ($value % 2 != 0){
  echo "$value <br>";
		$sum = $sum + $value;}
}
echo 'sum: '. $sum;