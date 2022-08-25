<?php
	setcookie("user", "", time() - 3600);
	//$cookie_name="user";
	//$cookie_value="Alex Ander";
	//setcookie($cookie_name,$cookie_value,time()-3600,"/");
?>
<html>
	<head>
		<title>Delete Cookie</title>
	</head>
	<body>
		<?php
			echo "Cookie 'user' is deleted.";
		?>
	</body>
</html>