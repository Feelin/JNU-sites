<?php

  header("Content-Type: text/html;charset=utf-8");
  include_once("config.php");

  $uid = $_GET["jnufmid"];;

  $sql = "SELECT city FROM user WHERE uid = '$uid'";
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result);
  $city = $row['city'];
  
  $url['gz'] = "http://m.weather.com.cn/data/101280101.html";
  $url['sz'] = "http://m.weather.com.cn/data/101280601.html";
  $url['zh'] = "http://m.weather.com.cn/data/101280701.html";

  switch ($city) {
    case 'gz':
      
      $data=file_get_contents($url['gz']); 
      break;

    case 'sz':
      
      $data=file_get_contents($url['sz']); 
      break;

    case 'zh':
      
      $data=file_get_contents($url['zh']); 
      break;
    default:
      break;
  }
   
  $data = json_decode($data,true); 
  
  
  $weather["city"] = $data["weatherinfo"]["city"];  
  $weather["date"] = $data["weatherinfo"]["date_y"];  
  $weather["week"] = $data["weatherinfo"]["week"]; 
  $weather["temp1"] = $data["weatherinfo"]["temp1"]; 
  $weather["temp2"] = $data["weatherinfo"]["temp2"]; 
  $weather["weather1"] = $data["weatherinfo"]["weather1"]; 
  $weather["weather2"] = $data["weatherinfo"]["weather2"]; 
  $weather["img1"] = 'd'.$data["weatherinfo"]["img1"].'.png'; 
  $weather["img2"] = 'd'.$data["weatherinfo"]["img2"].'.png'; 
  $weather["img3"] = 'd'.$data["weatherinfo"]["img3"].'.png'; 
  $weather["img4"] = 'd'.$data["weatherinfo"]["img4"].'.png'; 


  $weather = json_encode($weather);
  echo $weather;
  

  mysql_close($link); 
?> 