<?php
include_once("config.php");
	$uid = $_GET['uid'];
	$name = $_GET['typename'];
	$usersql = "SELECT * FROM  `user` WHERE  `uid` LIKE  '$uid'";
    $result = mysql_query($usersql);
    $row = mysql_fetch_array($result);
	$major = explode("/",$row['major']);
	$hobby = explode("/",$row['hobby']);
	$data = array();
	if($name=="major"){
		$thisone = $major;
	}
	else if($name=="hobby"){
		$thisone = $hobby;
	}
	$sql="SELECT * FROM  `checktype` WHERE  `type` LIKE  '$name'";
	$result = mysql_query($sql);
    $len = count($thisone);
	$j=0;
    while( $row = mysql_fetch_array($result) ){
		$data[$j]['checkname'] = $row['name'];
		for($i=0;$i<$len;$i++){
			if($row['name']==$thisone[$i]){
				$data[$j]['ifchecked'] = 'checked';
			}
		}
		$j++;
	}


	$data = json_encode($data);
	echo $data;
	mysql_close($link);		      
?>