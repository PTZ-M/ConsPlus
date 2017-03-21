<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>КонсультантПлюс-Ключи</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon/>
  <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html"; charset="utf-8">
  <META NAME="Description" CONTENT="Компьютерная справочно-правовая система КонсультантПлюс">
  <META NAME="Keywords" CONTENT="КонсультантПлюс, ключи, командная, строка">
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
     <img src="/images/consultant/back_arrow_conslp.png" /></a>';
  }
  {
     echo '<a href="/">
     <img src="/images/globe.png" align="right" /></a>';
  }
?>

<marquee style="height: 36px;" behavior="ALTERNATE" scrollamount="4" direction="right" bgcolor="#ffde72">
<p style="font-family: furore; font-size: 24px; font-weight: bold; margin-top: 4px; height: 47px;">"КЛЮЧИ" В КОМАНДНОЙ СТРОКЕ</p></marquee>

<p>Система позволяет производить некоторые дополнительные операции при ее
запуске. Для этого в командной строке после имени исполняемого модуля
(<b>CONS.EXE</b>) необходимо указать требуемый ключ. Обращаем Ваше внимание,
что при выполнении любых операций с информационным банком необходимо
указывать конкретное имя базы (ключ <b>/BASE_XXX</b>), либо применить
выбранную операцию ко всем информационным банкам (ключ <b>/BASE*</b>). При
использовании нескольких ключей их необходимо разделять пробелом.</p>

Например, приём пополнения сетевой версией системы <b>"КонсультантПлюс:
ВерсияПроф"</b> будет выглядеть так:

<p style="color: #ff6633; font-family: furore; font-size: 14px;">Пример
запуска: CONS.EXE /ADM /RECEIVE /BASE_LAW /YES</p>

При запуске программы можно в командной строке использовать следующие
ключи:

<p><span style="font-family: furore; font-size: 16px;">/ADM</span> -
режим администратора. Служит для выполнения операций с информационным
банком сетевого варианта системы, для регистрации рабочих станций
сетевого варианта системы.</p>

<p><span style="font-family: furore; font-size: 16px;">/ANSWER</span> -
формирование пополнения по запросу.</p>

<p><span style="font-family: furore; font-size: 16px;">/BASE_xxx</span>
- выбрать нужную базу по имени из файла <b>BASELIST.CFG</b> (например,
<b>base_quest</b>).</p>

<p><span style="font-family: furore; font-size: 16px;">/BASE*</span> -
выполнить базовую операцию (например, принять пополнение) со всеми
Информациоными Банками, включенными в файл <b>BASELIST.CFG</b>.</p>

<p><span style="font-family: furore; font-size: 16px;">/BASETEST</span>
- проверить корректность Информационного Банка. В случае обнаружения
ошибок в Информационном Банке будет произведено автоматическое удаление
испорченных документов.</p>

<p><span style="font-family: furore; font-size: 16px;">/BASETEST-</span>
- проверить корректность Информационного Банка. В случае обнаружения
ошибок в Информационном Банке автоматического удаления испорченных
документов не будет.</p>

<p><span style="font-family: furore; font-size: 16px;">/CODEINFO</span>
- сформировать закодированный файл с информацией о РИЦ.</p>

<p><span style="font-family: furore; font-size: 16px;">/COMMON_CD</span>
- позволяет работать с директорией COMMON, предварительно записанной на
<b>CD-ROM/DVD</b> так, чтобы не строились общие словари на жестком диске.
Работает только для не сетевых комплектов.</p>

<p><span style="font-family: furore; font-size: 16px;">/COMPRESS</span>
- сжать информационный банк (файлы <b>*.DT</b>). Обращаем Ваше внимание, что
файлы словарей <b>*.NX</b> не сжимаются.</p>

<p><span style="font-family: furore; font-size: 16px;">/COPYPROXY</span>
- необходимый для групповой настройки прокси-сервера в сетях. При
запуске, в каталоге <b>BASE</b> сетевого комплекта создается файл <b>PROXY.CFG</b>. В
этот файл автоматически копируются настройки Прокси-сервера,
выполненные на станции администратора системы. После этого
все сетевые пользователи пытаются использовать настройки Прокси-сервера
из указанного файла.</p>

<p style="color: #ff6633; font-family: furore; font-size: 14px;">Пример
запуска: CONS.EXE /ADM /COPYPROXY</p>

<p><span style="font-family: furore; font-size: 16px;">/DEFBROWSER</span>
- заставляет ИП представляться браузером по умолчанию (ключ может быть
полезен, когда у клиента стоит запрет на подключение к Интернету любым
программам кроме Интернет-браузера).</p>

<p><span style="font-family: furore; font-size: 16px;">/GROUP</span> -
инсталляция рабочих станций.</p>

<p><span style="font-family: furore; font-size: 16px;">/INET</span> -
получения возможности запуска ИП через интерфейс системы.</p>

<p><span style="font-family: furore; font-size: 16px;">/INETTIMEOUT=&lt;таймаут
в минутах&gt;</span> - таймаут ожидания ответа от сервера (по
умолчанию, значение таймаута равно 3 минуты).</p>

<p><span style="font-family: furore; font-size: 16px;">/INET_EXT</span> - отправка анонимной технической информации в КЦ
(TRUE- опция включена, FALSE - опция выключена, NULL - не определен).</p>

<p style="color: #ff6633; font-family: furore; font-size: 14px;">Пример
запуска: CONS.EXE /ADM /RECEIVE_INET /INETTIMEOUT=10</p>

<p><span style="font-family: furore; font-size: 16px;">/I_SIZE=&lt;размер
файла в мегабайтах (целое число)&gt;</span> - использование ключа
позволяет указать максимальный размер для файлов, которые будут
закачиваться на компьютер.</p>

<p><span style="font-family: furore; font-size: 16px;">/NOINDEX</span>
- отключается индексация файлов: полностью <b>.NX2</b>, <b>.NX3</b>, <b>.NX4</b>, <b>.NX5</b>; частично <b>.NX1</b> и объединенных словарей.</p>

<p><span style="font-family: furore; font-size: 16px;">/NOREINDEX0</span>
- отказаться от формирования объединенных словарей (например, после
принятия пополнения).</p>

<p><span style="font-family: furore; font-size: 16px;">/NORUNNER</span>
- минимизировать бегунок на весь сеанс работы с базовыми операциями,
что позволяет нормально работать с другими приложениями во время
базовых операций.</p>

<p><span style="font-family: furore; font-size: 16px;">/MAKEQR</span> -
создать файлы запросов на регистрацию для всех ИБ комплекта.</p>

<p><span style="font-family: furore; font-size: 16px;">/OFF</span> -
отключить всех работающих пользователей (например, для замены ИБ).</p>

<p><span style="font-family: furore; font-size: 16px;">/QUEST</span> -
создать файл запроса.</p>

<p><span style="font-family: furore; font-size: 16px;">/RECEIVE</span>
- прием файлов пополнения.</p>

<p><span style="font-family: furore; font-size: 16px;">/RECEIVE_CD</span>
- автоприем пополнение с <b>CD-ROM</b>.</p>

<p><span style="font-family: furore; font-size: 16px;">/RECEIVEDIR=&lt;директория&gt;</span>
- директория для файлов пополнения и <b>.USR</b>.</p>

<p><span style="font-family: furore; font-size: 16px;">/RECEIVE_INET</span>
- прием файлов пополнения.</p>

<p style="color: #ff6633; font-family: furore; font-size: 14px;">Пример
запуска: CONS.EXE /ADM /BASE* /RECEIVE_INET /YES</p>

<p><span style="font-family: furore; font-size: 16px;">/RECEIVE_INET-</span>
- прием файлов пополнения (без приема в ИБ).</p>

<p style="color: #ff6633; font-family: furore; font-size: 14px;">Пример
запуска: CONS.EXE /ADM /BASE* /RECEIVE_INET- /YES /SENDDIR=D:\CONSUL\SEND
/RECEIVEDIR=D:\CONSULT\RECEIVE</p>

<p><span style="font-family: furore; font-size: 16px;">/RECEIVE_INET*</span>
- прием файлов пополнения по заранее подготовленным файлам запросов.<br>
</p>

<p style="color: #ff6633; font-family: furore; font-size: 14px;">Пример
запуска: CONS.EXE /RECEIVE_INET* /YES /SENDDIR=D:\CONSUL\SEND
/RECEIVEDIR=D:\CONSULT\RECEIVE</p>

<p><span style="font-family: furore; font-size: 16px;">/RECEIVE_RES</span>
- обновление технологического модуля без обновления ИБ.</p>

<p><span style="font-family: furore; font-size: 16px;">/REINDEX</span>
- полностью переиндексировать информационный банк.</p>

<p><span style="font-family: furore; font-size: 16px;">/REINDEXi</span>
- переиндексировать i-ю часть информационного банка.</p>

<p><span style="font-family: furore; font-size: 16px;">/REINDEX0</span>
- сформировать объединенные словари (файлы в директории <b>\BASE\COMMON</b>).</p>

<p><span style="font-family: furore; font-size: 16px;">/REG</span> -
зарегистрировать систему.</p>

<p><span style="font-family: furore; font-size: 16px;">/REG*</span> -
функционал аналогичен ключу <span style="font-family: furore; font-size: 16px;">/REG</span> за одним отличием - при обнаружении
корректных (своих) файлов <b>.AR</b> происходит принудительная
перерегистрация, даже если комплект ранее и был уже зарегистрирован.</p>

<p><span style="font-family: furore; font-size: 16px;">/SEPARATE</span>
- производится проверка наличия в комплекте ИБ, которые не обновлялись более 6 месяцев. 
Если они есть, то будет выдано сообщение «Внимание! Следующие ИБ не пополнялись более полугода:…. 
Эти ИБ будут выведены в отдельный комплект, при подтверждении (в созданном комплекте <b>/CONSULTANT.ARC</b> обязательно запустите построение объединенных словарей командой <b>CONS.EXE /ADM /REINDEX0</b>).</p>

<p><span style="font-family: furore; font-size: 16px;">/SENDDIR="директория"</span>
- директория для файлов запросов.</p>

<p><span style="font-family: furore; font-size: 16px;">/SENDUSR</span>
- позволяет в принудительном порядке присылать на сервер ИП от клиента
<b>.USR</b> файл при использовании ключей <b>/RECEIVE_INET-</b> и <b>/RECEIVE_INET*</b>.</p>

<p><span style="font-family: furore; font-size: 16px;">/SENDSTT</span>
- позволяет отправлять файлы статистики *.STT напрямую в КЦ от клиента.</p>

<p style="color: #ff6633; font-family: furore; font-size: 14px;">Пример
запуска: CONS.EXE /ADM /RECEIVE_INET /BASE* /YES /SENDSTT <span style="color: #000000">(в сетевой версии <b>STT</b>-файлы берутся из каталога <b>/ADM/STS</b> и после успешной отправки удаляются)</span><br>
CONS.EXE /ADM /RECEIVE_INET- /BASE* /YES /SENDUSR /SENDSTT <span style="color: #000000">(<b>STT</b>-файлы берутся из каталога <b>/CONS.CFG</b>)</span><br>
CONS.EXE /RECEIVE_INET* /BASE* /YES /SENDUSR /SENDSTT <span style="color: #000000">(<b>STT</b>-файлы берутся из каталога <b>/RECEIVE</b>, куда их необходимо вручную положить)</span></p>

<p><span style="font-family: furore; font-size: 16px;">/SYSTEM</span> –
отображение дополнительной служебной информации в разделе "Статистика"
и в карточке реквизитов.</p>

<p><span style="font-family: furore; font-size: 16px;">/TEST</span> -
проверка исправности файлов <b>CONS.EXE</b> и <b>VR*.RES</b>.</p>

<p><span style="font-family: furore; font-size: 16px;">/USERSDIR=&lt;директория&gt;</span>
- директория для файлов статистики обработки запросов.</p>

<p><span style="font-family: furore; font-size: 16px;">/USERNAME</span>
- получить сетевое имя пользователя. Результат помещается в файл
<b>USERNAME.TXT</b>, формируемый в рабочей директории.</p>

<p><span style="font-family: furore; font-size: 16px;">/USR</span> -
сформировать файлы <b>.USR.</b></p>

<p><span style="font-family: furore; font-size: 16px;">/YES</span> -
"пакетный" режим работы с системой.</p>

<p><span style="font-family: furore; font-size: 16px;">/ZAP</span> -
обнулить информационный банк.</p>

<p>Обращаем Ваше внимание, что если Вы используете командный файл, например, для
автоматизации процессов информационного обслуживания, в каждой его
строке перед вызовом 32-х разрядного приложения необходимо указывать
команду <b>START /W</b>.</p>

<p style="color: #ff6633; font-family: furore; font-size: 14px;">Пример
запуска:<br>
start /w cons.exe /quest /base* /yes<br>
start /w cons.exe /adm /receive /base* /yes</p>

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