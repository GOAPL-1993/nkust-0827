<?php
	$names = array ("明", "華", "張", "黃");
	$heights = array (1.74, 1.56, 1.75, 1.86);
	$weights = array (45, 47, 95, 76);

	for ($i = 0; $i < count ($names); $i ++){
		echo "姓名：" . $names [$i]."<br>";
		$height = $heights[$i];
		$weight = $weights[$i];
	
	echo "身高：", $height, "m<br>";
	echo "體重：". $weight. "kg<br>"; 
	$bmi = $weight / $height ** 2;
	echo "BMI：" . $bmi . "<br>";
	if ($bmi>24) {
		echo "FAT！";
	} else if ($bmi>=18.5) {
		echo "GREAT！";
	} else {
		echo "SKINNY！";
	}
	echo "<hr>";
	}

?>

