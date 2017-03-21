<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>Консультант-сервис</title>
  <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon/>
  <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html"; charset="utf-8">
  <META NAME="Description" CONTENT="Компьютерная справочно-правовая система "КонсультантПлюс" и система электронной отчётности "Такском"">
  <META NAME="Keywords" CONTENT="КонсультантПлюс, Такском, сервис, оффис, расположение">
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
  
  .content { 
	margin: 0 auto; 
	padding: 0;
	width: 800px;	
	background: transparent url(/images/imgtop.png) no-repeat top center 
}

.people { 
	margin: 0 auto;
	padding: 10px;
	width: 780px;
	background: #d6d6d6;
	border-radius: 0px 0px 5px 5px;
    box-shadow: 5px 5px 20px #000;
}

.torightc {
	float: right;
	margin: 0 10px;
	border: 1px solid #ddd;
	padding: 10px;
	background: #f5f5f5
}

#top {   width: 800px; height: 111px }
  </style></head><body>

<div class="content"> <a href="/">
  <div id="top"><br />
</div></a>
<div class="people">
<div align= "center", style="padding: 2%"><div id="ymaps-map-id_135271523134978357686" style="width: 450px; height: 350px;"></div>
<script type="text/javascript">
function fid_135271523134978357686(ymaps) {
    var map = new ymaps.Map("ymaps-map-id_135271523134978357686", {
        center: [34.36000849772669, 61.789311118411575],
        zoom: 16,
        type: "yandex#publicMap"
    });
    map.controls
        .add("zoomControl")
        .add("mapTools")
        .add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#hybrid", "yandex#publicMap"]));
    map.geoObjects
        .add(new ymaps.Placemark([34.35903575003029, 61.789580317301365], {
            balloonContent: '"КонсультантСервис"'
        }, {
            preset: "twirl#redDotIcon"
        }));
};
</script>
<script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?lang=ru-RU&coordorder=longlat&load=package.full&wizard=constructor&onload=fid_135271523134978357686"></script>
<br>
<img src="/images/office.png" alt="" height="350" width="450">
</div></div></div>
<?php if (isset($_SERVER['HTTP_REFERER']))
  {
     echo '<a style="margin-right:20px;" 
     href="'.$_SERVER['HTTP_REFERER'].'">
     <img src="/images/back_arrow_map.png" /></a>';
  }
  {
     echo '<a href="/">
     <img src="/images/globe.png" align="right" /></a>';
  }
?>
</body></html>