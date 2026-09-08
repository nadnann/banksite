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
$query_rc_duyuru_idg = sprintf("SELECT * FROM duyurular WHERE duyuru_id = %s", GetSQLValueString($colname_rc_duyuru_idg, "int"));
$rc_duyuru_idg = mysql_query($query_rc_duyuru_idg, $connection_lcl) or die(mysql_error());
$row_rc_duyuru_idg = mysql_fetch_assoc($rc_duyuru_idg);
$totalRows_rc_duyuru_idg = mysql_num_rows($rc_duyuru_idg);
?>

<? 
$_SESSION['adresler'].=$_SERVER['REQUEST_URI'];

$id=$_SERVER['REMOTE_ADDR'];
if($id) {
$sayfalink=$_SERVER['REQUEST_URI'];
$sayfa_adi="Bireysel M��teri";
$veriyolu=mysql_pconnect("localhost","mellatba_admin","mwsite2011.");
mysql_select_db("sayfa",$veriyolu);
//mysql_select_db("mellatba_mbank_wsite");
$query=mysql_query("insert into sayfa(session_id,sayfa_link,sayfa_adi) values('$id','$sayfalink','$sayfa_adi')");
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<meta name="description" CONTENT="Bireysel ve Kurumsal bankac�l�k hizmetleri">
<meta name="keywords" content="mellat bank,mellat bank t�rkiye,bank mellat,bank mellat t�rkiye,iran,banka,iran banka,bankac�l�k,uluslararas� bankac�l�k">
<meta name="Author" content="Bank Mellat">
<meta name="Content-Language" content="tr">
<meta name="robots" content="index,follow">
<meta name="revisit-after" content="30 days">
<meta name="distribution" content="global"> 
<meta name="rating" content="general">


<title>Bank Mellat T�rkiye</title>

<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">

<link href="../css/style_tr_bireyselm.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css_menu/default.css">
<!--TOPMENU BA�LANGI� -->
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

<!-- TOPMENU B�T�� --> 

<link href="../human_resource/css/style_include.css" rel="stylesheet" type="text/css" />
</head>
<body> 

<div id="div_main" align="center"> 
  <div id="div_top">
  <div id="div_top_country">BANK MELLAT T�RK�YE �STANBUL MERKEZ �UBES� </div>
    <div id="div_top_content"><a href="links.php">&nbsp;&nbsp;&nbsp;Ba�lant�lar&nbsp;&nbsp;&nbsp;</a>|<a href="http://bankmellat.ir" target="_blank" >&nbsp;&nbsp;&nbsp;Bank Mellat �ran&nbsp;&nbsp;&nbsp;</a></div>
    
    <div id="div_top_lang"> <a href="../tr/index.php" title="T�rk�e">&nbsp;&nbsp;&nbsp;TR&nbsp;&nbsp;&nbsp;</a>|<a href="../en/index.php" title="�ngilizce">&nbsp;&nbsp;&nbsp;EN&nbsp;&nbsp;&nbsp;</a></div>
  </div>
  
  <div class="div_menu" id="div_menu">
    <table width="980" height="30" border="0" cellpadding="0" cellspacing="0" bgcolor="#333333">
      <tr align="left" valign="top">
        <td>
        <?php include_once '../includes/include_menu_tr.php'; ?>
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
        <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don�t want users to see the prompt. -->
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
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="https://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
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

$rial_bul = explode('<Currency Kod="IRR" CurrencyCode="IRR">' ,$content); 
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
        <td width="230" height="90" align="left" valign="top"><img src="../image/image_ir/export facility.jpg" width="230" height="325" class="resim" /></td>
        <td width="730" colspan="-5" align="left" valign="top">
         <header class="template_baslik">B�REYSEL M��TER� H�ZMETLER� �CRET TAR�FES�</header><p></p>
       
       <table width="680" height="100%" border="0" align="center" cellpadding="5" cellspacing="0" class="template1">
  <tbody>
    <tr>
      <td width="999" align="center" valign="top" bgcolor="#FFFFFF">
        <p class="parag">Para Aktarma - Havale - TL(T�rk Liras�) Havale</p>
        <table width="650" cellpadding="0" cellspacing="1" class="table_border">
          <tbody>
            <tr>
              <td width="279" valign="top" bgcolor="#E5E5E5"><p>�</p></td>
              <td width="96" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (TL)</p></td>
              <td width="105" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
              <td width="84" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (TL)</p></td>
              <td width="108" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
            </tr>
            <tr>
              <td width="279" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Yurt ��inden Di�er Bankalara Yap�lan Havale</p></td>
              <td width="96" bgcolor="#F5F5F5"><p align="center">10</p></td>
              <td width="105" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="84" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="108" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
            <tr>
              <td width="279" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Bank Mellat T�rkiye �ubelerine Havale<br />
                (Amir ve/veya lehtar� bankam�z m��terisi olmayanlar i�in)</p></td>
              <td width="96" bgcolor="#F5F5F5"><p align="center">10</p></td>
              <td width="105" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="84" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="108" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
            <tr>
              <td width="279" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Bank Mellat T�rkiye �ubelerine Havale<br />
                (Amir ve/veya lehtar� bankam�z m��terisi olanlar i�in)</p></td>
              <td colspan="4" bgcolor="#F5F5F5"><p align="center">Masrafs�z</p></td>
            </tr>
            <tr>
              <td width="279" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">T�rk Liras� (TL) Havaleler i�in Haberle�me Masraf�</p></td>
              <td width="96" bgcolor="#F5F5F5"><p align="center">5</p></td>
              <td width="105" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="84" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="108" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
          </tbody>
        </table>
        <p></p>
        <p class="parag" style="text-indent:5px">YP(Yabanc� Para) Havale - Yurt ��indeki Bankalara Yap�lan Havale</p>
        <p></p>
        <table width="650" cellpadding="0" cellspacing="1" class="table_border">
          <tbody>
            <tr>
              <td width="253" valign="top" bgcolor="#E5E5E5"><p>�</p></td>
              <td width="100" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
              <td width="101" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
              <td width="93" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
              <td width="95" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
            </tr>
            <tr>
              <td width="253" align="left" valign="top" bgcolor="#F5F5F5"><p>1 - 1000 EUR Kar��l���</p></td>
              <td width="100" bgcolor="#F5F5F5"><p align="center">8</p></td>
              <td width="101" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="93" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="95" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
            <tr>
              <td width="253" align="left" valign="top" bgcolor="#F5F5F5"><p>1001 - 5000 EUR Kar��l���</p></td>
              <td width="100" bgcolor="#F5F5F5"><p align="center">10</p></td>
              <td width="101" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="93" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="95" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
            <tr>
              <td width="253" align="left" valign="top" bgcolor="#F5F5F5"><p>5001 - 8000 EUR Kar��l���</p></td>
              <td width="100" bgcolor="#F5F5F5"><p align="center">15</p></td>
              <td width="101" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="93" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="95" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
            <tr>
              <td width="253" align="left" valign="top" bgcolor="#F5F5F5"><p>8001 EUR ve �zeri</p></td>
              <td width="100" bgcolor="#F5F5F5"><p align="center">200</p></td>
              <td width="101" bgcolor="#F5F5F5"><p align="center">2,5</p></td>
              <td width="93" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="95" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
          </tbody>
        </table>
		<p></p>
        <p class="parag" style="text-indent:5px">Yurt D���ndaki Bankalara Yap�lan Havale</p>
        <p></p>
        <table width="650" cellpadding="0" cellspacing="1" class="table_border">
          <tbody>
            <tr>
              <td width="254" valign="top" bgcolor="#E5E5E5"><p>�</p></td>
              <td width="98" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
              <td width="98" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
              <td width="96" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
              <td width="96" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
            </tr>
            <tr>
              <td width="254" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Yurt D���ndaki Bankalar Yap�lan Havale</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">5</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">4</p></td>
              <td width="96" bgcolor="#F5F5F5"><p align="center">250</p></td>
              <td width="96" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
            <tr>
              <td width="254" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">5 milyon EUR ve �zeri Havale</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="96" bgcolor="#F5F5F5"><p align="center">1000</p></td>
              <td width="96" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
            <tr>
              <td width="254" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">T�rk Bankalar�ndan �ran Bankalar�na Yap�lan Havale</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">16</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">3</p></td>
              <td width="96" bgcolor="#F5F5F5"><p align="center">160</p></td>
              <td width="96" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
            <tr>
              <td width="254" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Bankalar Aras� MT202 Swift Transferlerinde<br />
                (Bank Mellat Genel M�d�rl�k ve �ubeleri Hari�)</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="96" bgcolor="#F5F5F5"><p align="center">5</p></td>
              <td width="96" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
            <tr>
              <td width="254" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Posta Masraflar�</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">10</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="96" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="96" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
          </tbody>
        </table>
        <p></p>
         <p class="parag">Swift - Swift G�nderimi</p>
         <p></p>
        <table width="650" cellpadding="0" cellspacing="1" class="table_border">
          <tbody>
            <tr>
              <td width="230" valign="top" bgcolor="#E5E5E5"><p>�</p></td>
              <td width="108" align="center" valign="top" bgcolor="#E5E5E5"><p style="text-indent:5px">Asgari Tutar (EUR)</p></td>
              <td width="107" align="center" valign="top" bgcolor="#E5E5E5"><p style="text-indent:5px">Asgari Oran (Binde)</p></td>
              <td width="100" align="center" valign="top" bgcolor="#E5E5E5"><p style="text-indent:5px">Azami Tutar (EUR)</p></td>
              <td width="97" align="center" valign="top" bgcolor="#E5E5E5"><p style="text-indent:5px">Azami Oran (Binde)</p></td>
            </tr>
            <tr>
              <td width="230" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Swift Giderleri</p></td>
              <td width="108" bgcolor="#F5F5F5"><p align="center">20</p></td>
              <td width="107" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="100" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="97" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
          </tbody>
        </table>
        <p></p>
        <p class="parag" style="text-indent:5px">Mevduat Hesaplar� - Mevduat Hesab� Ekstresi - Hesap Ekstre �creti</p>
        <p></p>
        <table width="650" cellpadding="0" cellspacing="1" class="table_border">
          <tbody>
            <tr>
              <td width="230" valign="top" bgcolor="#E5E5E5"><p>�</p></td>
              <td width="110" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (TL)</p></td>
              <td width="106" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
              <td width="97" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (TL)</p></td>
              <td width="99" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
            </tr>
            <tr>
              <td width="230" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Hesap Ekstresi (Her sayfa i�in)</p></td>
              <td width="110" bgcolor="#F5F5F5"><p align="center">2</p></td>
              <td width="106" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="97" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="99" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
          </tbody>
        </table>
        <p>�</p>
        <p class="parag">TL(T�rk Paras�) Mevduat Hesaplar� - TL Mevduat Hesab�na Gelen Havale �creti</p>
        <p></p>
        <table width="650" cellpadding="0" cellspacing="1" class="table_border">
          <tbody>
            <tr>
              <td width="227" valign="top" bgcolor="#E5E5E5"><p>�</p></td>
              <td width="114" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (TL)</p></td>
              <td width="104" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
              <td width="99" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (TL)</p></td>
              <td width="98" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
            </tr>
            <tr>
              <td width="227" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Gelen T�rk Liras� (TL) Havale</p></td>
              <td width="114" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="104" bgcolor="#F5F5F5"><p align="center">1,5</p></td>
              <td width="99" bgcolor="#F5F5F5"><p align="center">5000</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">�</p></td>
            </tr>
          </tbody>
        </table>
        <p></p>
        <p class="parag">YP(Yabanc� Para) Mevduat Hesaplar� - YP Mevduat Hesab�na Gelen Havale �creti - Gelen Havalenin D�viz Olarak �denmesi Halinde</p>
        <p></p>
        <table width="650" cellpadding="0" cellspacing="1" class="table_border">
          <tbody>
            <tr>
              <td width="227" valign="top" bgcolor="#E5E5E5"><p>�</p></td>
              <td width="119" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
              <td width="106" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
              <td width="93" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
              <td width="97" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
            </tr>
            <tr>
              <td width="227" align="left" valign="top" bgcolor="#F5F5F5"><p>1 - 1000000 EUR Kar��l���</p></td>
              <td width="119" bgcolor="#F5F5F5"><p align="center">15</p></td>
              <td width="106" bgcolor="#F5F5F5"><p align="center">2,5</p></td>
              <td width="93" bgcolor="#F5F5F5"><p align="center">1000</p></td>
              <td width="97" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
            <tr>
              <td width="227" align="left" valign="top" bgcolor="#F5F5F5"><p>1000001 - 5000000 EUR Kar��l���</p></td>
              <td width="119" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="106" bgcolor="#F5F5F5"><p align="center">1</p></td>
              <td width="93" bgcolor="#F5F5F5"><p align="center">2000</p></td>
              <td width="97" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
            <tr>
              <td width="227" align="left" valign="top" bgcolor="#F5F5F5"><p>5000001 + EUR ve �zeri</p></td>
              <td width="119" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="106" bgcolor="#F5F5F5"><p align="center">0,4</p></td>
              <td width="93" bgcolor="#F5F5F5"><p align="center">5000</p></td>
              <td width="97" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
          </tbody>
        </table>
        <p></p>
        <p class="parag" style="text-indent:5px">Gelen Havalenin TL Olarak �denmesi Halinde</p>
        <p></p>
        <table width="650" cellpadding="0" cellspacing="1" class="table_border">
          <tbody>
            <tr>
              <td width="226" valign="top" bgcolor="#E5E5E5"><p>�</p></td>
              <td width="122" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
              <td width="104" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
              <td width="93" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
              <td width="97" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
            </tr>
            <tr>
              <td width="226" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Gelen Havalenin T�rk Liras� (TL) Olarak �denmesi</p></td>
              <td colspan="4" bgcolor="#F5F5F5"><p align="center">Masrafs�z</p></td>
            </tr>
          </tbody>
        </table>
        <p></p>
        <p class="parag">�ek ve Senet ��lemleri - �ek,Senet ve Poli�e Tahsili - TL(T�rk Liras�) �ek,Senet ve Poli�eler</p>
        <p></p>
        <table width="650" cellpadding="0" cellspacing="1" class="table_border">
          <tbody>
            <tr>
              <td width="227" valign="top" bgcolor="#E5E5E5"><p>�</p></td>
              <td width="124" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (TL)</p></td>
              <td width="103" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
              <td width="90" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (TL)</p></td>
              <td width="98" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
            </tr>
            <tr>
              <td width="227" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Tahsil �cretleri (Senet,Poli�e ve �ekler i�in)</p></td>
              <td width="124" bgcolor="#F5F5F5"><p align="center">10</p></td>
              <td width="103" bgcolor="#F5F5F5"><p align="center">2</p></td>
              <td width="90" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
            <tr>
              <td width="227" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">�ek Karnesi �creti (Her sayfa i�in)</p></td>
              <td width="124" bgcolor="#F5F5F5"><p align="center">3</p></td>
              <td width="103" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="90" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
          </tbody>
        </table>
        <p></p>
        <p class="parag">YP(Yabanc� Para) �ekler</p>
        <p></p>
        <table width="650" cellpadding="0" cellspacing="1" class="table_border">
          <tbody>
            <tr>
              <td width="203" valign="top" bgcolor="#E5E5E5"><p>�</p></td>
              <td width="104" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
              <td width="136" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
              <td width="98" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
              <td width="101" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
            </tr>
            <tr>
              <td width="203" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Ke�ide Edilen �ekler</p></td>
              <td width="104" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="136" bgcolor="#F5F5F5"><p align="center">3</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">250</p></td>
              <td width="101" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
            <tr>
              <td width="203" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Tahsile Al�nan �ekler (�ran 'dan tahsil edilen)</p></td>
              <td width="104" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="136" bgcolor="#F5F5F5"><p align="center">3</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">250</p></td>
              <td width="101" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
            <tr>
              <td width="203" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Ke�ide Edilen �ekler i�in Kargo Masraf�</p></td>
              <td width="104" bgcolor="#F5F5F5"><p align="center">40</p></td>
              <td width="136" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="98" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="101" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
          </tbody>
        </table>
        <p></p>
        <p class="parag">Di�er ��lemler-Referans Mektubu ��lemleri - T�rk Liras� �zerinden D�zenlenen Referans Mektuplar�</p>
        <p></p>
        <table width="650" cellpadding="0" cellspacing="1" class="table_border">
          <tbody>
            <tr>
              <td width="203" valign="top" bgcolor="#E5E5E5"><p>�</p></td>
              <td width="107" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (TL)</p></td>
              <td width="137" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
              <td width="95" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (TL)</p></td>
              <td width="100" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
            </tr>
            <tr>
              <td width="203" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">T�rk Liras� �zerinden D�zenlenen Referans Mektubu</p></td>
              <td width="107" bgcolor="#F5F5F5"><p align="center">75</p></td>
              <td width="137" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="95" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="100" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
          </tbody>
        </table>
        <p></p>
        <p class="parag">Yabanc� Para(FX) �zerinden D�zenlenen Referans Mektuplar�</p>
        <p></p>
        <table width="650" cellspacing="1" class="table_border">
          <tbody>
            <tr>
              <td width="199" valign="top" bgcolor="#E5E5E5"><p>�</p></td>
              <td width="109" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Tutar (EUR)</p></td>
              <td width="136" align="center" valign="top" bgcolor="#E5E5E5"><p>Asgari Oran (Binde)</p></td>
              <td width="89" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Tutar (EUR)</p></td>
              <td width="99" align="center" valign="top" bgcolor="#E5E5E5"><p>Azami Oran (Binde)</p></td>
            </tr>
            <tr>
              <td width="199" align="left" valign="top" bgcolor="#F5F5F5"><p style="text-indent:5px">Yabanc� Para �zerinden D�zenlenen Referans Mektubu</p></td>
              <td width="109" bgcolor="#F5F5F5"><p align="center">100</p></td>
              <td width="136" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="89" bgcolor="#F5F5F5"><p align="center">-</p></td>
              <td width="99" bgcolor="#F5F5F5"><p align="center">-</p></td>
            </tr>
          </tbody>
        </table>
        <p class="parag"> (NOT: Bu tarifede belirtilen t�m komisyon ve masraflara (�hracat� Te�vik Tedbirleri Mevzuat� �er�evesindeki �hracat i�lemleri hari� olmak �zere) % 5 oran�ndaki Banka ve Sigorta Muameleleri Vergisi ilave edilir.</p></td>
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
        <td height="30" align="center"><span id="footer" style="font-size:9px;font-family:Arial;color:#666;text-align:center">Copyright � 2011 Bank Mellat T�rkiye �stanbul Merkez �ubesi</span></td>
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
mysql_free_result($query);
?>