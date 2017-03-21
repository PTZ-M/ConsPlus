<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>КонсультантПлюс-Ответные ошибки</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon/>
  <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html"; charset="utf-8">
  <META NAME="Description" CONTENT="Компьютерная справочно-правовая система "КонсультантПлюс" и её коды ошибок">
  <META NAME="Keywords" CONTENT="КонсультантПлюс, сервис, ошибки">
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
<p style="font-family: furore; font-size: 24px; font-weight: bold; margin-top: 4px; height: 47px;">КОДЫ ОШИБОК ПРИСЫЛАЕМЫЕ СИСТЕМОЙ "КОНСУЛЬТАНТПЛЮС"</p></marquee>
<p style="color: #ff0066; font-family: conyregular; font-weight: bold; font-size: 24px;">Коды возврата при работе в пакетном режиме (ERRORLEVEL).</p>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1</span> - Для работы программы не хватает оперативной памяти.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">2</span> - Испорчен словарь каталога документов (файл <b>.NX1</b>).<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">3</span> - Отсутствие свободного места на диске или диск неисправен.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">4</span> - Файл информационного банка <b>.DT</b> испорчен или  нет  прав  на  его чтение.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">5</span> - Файл словарей информационного банка <b>.NX</b> испорчен или  нет  прав на его чтение.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">6</span> - Не найден один из файлов информационного банка <b>.DT</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">7</span> - Не найден словарь информационного банка <b>.NX</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">8</span> - Указанная операция невозможна. Проблемы с регистрацией системы.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">9</span> - Система занята другим пользователем.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">10</span> - Внутренняя ошибка. Указанная операция невозможна. Возможно, испорчен технологический модуль <b>VR*.RES</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">11</span> - Не найдены файлы ответов <b>.ANS</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">12</span> - Не найдены файлы запросов <b>.QST</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">13</span> - Ошибка в файле ответа <b>.ANS</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">14</span> - Ошибка в файле рубрикатора <b>.KUB</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">15</span> - Ошибка в файле запроса <b>.QST</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">16</span> - Ошибка в файле регистрации <b>.RGT</b> или <b>.BIS</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">17</span> - Ошибка в файле <b>.INI</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">18</span> - Ошибка при загрузке списка документов для обновления словарей из файла информационного банка (<b>.DT</b>).<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">19</span> - Ошибка в параметрах командной строки.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">20</span> - Указанная операция выполняется только с машины администратора.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">21</span> - Ошибка инициализации информационного банка.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">22</span> - Выполняемая операция прервана пользователем.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">23</span> - Ошибка чтения служебных структур базы.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">24</span> - Используется устаревшая версия технологического модуля <b>VR*.RES</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">25</span> - База не соответствует эталонной.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">26</span> - <b>/BASETEST</b> обнаружил ошибки.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">27</span> - Попытка обработать  запрос  от  подчиненной  базы  Информационным Центром основной.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">28</span> - Испорчен файл <b>CONS.EXE</b> или <b>VR*.RES</b>. Возможно заражение вирусом или не зарегестрирован на сервере.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">31</span> - Не удалось запустить файл <b>.RES</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">32</span> - Нет файла для обработки.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">33</span> - Система перенесена на другой компьютер.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">34</span> - Ошибка инициализации (например, отсутствует <b>CONSULT.TOR</b>, <b>DIN</b> файлы).<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">36</span> - Ошибка при создании или обработке файла запроса <b>.QST</b>.<br>
<p style="color: #ff0066; font-family: conyregular; font-weight: bold; font-size: 24px;">Коды возврата при работе в пакетном режиме на Интернет-пополнении.</p>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">70</span> - Комплект не требует обновлений (<b>RES</b> модуль не требует обновления).<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">71</span> - На сервере производится обновление информационных банков.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">72</span> - Неполадки на сервере (сервер доступен, но работает с ошибками).<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">73</span> - Отсутствует подключение к Интернет или сервер не доступен.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">74</span> - На сервере не получено ни одного <b>.QST</b> файла  или  все <b>.QST</b> файлы, полученные сервером, испорчены.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">75</span> - В каталоге <b>\SEND</b> нет <b>.QST</b> файлов на отправку или они испорчены.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">76</span> - Комплект не сопровождается или давно не обновлялся.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">77</span> - Ошибка при разархивации пополнений, полученных с сервера.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">78</span> - Ошибка авторизации клиента на сервере ИП.<br>
<p style="color: #ff0066; font-family: conyregular; font-weight: bold; font-size: 24px;">Коды ошибок хоста сервера Интернет-пополнения</p>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1003</span> - не прошла инициализация программы (нет <b>CONSULT.TOR</b> и пр.).<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1004</span> - не удалось создать файл с результатами (<b>RESULT.TXT</b>).<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1005</span> - в директории <b>\RECEIVE</b>, временного каталога сессии, нет файлов <b>.QST</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1006</span> - не хватает оперативной памяти для обработки <b>.QST</b> файлов.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1007</span> - не существует директории <b>\RECEIVE</b> во временном каталоге сессии.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1008</span> - не существует директории <b>\SEND</b> во временном каталоге сессии.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1009</span> - не существует директории <b>\USERS</b> во временном каталоге сессии.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1010</span> - не существует директории с кэшем сервера ИП.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1011</span> - все <b>.QST</b> файлы, пришедшие от клиента, испорчены.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1012</span> - все системы клиента, по которым пришли <b>.QST</b> файлы, не сопровождаются.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1013</span> - все системы клиента, по которым пришли <b>.QST</b> файлы, не зарегистрированы.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1014</span> - все ИБ клиента, по которым пришли <b>.QST</b> файлы, старше 3-х месяцев (по сопровождаемым системам).<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1015</span> - хотя бы один ИБ клиента, по которым пришли <b>.QST</b> файлы, старше 3-х месяцев (по сопровождаемым системам).<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1016</span> - прочие комбинации ошибок в файлах <b>.QST</b>, из-за которых не созданы <b>.ANS</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1017</span> - в директории <b>\SENDRES</b> несколько файлов <b>.RES</b> одного типа.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1019</span> - необходимо перерегистрировать хост "КонсультантПлюс" сервера ИП.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1020</span> - не найдено ни одного подходящего ИБ для отработки <b>.QST</b>.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1021</span> - попытка изготовления <b>.ANS</b> на неактуальном ИБ хоста сервера ИП.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1022</span> - ошибка паковки файлов пополнений.<br>
<span style="color: #ff0066; font-family: furore; font-size: 16px;">1023</span> - среди пришедших от клиента файлов есть файлы <b>.QST</b> от несопровождаемых систем.<br>
<br>
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