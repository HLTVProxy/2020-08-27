
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		th , td {
			text-align:center;
		}
	</style>
</head>
<body>
	<?php
		echo "<table border=1 width = 10%>";
		echo "<tr bgcolor=ff9999><th>數字</th><th>平方</th><th>三次方</th>";
		for($i=1; $i<=9; $i++) {
			if($i%2 == 0)
				echo "<tr bgcolor=#80d4ff>";
			else
				echo "<tr bgcolor=#ff80ff>";
			echo "<td>" . $i . 
			"</td><td>" . $i**2 . 
			"</td><td>" . $i**3 . 
			"</td></tr>\n";
		}	
		echo "</table>";
	?>
</body>
</html>