<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>Такском-Ошибки</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon/>
  <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html"; charset="utf-8">
  <META NAME="Description" CONTENT="Система электронной отчётности "Такском"">
  <META NAME="Keywords" CONTENT="Такском, сервис, ошибки">
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
<?php 
  if (isset($_SERVER['HTTP_REFERER']))
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
<marquee style="height: 36px;" behavior="ALTERNATE" scrollamount="4" direction="right" bgcolor="#9cbfdc"><p style="font-family: furore; font-size: 24px; font-weight: bold; margin-top: 4px; height: 47px;">ТЕХНИЧЕСКИЕ ВОПРОСЫ, ВСТРЕЧАЮЩИХСЯ ПРИ РАБОТЕ С СИСТЕМАМИ "TAXCOM" В СРЕДЕ ОС "WINDOWS", И СПОСОБЫ ИХ УСТРАНЕНИЯ</p></MARQUEE>
<p style="font-family: conyregular; font-weight: bold; font-size: 18px"><a href="/taxcom/faq/troubles_comment_site.php">ПРОБЛЕМЫ ПРИ РАБОТЕ С СИСТЕМОЙ НА САЙТАХ</a></p>
<p style="font-family: conyregular; font-weight: bold; font-size: 18px"><a href="/taxcom/faq/troubles_comment_local.php">ПРОБЛЕМЫ ПРИ РАБОТЕ С СИСТЕМОЙ УСТАНОВЛЕННОЙ НА КОМПЬЮТЕРЕ</a></p>

<?php 
  if (isset($_SERVER['HTTP_REFERER']))
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