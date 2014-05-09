<?php
	include_once("../php/config.php");


	$sql = "SELECT * FROM  `$_GET[type]` WHERE  `num` ='$_GET[id]'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);

	if($_GET['sort']=="up"){
		
	 	$sqlmax = "SELECT max(num) FROM  `$_GET[type]` WHERE `num` < '$_GET[id]'";
	 	$resultmax = mysql_query($sqlmax);
	 	$rowmax = mysql_fetch_array($resultmax);
	 	$sql1 = "UPDATE  `daohang`.`$_GET[type]` SET  `num` = '$_GET[id]' WHERE  `$_GET[type]`.`num` = '$rowmax[0]';";
	 	$sql2 = "UPDATE  `daohang`.`$_GET[type]` SET  `num` = '$rowmax[0]' WHERE  `$_GET[type]`.`id` = '$row[id]';";
	 }
	else if ($_GET['sort']=="down") {

		$sqlmin = "SELECT min(num) FROM  `$_GET[type]` WHERE `num` > '$_GET[id]'";
	 	$resultmin = mysql_query($sqlmin);
	 	$rowmin = mysql_fetch_array($resultmin);
	 	$sql1 = "UPDATE  `daohang`.`$_GET[type]` SET  `num` = '$_GET[id]' WHERE  `$_GET[type]`.`num` = '$rowmin[0]';";
	 	$sql2 = "UPDATE  `daohang`.`$_GET[type]` SET  `num` = '$rowmin[0]' WHERE  `$_GET[type]`.`id` = '$row[id]';";

	}

	mysql_query($sql1);
	mysql_query($sql2);

	$url = "$_GET[type]".".php";
	echo "<script language='javascript' type='text/javascript'>
		window.location.href='$url';
		</script>";	
?>