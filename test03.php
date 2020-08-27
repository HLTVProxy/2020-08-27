<h2>超神準大樂透預測王</h2>
<hr>
<!-- 陣列排序函數及判斷數字是否在函數中的用法 -->
<?php
	$count = 0;//目前取得的數字個數
	while($count < 6){
		$r = rand(1, 49);//先取得一個候選的隨機數
		if (in_array($r, $lotto)) continue;
		$lotto[] = $r;
		$count++;
	}

	sort($lotto);
	foreach($lotto as $no){
		echo $no . " ";
	}

	// 方法一
	// while($key == false){
	// 	$sp = rand(1, 49);
	// 	if (in_array($sp, $lotto)) continue;
	// 	$key = true;
	// }
	//
	// echo "<br>特別號：". $sp;

	//方法二
	$spec = rand(1,49);
	while (in_array($spec, $lotto))
		$spec = rand(1,49);
	echo "<br>特別號：". $spec;
?>
<hr>
<iframe width="560" height="315" src="https://www.youtube.com/embed/NXId3_EEGKY?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<hr>
不準免錢，有中歡迎斗內...