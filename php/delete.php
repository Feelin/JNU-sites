<?php
	include_once("config.php");
	$sql = "DELETE FROM `daohang`.`website` WHERE `uid` = '$_GET[uid]' AND `position`= '$_GET[position]';";
	mysql_query($sql);
	mysql_close($link);	
 
?>