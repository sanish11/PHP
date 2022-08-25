<?php
	session_start();
?>
<html>
	<head>
		<title>Modify Session</title>
	</head>
	<body>
		<?php
			$_SESSION["color"]="Black";
			print_r($_SESSION);
		?>
	</body>
</html>