<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>Такском-Новости(май)</title>
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
  </style></head><body>
<div class="content"> <a href="/taxcom">
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
<div class="h2"><a href="http://www.taxcom.ru/about/news/" style="color:#0055A0"><h1>Новости компании >>></a></h1>
<br />
<ul><li><p style="font-size: 20px;"><b>2013</b></p></li><br />
   <li><p style="font-size: 20px;"><b>Май</b></p></li><br />
      <ul><div class="data">31.05.2013</div><b>• Электронные счета-фактуры: между прошлым и будущим.</b><br />
Тема мероприятия: «Год с электронными документами: быстрый старт» не могла оставить равнодушным тех, кто уже пользуется современными технологиями и тех, кто еще присматривается к процессу внедрения.</ul><br />
      <ul><div class="data">27.05.2013</div><b>• Абоненты «Такском» могут посетить льготные семинары известных лекторов.</b><br />
Компания «Такском» приглашает своих абонентов в июле 2013 года посетить семинары ведущих лекторов страны на льготных условиях (со скидкой 11%). Семинары организует отраслевой партнер компании - Издательско-консалтинговая группа «АйСи Групп».</ul><br />
      <ul><div class="data">27.05.2013</div><b>• «Бухучет сегодня – ключевые вопросы, новые возможности».</b><br />
4 июня Компания Такском совместно с Компанией МаркПриор приглашает своих Клиентов принять участие в семинаре «Бухучет сегодня - ключевые вопросы, новые возможности», и узнать самую необходимую и актуальную информацию о нововведениях налогового и бухгалтерского законодательства.</ul><br />
      <ul><div class="data">24.05.2013</div><b>• «Год с электронными документами: быстрый старт».</b><br />
Под таким названием пройдет четвертое заседание Рабочей группы по электронному документообороту, которое состоится 30 мая в ТПП России.</ul><br />
      <ul><div class="data">24.05.2013</div><b>• «Такском-Доклайнз» на DOCFLOW 2013.</b><br />
Компания «Такском» приняла участие в 19-й конференции-выставке DOCFLOW 2013, которая состоялась 19 мая в Москве в гостинично-деловом комплексе «Рэдиссон Славянская».</ul><br />
      <ul><div class="data">22.05.2013</div><b>• «Аудит-Вела» приглашает на отраслевую конференцию по трансфертному ценообразованию</b><br />
«ТРАНСФЕРТНОЕ ЦЕНООБРАЗОВАНИЕ: ЕДИНООБРАЗНЫЙ ПОДХОД ПРИ ВЫБОРЕ МЕТОДА В ОТРАСЛИ. ПРАКТИКА И ОПЫТ ПРИМЕНЕНИЯ» Зерновая отрасль АПК),(Промышленная отрасль),(Морские перевозки, обслуживание судов и грузов в портах), которая состоится с 3 по 4 июня 2013 года в г. Геленджик.</ul><br />
      <ul><div class="data">22.05.2013</div><b>• IV бухгалтерская конференция по бухгалтерскому учету состоится 16–21 сентября 2013 года в г. Геленджик</b><br />
Приглашаем вас принять участие в IV бухгалтерской конференции «Бухгалтерский учет и налоговые аспекты 2013-2014 гг.», которая состоится 16-21 сентября 2013 года в г. Геленджик.</ul><br />
         <ul><div class="data">21.05.2013</div><b>• Льготный курс для наших абонентов – «Трансформация Российской отчетности в формат МСФО».</b><br />
Компания «Такском» приглашает своих абонентов в июне 2013 года прослушать курс (64 акад. часа) «ПРАКТИЧЕСКИЕ АСПЕКТЫ ПОДГОТОВКИ ФИНАНСОВОЙ ОТЧЕТНОСТИ ПО МСФО: ТРАНСФОРМАЦИЯ РОССИЙСКОЙ ОТЧЕТНОСТИ В ФОРМАТ МСФО» на льготных условиях (со скидкой 35%).</ul><br />
      <ul><div class="data">21.05.2013</div><b>• Бесплатное повышение квалификации для абонентов «Такском»- малого и среднего бизнеса.</b><br />
Компания «Такском» приглашает своих абонентов - сотрудников МАЛЫХ и СРЕДНИХ предприятий г. Москвы БЕСПЛАТНО пройти обучение в Институте повышения квалификации «Института компьютерных технологий».</ul><br />
      <ul><div class="data">15.05.2013</div><b>• Трансфертное ценообразование! Мастер-класс! Просто о сложном!</b><br />
Консалтинговая компания «ЛемонФинанс» при информационном содействии компании «Такском» приглашает на Мастер-классы, которые состоятся в Москве 21 и 28 мая, а также 4 и 18 июня 2013 года.<br /></ul>
      <ul><div class="data">08.05.2013</div><b>• C Днем Победы!</b><br />
Поздравляем с 9 мая!<br /></ul>
<br />
</div></div></div></div></div>
</body></html>