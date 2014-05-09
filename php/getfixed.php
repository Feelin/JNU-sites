<?php

	include_once("config.php");
	$uid = $_GET['jnufmid'];
	$usersql = "SELECT * FROM  `user` WHERE  `uid` LIKE  '$_GET[jnufmid]'";
    $result = mysql_query($usersql);
    $row = mysql_fetch_array($result);
	$major = explode("/",$row['major']);
	$hobby = explode("/",$row['hobby']);
	$data = array('major'=>array(),'hobby'=>array(),'tool'=>array());
	$len = count($major);
	$j=0;
	for($i=0;$i<$len;$i++){
		$sql = "SELECT * FROM  `major` WHERE  `kind` LIKE  '$major[$i]' ORDER BY num;";
		$query = mysql_query($sql);
		
		while( $row = mysql_fetch_array($query) ){
			$data['major'][$j]['webname'] = $row['webname'];
			$data['major'][$j]['weburl'] = $row['weburl'];
			$j++;
		}
	}
	$j=0;
	$len = count($hobby);
	for($i=0;$i<$len;$i++){
		$sql = "SELECT * FROM  `hobby` WHERE  `kind` LIKE  '$hobby[$i]' ORDER BY num;";
		$query = mysql_query($sql);
		
		while( $row = mysql_fetch_array($query) ){
			$data['hobby'][$j]['webname'] = $row['webname'];
			$data['hobby'][$j]['weburl'] = $row['weburl'];
			$j++;
		}
	}

	$j=0;
	$sql = "SELECT * FROM  `tool` ";
	$query = mysql_query($sql);
	while( $row = mysql_fetch_array($query) ){
			$data['tool'][$j]['webname'] = $row['webname'];
			$data['tool'][$j]['weburl'] = $row['weburl'];
			$j++;
	}

	$data = json_encode($data);

	echo $data;
	mysql_close($link);		     
?>