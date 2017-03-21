<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>Такском-Новости(март)</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon/>
  <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html"; charset="utf-8">
  <META NAME="Description" CONTENT="Система электронной отчётности "Такском"">
  <META NAME="Keywords" CONTENT="Такском, сервис, новости">
  <link rel="stylesheet" type="text/css" href="style.css" media="screen">
  <style type="text/css">
 @font-face {
    font-family: "conyregular";
	 src: url(/conyregular.eot);
     src: local("conyregular"),
          url(/conyregular.ttf)
}
 @font-face {
    font-family: "furore";
     src: url(/furore.eot);
     src: local("furore"),
          url(/furore.ttf)
}
body {
  background-image: url("/images/background_image.png")
}
  
  
  .example2 {
    display:inline-block;  
    position:fixed;
 
}
.example2 span {
    display:inline-block;
    position:absolute;
    top:30px;  
    left:0px;

}
  
  
  </style></head><body>
  
Сегодня  - <span id="date" style="color:blue;">Дата</span>&nbsp;&nbsp;&nbsp;
Текущее время - <span id="time" style="color:green;">Время</span>
  
  
<script type="text/javascript">
function clock() {
var d = new Date();
var day = d.getDate();
var hours = d.getHours();
var minutes = d.getMinutes();
var seconds = d.getSeconds();

month=new Array("января", "февраля", "марта", "апреля", "мая", "июня",
"июля", "августа", "сентября", "октября", "ноября", "декабря");
days=new Array("Воскресенье", "Понедельник", "Вторник", "Среда",
"Четверг", "Пятница", "Суббота");

if (day <= 9) day = "0" + day;
if (hours <= 9) hours = "0" + hours;
if (minutes <= 9) minutes = "0" + minutes;
if (seconds <= 9) seconds = "0" + seconds;

date_date = day + " " + month[d.getMonth()] + " " + d.getFullYear() + " г. (" +
days[d.getDay()] + ")";
date_time = hours + ":" + minutes + ":" + seconds;

if (document.layers) {
 document.layers.date.document.write(date_time);
 document.layers.date.document.close();
 document.layers.time.document.write(date_time);
 document.layers.time.document.close();
}
else {
 document.getElementById("date").innerHTML = date_date;
 document.getElementById("time").innerHTML = date_time;
}
 setTimeout("clock()", 1000);
}
clock();
</script>
    <div class="pogoda">
    Сегодня:
<?php

    $pogoda = file_get_contents('http://export.yandex.ru/weather/?city=22820');
    preg_match('/<weather_type>(.*?)<\/weather_type>/i',$pogoda,$type);
    preg_match('/<dampness>(.*?)<\/dampness>/i',$pogoda,$vlaga);
    preg_match('/<temperature>(.*?)<\/temperature>/i',$pogoda,$temp);
    preg_match('/<image>(.*?)<\/image>/i',$pogoda,$img);
    preg_match('/<pressure>(.*?)<\/pressure>/i',$pogoda,$press);
     
    $vivod = "Температура: <img src='/images/term.png' height='20' width='20'/>$temp[1]°C  Влажность: <img src='/images/drp.png' height='20' width='20'/>$vlaga[1] %  Давление: <img src='/images/man.png' height='20' width='20'/>$press[1] мм рт.ст. , $type[1] ";
     
    echo $vivod;
     
?>
    </div>
     
 
<div class="example2">
    <img src="/images/sticker_yelow.png" class="example_beauty">
    <span>Текст</span>
</div>

  <li><img src="/images/sticker_yelow.png" height="40" width="200"></li>
  <li><img src="/images/sticker_yelow.png" height="40" width="200"></li>
  <li><img src="/images/sticker_yelow.png" height="40" width="200"></li>
  <li><img src="/images/sticker_yelow.png" height="40" width="200"></li>
  <li><br /></li>
  <li><img src="/images/sticker_red.png" height="40" width="200"></li></ul>
<span><ul>

 
</body></html>