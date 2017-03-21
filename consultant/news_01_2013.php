<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>КонсультантПлюс-Новости(январь)</title>
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
   <li><p style="font-size: 20px;"><b>Январь</b></p></li><br />
      <ul><div class="data">25.01.2013</div><b>• КонсультантПлюс на выставке "Бухгалтерский учет и аудит - 2013".</b><br />
В ходе XX юбилейной выставки "Бухгалтерский учет и аудит - 2013" компания "КонсультантПлюс" представила новинки в Путеводителях для бухгалтера - "Практическое пособие по годовой бухгалтерской отчетности - 2012", практическое пособие по бюджетной отчетности, а также практические пособия по уплате, зачету, возврату налогов и взысканию недоимки.<br />
<br />
      <ul><div class="data">15.01.2013</div><b>• Новое практическое пособие в КонсультантПлюс поможет без проблем подготовить бухгалтерскую отчетность.</b><br />
В "Путеводитель по налогам" системы КонсультантПлюс включено новое "Практическое пособие по годовой бухгалтерской отчетности - 2012". Оно поможет не пропустить ни одного изменения в нормативном регулировании бухгалтерского учета и без ошибок подготовить бухгалтерскую отчетность.<br />
<br />
      <ul><div class="data">14.01.2013</div><b>• Обновлены приложения для iPhone и iPad.</b><br />
Вышли новые версии приложений "КонсультантПлюс: основные документы" и "КонсультантПлюс: Студент" для iOS.<br />
<br />
      <ul><div class="data">14.01.2013</div><b>• Компания "КонсультантПлюс" приглашает на XX юбилейную выставку "Бухгалтерский учет и аудит - 2013". Выставка пройдёт в Москве, на ВВЦ с 22 по 26 января в павильоне 69. Стенд КонсультантПлюс - D2.</b><br />
На выставке вы узнаете о новшествах для бухгалтера в системе, сможете посетить семинары по бухучету и налогообложению. "КонсультантПлюс" представит Путеводители для бухгалтера и новые поступления в них, а также актуальные консультации в форме "вопрос-ответ", схемы корреспонденций счетов, материалы прессы и другую полезную информацию для работы бухгалтера.<br />
Также на стенде "КонсультантПлюс" можно оформить льготную подписку на журнал "Главная книга".<br />
</ul><br />
</div></div></body></html>