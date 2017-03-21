<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="ru"><head><title>Такском-Файлы</title>
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon/>
  <META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html"; charset="utf-8">
  <META NAME="Description" CONTENT="Система электронной отчётности "Такском"">
  <META NAME="Keywords" CONTENT="Такском, сервис, файлы">
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
<marquee style="height: 36px;" behavior="ALTERNATE" scrollamount="4" direction="right" bgcolor="#9cbfdc"><p style="font-family: furore; font-size: 24px; font-weight: bold; margin-top: 4px; height: 47px;">Перечень инструкций, доступных для скачивания к системе "Taxcom"</p></MARQUEE>
 <p>
 <a href="ftp://zakon.karelia.ru/Taxcom/Instruction/instr_po_nastr_APM_dlja_ETP_SberBank-ACT.pdf">Инструкция по настройке АРМ для работы с ЭТП Сбербанк-АСТ</a><br /><br />
 <a href="ftp://zakon.karelia.ru/Taxcom/Instruction/instr_PO_Online-Sprinter_v1.7.pdf">Программный комплекс - Онлайн-Спринтер (Руководство пользователя)</a><br /><br />
 <a href="ftp://zakon.karelia.ru/Taxcom/Instruction/instr_PO_Sprinter_v2.3.pdf">Программный комплекс - Спринтер (Руководство пользователя)</a><br /><br />
 <a href="ftp://zakon.karelia.ru/Taxcom/Instruction/instr_po_poluc_sert_kluca_podp_s_marker_vrem_dostupa.pdf">Инструкция по получению сертификата ключа подписи c использованием маркера временного доступа</a><br /><br />
 <a href="ftp://zakon.karelia.ru/Taxcom/Instruction/instr_po_zamene_sert_kluca_podpisi.pdf">Инструкция по замене сертификата ключа подписи</a><br /><br />
 <a href="ftp://zakon.karelia.ru/Taxcom/Instruction/instr_po_ustan_Alcogol.txt">Инструкция по Росалкогольрегулированию</a><br /><br />
 <a href="ftp://zakon.karelia.ru/Taxcom/Instruction/instr_po_ustan_kluca_eToken_1.33.txt">Инструкция по установке ключа eToken</a><br /><br />
 <a href="ftp://zakon.karelia.ru/Taxcom/Instruction/PIN_RuToken.pdf">PIN пароли к ruToken</a><br /><br />
 <a href="ftp://zakon.karelia.ru/Taxcom/Instruction/eToken_GOST_(isp_1-5)._Pravila_ispolzovanija.pdf">Инструкция по правилам пользования eToken ГОСТ</a><br /><br />
 <a href="ftp://zakon.karelia.ru/Taxcom/Instruction/instr_po_ustan_ jacarta.pdf">Инструкция по установке ключа JaCarta</a><br /><br />
 <a href="ftp://zakon.karelia.ru/Taxcom/Instruction/instr_po_nastr_jacarta_c_kriptopro_csp_3.0.pdf">Инструкция по настройке JaCarta для работы с КриптоПро CSP 3.0</a><br /><br />
 <a href="ftp://zakon.karelia.ru/Taxcom/Instruction/eToken_PKI_Client_5_1_SP_ruk_adm.pdf">eToken PKI Client (Руководство администратора)</a><br /><br />
 <a href="ftp://zakon.karelia.ru/Taxcom/Instruction/eToken_GOST_(isp_1-5)._Pravila_ispolzovanija.pdf">eToken PKI Client (Руководство пользователя)</a><br /><br />
 </p>
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
</body>