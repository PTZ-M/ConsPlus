<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>КонсультантПлюс-Проблемы</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon/>
  <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html"; charset="utf-8">
  <META NAME="Description" CONTENT="КонсультантПлюс - ответные ошибки системы">
  <META NAME="Keywords" CONTENT="КонсультантПлюс, сервис, ошибки, проблемы">
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
<p style="font-family: furore; font-size: 24px; font-weight: bold; margin-top: 4px; height: 47px;">ПРОБЛЕМЫ ПРИ РАБОТЕ С СИСТЕМОЙ "КОНСУЛЬТАНТПЛЮС"</p></marquee>
<p><span style="color: #ff0066; font-family: furore; font-size: 16px;">При запуске системы выдаются сообщения о необходимости разграничить права доступа.</span><br /></p>
<p>Необходимо сделать следующее:<br />
1. Установить типы установленных в системе баз (локальные и сетевые).<br />
2. Создать в <b>\CONSPLUS\BASE</b> текстовой файл "<b>userlist.cfg</b>" вида:<br />
"<b>Название DIN файла комплекта</b>" "<b>Имя учётной записи администратора компьютера, на котором установлена сама система</b>" "<b>Имя учётной записи конечного пользователя</b>"<br />
<p style="color: #ff6633; font-family: furore; font-size: 14px;">Пример вида, для локального пользователя: <b>JUR Administrator Administrator</b><br />
Пример вида, для удалённого сетевого пользователя: <b>BUH Administrator Елена</b></p>
<p>При наличии файла прав доступа - <b>userlist.cfg</b>, проверьте правильность написания сетевого имени (логина) данного пользователя, если сетевое имя содержит русские буквы, его необходимо писать в windows кодировке.<p>
<p><span style="color: #ff0066; font-family: furore; font-size: 16px;">При запуске системы выдаются сообщения об отсутствии файлов (сетевая версия).</span><br /></p>
<p>Подобная ошибка зафиксирована на серверных версиях ОС Windows и связана со специфической настройкой общего доступа к файлам и папкам.</p>
<p>Необходимо сделать следующее:<br />
1. Отменить <b>"Общий доступ"</b> на папку <b>\CONSULTANT</b> и файлы в ней, после чего перезагрузить сервер.<br />
2. Установить <b>"Общий доступ"</b> на папку <b>\CONSULTANT</b> и файлы в ней, после чего перезагрузить сервер.<br />
3. Проверить, что антивирус/файервол не блокирует файлы <b>.exe</b> и <b>.res</b> из папки <b>\CONSULTANT</b>.<br />
<p><span style="color: #ff0066; font-family: furore; font-size: 16px;">При работе с телекоммуникационным роботом конечные пользователи не получают обновления.</span><br /></p>
<p>Необходимо сделать следующее:<br />
1. Проверить папку <b>COMAR.UPLOADS.OK</b> на наличие файлов запросов от конечный пользователей (файлы с расширением <b>*.QST</b>),<br />
2. При наличии запросов переместить их в папку <b>\CONSULTANT\RECEIVE</b> и из оболочки программы обработать их ("<b>Файл</b>" - "<b>Сервис</b>" - "<b>Сформировать пополнение</b>" - "<b>Пополнение по запросу</b>"), при их отсутствии, запустив систему с ключами ("<b>/ADM /QUEST /BASE*</b>"),<br />
3. Ответы на обработанные запросы из папки <b>\CONSULTANT\SEND</b> поместить в папку <b>\COMAR.RENEWS\COMMON</b>,<br />
4. По <b>"Монитору"</b> проследить за скачкой сформированных ответов клиентами,<br />
5. Почистить папку "<b>\Temp</b>" от файла <b>.xml</b> у конечного клиента (возможно "залипание" очереди).</p>
<p>Если конечные клиенты так и не получают обновление, следует обратиться к администратору за проверкой:<br />
1. Стабильности канала от сервера до конечных клиентов;<br />
2. Правильности заполнения списка клиентов в телекоммуникационном роботе;<br />
3. Правильности настройки транспортного модуля телекоммуникационного робота у конечного клиента;<br />
4. Правильности настройки модуля вкачки телекоммуникационного робота у конечного клиента (запуск с правами администратора, при отключённой системе "КонсультантПлюс").</p>
<p><span style="color: #ff0066; font-family: furore; font-size: 16px;">У клиентов при работе с <b>"Конструктором договоров"</b> выходят ошибки.</span><br /></p>
<p>Коды ошибок:<br />
<b>3</b> - Главная система комплекта отключена от сопровождения.<br />
<b>4</b>, <b>5</b>, <b>6</b> - Несоответствие дистрибутива пользователя с имеющимися данными о нем в КЦ. Для исправления ошибки нужно переслать файл <b>CONS*.RGT</b> в КЦ.<br />
<b>7</b> - Запущено слишком много сессий обращения к <b>"Конструктору договоров"</b>. Ошибка возникает, если количество сессий больше, чем количество рабочих станций этого дистрибутива.<br />
<b>13</b>, <b>14</b> - Неверные параметры запуска <b>"Конструктора договоров"</b>. Для исправления ошибки нужно проверить правильность установленных даты/времени на клиентской машине и перезапустить <b>"Конструктор договоров"</b>.</p>
<p><span style="color: #ff0066; font-family: furore; font-size: 16px;">Запуск под Linux Mint сетевой станции.</span><br /></p>
<p>1. Устанавливаем эмулятор среды ОС Windows — <b>Wine</b><br />
2. Запускаем <b>Настройка Wine</b>, дожидаемся принятия параметров и во вкладке <b>Графика</b> снимаем галки с <b>Разрешить менеджеру окон управлять окнами Wine</b>.<br />
3. Запускаем <b>fstab</b> через терминал под суперпользователем<br />
sudo nano /etc/fstab<br />
4. Редактируем <b>fstab</b><br />
//192.168.12.222/veda /home/admin/cons cifs auto,user,username=*****,password=*****,iocharset=utf8,file_mode=0777,dir_mode=0777 0 0<br />
5. Через оболочку конфигурации подключаем примонтированную папку как сетевой диск<br />
6. Запускаем в примонтированной папке <b>cons.exe</b> через <b>Wine</b><br />
7. На все запросы и ошибки нажимаем "<b>ОК</b>"<br />
8. На рабочем столе, заходим в свойства ярлыка "<b>ConsultantPlus</b>" в раздел "<b>команда</b>" и дописываем ключ <b>/yes</b> в самом конце<br />
9. На сервере запускаем "<b>КонсультантПлюс</b>" с правами админа и нажимаем на регистрацию станций.<br />
10. После регистрации перезапускаем "<b>КонсультантПлюс</b>" на клиентской машине.</p>
Больше информации:<br />
http://miloserdov.org/?article=57<br />
http://www.free-cons.com/index.php?/topic/9/<br />
http://www.naulinux.ru/documentation/HowTo/konsultant-plyus<br />
http://linuxforum.ru/viewtopic.php?pid=136331#p136331<br />
<p>
Качаем wine@etersoft network<br />
необходимы пакеты:<br />
wine-etersoft_1.0.12-eter7ubuntu_i386.deb
wine-etersoft-network_1.0.12-eter12ubuntu_i386.deb
etercifs_4.5.3-eter1ubuntu_all.deb
dkms-etercifs_4.5.3-eter1ubuntu_all.deb
wine-etersoft-gl_1.0.12-eter7ubuntu_i386.deb
fonts-ttf-liberation_1.04-eter1ubuntu_all.deb<br />
*первые два обязательно, остальные по желанию<br />

Файл лицензии копируем в /etc/wine либо ~/.wine<br />

Копируем пакеты например в /tmp/wine запускаем терминал и устанавливаем<br />

sudo dpkg -i /tmp/wine/*.deb<br />


создаем каталог для консультанта (например /home/freecons/wine_c/veda ) и копируем туда основные файлы К+<br />
*т.к. *nix системы чувствительны к регистру, я все файлы перевести в верхний.<br />

первый запуск консультанта (все там же в терминале)<br />

wine --workdir "c:\veda" "c:\veda\cons.exe" /adm <br />

выскакивает стндарное окно первого запуска, и окно с ошибкой о необходимости регистрации<br />

регистрируем систему удобным для вас способом<br />

wine --workdir "c:\veda" "c:\veda\cons.exe" /LINUX /REG<br />

Ключ /LINUX применяется вместе с драйвером - сonslin<br />

система зарегистрирована, можно работать<br />

На рабочем столе появляется ярлык, чтобы запускать консультант через него, необходимо в свойствах добавить права выполнения<br />

Ключи запуска можно задавать в этом же ярлычке (если нет желания запускать К+ через консль)<br />

сетевую версия Консультант Плюс нормально запускается при корректном монтировании сетевого диска. Следует обратить особое внимание на параметры:<br />

noperm, forcemand и direct.<br />

Может оказаться, что достаточно будет добавить лишь опцию noperm, но если работать не будет, то рекомендую добавить опции forcemand и direct.<br />

Примеры монтирования сетевого диска для Консультант Плюс:<br />

строчка из /etc/fstab (NauLinux 5.2):<br />

//172.18.1.201/veda /mnt/veda  cifs  rw,user,noperm,username=user,password=  0 0<br />

строчка из /etc/fstab (ALT Linux 4.0):<br />

//172.18.1.201/veda /mnt/veda  cifs  rw,user,noperm,forcemand,direct,\codepage=cp866,iocharset=utf8,username=user,password=  0 0<br />
</p>
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