<?php

	$names = array("張三", "李四" , "龍五" , "胡六");
	$heights = array(1.74, 1.56, 1.68, 1.86);
	$weights = array(67, 48, 92, 75);

	for($i= 0 ; $i < count($names); $i++){
		
		echo "姓名：" . $names[$i] . "<br>";
		$height = $heights[$i];
		$weight = $weights[$i];
		echo "身高：" . $heights[$i] . "公尺<br>";
		echo "體重：" . $weights[$i] . "公斤<br>"; 

		$bmi = $weight / $height ** 2;
		echo "BMI：" . $bmi . "<br>";
		
		if ($bmi>24) {
			echo "體重有些太重囉！";
		} else if ($bmi<=18.5) {
			echo "體重很標準耶！";
		} else {
			echo "體重有些太輕了！";
		}
		echo "<hr>";
	}

?>

