<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>КонсультантПлюс</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon/>
  <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html"; charset="utf-8">
  <META NAME="Description" CONTENT="Компьютерная справочно-правовая система КонсультантПлюс">
  <META NAME="Keywords" CONTENT="КонсультантПлюс, сервис">
  <link rel="stylesheet" type="text/css" href="style.css" media="screen">
  <script language="JavaScript" type="text/javascript" src="/contentflow/contentflow.js"></script>
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

<div class="content"> <a href="/">
  <div id="top"></div></a>
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
  <div id="breadcrumbs">
  <div id="main">
    <div id="left">
	<div id="news" style="background: #FFBE58">
      <div class="h2"><h2>Описание</h2></div>
      <p><img src="/images/consultant/poring.jpg" alt="правовые акты" /><span class="capital">К</span>омпания "КонсультантПлюс", образованная в 1992 году, является разработчиком компьютерной справочной правовой системы КонсультантПлюс - самой распространенной СПС (по исследованию ВЦИОМ 2012 г.). Система КонсультантПлюс содержит свыше <b>21 800 000</b> документов.<br />
	  Общероссийская Сеть распространения правовой информации КонсультантПлюс состоит из <b>300</b> региональных информационных центров, расположенных в крупных городах, и более <b>400</b> сервисных подразделений в небольших населенных пунктах. В настоящее время клиентами "КонсультантПлюс" являются более <b>300 000</b> организаций во всех регионах страны.</p>
      <div class="citation">ООО "Консультант-сервис", г. Петрозаводск, ул. Ф.
Энгельса, д.10, офисы 409-411. тел./факс 78-20-34, 78-20-44.</div>
	</div>
<div id="news" style="background: #E1EEBF">
<div class="h2"><h2>Разделы</h2></div>
<div class="torightc"><strong>Список разделов</strong>:
<ul>
  <li>законодательство</li>
  <li>судебная практика.</li>
  <li>финансовые и кадровые консультации.</li>
  <li>консультации для бюджетных организаций.</li>
  <li>комментарии законодательства.</li>
  <li>формы документов.</li>
  <li>законопроекты.</li>
  <li>международные правовые акты.</li>
  <li>правовые акты по здравоохранению.</li>
  <li>технические нормы и правила.</li>
</ul>
</div>
<span class="capital">Н</span>азвание
раздела отражает характер информации, которая в нём содержится. Каждый
раздел, в свою очередь, состоит из информационных банков, которые
являются подмножествами раздела. Такое структурирование данных упрощает
поиск информации в системе за счёт исключения из поиска разделов и
информационных банков, содержащих информацию заведомо не
удовлетворяющую условиям поиска.
</div>
<div id="news" style="background: #D9C4E7">
<div class="h2"><h2>Новости</h2></div>
<div class="news1">
<div class="inews">
<a href="http://www.consultant.ru/about/presscenter/news/#art5722">
<img alt="Иконка новости" title="Новости" src="/images/consultant/news/photo59269.jpg" height="50" width="50" /></a></div>
<div class="newsttl"><div class="data">01.07.2013</div>
<a class="head" href="http://www.consultant.ru/about/presscenter/news/#art5722">
Правовой календарь на III квартал 2013 года - узнайте, что изменится в законодательстве</a></div>
</div>
<div class="news1">
<div class="inews">
<a href="http://www.consultant.ru/about/presscenter/pressa3/pr_457/">
<img alt="Иконка новости" title="Новости" src="/images/consultant/news/photo59260.jpg" height="50" width="50" /></a></div>
<div class="newsttl"><div class="data">01.07.2013</div>
<a class="head" href="http://www.consultant.ru/about/presscenter/pressa3/pr_457/">
Новые ситуации в "Путеводителе по трудовым спорам"</a></div>
</div>
<div class="news1">
<div class="inews">
<a href="http://www.consultant.ru/about/presscenter/bulletin/y2013/m07/#art24394">
<img alt="Иконка новости" title="Новости" src="/images/consultant/news/photo59251.jpg" height="50" width="50" /></a></div>
<div class="newsttl"><div class="data">01.07.2013</div>
<a class="head" href="http://www.consultant.ru/about/presscenter/bulletin/y2013/m07/#art24394">
Бюллетень КонсультантПлюс N 7:<br />
• Порядок представления промежуточной бухотчетности в 2013 г.</a></div>
</div>
<div class="news1">
<div class="inews">
<a href="http://www.consultant.ru/about/presscenter/news/#art5707">
<img alt="Иконка новости" title="Новости" src="/images/consultant/news/photo59212.jpg" height="50" width="50" /></a></div>
<div class="newsttl"><div class="data">24.06.2013</div>
<a class="head" href="http://www.consultant.ru/about/presscenter/news/#art5707">
Новое в Путеводителях КонсультантПлюс - практическое пособие по отчетности бюджетных организаций</a></div>
</div>
<div class="news1">
<div class="inews">
<a href="http://www.consultant.ru/about/presscenter/news/#art5698">
<img alt="Иконка новости" title="Новости" src="/images/consultant/news/photo59125.png" height="50" width="50" /></a></div>
<div class="newsttl"><div class="data">14.06.2013</div>
<a class="head" href="http://www.consultant.ru/about/presscenter/news/#art5698">
Летние кафе - как рассчитать ЕНВД?</a></div>
</div>
<div class="news1">
<div class="inews">
<a href="http://www.consultant.ru/about/presscenter/news/#art5695">
<img alt="Иконка новости" title="Новости" src="/images/consultant/news/photo59110.jpg" height="50" width="50" /></a></div>
<div class="newsttl"><div class="data">14.06.2013</div>
<a class="head" href="http://www.consultant.ru/about/presscenter/news/#art5695">
Строительство объектов подрядными организациями - более 100 схем бухгалтерских проводок в КонсультантПлюс</a></div>
</div>
</div>
</div>
<div id="right">
<div class="box-scr">
<h2>Контакты</h2>
<ul>
		  <li><a style="font-size: 12px" href="/contact.php#3">Ольга Прокопьева</a></li>
		  <li><a style="font-size: 12px" href="/contact.php#4">Элона Глебская</a></li>
		  <li><a style="font-size: 12px" href="/contact.php#5">Оксана Котова</a></li>
		  <li><a style="font-size: 12px" href="/contact.php#6">Мария Тарасова</a></li>
		  <li><a style="font-size: 12px" href="/contact.php#11">Юллинен Ксения</a></li>
		  <li><br /></li>
		  <li><a href="/details.php"><font color="#993366">Реквизиты</font></a></li>
		  <li><br /></li>
		  <li><a href="/map.php"><font color="#ff0000">Где мы находимся...</font></a></li>
         </ul>
</div>
<div class="box">
<h2>FAQ</h2>
<ul>
<li><br></li>
<li><br></li>
  <li><a href="/consultant/faq/base_list.php">Список баз системы "КонсультантПлюс"</a></li>
<li><br></li>
  <li><a href="/consultant/faq/files_list.php">Свободно распространяемые файлы "КонсультантПлюс"</a></li>
<li><br></li>
  <li><a href="/consultant/faq/video.php">Видеоматериалы</a></li>
<li><br></li>
  <li><a href="/consultant/faq/servis.php"><font color="#f5f5f5">Технические вопросы</a></li>
</ul>
</div>
<div class="box">
<h2>Лента новостей</h2>
<ul>
  <li><a href="/consultant/news_07_2013.php">2013 Июль</a></li>
  <li><a href="/consultant/news_06_2013.php">2013 Июнь</a></li>
  <li><a href="/consultant/news_05_2013.php">2013 Май</a></li>
</ul>
</div>
<div class="extra">
<h3>Если хотите,</h3>
<p>можете перейти на официальный сайт <a href="http://www.consultant.ru">Компании "КонсультантПлюс"</a>.</p>
<br>
        <div class="ContentFlow">
            <div class="loadIndicator"><div class="indicator"></div></div>
            <div class="flow" style="visibility: visible; height: 229px; margin-bottom: -76.3333px;">
                <img class="item" src="/images/consultant/gk/gk01_13.jpg" title="Главная книга №1 январь 2013"/>
                <img class="item" src="/images/consultant/gk/gk02_13.jpg" title="Главная книга №2 январь 2013"/>
                <img class="item" src="/images/consultant/gk/gk03_13.jpg" title="Главная книга №3 февраль 2013"/>
                <img class="item" src="/images/consultant/gk/gk04_13.jpg" title="Главная книга №4 февраль 2013"/>
				<img class="item" src="/images/consultant/gk/gk05_13.jpg" title="Главная книга №5 март 2013"/>
				<img class="item" src="/images/consultant/gk/gk06_13.jpg" title="Главная книга №6 март 2013"/>
				<img class="item" src="/images/consultant/gk/gk07_13.jpg" title="Главная книга №7 апрель 2013"/>
				<img class="item" src="/images/consultant/gk/gk08_13.jpg" title="Главная книга №8 апрель 2013"/>
				<img class="item" src="/images/consultant/gk/gk09_13.jpg" title="Главная книга №9 май 2013"/>
				<img class="item" src="/images/consultant/gk/gk10_13.jpg" title="Главная книга №10 май 2013"/>
				<img class="item" src="/images/consultant/gk/gk11_13.jpg" title="Главная книга №11 июнь 2013"/>
				<img class="item" src="/images/consultant/gk/gk12_13.jpg" title="Главная книга №12 июнь 2013"/>
				<img class="item" src="/images/consultant/gk/gk13_13.jpg" title="Главная книга №13 июль 2013"/>
				</div>
            <div class="globalCaption"></div>
            <div class="scrollbar"><div class="slider"><div class="position"></div></div></div>
        </div>
<p style="font-size:16px"; align="left">
<?php 
  $content = get_content(); 
  $pattern = "#<Valute ID=\"([^\"]+)[^>]+>[^>]+>([^<]+)[^>]+>[^>]+>[^>]+>[^>]+>[^>]+>[^>]+>([^<]+)[^>]+>[^>]+>([^<]+)#i"; 
  preg_match_all($pattern, $content, $out, PREG_SET_ORDER); 
  $dollar = ""; 
  $euro = ""; 
  foreach($out as $cur) 
  { 
    if($cur[2] == 840) $dollar = str_replace(",",".",$cur[4]); 
    if($cur[2] == 978) $euro   = str_replace(",",".",$cur[4]); 
  } 
  echo "<img src='/images/USD.gif'/> Доллар - ".$dollar." <img src='/images/RUB.gif'/><br>" ;
  echo "<img src='/images/EUR.gif'/> Евро - ".$euro." <img src='/images/RUB.gif'/><br>"; 
  function get_content() 
  { 
    $date = date("d/m/Y"); 
    $link = "http://www.cbr.ru/scripts/XML_daily.asp?date_req=$date"; 
    $fd = fopen($link, "r"); 
    $text=""; 
    if (!$fd) echo "Запрашиваемая страница не найдена"; 
    else 
    { 
      while (!feof ($fd)) $text .= fgets($fd, 4096); 
    } 
    fclose ($fd); 
    return $text; 
  } 
?>
</p>
</div></div>
<div id="footer"><br />
</div></div></div></body></html>