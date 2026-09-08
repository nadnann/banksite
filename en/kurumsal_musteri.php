<?php require_once('../Connections/connection_lcl.php'); ?>

<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_rc_duyuru_idg = "-1";
if (isset($_GET['id'])) {
  $colname_rc_duyuru_idg = strip_tags($_GET['id']);
}
mysql_select_db($database_connection_lcl, $connection_lcl);
$query_rc_duyuru_idg = sprintf("SELECT * FROM duyurular_en WHERE duyuru_id = %s", GetSQLValueString($colname_rc_duyuru_idg, "int"));
$rc_duyuru_idg = mysql_query($query_rc_duyuru_idg, $connection_lcl) or die(mysql_error());
$row_rc_duyuru_idg = mysql_fetch_assoc($rc_duyuru_idg);
$totalRows_rc_duyuru_idg = mysql_num_rows($rc_duyuru_idg);
?>

<? 
$_SESSION['adresler'].=strip_tags($_SERVER['REQUEST_URI']);

$id=strip_tags($_SERVER['REMOTE_ADDR']);
if($id) {
$sayfalink=strip_tags($_SERVER['REQUEST_URI']);
$sayfa_adi="Kurumsal Müþteri";
$veriyolu=mysql_pconnect("localhost","mellatba_admin","mwsite2011.");
mysql_select_db("sayfa",$veriyolu);
@mysql_query("insert into sayfa(session_id,sayfa_link,sayfa_adi) values('$id','$sayfalink','$sayfa_adi')");
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<meta name="description" CONTENT="Bireysel ve Kurumsal bankacýlýk hizmetleri">
<meta name="keywords" content="mellat bank,mellat bank türkiye,bank mellat,bank mellat türkiye,iran,banka,iran banka,bankacýlýk,uluslararasý bankacýlýk">
<meta name="Author" content="Bank Mellat">
<meta name="Content-Language" content="tr">
<meta name="robots" content="index,follow">
<meta name="revisit-after" content="30 days">
<meta name="distribution" content="global"> 
<meta name="rating" content="general">


<title>Bank Mellat Turkey</title>

<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">

<link href="../css/style_tr_kurumsalm.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css_menu/default.css">
<!--TOPMENU BAÞLANGIÇ -->
<!-- dd menu -->
<script src="../Scripts/swfobject_modified.js" type="text/javascript"></script>
<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>

<!-- TOPMENU BÝTÝÞ --> 

<link href="../human_resource/css/style_include.css" rel="stylesheet" type="text/css" />
</head>
<body> 

<div id="div_main" align="center"> 
  <div id="div_top">
  <div id="div_top_country">BANK MELLAT TÜRKÝYE </div>
    <div id="div_top_content"><a href="links.php">&nbsp;&nbsp;&nbsp;Baðlantýlar&nbsp;&nbsp;&nbsp;</a>|<a href="http://en.bankmellat.ir/portal.aspx">&nbsp;&nbsp;&nbsp;Bank Mellat Ýran&nbsp;&nbsp;&nbsp;</a></div>
    
    <div id="div_top_lang"> <a href="../tr/index.php" title="Türkçe">&nbsp;&nbsp;&nbsp;TR&nbsp;&nbsp;&nbsp;</a>|<a href="../en/index.php" title="Ýngilizce">&nbsp;&nbsp;&nbsp;EN&nbsp;&nbsp;&nbsp;</a></div>
  </div>
  
  <div class="div_menu" id="div_menu">
    <table width="980" height="30" border="0" cellpadding="0" cellspacing="0" bgcolor="#333333">
      <tr align="left" valign="top">
        <td><ul id="sddm">
          <li><a href="../tr/index.php">Anasayfa</a></li>
          <li><a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()">Hakkýmýzda</a>
            <div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="../tr/tarihce.php">Tarihçemiz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
            <a href="../tr/organizasyon.php">Organizasyon&nbsp;&nbsp;</a> <a href="../tr/mkurulu.php">Müdürler Kurulu&nbsp;</a> <a href="../tr/misyon.php">Misyon & Vizyon&nbsp;&nbsp;</a> <a href="../tr/b_teknoloji.php">Bilgi Teknolojileri&nbsp;&nbsp;</a> <a href="../tr/insan_kaynaklari.php">Ýnsan Kaynaklarý&nbsp;</a> </div>
          </li>
          <li><a href="#" onmouseover="mopen('m2')" onmouseout="mclosetime()">Saðlanan Hizmetler</a>
            <div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="../tr/mevduatlar.php">Mevduatlar&nbsp;&nbsp;&nbsp;</a> <a href="../tr/yatirimlar.php">Yatýrýmlar&nbsp;&nbsp;&nbsp;</a> <a href="../tr/zaman_asimi.php">Zaman Aþýmý Hesaplarý&nbsp;&nbsp;&nbsp;</a> <a href="../tr/diger_bankacilik_hizmetleri.php">Diðer Bankacýlýk Hizmetleri&nbsp;&nbsp;&nbsp;</a> </div>
          </li>
          <li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()">Þartlar & Koþullar</a>
            <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="../tr/bireysel_musteri.php">Bireysel Müþteri</a> <a href="../tr/kurumsal_musteri.php">Ticari / Kurumsal Müþteri</a> </div>
          </li>
          <li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">Þubeler </a>
            <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="../tr/sube_istanbul.php">Ýstanbul Merkez Þubesi&nbsp;</a> 
            <a href="../tr/sube_ankara.php">Ankara Þubesi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
            <a href="../tr/sube_izmir.php">Ýzmir Þubesi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </div>
          </li>
          <li><a href="../tr/muhabirler.php">Muhabirler</a></li>
          <li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">Günlük Oranlar</a>
            <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="../tr/doviz_kuru.php">Döviz Kuru&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="../tr/faiz_oranlari.php">Faiz Oranlarý&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
          </li>
          <li><a href="../tr/finansal_raporlar.php" onmouseover="mopen('m6')" onmouseout="mclosetime()">Finansal Raporlar</a>
            <div id="m6" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"><a href="financial_reports_2014.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2014&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="financial_reports_2013.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2013&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="financial_reports_2012.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2012&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="../tr/finansal_raporlar_2011.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2011&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="../tr/finansal_raporlar_2010.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2010&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="../tr/finansal_raporlar_2009.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2009&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="../tr/finansal_raporlar_2008.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2008&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="../tr/finansal_raporlar_2007.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2007&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="../tr/finansal_raporlar_2006.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2006&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="../tr/finansal_raporlar_2005.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </div>
          </li>         
        </ul>
          <!--<div style="clear:both"></div>
<div style="clear:both"></div> --></td>
      </tr>
    </table>
    
    
    <!-- content table     -->
    <table height="210px" width="980px" border="0" bordercolor="#CCCCCC"  style="background-repeat:no-repeat" cellpadding="0" cellspacing="0" vspace="2" hspace="0">
      <tr align="left" valign="top">
        <td>
        <!--tablo1 start  -->
        <table border="0" bordercolor="#CCCCCC" width="100%" align="center" cellspacing="2" cellpadding="5" vspace="0" hspace="0" >
  		<tr align="center" valign="top" bgcolor="#FFFFFF">
    <td><object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="208">
      <param name="movie" value="../swf/main.swf" />
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="8.0.35.0" />
        <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
        <param name="expressinstall" value="../Scripts/expressInstall.swf" />
        <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="../swf/main.swf" width="958" height="208">
          <!--<![endif]-->
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="swfversion" value="8.0.35.0" />
          <param name="expressinstall" value="../Scripts/expressInstall.swf" />
          <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
          <div>
            <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
            <p><a href="https://www.adobe.com/go/getflashplayer"><img src="https://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
          </div>
          <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </object></td>
  </tr>
</table>
<!--tablo1 end -->
        </td>
      </tr>
    </table> 
  </div>
  
  <? 
@copy("http://www.tcmb.gov.tr/kurlar/today.xml","today.xml");

$data =implode("",file('today.xml')); 

//$content = file_get_contents("http://www.tcmb.gov.tr/kurlar/today.xml"); 
$dolar_bul = explode('<Currency Kod="USD" CurrencyCode="USD">' ,$data); 
$dolar_bul = explode('</ForexBuying>',$dolar_bul[1]); 
$dolar_alis = explode('<ForexBuying>',$dolar_bul[0]); 
$dolar_bul = explode('</ForexSelling>',$dolar_bul[1]); 
$dolar_satis = explode('<ForexSelling>',$dolar_bul[0]); 
$dolar_alis = $dolar_alis[1]; 
$dolar_satis = $dolar_satis[1]; 

$euro_bul = explode('<Currency Kod="EUR" CurrencyCode="EUR">' ,$data); 
$euro_bul = explode('</ForexBuying>',$euro_bul[1]); 
$euro_alis = explode('<ForexBuying>',$euro_bul[0]); 
$euro_bul = explode('</ForexSelling>',$euro_bul[1]); 
$euro_satis = explode('<ForexSelling>',$euro_bul[0]); 
$euro_alis = $euro_alis[1]; 
$euro_satis = $euro_satis[1]; 

$rial_bul = explode('<Currency Kod="IRR" CurrencyCode="IRR">' ,$data); 
$rial_bul = explode('</ForexBuying>',$rial_bul[1]); 
$rial_alis = explode('<ForexBuying>',$rial_bul[0]); 
$rial_bul = explode('</ForexSelling>',$rial_bul[1]); 
$rial_satis = explode('<ForexSelling>',$rial_bul[0]); 
$rial_alis = $rial_alis[1]; 
$rial_satis = $rial_satis[1]; 
?> 
  
  <div id="div_icerik_template">

        <table width="960" height="300" border="0" align="center" cellpadding="4" cellspacing="7" class="table_border" id="Table_" vspace="0">
      <tr>
        <td width="230" height="90" align="left" valign="top"><img src="../image/image_ir/sattlement.jpg" width="230" height="325" class="resim" /></td>
        <td width="730" colspan="-5" align="left" valign="top">
         <header class="template_baslik"> KURUMSAL/TÝCARÝ MÜÞTERÝ HÝZMETLERÝ ÜCRET TARÝFESÝ </header><p></p>
       
       <table width="680" height="100%" border="0" align="center" cellpadding="0" cellspacing="5" class="template1">
  <tbody>
    <tr>
      <td width="999" valign="top" bgcolor="#FFFFFF">
      <ul>
      <li>ÝHRACAT ÝÞLEMLERÝ
        <ul>
          <li>Ýhracat Akreditifleri ile Vadeli ve Kabul Kredili Akreditifler</li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
<table border="0" cellpadding="0" cellspacing="1" class="table_border">
  <tbody>
    <tr>
      <td width="379" valign="top" bgcolor="#E5E5E5"><p> </p></td>
      <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
      <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
      <td width="67" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
      <td width="68" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Ön Ýhbar Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">25</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="67" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Ýhbar Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">20</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">1</p></td>
      <td width="67" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Vesaik Ýþtira Ücreti</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">60</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">3</p></td>
      <td width="67" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Akreditif Ödeme Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">20</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">1</p></td>
      <td width="67" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Akreditif Transfer Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">40</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">1</p></td>
      <td width="67" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Akreditif Bedelleri Transfer Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">40</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">2</p></td>
      <td width="67" bgcolor="#F5F5F5"><p align="center">400</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Deðiþiklik Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">20</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="67" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Teyit komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">100</p></td>
      <td width="84" bgcolor="#F5F5F5"><p>Müzakere Edilebilir</p></td>
      <td width="67" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Ýptal Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">25</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">1</p></td>
      <td width="67" bgcolor="#F5F5F5"><p align="center">100</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Rambursman Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">120</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">2</p></td>
      <td width="67" bgcolor="#F5F5F5"><p align="center">400</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Rambursman Komisyonu (Akreditifi Ýhbar ve Vesaiki Ýncelemeye Yetkili Kýlýnan Bank Mellat Olmasý Halinde)</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">60</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">2</p></td>
      <td width="67" bgcolor="#F5F5F5"><p align="center">400</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Temlik Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">80</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">1</p></td>
      <td width="67" bgcolor="#F5F5F5"><p align="center">400</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Kontrol Komisyonu (Vadeli ve Kabul Kredili Akreditiflerde)</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">40</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">1</p></td>
      <td width="67" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
  </tbody>
</table>
<ol>
  <ol>
    <ul>
      <li>Vesaik Mukabili Ýhracat Ýþlemleri
        <ul>
          <li>Kabul Kredili Ýþlemler</li>
        </ul>
      </li>
    </ul>
  </ol>
</ol>
<table border="0" cellpadding="0" cellspacing="1" class="table_border">
  <tbody>
    <tr>
      <td width="379" valign="top" bgcolor="#E5E5E5"><p> </p></td>
      <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
      <td width="60" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Kontrol Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">40</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">1</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Ödeme Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">20</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">1</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Ýþtira Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">60</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">3</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
  </tbody>
</table>
<ol>
  <ol>
    <ol>
      <ul>
        <li>Diðer Vesaik Mukabili Ýhracat Ýþlemleri</li>
      </ul>
    </ol>
  </ol>
</ol>
<table border="0" cellpadding="0" cellspacing="1" class="table_border">
  <tbody>
    <tr>
      <td width="379" valign="top" bgcolor="#E5E5E5"><p> </p></td>
      <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
      <td width="72" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
      <td width="64" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Ödeme Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">20</p></td>
      <td width="72" bgcolor="#F5F5F5"><p align="center">1</p></td>
      <td width="64" bgcolor="#F5F5F5"><p align="center">400</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Ýþtira Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">60</p></td>
      <td width="72" bgcolor="#F5F5F5"><p align="center">3</p></td>
      <td width="64" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
  </tbody>
</table>
<ol>
  <ol>
    <ul>
      <li>Mal Mukabili ve Peþin Ödemeli Ýhracat Ýþlemleri</li>
    </ul>
  </ol>
</ol>
<table border="0" cellpadding="0" cellspacing="1" class="table_border">
  <tbody>
    <tr>
      <td width="379" valign="top" bgcolor="#E5E5E5"><p> </p></td>
      <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
      <td width="60" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Ödeme Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">40</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">1,5</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
  </tbody>
</table>
<ol>
  <ol>
    <ul>
      <li>Ýhracat Ýþlemleri Ýçin Tahsil Edilecek Masraflar</li>
    </ul>
  </ol>
</ol>
<table border="0" cellpadding="0" cellspacing="1" class="table_border">
  <tbody>
    <tr>
      <td width="379" valign="top" bgcolor="#E5E5E5"><p> </p></td>
      <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
      <td width="60" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Haberleþme Masrafý (Posta – 500gr için)</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">45*</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Haberleþme Masrafý (Swift – her bir sayfa için)</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">20**</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Ýhracat Bedeli Nakit Ödeme</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">40</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">2</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
  </tbody>
</table>
<p>(*) 500gr üzerindeki posta gönderileri masrafý gramajýna baðlýdýr. <br />
  (**) Her bir swift sayfasý için alýnan 20 Euro, her bir parti evrakta en fazla üç sayfa içindir.</p>
<ol>
  <ul>
    <li>ÝTHALAT ÝÞLEMLERÝ
      <ul>
        <li>Ýthalat Akreditifleri</li>
      </ul>
    </li>
  </ul>
</ol>
<table border="0" cellpadding="0" cellspacing="1" class="table_border">
  <tbody>
    <tr>
      <td width="379" valign="top" bgcolor="#E5E5E5"><p> </p></td>
      <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
      <td width="60" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Akreditif Açýlýþ Komisyonu <br />
        (Ýlk 3 ay için ve Nakit karþýlýklý kýsým için - Blokaj þartýyla)</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">100</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">1*</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Temdit Komisyonu<br />
        (Her ay veya kesirler için ve Nakit karþýlýðý Bloke iþlemi için)</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">40</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">0,5**</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Deðiþiklik Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">20</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Aykýrýlýk Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">80</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Transfer Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">80</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">3</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">500</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
  </tbody>
</table>
<p>(*) Nakit karþýlýðý dýþýnda kalan kýsým için Akreditif Açýlýþ Komisyon oraný %1 olarak dikkate alýnýr.<br />
  (**) Nakit karþýlýksýz iþlemlerde Temdit Komisyonu %03 olarak uygulanýr.</p>
<ol>
  <ol>
    <ul>
      <li>Vadeli ve Kabul Kredili Akreditifler</li>
    </ul>
  </ol>
</ol>
<table border="0" cellpadding="0" cellspacing="1" class="table_border">
  <tbody>
    <tr>
      <td width="379" valign="top" bgcolor="#E5E5E5"><p> </p></td>
      <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
      <td width="72" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
      <td width="60" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
      <td width="64" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Akreditif Açýlýþ Komisyonu <br />
        (Ýlk 3 ay için ve Nakit karþýlýklý kýsým için - Blokaj þartýyla)</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">100</p></td>
      <td width="72" bgcolor="#F5F5F5"><p align="center">1*</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="64" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Temdit Komisyonu<br />
        (Her ay veya kesirler için ve Nakit karþýlýðý Bloke þartýyla)</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">40</p></td>
      <td width="72" bgcolor="#F5F5F5"><p align="center">0,5**</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="64" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Deðiþiklik Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">20</p></td>
      <td width="72" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="64" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Aykýrýlýk Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">80</p></td>
      <td width="72" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="64" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Transfer Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">80</p></td>
      <td width="72" bgcolor="#F5F5F5"><p align="center">3</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">500</p></td>
      <td width="64" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Aykýrýlýk Komisyonu (Vadeli veya Kabul Kredili Akreditifler)</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">40</p></td>
      <td width="72" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="64" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Transfer Komisyonu (Vadeli veya Kabul Kredili Akreditifler)</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">80</p></td>
      <td width="72" bgcolor="#F5F5F5"><p align="center">2</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">400</p></td>
      <td width="64" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Vadeli Akreditif Garanti Komisyonu</p></td>
      <td width="280" colspan="4" bgcolor="#F5F5F5"><p style="text-indent:5px">Müzakere Edilebilir</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Vadeli Ödeme Komisyonu ( 3 ay ve kesirler için)</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">80</p></td>
      <td width="72" bgcolor="#F5F5F5"><p align="center">3</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="64" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Vadeli Ödeme Komisyonu ( %100 nakit karþýlýðýnda)</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">40</p></td>
      <td width="72" bgcolor="#F5F5F5"><p align="center">1</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="64" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
  </tbody>
</table>
<p>(*) Nakit karþýlýðý dýþýnda kalan kýsým için Akreditif Açýlýþ Komisyon oraný %1 olarak dikkate alýnýr.<br />
  (**) Nakit karþýlýksýz iþlemlerde Temdit Komisyonu %03 olarak uygulanýr.</p>
<ol>
  <ol>
    <ul>
      <li>Vesaik Mukabili Ýthalat Ýþlemleri
        <ul>
          <li>Kabul Kredili Ýþlemler (Banka Kabulü Karþýlýðýnda)</li>
        </ul>
      </li>
    </ul>
  </ol>
</ol>
<table border="0" cellpadding="0" cellspacing="1" class="table_border">
  <tbody>
    <tr>
      <td width="379" valign="top" bgcolor="#E5E5E5"><p> </p></td>
      <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
      <td width="60" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
      <td width="68" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Garanti Komisyonu (Banka Kabulü ve Aval için)</p></td>
      <td width="288" colspan="4" bgcolor="#F5F5F5"><p style="text-indent:5px">Müzakere Edilebilir</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Temdit Komisyonu ( 3 ay için)</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">40</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">3</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Transfer Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">40</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">2</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">400</p></td>
      <td width="68" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
  </tbody>
</table>
<ol>
  <ol>
    <ol>
      <ul>
        <li>Diðer Ýþlemler (Ýthalatçý Kabulü Karþýlýðýnda)</li>
      </ul>
    </ol>
  </ol>
</ol>
<table border="0" cellpadding="0" cellspacing="1" class="table_border">
  <tbody>
    <tr>
      <td width="379" valign="top" bgcolor="#E5E5E5"><p> </p></td>
      <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
      <td width="60" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Transfer Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">40</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">2</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">400</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
  </tbody>
</table>


<ol>
  <ol>
    <ul>
      <li>Vesaik Dýþýndaki Ýthalat Tahsil Ýþlemleri</li>
    </ul>
  </ol>
</ol>
<table border="0" cellpadding="0" cellspacing="1" class="table_border">
  <tbody>
    <tr>
      <td width="379" valign="top" bgcolor="#E5E5E5"><p> </p></td>
      <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
      <td width="72" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
      <td width="64" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Ödeme Komisyonu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">40</p></td>
      <td width="72" bgcolor="#F5F5F5"><p align="center">2</p></td>
      <td width="64" bgcolor="#F5F5F5"><p align="center">400</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
  </tbody>
</table>
<ol>
  <ol>
    <ul>
      <li>Ýthalat Ýþlemleri Ýçin Tahsil Edilecek Masraflar</li>
    </ul>
  </ol>
</ol>
<table border="0" cellpadding="0" cellspacing="1" class="table_border">
  <tbody>
    <tr>
      <td width="379" valign="top" bgcolor="#E5E5E5"><p> </p></td>
      <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
      <td width="72" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
      <td width="64" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Haberleþme Masrafý (Posta)</p></td>
      <td width="84" valign="top" bgcolor="#F5F5F5"><p align="center">45</p></td>
      <td width="72" valign="top" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="64" valign="top" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" valign="top" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Haberleþme Masrafý (Swift – her bir sayfa için)</p></td>
      <td width="84" valign="top" bgcolor="#F5F5F5"><p align="center">20</p></td>
      <td width="72" valign="top" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="64" valign="top" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" valign="top" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
  </tbody>
</table>
<ul>
  <li>KREDÝLER SERVÝSÝ HÝZMETLERÝ
    <ul>
      <li>TEMÝNAT MEKTUBU ÝÞLEMLERÝ
        <ul>
          <li>Türk Lirasý (TL) Üzerinden Düzenlenen Teminat Mektuplarý</li>
        </ul>
      </li>
    </ul>
  </li>
</ul>
<table border="0" cellpadding="0" cellspacing="1" class="table_border">
  <tbody>
    <tr>
      <td width="379" valign="top" bgcolor="#E5E5E5"><p> </p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (TL)</p></td>
      <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
      <td width="60" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (TL)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Geçici Teminat Mektubu</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">30</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">2</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Kesin Teminat Mektubu</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">50</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">4</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Avans Teminat Mektubu</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">50</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">4</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
  </tbody>
</table>
<ol>
  <ol>
    <ul>
      <li>Yabancý Para (FX) Üzerinden Düzenlenen Teminat Mektuplarý</li>
    </ul>
  </ol>
</ol>
<table border="0" cellpadding="0" cellspacing="1" class="table_border">
  <tbody>
    <tr>
      <td width="379" valign="top" bgcolor="#E5E5E5"><p> </p></td>
      <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
      <td width="60" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
      <td width="76" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Geçici Teminat Mektubu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">100</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">2</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Kesin Teminat Mektubu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">100</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">2*</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
    <tr>
      <td width="379" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Avans Teminat Mektubu</p></td>
      <td width="84" bgcolor="#F5F5F5"><p align="center">200</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">2*</p></td>
      <td width="60" bgcolor="#F5F5F5"><p align="center">-</p></td>
      <td width="76" bgcolor="#F5F5F5"><p align="center">-</p></td>
    </tr>
  </tbody>
</table>
<p>
      
      
        <p class="parag"> (*) Komisyon tahsilatý üçer aylýk devrelerde peþin olarak yapýlýr.</p>
        
        <p class="parag"><b> (NOT: Bu tarifede belirtilen tüm komisyon ve masraflara (Ýhracatý Teþvik Tedbirleri Mevzuatý çerçevesindeki Ýhracat iþlemleri hariç olmak üzere) % 5 oranýndaki Banka ve Sigorta Muameleleri Vergisi ilave edilir.</b></p>
        </td>
    </tr>
  </tbody>
</table>
       
       
       </td>
    </tr>
  </tbody>
</table>
         
         
         
         
        </td>
    
        
      </tr>
    </table>
    

  </div>
  
  <div id="div_footer_template">
    <table width="980" height="30" border="0" cellpadding="0">
      <tr>
        <td height="30" align="center"><span id="footer" style="font-size:9px;font-family:Arial;color:#666;text-align:center">Copyright © 2011 Bank Mellat Türkiye Ýstanbul Merkez Þubesi</span></td>
      </tr>
    </table>
  </div>
</div>

<script type="text/javascript">
<!--
swfobject.registerObject("FlashID2");
//--> 
</script>
</body>
</html>
<?
@mysql_close($connection_lcl);
?>