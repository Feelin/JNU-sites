<?php
	session_start();
	include_once("../php/config.php");
	
	$sql ="SELECT * FROM  `admin` WHERE  `id` =1";	
	$result = mysql_query($sql);
	 while($row = mysql_fetch_array($result)){
	 	if($row['name']==$_POST['name'] && $row['password']==$_POST['password']){
	 		$_SESSION['JnuFM'] = 'fuckingphp';
	 		$url = "public.php";
			echo "<script language='javascript' type='text/javascript'>
			window.location.href='$url';
			</script>";	
	 	}
	 	else{
	 	$url = "index.php";
		echo "<script language='javascript' type='text/javascript'>
			window.location.href='$url';
			</script>";	
	 	}
	 }
	 
?>