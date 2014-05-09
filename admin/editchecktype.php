<?php
	include_once("../php/config.php");

	
	if($_GET['do']=='add'){
	$sql="INSERT INTO  `daohang`.`checktype` (`id` ,`type` ,`name`)VALUES (NULL ,  '$_GET[checktype]',  '$_GET[name]');";

	}
	else if($_GET['do']=='update'){
		$sql="UPDATE  `daohang`.`checktype` SET  `name` =  '$_GET[name]' WHERE  `checktype`.`id` = $_GET[id];";
	}


	mysql_query($sql);
	mysql_close($link);	
	$url = $_GET['type'].".php";
	echo "<script language='javascript' type='text/javascript'>
				window.location.href='$url';
			</script>";	
	
	
	    
?>