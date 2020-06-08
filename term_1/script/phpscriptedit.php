<?php
	if (isset($_POST["of"])) { setcookie("FilePath", $_POST["filename"]); }
	$temp=isset($_POST['temp'])?$_POST['temp']:'';
	$edit=isset($_POST['edit'])?$_POST['edit']:'';
	if ($edit=='Edit')
	{
		$handler = fopen($_COOKIE["FilePath"], 'w');
		fwrite($handler, $temp);
		fclose($handler);
	}
	//$temp = file_get_contents($file);
	$handler = fopen($_COOKIE["FilePath"], "rb");
	$temp = fread($handler, filesize($_COOKIE["FilePath"]));
	fclose($handler);
	echo "<form method='post'>";
	echo "<textarea name='temp' cols='100%' rows='35'>".htmlspecialchars($temp)."</textarea><br>";
	echo "<input type='submit' name='edit' value='Edit'>";
	echo "</form>";
?>