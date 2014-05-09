<?php
	include_once("config.php");
	$time = date('Y-m-d H:i:s',time()+8*3600);
	$sql = "INSERT INTO  `daohang`.`feedback` (`id` ,`uid` ,`content` ,`time`)
		VALUES (NULL ,  '$_GET[uid]',  '$_GET[content]',  '$time');";
	mysql_query($sql);
	mysql_close($link);	

?>