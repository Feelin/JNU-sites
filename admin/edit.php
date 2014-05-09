<?php
	include_once("../php/config.php");

	
	if($_GET['do']=='add'){
		$sql="INSERT INTO  `daohang`.`$_GET[type]` (`id` ,`num` ,`webname` ,`weburl`,`kind`)
		VALUES (NULL ,  '$_GET[num]',  '$_GET[webname]',  '$_GET[weburl]','$_GET[kind]');";


	}
	else if($_GET['do']=='update'){
		$sql="UPDATE  `daohang`.`$_GET[type]` SET  `webname` =  '$_GET[webname]',
		`weburl` =  '$_GET[weburl]',
		`kind` =  '$_GET[kind]' WHERE  `num` =$_GET[num];";
	}

	$url = $_GET['type'].".php";
	echo "<script language='javascript' type='text/javascript'>
				window.location.href='$url';
			</script>";	
	mysql_query($sql);
	mysql_close($link);	
	
	    
?>