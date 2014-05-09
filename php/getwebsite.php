<?php

	include_once("config.php");

	$uid = $_GET['jnufmid'];
	$i = 0;
	$sql = "SELECT * FROM website WHERE uid='$uid' ORDER BY position";
    $result = mysql_query($sql);
      while($row = mysql_fetch_array($result))
	  {
	  	

		  $data[$i]['webname'] = $row['webname'];
		  $data[$i]['weburl'] = $row['weburl'];
		  $data[$i]['color'] = $row['color'];
		  $data[$i]['position'] = $row['position'];

		  $i++;
	  }

	  $data = json_encode($data);

	echo $data;
	mysql_close($link);		     
?>