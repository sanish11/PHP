<?php
	session_start();
?>
<html>
	<head>
		<title>Session Start</title>
	</head>
	<body>
		<?php
			$_SESSION["color"]="Blue";
			$_SESSION["fruit"]="Apple";
			echo "Session variable are set.";
		?>
	</body>
</html>