<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>КонсультантПлюс-Новости(ноябрь)</title>
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
<p><span class="capital">20</span><b>лет КонсультантПлюс!</b></p>
<p>Сеть КонсультантПлюс отмечает 20-летие со дня создания!</p>
<p>Нас поздравляют руководители органов государственной власти, партнеры и клиенты. Безусловно, наиболее значимым является <a href="http://www.consultant.ru/about/presscenter/news/measure/">поздравление Президента страны.</a></p>
<br />
<ul><li><p style="font-size: 20px;"><b>2012</b></p></li><br />
   <li><p style="font-size: 20px;"><b>Ноябрь</b></p></li><br />
      <ul><div class="data">11.2012</div></ul></ul><b> • Интервью c первым заместителем Председателя Верховного Суда РФ - председателем Судебной коллегии по административным делам П.П. Серковым.</b><br />
На сайте опубликован отчет об интернет-интервью c первым заместителем Председателя Верховного Суда РФ - председателем Судебной коллегии по административным делам П.П. Серковым. Тема интервью: "Тенденции развития и современное состояние административного процесса в Российской Федерации".<br />
<br />
   <ul><div class="data">14.11.2012</div></ul></ul><b> • Во Владимире состоялась торжественная церемония вручения премии М.М. Сперанского.</b><br />
Всероссийская правовая премия имени М.М. Сперанского учреждена в 2011
г. и является формой признания заслуг в развитии законодательства
Российской Федерации и символом исторической связи поколений юристов
России. Компания "КонсультантПлюс" выступила официальным партнером
церемонии.<br />
<br />
      <ul><div class="data">07.11.2012</div></ul><b> • Выпущено мобильное приложение "КонсультантПлюс: Студент".</b><br />Новое
мобильное приложение "КонсультантПлюс: Студент" создано в рамках
некоммерческого проекта "КонсультантПлюс: Высшая школа" и адресовано
студентам, аспирантам и преподавателям юридических и
финансово-экономических дисциплин.<br />
<br />
      <ul><div class="data">11.2012</div></ul><b> • Вышел в свет Бюллетень КонсультантПлюс N 11 (206).</b><br />
В номере:<br />
- Новое практическое пособие по зачету и возврату налогов<br />
- Новое приложение "КонсультантПлюс" для версии ОС Windows 8 на платформе ARM - уже доступно!<br />
- Бухгалтеру, юристу, кадровику. Новое в Путеводителях КонсультантПлюс<br />
<br />
      <ul><div class="data">11.2012</div><b> • Интервью c президентом Национальной организации медиаторов Ц.А. Шамликашвили.</b><br />
На сайте опубликован отчет об интернет-интервью c президентом
Национальной организации медиаторов (НОМ), основателем и научным
руководителем Научно-методического центра медиации и права,
председателем подкомиссии по АРС и медиации Ассоциации юристов России
Ц.А. Шамликашвили. Тема интервью: "Медиация и суд: соотнесение судебной
защиты прав и реализация их в процедуре медиации".
</ul><br />
</div></div>
</body></html>