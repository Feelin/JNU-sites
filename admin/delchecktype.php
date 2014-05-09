<?php
	include_once("../php/config.php");
	$sql = "DELETE FROM `daohang`.`checktype` WHERE `id`= '$_GET[id]';";
	mysql_query($sql);
	mysql_close($link);	
	
	    
?>