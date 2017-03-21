<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>КонсультантПлюс-Новости(март)</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon/>
  <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html"; charset="utf-8">
  <META NAME="Description" CONTENT="Компьютерная справочно-правовая система КонсультантПлюс">
  <META NAME="Keywords" CONTENT="КонсультантПлюс, сервис, новости">
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
  </style></head><body>
<div class="content"> <a href="/consultant">
  <div id="top"><br />
</div></a>
<div class="wnews">
Сегодня  - <span id="date" style="color:blue;">Дата</span>&nbsp;&nbsp;&nbsp;<br>
Текущее время - <span id="time" style="color:blue;">Время</span><br>
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
<?php
    $pogoda = file_get_contents('http://export.yandex.ru/weather/?city=22820');
    preg_match('/<weather_type>(.*?)<\/weather_type>/i',$pogoda,$type);
    preg_match('/<dampness>(.*?)<\/dampness>/i',$pogoda,$vlaga);
    preg_match('/<temperature>(.*?)<\/temperature>/i',$pogoda,$temp);
    preg_match('/<image>(.*?)<\/image>/i',$pogoda,$img);
    preg_match('/<pressure>(.*?)<\/pressure>/i',$pogoda,$press);
    $vivodt = "<img src='/images/term.png' height='20' width='20'/>$temp[1] °C";
    $vivodv = "<img src='/images/drp.png' height='20' width='20'/>$vlaga[1] % , $type[1] ";
    $vivodd = "<img src='/images/man.png' height='20' width='20'/>$press[1] мм рт.ст.";
    echo $vivodt."<br>";
    echo $vivodv."<br>";
    echo $vivodd."<br>";
?>
</div>
  <div id="breadcrumbs" />
  <div id="main">
    <div style="width: 800px;" id="left">
<div id="news" style="background: #D9C4E7">
<div class="h2"><a href="http://www.consultant.ru/about/presscenter/news/" style="color:#FF9900"><h1>Новости компании >>></a></h1>
<br />
<ul><li><p style="font-size: 20px;"><b>2013</b></p></li><br />
   <li><p style="font-size: 20px;"><b>Март</b></p></li><br />
      <ul><div class="data">21.03.2013</div><b>• Больше документов - в приложении "КонсультантПлюс: основные документы".</b><br />
В новой версии приложения "КонсультантПлюс: основные документы" для iPhone/iPad, устройств на Android и Windows Phone значительно расширена база доступных документов.<br />
</ul><br />
      <ul><div class="data">03.2013</div><b>• Интервью c генеральным директором Судебного департамента при Верховном Суде Российской Федерации А.В. Гусевым.</b><br />
На сайте опубликован отчет об интернет-интервью c генеральным директором Судебного департамента при Верховном Суде Российской Федерации А.В. Гусевым. Тема интервью: "15 лет Судебному департаменту при Верховном Суде РФ: о направлениях деятельности и планах на 2013 - 2020 гг.".<br />
</ul><br />
      <ul><div class="data">13.03.2013</div><b>• Более 170 учебников - в мобильном приложении "КонсультантПлюс: Студент".</b><br />
Мобильное приложение "КонсультантПлюс: Студент" пополнено новыми книгами. Это учебники, учебные, учебно-практические и научно-практические пособия, курсы лекций, а также постатейные комментарии к ряду кодексов. В общей сложности после обновления библиотека студента включает более 170 современных учебников и пособий по правовым и финансовым дисциплинам.<br />
</ul><br />
      <ul><div class="data">04.03.2013</div><b>• Вышел в свет Бюллетень КонсультантПлюс N 3 (210).</b><br />
В номере:<br />
- Годовой отчет с КонсультантПлюс – материалы для подготовки отчетности<br />
- Более 20 миллионов документов – объем информации в КонсультантПлюс растет<br />
- КонсультантПлюс на выставке "Бухгалтерский учет и аудит - 2013"<br />
</ul><br />
</div></div></body></html>