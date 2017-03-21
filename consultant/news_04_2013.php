<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>КонсультантПлюс-Новости(апрель)</title>
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
   <li><p style="font-size: 20px;"><b>Апрель</b></p></li><br />
      <ul><div class="data">30.04.2013</div><b>• Как учесть расходы на содержание служебного транспорта - ответы в схемах бухгалтерских проводок.</b><br />
В системе КонсультантПлюс 30 схем бухгалтерских проводок, в которых подробно рассмотрен порядок учета расходов на содержание служебного транспорта и на компенсацию за использование для служебных поездок личного транспорта.<br />
</ul><br />
      <ul><div class="data">30.04.2013</div><b>• Оказание платных медицинских услуг: новые разъяснения в "Путеводителе по договорной работе".</b><br />
Новые разделы включены в "Путеводитель по договорной работе" системы КонсультантПлюс. Материал этого Путеводителя, посвященный заключению договора возмездного оказания услуг, дополнен информацией об оказании платных медицинских услуг.<br />
</ul><br />
      <ul><div class="data">10.04.2013</div><b>• Обсуждение рекомендуемой ФНС РФ формы единого передаточного (отгрузочного) документа.</b><br />
ФНС России предлагает принять участие в обсуждении проекта формы единого передаточного документа и по мере возможности будет способствовать привлечению к обсуждению все большего количества лиц, связанных с заполнением первичных учетных документов. Свои комментарии и предложения вы можете высказать на форуме ФНС России.<br />
</ul><br />
      <ul><div class="data">04.2013</div><b>• Интервью c руководителем Росреестра Н.Н. Антипиной.</b><br />
На сайте опубликован отчет об интернет-интервью c руководителем Федеральной службы государственной регистрации, кадастра и картографии Н.Н. Антипиной. Тема интервью: "Оптимизация процедуры регистрации собственности: новые возможности и перспективы развития государственных услуг".<br />
</ul><br />
      <ul><div class="data">02.04.2013</div><b>• Новые материалы по кадровым вопросам и трудовым спорам.</b><br />
Специалистам по кадровым вопросам теперь доступно еще больше информации в системе КонсультантПлюс. В уникальные Путеводители по кадровой тематике - "Путеводитель по трудовым спорам" (адресован юристам) и "Путеводитель по кадровым вопросам" (адресован кадровикам и бухгалтерам) - добавлены новые темы, спорные ситуации, образцы заполнения форм, ситуации из практики. В частности, в "Путеводитель по трудовым спорам" включен материал, посвященный различным аспектам увольнения по результатам испытания.<br />
</ul><br />
      <ul><div class="data">02.04.2013</div><b>• Интервью c ректором Российской государственной академии интеллектуальной собственности И.А. Близнецом.</b><br />
На сайте опубликован отчет об интернет-интервью c ректором Российской государственной академии интеллектуальной собственности И.А. Близнецом. Тема интервью: "Проект государственной стратегии в области интеллектуальной собственности".<br />
</ul><br />
      <ul><div class="data">01.04.2013</div><b>• Вышел в свет Бюллетень КонсультантПлюс N 4 (211).</b><br />
В номере:<br />
- Уникальные Путеводители по кадровой тематике в КонсультантПлюс<br />
- Актуальные материалы в разделе "Консультации для бюджетных организаций"<br />
- Новое в разделе "Справочная информация"<br />
</ul><br />
</div></div></body></html>