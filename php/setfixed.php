<?php

	include_once("config.php");

	$uid = $_POST['jnufmid'];
	$set = $_POST['fixedtype'];	
	$checkwhich = $_POST['checkwhich'];
	$str = "";
	for($i=0;$i<sizeof($checkwhich);$i++){
		$str .= $checkwhich[$i];
	} 
	$sql = "UPDATE  `daohang`.`user` SET  `$_POST[fixedtype]` = '$str' WHERE  `user`.`uid` =$_POST[jnufmid];";
    mysql_query($sql);
	mysql_close($link);		

	$url = "../";
	echo "<script language='javascript' type='text/javascript'>
		window.location.href='$url';
	</script>";	     
?>