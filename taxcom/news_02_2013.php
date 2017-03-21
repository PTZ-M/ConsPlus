﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>Такском-Новости(февраль)</title>
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
<div class="h2"><h1><a href="http://www.taxcom.ru/about/news/" style="color:#0055A0">Новости компании >>></a></h1>
<br />
<ul><li><p style="font-size: 20px;"><b>2013</b></p></li><br />
   <li><p style="font-size: 20px;"><b>Февраль</b></p></li><br />
      <ul><div class="data">27.02.2013</div><b>•  Посетите бесплатный семинар : «Новшества в бухгалтерском учете и налогообложении в 2013 году»!</b><br />
<a href="http://nalogadmin.ru/seminar/document3764.shtml">Семинар</a>, который проводит Центр налогового администрирования и финансового управления, предназначен для юристов, главных бухгалтеров, аудиторов, финансовых и генеральных директоров компаний, специалистов по налогообложению, желающих повысить свою квалификацию и актуализировать свои знания.<br /> 
</ul><br />
      <ul><div class="data">26.02.2013</div><b>•  В «Такском-Файлер» модифицирована страница для просмотра документов.</b><br />
Доступ к первичным документам в системе «Такском-Файлер» стал более простым и  удобным.<br /> 
</ul><br />
      <ul><div class="data">25.02.2013</div><b>•  Управляйте сертификатами в «Такском-Файлер».</b><br />
У пользователей  «Такском-Файлер» появилась еще более удобная возможность самостоятельно распоряжаться своими сертификатами ключей электронной подписи, выданными любыми Удостоверяющими центрами сети  ДУЦ ФНС.<br /> 
</ul><br />
      <ul><div class="data">25.02.2013</div><b>•  Выпускники с сертификатом «Такском» будут более востребованы.</b><br />
В этом году Учебный центр компании «Такском» продолжает обучение студентов московских учебных заведений во втором семестре текущего учебного года.<br /> 
</ul><br />
      <ul><div class="data">21.02.2013</div><b>•  21–22 марта 2013 г. «ЛемонФинанс» приглашает на конференцию по трансфертному ценообразованию.</b><br />
В рамках конференции «Трансфертное ценообразование: готовим уведомление и документацию по контролируемым сделкам» будут подробно разобраны практические способы обоснования трансфертных цен в некоторых типах сделок.<br /> 
</ul><br />
      <ul><div class="data">19.02.2013</div><b>•  Вебинары «Такском» для успешного старта ЭДО в вашей компании.</b><br />
Компания «Такском» приглашает слушателей на обновленную серию бесплатных онлайн-семинаров (вэбинаров) по продуктам  ПК «Спринтер»,  «Онлайн-Спринтер» и «Такском-Файлер».<br /> 
</ul><br />
      <ul><div class="data">19.02.2013</div><b>•  Новая возможность «Личного кабинета».</b><br />
Компаниям, осуществляющим розничную продажу алкогольной продукции и пива, для   предоставления деклараций в Федеральную службу по регулированию алкогольного рынка (Росалкогольрегулирование) в электронном виде  больше не нужно устанавливать дополнительное программное обеспечение!<br /> 
</ul><br />
      <ul><div class="data">18.02.2013</div><b>•  Обновляйте «ПК Спринтер» с удовольствием.</b><br />
В «Мастере» полностью переработан дизайн. Он стал светлее, крупнее и «дружелюбнее».<br /> 
</ul><br />
      <ul><div class="data">14.02.2013</div><b>•  В «Такском» завершилась «Школа МСФО».</b><br />
Более 500 финансовых специалистов из разных городов России получили актуальные и необходимые в работе знания в области Международных стандартов финансовой отчетности на бесплатных  семинарах «Школы МСФО», проходивших в Учебном центре компании «Такском» сразу в двух форматах: очном и  онлайн.<br /> 
</ul><br />
      <ul><div class="data">13.02.2013</div><b>•  В Москве пройдет самая масштабная конференция для начинающих предпринимателей «Запуск бизнеса - 2013».</b><br />
Организованная агентством специальных проектов PrimeTimeProductions конференция для начинающих предпринимателей «Запуск бизнеса - 2013», которая пройдет в Москве в марте 2013 года, расставит все точки над «i». <br /> 
</ul><br />
      <ul><div class="data">13.02.2013</div><b>•  Приглашаем на семинар «Сдать отчетность по НДС без ошибки» .</b><br />
28 февраля 2013 г. в НИУ «Высшая школа экономики» состоится семинар «Сдать отчетность по НДС без ошибки». Семинар организован Национальным исследовательским университетом «Высшая школа экономики» при поддержке компании «Такском».<br /> 
</ul><br />
      <ul><div class="data">13.02.2013</div><b>•  Объявляется набор на программу профпереподготовки «Налоговый и финансовый консалтинг».</b><br />
Занятия проводятся в ВЫСШЕЙ ШКОЛЕ ЭКОНОМИКИ три раза в неделю: понедельник, среда, пятница + 1 суббота в месяц (каникулы предусмотрены в праздничные дни, а также летом - в июле-августе).<br /> 
</ul><br />
      <ul><div class="data">12.02.2013</div><b>•  Срок выставления счетов-фактур необходимо продлить.</b><br />
Полная версия в свежем номере «Российской бизнес-газеты: Налоговое обозрение» № 883 от 12 февраля 2013 г.<br /> 
</ul><br />
      <ul><div class="data">11.02.2013</div><b>•  Удостоверяющий центр запустил новую услугу – «Квалифицированный сертификат «Ключ директора».</b><br />
«Ключ директора» - это обычный квалифицированный сертификат плюс две дополнительные возможности: использование его для размещения сведений и информационного обмена в системе Единого федерального реестра сведений о фактах деятельности юридических лиц (fedresurs.ru) и взаимодействие с Федеральной службой по финансовым рынкам России («ФСФР»).<br /> 
</ul><br />
      <ul><div class="data">11.02.2013</div><b>•  Рабочая группа по электронному документообороту запустила <a href="http://www.edottp.ru/">сайт.</a></b><br />
В состав Рабочей группы, созданной 25 апреля 2012 года, входят представители крупных компаний, малого и среднего бизнеса, органов государственной власти.<br /> 
</ul><br />
      <ul><div class="data">07.02.2013</div><b>•  «Пепеляев Групп» и The Moscow Times приглашают принять участие в ежегодной конференции «Налоговые маневры - 2013».</b><br />
Посещение этой конференции - хорошая возможность получить уникальную информацию от представителей Минфина и ФНС России, а также экспертов юридической компании «Пепеляев Групп».<br /> 
</ul><br />
      <ul><div class="data">05.02.2013</div><b>•  Без бумажки.</b><br />
Насколько активно российские компании сегодня используют возможности электронного документооборота, что их останавливает и будет ли ФНС более активно стимулировать этот процесс,  рассказали в своем интервью корреспонденту Клерк.Ру Василий Зудин, заместитель  директора компании «Такском», и  Максим Еременко, руководитель проекта электронного документооборота фирмы «1С».<br /> 
</ul><br />
      <ul><div class="data">01.02.2013</div><b>•  Электронный документооборот: препятствия устранит дорожная карта.</b><br />
Об этом шел разговор на очередном третьем заседании Рабочей группы по вопросам электронного документооборота при Экспертном совете ТПП России по совершенствованию налогового законодательства и правоприменительной практики, которое состоялось 29 января 2013 года в Торгово-промышленной палате России.<br /> 
</ul><br />
      <ul><div class="data">01.02.2013</div><b>• Компания «Такском» приняла участие в конференции «Годовой отчёт 2012 год».</b><br />
В обширном фойе конференц-комплекса гостиницы участников конференции приветствовали  компании-партнеры конференции, представлявшие свои услуги, решения и печатные издания на мини-экспозиции.  Конференция собрала значительную аудиторию московских бухгалтеров - большой конференц-зал был практически полон слушателями.<br /> 
</ul><br />
</div></div></body></html>