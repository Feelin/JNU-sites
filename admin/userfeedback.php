<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	<meta name="KEYWords" content=" "/>
	<meta name='description' content=' '/>
	<meta name="author" content="JnuFM studio"/> 
	<meta name="viewport"  content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
	<meta name="Robots" contect="all">
	<meta name="revisit-after" content="1 days"> 
	<title>暨大导航</title>
    <link rel="shortcut icon" href="../img/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/common.css" />

    <script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
</head>
<body>
	<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <a class="brand" href="">暨大导航</a>
    <ul class="nav">
      <li><a href="public.php">通用模版</a></li>
      <li><a href="major.php">学习考试</a></li>
      <li><a href="hobby.php">爱好兴趣</a></li>
      <li><a href="tool.php">工具娱乐</a></li>
      <li><a href="checktype.php">新增类别</a></li>
      <li  class="active"><a href="userfeedback.php">用户反馈</a></li>
      <li><a href="searchdata.php">搜索数据</a></li>
     </ul>     
     <a class="label btn-inverse pull-right" id="loginbtn"  href="index.php">登陆</a>
  </div>
</div>
<?php
	session_start();
	if($_SESSION['JnuFM']!='fuckingphp'){
	$url = "index.php";
			echo "<script language='javascript' type='text/javascript'>
			window.location.href='$url';
			</script>";	
	}
  
	include_once("../php/config.php");
	
	$sql ="SELECT * FROM  `feedback` ORDER BY time;";	
	$result = mysql_query($sql);	
?>
<div class="content">
	

	 <table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th>用户反馈信息</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>用户ID</td>
      <td>反馈内容</td>
      <td>发送时间</td>
     
    </tr>
  <?php
  	 while($row = mysql_fetch_array($result)){
	 	echo "<tr><td>".$row['uid']."</td><td>".$row['content']."</td><td>".$row['time']."</td></tr>";
	 }
  ?>
  

  </tbody>
</table>





</div>

</body>
</html>