<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>КонсультантПлюс-Новости(декабрь)</title>
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
<div class="h2"><h1><a href="http://www.consultant.ru/about/presscenter/news/">Новости компании >>></a></h1>
<br />
<ul><li><p style="font-size: 20px;"><b>2012</b></p></li><br />
   <li><p style="font-size: 20px;"><b>Декабрь</b></p></li><br />
      <ul><div class="data">29.12.2012</div><b>• Вышел в свет Бюллетень КонсультантПлюс N 1 (208).</b><br />
В номере:<br />
- Новое практическое пособие по бюджетной отчетности бюджетополучателей<br />
- Изменения в российском законодательстве с 1 января 2013 года<br />
- Перспективы российской статистики в условиях вступления России в ВТО и ОЭСР<br />
</ul><br />
      <ul><div class="data">24.12.2012</div><b>• VIII Всероссийский съезд судей.</b><br />
С 17 по 19 декабря 2012 года в Москве в Колонном зале Дома союзов прошел VIII Всероссийский съезд судей. В его работе приняли участие более 700 делегатов. Среди них - представители высших российских судов, федеральных судов общей юрисдикции, арбитражных и военных судов, мировые судьи.<br />
</ul><br />
      <ul><div class="data">10.12.2012</div><b>• Высшая юридическая премия "Юрист года - 2012" нашла своих лауреатов.</b><br />
Церемония вручения Высшей юридической премии "Юрист года" приурочена к профессиональному празднику - Дню юриста. 3 декабря 2012 г. она прошла в четвертый раз. Премия учреждена Указом Президента России и присуждается ежегодно Общероссийской общественной организацией "Ассоциация юристов России" (АЮР). Компания "КонсультантПлюс" - постоянный генеральный партнер премии.<br />
</ul><br />
      <ul><div class="data">07.12.2012</div><b>• Вышел в свет Бюллетень КонсультантПлюс N 12 (207).</b><br />
В номере:<br />
- "Путеводитель по трудовым спорам"<br />
- Что ждет налогоплательщиков в 2013 году?<br />
- VIII межвузовская олимпиада КонсультантПлюс – секреты победителей<br />
</ul><br />
      <ul><div class="data">12.2012</div><b>• Интервью cо статс-секретарем - заместителем руководителя Федеральной службы государственной статистики РФ А.Л. Кевешем.</b><br />
На сайте опубликован отчет об интернет-интервью cо статс-секретарем - заместителем руководителя Федеральной службы государственной статистики РФ А.Л. Кевешем. Тема интервью: "Перспективы российской статистики в условиях вступления России в ВТО и ОЭСР".<br />
</ul><br />
      <ul><div class="data">04.12.2012</div><b>• Новинка для юристов - "Путеводитель по трудовым спорам".</b><br />
Новый информационный банк "Путеводитель по трудовым спорам" поможет в изучении судебной практики по спорным ситуациям между работниками и работодателями, в профилактике таких конфликтов, при подготовке к судебным заседаниям.<br />
</ul><br /></div></div></body></html>