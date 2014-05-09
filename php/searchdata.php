<?php
	$link = mysql_connect("localhost","root","sna2008")or die('Could not connect: '.mysql_error());
	mysql_select_db("searchdata");
	mysql_query("SET NAMES 'utf8'");
	$time = date('Y-m-d H:i:s',time()+8*3600);
	$sql="INSERT INTO  `searchdata`.`data` (`id` ,`uid` ,`content` ,`searchby` ,`time`)
VALUES (NULL ,  '$_GET[uid]',  '$_GET[content]',  '$_GET[searchby]',  '$time');";
	mysql_query($sql);
?>