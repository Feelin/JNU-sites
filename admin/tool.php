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
      <li class="active"><a href="tool.php">工具娱乐</a></li>
       <li><a href="checktype.php">新增类别</a></li>
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
	
	$sql ="SELECT * FROM  `tool` ORDER BY num;";	
	$result = mysql_query($sql);	
?>
<div class="content">
	

	 <table class="table table-hover table-bordered table-striped">
  <thead>
    <tr>
      <th>工具娱乐模块网站</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>网站名称</td>
      <td>网址</td>
      <td>排序向上</td>
      <td>排序向下</td>
      <td>编辑</td>
      <td>删除</td>
     
    </tr>
  <?php
  	 while($row = mysql_fetch_array($result)){
	 	echo "<tr>
    <td>".$row['webname']."</td>
    <td>".$row['weburl']."</td>
    <td><a class='up' href='../admin/sortFix.php?type=tool&sort=up&id=".$row["num"]."'><i class='icon-circle-arrow-up'></i></a></td>
    <td><a class='down' href='../admin/sortFix.php?type=tool&sort=down&id=".$row["num"]."'><i class='icon-circle-arrow-down'></i></a></td>
    <td><a class='edita' id='".$row['num']."' href='#edit'>修改</a></td>
    <td><a class='del' href='javascript:;' id='".$row['num']."'><i class='icon-remove-sign'></i></a></td>
    </tr>";
	 }
  ?>
  <tr>
    <td>

<button class="btn btn-info" type="submit">
  添加
</button>
  </td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
  </tbody>
</table>



<div class="edit">
  <a name="edit"></a>
<form class="form-inline" action="edit.php" method="get">
  
      <div class="input-prepend">
        <span class="add-on">网站名称</span>
        <input name="webname" class="span2" id="prependedInput" type="text" placeholder="输入网站的名称">
      </div>
      <br/>
      <div class="input-prepend">
        <span class="add-on">网址</span>
        <input name="weburl" class="span3" id="prependedInput" type="text" placeholder="输入网址">
      </div>
      <br/>
      <div class="input-prepend">
        <span class="add-on">类别</span>
        <input name="kind" class="span2" id="prependedInput" type="text" placeholder="所属类别">
      </div>
      <br/>
      <input name="do" id="do" type="hidden" value="add"/>
      <input name="num" id="num" type="hidden" value=""/>
      <input name="type" id="do" type="hidden" value="tool"/>
       &nbsp;&nbsp;&nbsp;<input type="submit" id="submitbtn" value="添加" name="sumbit" class="btn btn-success " />
     </form>


</div>	

</div>
<script type="text/javascript">
$(function(){
  $("a.edita").click(function(){

  
    $("input").eq(0).val($(this).parent("td").parent("tr").children("td").eq(0).text());
    $("input").eq(1).val($(this).parent("td").parent("tr").children("td").eq(1).text());
    $("input").eq(2).val($(this).parent("td").parent("tr").children("td").eq(2).text());
    $("#"+$(this).parent("td").parent("tr").children("td").eq(2).text()).attr("checked","checked");
    $("#submitbtn").attr("value","修改");
    $("#num").attr("value",$(this).attr("id"));
    $("#do").attr("value","update");
    $(".edit").css("display","block");

  });

  $(".up:first").remove();
  $(".down:last").remove();

  $(".btn-info").click(function(){
    $("input").eq(0).val("");
    $("input").eq(1).val("");
    $("#blue").attr("checked","checked");
    $("#submitbtn").attr("value","添加");
    $(".edit").css("display","block");
    $("#do").attr("value","add");
    num = $(".edita:last").attr("id");
    num++;
    $("#num").attr("value",num);
  });

  $('.del').click(function(){

    $.get("delete.php",{
      type:"tool",
      num:$(this).attr("id")
    });
    $(this).parent("td").parent("tr").remove();
  });

});
</script>
</body>
</html>