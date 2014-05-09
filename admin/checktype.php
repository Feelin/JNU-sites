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
      <li  class="active"><a href="checktype.php">新增类别</a></li>
      <li><a href="userfeedback.php">用户反馈</a></li>
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
	
	$majorsql ="SELECT * FROM  `checktype` WHERE  `type` LIKE  'major'";	
	$majorresult = mysql_query($majorsql);	
?>
<div class="content">
	
<div id="overflow"> 
	 <table class="table table-hover table-bordered table-striped" style="width:400px;float:left">
  <thead>
    <tr>
      <th>学习考试模块网站类型</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>名称</td>
      <td>编辑</td>
      <td>删除</td>
     
    </tr>
  <?php
    while($row = mysql_fetch_array($majorresult)){
    echo "<tr><td>".$row['name']."</td><td><a class='edita' id='".$row['id']."' href='#edit'>修改</a></td><td><a class='del' href='javascript:;' id='".$row['id']."'><i class='icon-remove-sign'></i></a></td></tr>";
   }
  ?>
  <tr>
    <td>

<button class="btn btn-info" id="major" type="submit">
  添加
</button>
  </td>
  <td></td>
  <td></td>
</tr>
  </tbody>
</table>
<?php
$hobbysql ="SELECT * FROM  `checktype` WHERE  `type` LIKE  'hobby'"; 
$hobbyresult = mysql_query($hobbysql);  
?>
 <table class="table table-hover table-bordered table-striped" style="width:400px;float:right;">
  <thead>
    <tr>
      <th>爱好兴趣模块网站类型</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>名称</td>
      <td>编辑</td>
      <td>删除</td>
     
    </tr>
  <?php
    while($row = mysql_fetch_array($hobbyresult)){
    echo "<tr><td>".$row['name']."</td><td><a class='edita' id='".$row['id']."' href='#edit'>修改</a></td><td><a class='del' href='javascript:;' id='".$row['id']."'><i class='icon-remove-sign'></i></a></td></tr>";
   }
  ?>
  <tr>
    <td>

<button class="btn btn-info" id="hobby" type="submit">
  添加
</button>
  </td>
  <td></td>
  <td></td>
</tr>
  </tbody>
</table>

</div>

<div class="edit">
  <a name="edit"></a>
  <form class="form-inline" action="editchecktype.php" method="get"> 
    <div class="input-prepend">
      <span class="add-on">名称</span>
      <input name="name" class="span2" id="prependedInput" type="text" placeholder="输入网站类型的名称">
    </div>
        <br/>    
    <input name="type" type="hidden" value="checktype"/>
    <input name="id" id="num" type="hidden" value=""/>
    <input name="checktype" id="checktype" type="hidden" value=""/>
    <input name="do" id="do" type="hidden" value="add"/>
     &nbsp;&nbsp;&nbsp;<input type="submit" id="submitbtn" value="添加" name="sumbit" class="btn btn-success " />
     
  </form>

</div>  


</div>
<script type="text/javascript">
$(function(){
  $("a.edita").click(function(){

  
    $("input").eq(0).val($(this).parent("td").parent("tr").children("td").eq(0).text());
    $("#submitbtn").attr("value","修改");
    $("#num").attr("value",$(this).attr("id"));
    $("#do").attr("value","update");
    $(".edit").css("display","block");

  });

  $(".btn-info").click(function(){
    $("input").eq(0).val("");
    $("#submitbtn").attr("value","添加");
    $(".edit").css("display","block");
    $("#do").attr("value","add");
    $("#checktype").val($(this).attr("id"));

  });

  $('.del').click(function(){
    $.get("delchecktype.php",{
      id:$(this).attr("id")
    });
    $(this).parent("td").parent("tr").remove();
  });

});
</script>
</body>
</html>