<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>Консультант-сервис (видеоматериалы)</title>
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon/>
  <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html"; charset="utf-8">
  <META NAME="Description" CONTENT="Компьютерная справочно-правовая система "КонсультантПлюс"">
  <META NAME="Keywords" CONTENT="КонсультантПлюс, сервис, видео, семинар, презентация, обзор">
  <link rel="stylesheet" type="text/css" href="style.css" media="screen">
  <script type="text/javascript" src="/jwplayer.js"></script>
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
  font-family: furore, Helvetica, Verdana, conyregular;
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
     <img src="/images/consultant/back_arrow_conslp.png" /></a>';
  }
  {
     echo '<a href="/">
     <img src="/images/globe.png" align="right" /></a>';
  }
?>
<div align= "center", style="padding: 2%">
    <video id="jwplayer" controls="controls">
        <script type="text/javascript"> 
            jwplayer("jwplayer").setup({
                flashplayer: "/jwplayer.flash.swf", playlist: [
				{ file: "http://www.youtube.com/watch?v=w5e_dNAPgZk", title: "Консультант Плюс. Технология Проф", description: "Видеообзор возможностей программы Консультант Плюс - быстрый поиск, стартовое окно, правая панель, улучшенная навигация, умные ссылки"},
				{ file: "http://www.youtube.com/watch?v=ii7BEUNUK9Y", title: "Консультант Плюс для Windows 8", description: "Работа Консультант Плюс в ОС Windows 8"},
				{ file: "http://www.youtube.com/watch?v=3qJH6uxipOw", title: "Консультант Плюс - 20 лет", description: "Поздравляем с юбилеем!!! Консультант Плюс - надежная правовая поддержка. Вот такой вот мини флэшмоб у нас получился!!! Смотрим комментируем. Январь 2012 года"},
				{ file: "http://www.youtube.com/watch?v=JJi50_nVhWU", title: "Лекция гендиректора ЗАО «КонсультантПлюс» Д.Новикова", description: "4 марта 2010 года в МГИМО прошла встреча с генеральным директором ЗАО «КонсультантПлюс» Д.Б.Новиковым, организованная Международным институтом управления. Дмитрий Борисович прочитал студентам лекцию «Создание и развитие технологического и наукоемкого бизнеса в России»"},
				],
				"playlist.position": "right",
				"playlist.size": 360,
                width: 800, height: 400
                }); 
</script></video></div>
<?php if (isset($_SERVER['HTTP_REFERER']))
  {
     echo '<a style="margin-right:20px;" 
     href="'.$_SERVER['HTTP_REFERER'].'">
     <img src="/images/consultant/back_arrow_conslp.png" /></a>';
  }
  {
     echo '<a href="/">
     <img src="/images/globe.png" align="right" /></a>';
  }
?>
</body></html>