<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>Такском-Проблемы</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon/>
  <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html"; charset="utf-8">
  <META NAME="Description" CONTENT="Такском - ошибки при работе с сайтами">
  <META NAME="Keywords" CONTENT="Такском, сервис, ошибки, проблемы, сайт, сертификат">
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
  background-image: url("/images/background_image.png");
  font-family: Helvetica, Verdana, conyregular, furore;
  color: dark;
  font-weight: normal;
  font-style: normal;
  font-size: 18px
}
  </style></head><body>
<?php if (isset($_SERVER['HTTP_REFERER']))
  {
     echo '<a style="margin-right:20px;" 
     href="'.$_SERVER['HTTP_REFERER'].'">
     <img src="/images/taxcom/back_arrow_taxcom.png" /></a>';
  }
  {
     echo '<a href="/">
     <img src="/images/globe.png" align="right" /></a>';
  }
?>

<marquee style="height: 36px;" behavior="ALTERNATE" scrollamount="4" direction="right" bgcolor="#9cbfdc"><p style="font-family: furore; font-size: 24px; font-weight: bold; margin-top: 4px; height: 47px;">ПРОБЛЕМЫ ПРИ РАБОТЕ С СИСТЕМОЙ НА САЙТАХ</p></marquee>
<p><span style="color: #ff0066; font-family: furore; font-size: 16px;">При заходе на площадку выдаются сообщения о неработоспособности или зависает страница.</span><br /></p>
<p>Необходимо сделать следующее:<br /><br />
1. Во вкладке <b>"Безопасность"</b> окна <b>"Свойства браузера"</b>, проверить добавлен ли сайт в <b>"Надежные сайты"</b> (обязательно указывайте символ <b>"*"</b> перед именем домена верхнего уровня);<br />
Пример вида, для сайта <a href="https://online.taxcom.ru/">"Онлайн-Спринтер" от "Такском"</a>: <b>https://*.taxcom.ru/</b><br /><br />
2. Во вкладке <b>"Безопасность"</b> окна <b>"Свойства браузера"</b>, в <b>"Уровень безопасности для этой зоны"</b> нажмите клавишу <b>"Другой"</b> и проверьте, что включены все элементы <b>ActiveX</b>;<br /><br />
3. Во вкладке <b>"Дополнительно"</b> окна <b>"Свойства браузера"</b> выставьте все протоколы соединения (<b>TSL</b> и <b>SSL</b>);<br /><br />
4. Во вкладке <b>"Конфиденциальность"</b> окна <b>"Свойства браузера"</b>, уровень безопасности зоны Интернета должен стоять на - <b>"Низкий"</b>;<br /><br />
5. Во вкладке <b>"Конфиденциальность"</b> окна <b>"Свойства браузера"</b>, уровень безопасности зоны Интернета должен стоять на - <b>"Низкий"</b>;<br /><br />
6. В "Параметры просмотра в режиме совместимости" должен быть добавлен сайт, на котором вы пытаетесь использовать сертификат;<br /><br />
7. Запустите <b>"Средства разработчика F12"</b> и переключите на панели в <b>"Режим браузера: IE9"</b> и <b>"Режим документов: стандартный IE9"</b> (после перезапуска браузера эти настройки нужно делать заново)!<br /><br />
8. Отлючите свой <b>антивирус/файервол</b> на время работы с системой.</p>

<?php if (isset($_SERVER['HTTP_REFERER']))
  {
     echo '<a style="margin-right:20px;" 
     href="'.$_SERVER['HTTP_REFERER'].'">
     <img src="/images/taxcom/back_arrow_taxcom.png" /></a>';
  }
  {
     echo '<a href="/">
     <img src="/images/globe.png" align="right" /></a>';
  }
?>
</body></html>