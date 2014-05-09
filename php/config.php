<?php
	$link = mysql_connect("localhost","root","sna2008")or die('Could not connect: '.mysql_error());
	mysql_select_db("daohang");
	mysql_query("SET NAMES 'utf8'");
?>