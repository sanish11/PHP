<?php
	session_start();
?>
<html>
	<head>
		<title>Delete Session</title>
	</head>
	<body>
		<?php
			session_unset();
			session_destroy();
			echo "Session Destroyed.";
		?>
	</body>
</html> 