<?php
	include_once("../php/config.php");
	$sql = "DELETE FROM `daohang`.`$_GET[type]` WHERE `num`= '$_GET[num]';";
	mysql_query($sql);
	mysql_close($link);	
 
?>