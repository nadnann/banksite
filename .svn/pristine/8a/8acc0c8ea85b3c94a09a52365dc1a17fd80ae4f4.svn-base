<?php require_once('../Connections/connection_lcl.php'); ?>
<? error_reporting(0); ?>
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
mysqli"_select_db($database_connection_lcl, $connection_lcl);
$query_rc_duyuru_idg = sprintf("SELECT * FROM duyurular WHERE duyuru_id = %s", GetSQLValueString($colname_rc_duyuru_idg, "int"));
$rc_duyuru_idg = mysqli_query($query_rc_duyuru_idg, $connection_lcl) or die(mysql_error());
$row_rc_duyuru_idg = mysqli_fetch_assoc($rc_duyuru_idg);
$totalRows_rc_duyuru_idg = mysqli_num_rows($rc_duyuru_idg);
?>

<?

$_SESSION['adresler'].=$_SERVER['REQUEST_URI'];

$id=$_SERVER['REMOTE_ADDR'];
if($id) {
$sayfalink=$_SERVER['REQUEST_URI'];
$sayfa_adi="Anasayfa";
$veriyolu= new mysqli("localhost","mellatba_admin","mwsite2011.");
mysqli_select_db("sayfa",$veriyolu);


mysqli_query("insert into sayfa(session_id,sayfa_link,sayfa_adi) values('$id','$sayfalink','$sayfa_adi')");
}



//mysql_query("delete from sayfa where tarih <='tarihy'");
//mysql_query("DELETE FROM sayfa WHERE session_id NOT IN (SELECT TOP 5 session_id FROM sayfa ORDER BY session_id DESC)");
//$fark = "-7";
//$saatfark = (date("H") + ($fark));
//$zaman1 = mktime( $saatfark, date("i"), date("s"), date("m"), date("d"), date("Y"));
//$tarihy = date("Y-m-d H:i:s",$zaman1);
//$tarihy=date("Y/m/d H:i:s");
//$tarihy=date("Y/m/d H");
//$zaman=mktime(date("H"),date("i"),date("s"),date("d"),date("m"),date("Y"));

$ab=date("H")-10;
$tarihy=date("Y-m-d H:00:00");
//mysql_query("delete from sayfa where tarih <=$tarihy
mysqli_query("delete from sayfa where HOUR(TIMEDIFF(NOW(), tarih)) >=1");


?>

<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($theValue) : mysqli_escape_string($theValue);

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

mysqli_select_db($database_connection_lcl, $connection_lcl);
$query_rc_duyurular = "SELECT * FROM duyurular";
$rc_duyurular = mysqli_query($query_rc_duyurular, $connection_lcl) or die(mysql_error());
$row_rc_duyurular = mysqli_fetch_assoc($rc_duyurular);
$totalRows_rc_duyurular = mysqli_num_rows($rc_duyurular);

$maxRows_rc_songezdik = 5;
$pageNum_rc_songezdik = 0;


if (isset($_GET['pageNum_rc_songezdik'])) {
  $pageNum_rc_songezdik = strip_tags($_GET['pageNum_rc_songezdik']);
}

$startRow_rc_songezdik = $pageNum_rc_songezdik * $maxRows_rc_songezdik;

mysqli_select_db($database_connection_lcl, $connection_lcl);
$query_rc_songezdik ="SELECT DISTINCT sayfa.sayfa_link, sayfa.sayfa_adi FROM sayfa WHERE sayfa.session_id='$id' ORDER BY sayfa.tarih DESC";
//$query_rc_songezdik = "SELECT DISTINCT sayfa.sayfa_link, sayfa.sayfa_adi FROM sayfa WHERE sayfa.session_id=$id ";
$query_limit_rc_songezdik = sprintf("%s LIMIT %d, %d", $query_rc_songezdik, $startRow_rc_songezdik, $maxRows_rc_songezdik);
$rc_songezdik = mysqli_query($query_limit_rc_songezdik, $connection_lcl) or die(mysql_error());

mysqli_query("SET NAMES 'latin5'");  
mysqli_query("SET CHARACTER SET latin5");  
mysqli_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");

$row_rc_songezdik = mysqli_fetch_assoc($rc_songezdik);

if (isset($_GET['totalRows_rc_songezdik'])) {
  $totalRows_rc_songezdik = strip_tags($_GET['totalRows_rc_songezdik']);
} else {
  $all_rc_songezdik = mysql_query($query_rc_songezdik);
  $totalRows_rc_songezdik = mysql_num_rows($all_rc_songezdik);
}
$totalPages_rc_songezdik = ceil($totalRows_rc_songezdik/$maxRows_rc_songezdik)-1;

$maxRows_rc_duyurular = 5;
$pageNum_rc_duyurular = 0;
if (isset($_GET['pageNum_rc_duyurular'])) {
  $pageNum_rc_duyurular = strip_tags($_GET['pageNum_rc_duyurular']);
}
$startRow_rc_duyurular = $pageNum_rc_duyurular * $maxRows_rc_duyurular;

mysql_select_db($database_connection_lcl, $connection_lcl);
$query_rc_duyurular = "SELECT duyuru_id, duyuru_adi, duyuru_link FROM duyurular ORDER BY duyuru_tarihi DESC";
$query_limit_rc_duyurular = sprintf("%s LIMIT %d, %d", $query_rc_duyurular, $startRow_rc_duyurular, $maxRows_rc_duyurular);

mysql_query("SET NAMES 'latin5'");  
mysql_query("SET CHARACTER SET latin5");  
mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");

$rc_duyurular = mysql_query($query_limit_rc_duyurular, $connection_lcl) or die(mysql_error());

mysql_query("SET NAMES 'latin5'");  
mysql_query("SET CHARACTER SET latin5");  
mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");


$row_rc_duyurular = mysql_fetch_assoc($rc_duyurular);

if (isset($_GET['totalRows_rc_duyurular'])) {
  $totalRows_rc_duyurular = strip_tags($_GET['totalRows_rc_duyurular']);
} else {
  $all_rc_duyurular = mysql_query($query_rc_duyurular);
  $totalRows_rc_duyurular = mysql_num_rows($all_rc_duyurular);
}
$totalPages_rc_duyurular = ceil($totalRows_rc_duyurular/$maxRows_rc_duyurular)-1;
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

<link href="../css/style.css" rel="stylesheet" type="text/css" />
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
  <div id="div_top_country">BANK MELLAT T�RK�YE �STANBUL MERKEZ �UBES�</div>
    <div id="div_top_content"><a href="links.php">&nbsp;&nbsp;&nbsp;Ba�lant�lar&nbsp;&nbsp;&nbsp;</a>|<a href="http://bankmellat.ir" target="_blank">&nbsp;&nbsp;&nbsp;Bank Mellat �ran&nbsp;&nbsp;&nbsp;</a></div>
    
    <div id="div_top_lang"> <a href="../tr/index.php" title="T�rk�e">&nbsp;&nbsp;&nbsp;TR&nbsp;&nbsp;&nbsp;</a>|<a href="../en/index.php" title="�ngilizce">&nbsp;&nbsp;&nbsp;EN&nbsp;&nbsp;&nbsp;</a>
     </div>
  </div>
  
  <div class="div_menu" id="div_menu">
    <table width="980" height="30" border="0" cellpadding="0" cellspacing="0" bgcolor="#333333">
      <tr align="left" valign="top">
        <td><ul id="sddm">
          <li><a href="index.php">Anasayfa</a></li>
          <li><a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()">Hakk�m�zda</a>
            <div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="tarihce.php">Tarih�emiz&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
            <a href="organizasyon.php">Organizasyon&nbsp;&nbsp;</a> <a href="mkurulu.php">M�d�rler Kurulu&nbsp;</a> <a href="misyon.php">Misyon & Vizyon&nbsp;&nbsp;</a> <a href="b_teknoloji.php">Bilgi Teknolojileri&nbsp;&nbsp;</a> <a href="insan_kaynaklari.php">�nsan Kaynaklar�&nbsp;</a> </div>
          </li>
          <li><a href="#" onmouseover="mopen('m2')" onmouseout="mclosetime()">Sa�lanan Hizmetler</a>
            <div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="mevduatlar.php">Mevduatlar&nbsp;&nbsp;&nbsp;</a> <a href="yatirimlar.php">Krediler&nbsp;&nbsp;&nbsp;</a> <a href="zaman_asimi.php">Zaman A��m� Hesaplar�&nbsp;&nbsp;&nbsp;</a> <a href="diger_bankacilik_hizmetleri.php">Di�er Bankac�l�k Hizmetleri&nbsp;&nbsp;&nbsp;</a> </div>
          </li>
          <li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()">�artlar & Ko�ullar</a>
            <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="bireysel_musteri.php">Bireysel M��teri</a> <a href="kurumsal_musteri.php">Ticari / Kurumsal M��teri</a> </div>
          </li>
          <li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">�ubeler </a>
            <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="sube_istanbul.php">�stanbul Merkez �ubesi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a> 
            <a href="sube_ankara.php">Ankara �ubesi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
            <a href="sube_izmir.php">�zmir �ubesi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </div>
          </li>
          <li><a href="muhabirler.php">Muhabirler</a></li>
          <li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">G�nl�k Oranlar</a>
            <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="doviz_kuru.php">D�viz Kuru&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="faiz_oranlari.php">Faiz Oranlar�&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
          </li>
          <li><a href="finansal_raporlar.php" onmouseover="mopen('m6')" onmouseout="mclosetime()">Finansal Raporlar</a>
            <div id="m6" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"><a href="finansal_raporlar_2012.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2012&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="finansal_raporlar_2011.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2011&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="finansal_raporlar_2010.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2010&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="finansal_raporlar_2009.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2009&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="finansal_raporlar_2008.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2008&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="finansal_raporlar_2007.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2007&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="finansal_raporlar_2006.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2006&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="finansal_raporlar_2005.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </div>
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
        <table border="0" bordercolor="#CCCCCC" width="100%" align="center" cellspacing="2" cellpadding="5" vspace="0" hspace="0">
  		<tr align="center" valign="top">
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
            <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
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

//$content = @file_get_contents("http://www.tcmb.gov.tr/kurlar/today.xml"); 
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





  
  <div id="div_icerik">  
   
     <table width="960" height="250" border="0" align="center" cellpadding="4" cellspacing="7" class="table_border" id="Table_" vspace="0">
      <tr>
        <td width="140" height="90"><a href="../image/tsarruf.jpg" target="_blank" class="transparan"><img src="../image/box_banner_tr/tmsf1.gif" width="140" height="90" border="0"/></a></td>
        <td width="140" colspan="-5"><a href="bireysel_musteri.php" class="transparan"><img src="../image/box_banner_tr/product1.gif" alt="" width="140" height="90" border="0" /></a></td>
        <td width="140"><a href="insan_kaynaklari.php" class="transparan"><img src="../image/box_banner_tr/humanresource.gif" width="140" height="90" border="0"/></a></td>
        <td width="152"><a href="sube_istanbul.php" class="transparan"><img src="../image/box_banner_tr/branches.gif" width="140" height="90" border="0"/></a></td>
        <td width="321" rowspan="2" align="left" valign="top"><table width="300" height="200" border="0" align="right" cellpadding="0">
          <tr>
            <td>
            
            <table width="300" height="100" border="0" align="center" cellpadding="0" cellspacing="0" class="table_border">
  <tr>
    <td align="center" height="13" valign="top" class="table_headerB"> D�viz Kurlar� </td>
  </tr>
  <tr>
    <td height="82"><table width="300" border="0" align="center" cellpadding="2" cellspacing="1">
      <tr class="table_header">
        <td width="28%" height="19" align="center">&nbsp;</td>
        <td width="37%" align="center">Al��</td>
        <td width="35%" align="center">Sat��</td>
      </tr>
      <tr class="table_icerikbir">
        <td align="center">USD</td>
        <td width="37%" align="center"><?=$dolar_alis ?> TL </td>
        <td width="35%" align="center"><?=$dolar_satis ?>  TL</td>
      </tr>
      <tr align="center" class="table_icerikiki">
        <td height="21">EUR </td>
        <td width="37%"><?=$euro_alis ?>          TL</td>
        <td width="35%"><?=$euro_satis ?>          TL</td>
      </tr>
      <tr align="center" class="table_icerikuc">
        <td height="20"> IRR </td>
        <td><?=$rial_alis ?>          TL</td>
        <td><?=$rial_satis ?>         TL</td>
      </tr>
    </table></td>
  </tr>
</table>

            
            </td>
          </tr>
          <tr>
            <td height="117">
              
              <table width="292" height="80" border="0" align="center" cellpadding="2" cellspacing="2" class="table_border">
                <tr>
                  <td align="center" height="13" class="table_headerB"> Duyurular </td>
                  </tr>
                <tr>
                  
                  <td height="76" >
  <table width="292" height="auto" border="0" align="left" cellpadding="0">
    <tr>
      <td align="center" valign="top">
        <marquee align="middle" scrollamount="1" direction="up"  scrolldelay="50"  height="50" hspace="0" vspace="0" onmouseover="this.stop()" onmouseout="this.start()">
          <ul type="circle" class="bullet">
            <?php do { ?>
              <li><a href="duyurular.php?id=<?php echo $row_rc_duyurular['duyuru_id']; ?>" class="duyurularLink"><?php echo $row_rc_duyurular['duyuru_adi']; ?></a></li>
              <?php } while ($row_rc_duyurular = mysql_fetch_assoc($rc_duyurular)); ?>
  
            </ul>
          </marquee>
        </td>
      </tr>
  </table>
                    
                    </td>
                  
                  </tr>
  </table>
              
              </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><a href="ibans.php" class="transparan"> <img src="../image/box_banner_tr/iban1.gif" alt="" width="140" height="90" border="0"/></a></td>
        <td colspan="-5"><a href="faiz_oranlari.php" class="transparan"><img src="../image/box_banner_tr/rates1.gif" alt="" width="140" height="90" border="0"/></a></td>
        <td><a href="finansal_raporlar.php" class="transparan"><img src="../image/box_banner_tr/financialReport.gif" width="140" height="90" border="0" /></a></td>
        <td><a href="sube_iletisim.php" class="transparan"><img src="../image/box_banner_tr/contact.gif" width="140" height="90" border="0"/></a></td>
       </tr>
     </table>
  </div>
  
  <div id="div_footer">
    <table width="980" height="150" border="0" cellpadding="0">
      <tr>
        <td>
        <table width="700" height="120" border="0" align="center" cellpadding="0" cellspacing="5">
          <tr>
            <td width="140" height="34" align="left" valign="top" class="altmenu"><a href="tarihce.php" class="altmenu1">Tarih�emiz</a><br />
              <a href="misyon.php" class="altmenu1">Misyon ve Vizyon</a><br />
              <a href="b_teknoloji.php" class="altmenu1">Bilgi Teknolojileri</a><br />
              <a href="mevduatlar.php" class="altmenu1">Mevduatlar</a><br />
              <a href="yatirimlar.php" class="altmenu1">Yat�r�mlar</a><br />
              <a href="zaman_asimi.php" class="altmenu1">Zaman A��m� Hesaplar�</a><br /></td>
            <td width="140" align="left" valign="top" class="altmenu">Di�er Bankac�l�k Hizmetleri</b></span><br />
              <a href="havale_islemleri.php" class="altmenu1">Havale ��lemleri</a><br />
              <a href="teminat_mektuplari.php" class="altmenu1">Teminat Mektuplar�</a><br />
              <a href="akreditif_islemleri.php" class="altmenu1">Akreditif Teyit ��lemleri</a><br />
              <a href="aval_ve_kabul_kredileri.php" class="altmenu1">Aval ve Kabul Kredileri</a><br />
              <a href="doviz_islemleri.php" class="altmenu1">D�viz Hizmetleri</a><br />
              <a href="tahsil_islemleri.php" class="altmenu1">Tahsil ��lemleri</a></td>
            <td width="140" align="left" valign="top" class="altmenu">�ubeler<br />
              <a href="sube_istanbul.php" class="altmenu1">�stanbul Merkez �ubesi</a><br />
              <a href="sube_ankara.php" class="altmenu1">Ankara �ubesi</a><br />
              <a href="sube_izmir.php" class="altmenu1">�zmir �ubesi</a></td>
            <td width="140" align="left" valign="top" class="altmenu"> Son Gezdiklerim<br />
            <?php do { ?>
            <?php echo $row_rc_songezdik['sayfa_adi']; ?><br />
              <?php } while ($row_rc_songezdik = mysql_fetch_assoc($rc_songezdik)); ?></td>
            <td width="140" align="left" valign="top" class="altmenu"><b> S�k Ziyaret Edilen Siteler</b>
              <br /><a href="sube_istanbul.php" class="altmenu1">�ubeler</a>
              <br /><a href="faiz_oranlari.php" class="altmenu1">Faiz Oranlar�</a>
            <br /><a href="insan_kaynaklari.php" class="altmenu1">�nsan Kaynaklar�</a>
            <br /><a href="bireysel_musteri.php" class="altmenu1">�r�n ve Hizmet �cretleri</a>
            <br /><a href="diger_bankacilik_hizmetleri.php" class="altmenu1">Di�er Bankac�l�k Hizmetleri</a>	
             </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="30" align="center"><span id="footer" style="font-size:9px;font-family:Arial;color:#666;text-align:center">Copyright � 2011 Bank Mellat T�rkiye �stanbul Merkez �ube</span></td>
      </tr>
    </table>
  </div>
</div>


</script>
</body>
</html>
<?php
mysql_free_result($rc_duyurular);

mysql_free_result($rc_songezdik);
?>
