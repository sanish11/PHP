<?php
	$cookie_name="user";
	$cookie_value="Ted Mosby";
	setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<html>
	<head>
		<title>Modify Cookie</title>
	</head>
	<body>
		<?php
			if(!isset($_COOKIE[$cookie_name])){
				echo "Cookie named '".$cookie_name."' is not set!";
			}
			else{
				echo "Cookie '".$cookie_name."' is set!<br/>";
				echo "Value is: ".$_COOKIE[$cookie_name];
			}
		?>
	</body>
</html>