<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>КонсультантПлюс-Новости(февраль)</title>
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
   <li><p style="font-size: 20px;"><b>Февраль</b></p></li><br />
      <ul><div class="data">28.02.2013</div><b>• 15-я Всероссийская программа поддержки бухгалтера.</b><br />
С 1 по 31 марта 2013 г. пройдет 15-я Всероссийская программа правовой поддержки бухгалтера. Акцию проводит Сеть КонсультантПлюс при содействии Федеральной налоговой службы России.<br />
</ul><br />
      <ul><div class="data">19.02.2013</div><b>• Новый выпуск диска "КонсультантПлюс: Высшая школа".</b><br />
КонсультантПлюс представляет новый выпуск диска "КонсультантПлюс: Высшая школа" к весеннему семестру для студентов и преподавателей финансово-экономических и юридических дисциплин. Новый раздел на диске - "Учебники и комментарии". Он содержит более 170 учебников по юридическим дисциплинам и комментариев к правовым актам.<br />
</ul><br />
      <ul><div class="data">02.2013</div><b>• Анонс.</b><br />
11 марта состоится интернет-интервью c руководителем Федеральной службы государственной регистрации, кадастра и картографии Н.Н. Антипиной. Тема интервью: "Оптимизация процедуры регистрации собственности: новые возможности и перспективы развития государственных услуг".<br />
</ul><br />
      <ul><div class="data">05.02.2013</div><b>• Новые возможности мобильных приложений КонсультантПлюс для iPhone/iPad.</b><br />
Обновлены приложения "КонсультантПлюс: основные документы" и "КонсультантПлюс: Студент" для iPhone/iPad. В новой версии появилась возможность включить/выключить наклейку с количеством обновляемых документов на иконке запуска приложения. Таким образом, пользователи могут сами выбирать режим информирования о поступлении обновлений: только по мере необходимости при работе с приложением или постоянно.<br />
</ul><br />
      <ul><div class="data">04.02.2013</div><b>• Вышел в свет Бюллетень КонсультантПлюс N 2 (209).</b><br />
В номере:<br />
- Сроки и порядок хранения первичных учетных документов – разбираемся в вопросе<br />
- Календарь бухгалтера – поможет не пропустить ключевые даты в работе<br />
- К весеннему семестру готов!<br />
</ul><br />
      <ul><div class="data">01.02.2013</div><b>• Интервью c директором департамента развития, комплексной оценки деятельности субъектов Российской Федерации и органов местного самоуправления Министерства регионального развития РФ Е.А. Кодиной.</b><br />
На сайте опубликован отчет об интернет-интервью c директором департамента развития, комплексной оценки деятельности субъектов Российской Федерации и органов местного самоуправления Министерства регионального развития РФ Е.А. Кодиной. Тема интервью: "Развитие законодательства о местном самоуправлении. Анализ актуальных правовых вопросов".<br />
</ul><br />
</div></div></body></html>