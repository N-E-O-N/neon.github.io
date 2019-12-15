<?php
	$filename = htmlspecialchars($_POST["path"]);//"C:/Program Files/xampp/htdocs/script/iteh_4.txt";
	$handler = fopen($filename, "rb");
	
	if (FALSE === $handler)
	{
		exit("Cant open");
	}
	$content = fread($handler, filesize($filename));
	echo $content;
	fclose($handler);
?>