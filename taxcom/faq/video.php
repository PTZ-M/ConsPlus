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
				{ file: "http://www.youtube.com/watch?v=UBch7z_dtU0", title: "Бухгалтерский учет и аудит-2013", description: "22-26 января 2013 года Компания «Такском» приняла участие в 20-й юбилейной выставке «Бухгалтерский учет и аудит-2013» в Москве на ВВЦ"},
				{ file: "http://www.youtube.com/watch?v=wAyq6rHnjTM", title: "Личный кабинет", description: "Демонстрация работы сервиса «Личный кабинет». Компания Такском, рассказывает о вариантах входа в «Личный Кабинет», и дает обзор информации и возможностей по управлению услугами, доступных пользователям «Личного кабинета»"},
				{ file: "http://www.youtube.com/watch?v=p7NQxJJXu4g", title: "Диагностика рабочего места", description: "Видео демонстрирует работу «Мастера диагностики рабочего места ПК Спринтер». Вы узнаете, как самостоятельно проверить готовность системы к работе. Как определить наличие неполадок в настройках криптографии, как протестировать возможность подключения, как выявить отсутствие ошибок совместимости, и тем самым предупредить возникновение проблем, связанных с ошибками настройки почтовых ящиков"},
				{ file: "http://www.youtube.com/watch?v=bnGuqrykkqQ", title: "Мастер перевыпуска сертификатов", description: "Видео демонстрирует работу сервиса «Мастер перевыпуска сертификатов», позволяющего самостоятельно заменить истекающий сертификат для сдачи отчетности в контролирующие органы не выходя из программы Референт"},
				{ file: "http://www.youtube.com/watch?v=fZADf8rTq3w", title: "Такском-Файлер. Ваш контрагент у другого оператора?", description: "Такском-Файлер — система обмена любыми первичными (учетными) документами через Интернет, которая позволит Вам работать со своими клиентами, партнерами, поставщиками, подразделениями без бумаги, обмениваясь документами (счета-фактуры, акты выполненных работ, товарные накладные и пр.) в электронном виде. Роуминг Такском -- это возможность обмениться электронными счетами-фактурами и другими первичными документами, даже если ваш контрагент подключен к другому оператору документооборота"},
				{ file: "http://www.youtube.com/watch?v=zae30hFcQvo", title: "Такском-Файлер. Как вести журнал учёта? ", description: "Такском-Файлер — система обмена любыми первичными (учетными) документами через Интернет, которая позволит Вам работать со своими клиентами, партнерами, поставщиками, подразделениями без бумаги, обмениваясь документами (счета-фактуры, акты выполненных работ, товарные накладные и пр.) в электронном виде"},
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