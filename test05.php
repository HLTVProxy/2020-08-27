<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>利息試算程式</h2>
	<form method="POST" action="test05.php">
		<label for="money">本金：</label>
  		<input type="text" id="money" name="money" value="<?php echo $_POST["money"];?>">元<br>

		<label for="rate">利率：</label>
  		<input type="text" id="rate" name="rate" value="15">%<br>

		<label for="years">期數：</label>
  		<input type="text" id="years" name="years" value="10">期<br>
		
		<input type="submit" value="計算">
	</form>
<?php
	$money = $_POST[money];
	$rate = $_POST[rate] / 100;
	$years = $_POST[years];

	echo "<table border=0 width=300>";
	
	echo "<tr>";
	echo "<td width=120 bgcolor=#ccffcc>本金</td><td bgcolor=#ccaaaa>" . $money . "元</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td bgcolor=#ccffcc>利率</td><td bgcolor=#ccaaaa>" . $rate * 100 . "%</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td bgcolor=#ccffcc>期數</td><td bgcolor=#ccaaaa>" . $years . "年</td>";
	echo "</tr>";

	$s_amount = $money * (1 + $rate * $years);
	$c_amount = $money * (1 + $rate) ** $years;

	echo "<tr>";
	echo "<td bgcolor=#ccffcc>單利試算結果</td><td bgcolor=#ccaaaa>" . (int)$s_amount . "元</td>";
	echo "</tr>";

	echo "<td bgcolor=#ccffcc>複利試算結果：</td><td bgcolor=#ccaaaa>" . (int)$c_amount . "元</td>";
	echo "</table>";
?>
</body>
</html>