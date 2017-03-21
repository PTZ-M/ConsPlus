<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>Такском</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon/>
  <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html"; charset="utf-8">
  <META NAME="Description" CONTENT="Система электронной отчётности "Такском"">
  <META NAME="Keywords" CONTENT="Такском, сервис">
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
	<div id="news" style="background: #FFCD87">
      <div class="h2"><h2>Описание</h2></div>
      <p><img src="/images/taxcom/poring.jpg" alt="розовый поринг" /> <span class="capital">K</span> омпания "Такском" является автором ряда разработок в различных системах защищенного ЭДО. Компания "Такском" предлагает своим клиентам широкий спектр услуг: клиентские средства для работы в различных системах защищенного ЭДО, услуги оператора систем электронной отчетности в контролирующие органы (ФНС, ПФР, Росстат и др.), услуги удостоверяющего центра — создание и выдача сертификатов ключей проверки ЭП, USB-ключи электронные идентификаторы Rutoken, eToken, JaCarta, услуги и продукты 1С:франчайзи, электронная отчетность: электронные счета-фактуры и другие первичные документы через интернет. Одним из последних достижений компании стало активное участие в проведении пилотного проекта по созданию системы составления и выставления счетов-фактур в электронном виде (электронная отчетность). Проект в соответствии с поручением Правительства Российской Федерации от 11 ноября 2008 г. проводился Министерством финансов РФ и ФНС России с января по июль 2009 года в налоговых органах Управления ФНС России по г. Москве. Бухгалтерский баланс, финансовая отчетность, сопровождение программного обеспечения, налоговый учет помогают вашей компании идти не только в "ногу со временем", но и благодаря новейшим разработкам компании "Такском", с опережением осваивать новые технологии ведения бизнеса и взаимодействия с государственными контролирующими органами.</p>
      <div class="citation">ООО "Консультант-сервис", г. Петрозаводск, ул. Ф.
Энгельса, д.10, офисы 409-411. тел./факс 78-20-34, 78-20-44.</div>
	</div>
     <div id="news" style="background: #E1EEBF">
      <div class="h2"><h2>Подключение</h2></div>
      <div class="torightc "> <strong><font color="#ff0000">! ВНИМАНИЕ !</font></strong>
        <ul>
          <li>Все документы подаются региональному представителю в электронном виде <b>ЗАРАНЕЕ!</b></li>
          <li>Оригиналы документов подаются не позднее даты получения сертификата</li>
          <li>Если у вас кончилась лицензия или ещё нет ПО <b>"КриптоПро"</b>, или ключевого носителя, ОБЯЗАТЕЛЬНО проверьте, что при заполнении анкеты заявки ВЫ указали желание их закупить (отсутствие или неработоспособность выше обозначенного может сказаться на ВАШЕЙ работе с системой)</li>
          <li>Все вопросы ВЫ можете решить через форму обратной связи на <a href="http://www.taxcom.ru/">официальном сайте</a> компании или по бесплатному многоканальному телефону <a href="skype:+88002507345?call">8 (800) 2507345</a></li>
          <li>Операционная система, на которой будет происходить работа пользователя - Windows XP/7 с интернет браузером версии 6-8, с остальными системами НЕТ подтверждённой совместимости! Для пользователей IE10 рекомендуем откатиться на более старую версию или использовать <a href="http://ru.maxthon.com/">альтернативные браузеры</a> на движке IE.</li>
		 </ul>
      </div>
      <p><span class="capital">Д</span>ля подключения необходимо, в первую очередь, зарегистрировать свою заявку на <a href="http://order.taxcom.ru/agentsale?Agent=00580-1934-C9D">САЙТЕ</a>. Где выбрать необходимую систему: удостоверяющий центр (УЦ) или электронный документооборот (ЭДО), а так же тарифный план. После чего заполнить предлагаемую анкету. Если вы правильно всё заполнили, с вами свяжется представитель "Такском" по телефону или электронной почте, указанной в вашей анкете.</p>
	 </div>
	 <div id="news" style="background: #D9C4E7">
	<div class="h2"><h2>Новости</h2></div>
    <p><span class="capital">В</span>сё об УЭК в статье и коментариях на "<a href="http://rupor.sampo.ru/topic/47969">Рупоре</a>".</p>
	<br />
    <p>Информация о "<b>JaCarta</b>" в статьях на "<a href="http://www.securitylab.ru/blog/personal/zlonov/22637.php">SecurityLab</a>" и "<a href="http://www.atlas-2.ru/products/97345">Атлас-2</a>".</p>
	<br />
    <p>Система ЭДО "ТАКСКОМ-СПРИНТЕР" в статье и коментариях на "<a href="http://petrozavodsk-portal.ru/blogs/petrozavodsk/sistema-edo-takskom-sprinter.html">Городском портале</a>".</p>
	 </div>
    </div>
    <div id="right">
      <div class="box">
        <h2>Контакты</h2>
        <ul>
          <li><a href="/contact.php#3">Ольга Прокопьева</a></li>
          <li><a href="/contact.php#4">Элона Глебская</a></li>
          <li><a href="/contact.php#5">Оксана Котова</a></li>
          <li><a href="/contact.php#6">Мария Тарасова</a></li>
          <li><a href="/contact.php#9">Максим Изосимов</a></li>
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
          <li><a href="/taxcom/faq/docs.php">Комплект документов, для подключения систем "Taxcom"</a></li>
		  <li><br></li>
          <li><a href="/taxcom/faq/files_list.php">Список файлов, для систем "Taxcom"</a></li>
		  <li><br></li>
		  <li><a href="/taxcom/faq/instr_list.php">Список инструкций, для систем "Taxcom"</a></li>
		  <li><br></li>
		  <li><a href="/taxcom/faq/video.php">Видеоматериалы</a></li>
		  <li><br></li>
          <li><a href="/taxcom/faq/servis.php">Технические вопросы</a></li>
		  <li><br></li>
         </ul>
      </div>
	  <div class="box">
<h2>Лента новостей</h2>
<ul>
  <li><a href="/taxcom/news_07_2013.php">2013 Июль</a></li>
  <li><a href="/taxcom/news_06_2013.php">2013 Июнь</a></li>
  <li><a href="/taxcom/news_05_2013.php">2013 Май</a></li>
</ul>
</div>
      <div class="extra">
        <h3>Если хотите,</h3>
        <p>можете перейти на официальный сайт <a href="http://www.taxcom.ru">Компании "Такском"</a>. </p>
<br>
        <div class="ContentFlow">
            <div class="loadIndicator"><div class="indicator"></div></div>
            <div class="flow" style="visibility: visible; height: 229px; margin-bottom: -76.3333px;">
                <img class="item" src="/images/taxcom/rc/1c-taxcom_a5_reg-01.jpg" title="1C>Такском"/>
                <img class="item" src="/images/taxcom/rc/docline_list_new_reg-01.jpg" title="Такском-Доклайз"/>
                <img class="item" src="/images/taxcom/rc/ecp_newstyle_reg8800-01.jpg" title="Электронная подпись"/>
                <img class="item" src="/images/taxcom/rc/filer_newstyle_reg_A5-01.jpg" title="Такском-Файлер"/>
				<img class="item" src="/images/taxcom/rc/universal_a5_reg-01.jpg" title="Отчётност через интернет"/>
				<img class="item" src="/images/taxcom/rc/universal_a5_reg-02.jpg" title="Отчётност через интернет"/>
				<img class="item" src="/images/taxcom/rc/vygodny_svobodny_A5_reg-01.jpg" title="Тариф "Выгодный""/>
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
<div id="footer">
<br /><p align="center" style="color:#993366; font-size:20px">ИНСТРУКЦИИ ПО НАСТРОЙКЕ ЭЛЕКТРОННЫХ ПЛОЩАДОК</p><br />
<a href="http://www.sberbank-ast.ru/Page.aspx?cid=2193">
<img alt="Иконка новости" title="Сбербанк-АСТ" src="/images/taxcom/ast.png"/></a>
<a href="http://www.rts-tender.ru/HtmlView/HtmlView.aspx?ItemId=85">
<img alt="Иконка новости" title="РТС тендер" src="/images/taxcom/rtc.png"/></a>
<a href="http://etp.roseltorg.ru/trade/warning/?to=https://etp.roseltorg.ru/authentication/register">
<img alt="Иконка новости" title="Единая электронная торговая площадка" src="/images/taxcom/etp.png"/></a>
</div></div></div></body></html>