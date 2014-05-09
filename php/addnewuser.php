<?php
	include_once("config.php");

	$uid = $_GET['newid'];
	$city = $_GET['city'];
	$time = date('Y-m-d H:i:s',time()+8*3600);

	$findusersql = "SELECT * FROM `user` WHERE `uid` LIKE '$uid'";
	$result = mysql_query($findusersql);
	$num = mysql_num_rows($result);
	if($num>0){
		$resetsql = "UPDATE `daohang`.`user` SET `city` = '$city' WHERE `user`.`uid` ='$uid';";
		mysql_query($resetsql);
	}
	else{

		$addsql = "INSERT INTO  `daohang`.`user` (`id` ,`uid` ,`creattime` ,`major` ,`hobby` ,
		`city`	)	VALUES (NULL ,  '$uid',  '$time', NULL , NULL ,  '$city'	);";
	    mysql_query($addsql);  
	    $findsql = "SELECT * FROM website WHERE uid='common' ORDER BY position";
	    $result = mysql_query($findsql);
	    while($row = mysql_fetch_array($result))
		{	  	
			$sql = "INSERT INTO  `daohang`.`website` (
			`id` ,`uid` ,`webname` ,`weburl` ,`position` ,`color`)
			VALUES (NULL ,  '$uid',  '$row[webname]', '$row[weburl]', '$row[position]','$row[color]');";
			mysql_query($sql);
		}

	}
	mysql_close($link);		     
?>