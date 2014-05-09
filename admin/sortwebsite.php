<?php
	include_once("../php/config.php");

	$sql = "SELECT * FROM  `website` WHERE  `position` ='$_GET[id]'";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);

	if($_GET['sort']=="up"){
		
	 	$sqlmax = "SELECT max(position) FROM  `website` WHERE  `uid` LIKE  'common' AND  `position` < '$_GET[id]'";
	 	$resultmax = mysql_query($sqlmax);
	 	$rowmax = mysql_fetch_array($resultmax);
	 	$sql1 = "UPDATE  `daohang`.`website` SET  `position` = '$_GET[id]' WHERE  `website`.`position` = '$rowmax[0]';";
	 	$sql2 = "UPDATE  `daohang`.`website` SET  `position` = '$rowmax[0]' WHERE  `website`.`id` = '$row[id]';";
	 }
	else if ($_GET['sort']=="down") {

		$sqlmin = "SELECT min(position) FROM  `website` WHERE  `uid` LIKE  'common' AND  `position` > '$_GET[id]'";
	 	$resultmin = mysql_query($sqlmin);
	 	$rowmin = mysql_fetch_array($resultmin);
	 	$sql1 = "UPDATE  `daohang`.`website` SET  `position` = '$_GET[id]' WHERE  `website`.`position` = '$rowmin[0]';";
	 	$sql2 = "UPDATE  `daohang`.`website` SET  `position` = '$rowmin[0]' WHERE  `website`.`id` = '$row[id]';";

	}

	mysql_query($sql1);
	mysql_query($sql2);

	$url = "public.php";
	echo "<script language='javascript' type='text/javascript'>
		window.location.href='$url';
		</script>";	
?>