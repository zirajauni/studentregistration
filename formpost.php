
<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<body>

<?php
		echo "Welcome ".$_POST["name"]."!<br>";

		$arr = str_split($_POST["2number"]);
		for($i = 0; $i < count($arr); $i++){
			if ($arr[$i] % 2 == 0){
				$arr[$i] = "try Again";
			}
		}
		$number = implode("",$arr);
		echo "$number";
	?>

</body>
</html>

