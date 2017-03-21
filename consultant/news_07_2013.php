<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>КонсультантПлюс-Новости(июль)</title>
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
   <li><p style="font-size: 20px;"><b>Июль</b></p></li><br />
      <ul><div class="data">01.07.2013</div><b>• Правовой календарь на III квартал 2013 года - узнайте, что изменится в законодательстве.</b><br />
В систему КонсультантПлюс* включен справочный материал "Правовой календарь на III квартал 2013 года". В нем отражены все существенные изменения в законодательстве в июле, августе и сентябре 2013 года. Материал представляет собой календарь, где даты являются ссылками на соответствующий список документов, вступающих в силу целиком или в части на эту дату. По каждому документу приводится краткое описание предстоящих изменений, есть ссылки на полный текст документа. По каждому месяцу также приводится тематический рубрикатор с указанием сфер деятельности, где ожидаются изменения в законодательстве (банковское дело, налоги, страхование и т.д.). Это позволяет ознакомиться с информацией выборочно, не просматривая весь правовой календарь. Материал подготовлен экспертами "КонсультантПлюс". Для поиска воспользуйтесь вкладкой "Справочная информация" или одноименной ссылкой в Стартовом окне системы КонсультантПлюс: в разделе "Календари" выберите "Правовой календарь". (*Правовой календарь включен в информационные банки "Российское законодательство" и "Нормативные документы" системы КонсультантПлюс.)<br /></ul>
<br />  
      <ul><div class="data">01.07.2013</div><b>• Новые ситуации в "Путеводителе по трудовым спорам".</b><br />
В "Путеводитель по трудовым спорам" в системе КонсультантПлюс включены новые спорные ситуации, возникающие между работниками и работодателями:<br />
- при увольнении в связи с ликвидацией организации;<br />
- в связи с выплатами при увольнении в случае ликвидации организации или сокращения численности (штата) сотрудников.<br />
По каждой спорной ситуации дается анализ судебной практики, приводятся позиции судов, аннотации судебных решений и консультации экспертов. Подробно рассмотрены последствия для работодателя в зависимости от решения суда.<br /></ul>
<br />
      <ul><div class="data">01.07.20133</div><b>• Вышел в свет Бюллетень КонсультантПлюс N 7 (214).</b><br />
В номере:<br />
- Практическое пособие по квартальной бухотчетности бюджетных и автономных учреждений в Путеводителе по бюджетному учету и налогам<br />
- КонсультантБухгалтер: Версия Проф - актуальная информация для бухгалтера<br />
- Новое в Путеводителях КонсультантПлюс. Юристу и бюджетнику<br /></ul>
<br />
</div></div></div></div></div>
</body></html>