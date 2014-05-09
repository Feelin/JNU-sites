<?php
	include_once("config.php");
	
	if(!$_GET['webcolor']){
		$color="blue";
	}
	else{
		$color=$_GET['webcolor'];
	}
	$str = substr($_GET['weburl'],0,7);
	echo $str;
	if($str!="http://"){
		$_GET['weburl'] = "http://".$_GET['weburl'];
	}
	if($_GET['do']=="add"){
		$sql = "INSERT INTO  `daohang`.`website` (
		`id` ,`uid` ,`webname` ,`weburl` ,`position` ,`color`)
		VALUES (NULL ,  '$_GET[uid]',  '$_GET[webname]', '$_GET[weburl]', '$_GET[position]','$color');";
	
	}
	else if($_GET['do']=="update"){
		$sql = "UPDATE  `daohang`.`website` SET  `webname` =  '$_GET[webname]',
		`weburl` =  '$_GET[weburl]',
		`color` =  '$color' WHERE `position` =$_GET[position] AND `uid` = '$_GET[uid]';";
	}
	mysql_query($sql);
	mysql_close($link);	
	if($_GET['admin']=="fuckjs"){
		$url = "../admin/public.php";
		echo "<script language='javascript' type='text/javascript'>
			window.location.href='$url';
		</script>";	   
	}
	else{
		$url = "../";
		echo "<script language='javascript' type='text/javascript'>
			window.location.href='$url';
		</script>";	 
	}
	    
?>