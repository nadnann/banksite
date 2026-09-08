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


<title>Bank Mellat Türkiye</title>

<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">

<link href="../css/style_tr_bireyselm.css" rel="stylesheet" type="text/css" />
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
  <div id="div_top_country">BANK MELLAT TÜRKÝYE ÝSTANBUL MERKEZ ÞUBESÝ </div>
    <div id="div_top_content"><a href="links.php">&nbsp;&nbsp;&nbsp;Baðlantýlar&nbsp;&nbsp;&nbsp;</a>|<a href="http://bankmellat.ir" target="_blank" >&nbsp;&nbsp;&nbsp;Bank Mellat Ýran&nbsp;&nbsp;&nbsp;</a></div>
    
    <div id="div_top_lang"> <a href="../tr/index.php" title="Türkçe">&nbsp;&nbsp;&nbsp;TR&nbsp;&nbsp;&nbsp;</a>|<a href="../en/index.php" title="Ýngilizce">&nbsp;&nbsp;&nbsp;EN&nbsp;&nbsp;&nbsp;</a></div>
  </div>
  
<?php include_once '../includes/include_bankMellatResim.php'; ?>
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