<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
</head>
<body>
<?php
		echo "Welcome ".$_GET["Fname"]."!<br>";
		$arr = str_split($_GET["1number"]);
		for($i = 0; $i<count($arr); $i++){
			if ($arr[$i] % 2 == 0){
				$arr[$i] = "try again";
			}
		}
		$number = implode("",$arr);
		echo "$number";


	?>
</body>
</html>

