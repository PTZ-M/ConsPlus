<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>Такском-Проблемы</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon/>
  <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html"; charset="utf-8">
  <META NAME="Description" CONTENT="Такском - ошибки при работе на компьютере">
  <META NAME="Keywords" CONTENT="Такском, сервис, ошибки, проблемы, компьютер, сертификат">
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
<marquee style="height: 36px;" behavior="ALTERNATE" scrollamount="4" direction="right" bgcolor="#9cbfdc"><p style="font-family: furore; font-size: 24px; font-weight: bold; margin-top: 4px; height: 47px;">ПРОБЛЕМЫ ПРИ РАБОТЕ С СИСТЕМОЙ УСТАНОВЛЕННОЙ НА КОМПЬЮТЕРЕ</p></marquee>
<p><span style="color: #ff0066; font-family: furore; font-size: 16px;">При вставке eTocken появляется окно ввода пароля.</span><br /></p>
<p>Необходимо сделать следующее:<br /><br />
1. Снимите ключевой носитель (не нажимайте символ <b>"X"</b> на окне ввода пароля от ключевого носителя) !<br /><br />
2. Закройте все запущенные браузеры;<br /><br />
3. Заново вставьте ключевой носитель.</p>
<p><span style="color: #ff0066; font-family: furore; font-size: 16px;">У меня исправны носители eToken ГОСТ и JaCarta ГОСТ - почему не работает?</span><br /></p>
<p>При подключенных устройствах eToken ГОСТ или JaCarta ГОСТ и установленном плагине JC-WebClient, подпись документов будет производиться через JC-WebClient. Для того, чтобы вернуться к работе с КриптоПро CSP необходимо отключить устройства eToken ГОСТ и JaCarta ГОСТ, или деинсталлировать плагин JC-WebClient.</p>
<p><span style="color: #ff0066; font-family: furore; font-size: 16px;">Сломался eTocken, но у меня по инструкции сделана копия на флешке, что дальше?</span><br /></p>
<p>Необходимо сделать следующее:<br /><br />
1. Снимите ключевой носитель (если он вставлен);<br /><br />
2. Вставьте флеш-диск и убедитесь, что он рабочий - в операционной системе флеш-диск дожен определяться, иметь возможность считываться и название вида - "<b>java_XyXXXXXX</b>" (<b>X</b> - цифренно-, <b>y</b> - буквенный номер вашего ключевого носителя);<br /><br />
3. Запустите "<b>КриптоПро</b>" и переустановите сертификат с флеш-диска согласившись на замену (<b>Сервис</b> - <b>Просмотреть сертификаты в контейнере</b> - <b>Обзор...</b> - выбрать флеш-диск с резервной копией - <b>Установить</b>).</p>
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