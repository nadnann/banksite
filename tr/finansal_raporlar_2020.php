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

$maxRows_rc_finansaltablo2012 = 8;
$pageNum_rc_finansaltablo2012 = 0;
if (isset($_GET['pageNum_rc_finansaltablo2012'])) {
  $pageNum_rc_finansaltablo2012 = strip_tags($_GET['pageNum_rc_finansaltablo2012']);
}
$startRow_rc_finansaltablo2012 = $pageNum_rc_finansaltablo2012 * $maxRows_rc_finansaltablo2012;

mysql_select_db($database_connection_lcl, $connection_lcl);
$query_rc_finansaltablo2012 = "SELECT * FROM finansal_raporlar where yil=2020";
$query_limit_rc_finansaltablo2012 = sprintf("%s LIMIT %d, %d", $query_rc_finansaltablo2012, $startRow_rc_finansaltablo2012, $maxRows_rc_finansaltablo2012);

mysql_query("SET NAMES 'latin5'");  
mysql_query("SET CHARACTER SET latin5");  
mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");

$rc_finansaltablo2012 = mysql_query($query_limit_rc_finansaltablo2012, $connection_lcl) or die(mysql_error());
$row_rc_finansaltablo2012 = mysql_fetch_assoc($rc_finansaltablo2012);

if (isset($_GET['totalRows_rc_finansaltablo2012'])) {
  $totalRows_rc_finansaltablo2012 = strip_tags($_GET['totalRows_rc_finansaltablo2012'];
} else {
  $all_rc_finansaltablo2012 = mysql_query($query_rc_finansaltablo2012);
  $totalRows_rc_finansaltablo2012 = mysql_num_rows($all_rc_finansaltablo2012);
}
$totalPages_rc_finansaltablo2012 = ceil($totalRows_rc_finansaltablo2012/$maxRows_rc_finansaltablo2012)-1;
?>

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
$_SESSION['adresler'].=strip_tags($_SERVER['REQUEST_URI']);

$id=strip_tags($_SERVER['REMOTE_ADDR']);
if($id) {
$sayfalink=strip_tags($_SERVER['REQUEST_URI']);
$sayfa_adi="2020 Finansal Raporlar";
$veriyolu=mysql_pconnect("localhost","mellatba_admin","mwsite2011.");
mysql_select_db("sayfa",$veriyolu);

@mysql_query("insert into sayfa(session_id,sayfa_link,sayfa_adi) values('$id','$sayfalink','$sayfa_adi')");
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/templateTr1.dwt.php" codeOutsideHTMLIsLocked="false" -->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />



<meta name="description" CONTENT="Bireysel ve Kurumsal bankacılık hizmetleri">

<meta name="keywords" content="mellat bank,mellat bank t�rkiye,bank mellat,bank mellat t�rkiye,iran,banka,iran banka,bankac�l�k,uluslararas� bankac�l�k">

<meta name="Author" content="Bank Mellat">

<meta name="Content-Language" content="tr">

<meta name="robots" content="index,follow">

<meta name="revisit-after" content="30 days">

<meta name="distribution" content="global"> 

<meta name="rating" content="general">



<!-- InstanceBeginEditable name="doctitle" -->
<title>Bank Mellat T�rkiye</title>
<!-- InstanceEndEditable -->

<link rel="icon" href="../image/favicon.ico" type="image/x-icon">

<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">



<link href="../css/style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="../css_menu/default.css">

<!--TOPMENU BA�?LANGIÇ -->

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



<!-- TOPMENU BİTİ�? --> 



<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

<link href="../human_resource/css/style_include.css" rel="stylesheet" type="text/css" />

</head>

<body> 



<div id="div_main" align="center"> 

  <div id="div_top">

  <div id="div_top_country">BANK MELLAT T�RK�YE �STANBUL MERKEZ �UBES� </div>

    <div id="div_top_content"><a href="links.php">&nbsp;&nbsp;&nbsp;Ba�lant�lar&nbsp;&nbsp;&nbsp;</a>|<a href="http://bankmellat.ir" target="_blank">&nbsp;&nbsp;&nbsp;Bank Mellat �ran &nbsp;&nbsp;&nbsp;</a></div>

    

    <div id="div_top_lang"> <a href="index.php" title="T�rk�e">&nbsp;&nbsp;&nbsp;TR&nbsp;&nbsp;&nbsp;</a>|<a href="../en/index.php" title="�ngilizce">&nbsp;&nbsp;&nbsp;EN&nbsp;&nbsp;&nbsp;</a></div>

  </div>

  

   <?php include_once '../includes/include_bankMellatResim.php'; ?>

copy("http://www.tcmb.gov.tr/kurlar/today.xml","today.xml"); 
<?php
$data = implode("",file('today.xml')); 

//$content = @file_get_contents("today.xml"); 

$dolar_bul = @explode('<Currency Kod="USD" CurrencyCode="USD">' ,$data); 

$dolar_bul = @explode('</ForexBuying>',$dolar_bul[1]); 

$dolar_alis = @explode('<ForexBuying>',$dolar_bul[0]); 

$dolar_bul = @explode('</ForexSelling>',$dolar_bul[1]); 

$dolar_satis = @explode('<ForexSelling>',$dolar_bul[0]); 

$dolar_alis = @$dolar_alis[1]; 

$dolar_satis = @$dolar_satis[1]; 



$euro_bul = @explode('<Currency Kod="EUR" CurrencyCode="EUR">' ,$data); 

$euro_bul = @explode('</ForexBuying>',$euro_bul[1]); 

$euro_alis = @explode('<ForexBuying>',$euro_bul[0]); 

$euro_bul = @explode('</ForexSelling>',$euro_bul[1]); 

$euro_satis = @explode('<ForexSelling>',$euro_bul[0]); 

$euro_alis = @$euro_alis[1]; 

$euro_satis = @$euro_satis[1]; 



$rial_bul = @explode('<Currency Kod="IRR" CurrencyCode="IRR">' ,$data); 

$rial_bul = @explode('</ForexBuying>',$rial_bul[1]); 

$rial_alis = @explode('<ForexBuying>',$rial_bul[0]); 

$rial_bul = @explode('</ForexSelling>',$rial_bul[1]); 

$rial_satis = @explode('<ForexSelling>',$rial_bul[0]); 

$rial_alis = @$rial_alis[1]; 

$rial_satis = @$rial_satis[1]; 

?>

  

  <div id="div_icerik_template">

  <!-- InstanceBeginEditable name="duzenlenilirAlan" -->
    <table width="960" height="300" align="center" cellpadding="4" cellspacing="7" class="table_border" id="Table_" vspace="0">
      <tr>
        <td width="230" height="90" align="left" valign="top"><img src="../image/image_ir/Statistics-and-Economical-Researches.jpg" width="230" height="325" class="resim" /></td>
        <td width="730" colspan="-5" align="left" valign="top">
<header class="template_baslik">F�NANSAL RAPORLAR - 2020 YILI</header>
<table width="670" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F2F2F2" class="table_border">
  <tr>
    <td>
    <table width="680" cellpadding="2" cellspacing="1" border="1" bordercolor="#CCCCCC">
      <tr class="financialr_baslik">
        <td width="114" align="center" valign="top" class="transparan">Y�l</td>
        <td width="390" align="left" valign="top" class="transparan">A��klama</td>
        <td width="160" align="center" valign="middle">Dosya</td>
      </tr>
      <?php do { ?>
        <tr valign="middle">
          <td bgcolor="#f0f3f7" align="center" class="financialr_alt_baslik"><?php echo $row_rc_finansaltablo2012['yil']; ?></td>
          <td bgcolor="#f0f3f7" class="financialr_alt_baslik"><?php echo $row_rc_finansaltablo2012['aciklama']; ?> </td>
          <td bgcolor="#f0f3f7" align="center" class="financialr_alt_baslik"><a href="../upload/<?php echo $row_rc_finansaltablo2012['link']; ?>" target="popup"><img src="../image/pdf_icon.png" width="16" height="16" border="0"/></a></td>
        </tr>
        <?php } while ($row_rc_finansaltablo2012 = mysql_fetch_assoc($rc_finansaltablo2012)); ?>
    </table></td>
  </tr>
</table></td>        
      </tr>
    </table>
  <!-- InstanceEndEditable -->

  </div>

  

  <div id="div_footer_template">

    <table width="980" height="30" border="0" cellpadding="0">

      <tr>

        <td height="30" align="center"><span id="footer" style="font-size:9px;font-family:Arial;color:#666;text-align:center">Copyright © 2011 Bank Mellat T�rkiye �stanbul Merkez �ubesi</span></td>

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

<!-- InstanceEnd --></html>
<?php
mysql_free_result($rc_finansaltablo2012);

@mysql_close($connection_lcl);
?>