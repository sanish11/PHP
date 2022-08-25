<html>
	<head>
		<title>Lab 1-5</title>
	</head>
	<body>
		<?php
/*Define trim(), strlen(), strtoupper(), strtolower(), ucwords(), 
substr(), str_replace(), strcasecmp(), strcmp() and strpos() with 
examples.*/			
		
			$text = "Web Technology II";
			print "The Original text: $text";
		/*	$trim = strlen(trim($text));
			$len = strlen($text);
			print "The text is: $text";
			print "<br/>Length of text: $len";
			print "<br/>Length of text after trim(): $trim";
			print "The Original text: $text";
			print "<br/>strtoupper(): ";
			print strtoupper($text);
			print "<br/>strtolower(): ";
			print strtolower($text);
			print "<br/>ucwords(): ";
			print ucwords(strtolower($text));
			//print ucwords(strtolower('WEB TECHNOLOGY II'));
			print "<br/>substr(): ";
			print substr($text,0,10);
			print "<br/>str_replace(): ";
			print str_replace("II","PHP",$text);
			
			if(strcasecmp("web","WEB")==0){
				print "<br/>strcasecmp(): web==WEB";
			}
			if(strcmp("web","web")==0){
				print "<br/>strcmp(): web==web";
			}*/
			print "<br/>This is php, php has many functions";
			print "<br/>strpos(): ";
			print strpos("This is php, php has many functions","php");
			
		?>
	</body>
</html>