<?php

  header("Content-Type: text/html;charset=utf-8");
  $w = $_GET["w"];
  $w = urlencode($w);
  $type = $_GET["type"];
  //echo $w; 
  if($type == "baidu")
  {
	  $url = 'http://suggestion.baidu.com/su?wd='.$w.'&p=3&cb=window.bdsug.sug';
	  $data = file_get_contents($url);
	  $data = substr($data,17);
	  
	  $data = explode("[", $data);
	  $data = explode("]", $data[1]);
	  $data = str_replace("\"", "", $data[0]);
	  $data = iconv("gb2312", "utf-8", $data);
	  //$data = explode(",", $data[0]);
	  echo $data;
	  
  	//var_dump($data);
  }
  else if ($type == "google") {
  	$aurl = 'www.google.com/s?hl=zh-cn&sugexp=llsin&q='.$w;
  	$data = file_get_contents($aurl);
  	echo $data;
  }
	


 ?>