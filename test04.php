<?php
// 陣列總和&陣列計數的函數用法
	$scs = array(65, 92, 98, 72, 87, 50, 40, 78);
	// $chi = 65;
	// $eng = 92;
	// $mat = 98;
	// $his = 72;
	// $total = $chi + $eng + $mat + $his;
	$total = array_sum($scs);
	$score = $total / count($scs);

	echo "總分：". $total . "分<br>";
	echo "平均：". $score . "分<br>";
	echo "你的等級是";
	if ($score>=90) {
		echo "A！";
	} else if ($score>=80) {
		echo "B！";
	} else if ($score>=70) {
		echo "C！";
	} else if ($score>=60) {
		echo "D！";
	} else {
		echo "F！";
	}
?>

