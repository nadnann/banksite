<?php require_once('../Connections/connection_lcl.php'); ?>
<? error_reporting(0); ?>
<? ini_set("allow_url_fopen", 1); ?>
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

$id=$_SERVER['REMOTE_ADDR'];
if($id) {
$sayfalink=$_SERVER['REQUEST_URI'];
$sayfa_adi="Home";
$veriyolu=mysql_pconnect("localhost","mellatba_admin","mwsite2011.");
mysql_select_db("sayfa_en",$veriyolu);
mysql_query("insert into sayfa_en(session_id,sayfa_link,sayfa_adi) values('$id','$sayfalink','$sayfa_adi')");
}


$yil=date("Y");
$ay=date("m");
$gun=date("d");
$saat=date("H")+8;
//$tarihy=mktime("$yil/$ay/$gun $saat:00:00");


//$tarihy=date("Y/m/d H:i:s");
//mysql_query("delete from sayfa_en where tarih <='tarihy'");

$tarihy=date("Y/m/d H:00:00");

mysql_query("delete from sayfa_en where HOUR(TIMEDIFF(NOW(), tarih)) >=1");

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

$maxRows_rc_duyurular = 10;
$pageNum_rc_duyurular = 0;
if (isset($_GET['pageNum_rc_duyurular'])) {
  $pageNum_rc_duyurular = strip_tags($_GET['pageNum_rc_duyurular']);
}
$startRow_rc_duyurular = $pageNum_rc_duyurular * $maxRows_rc_duyurular;

mysql_select_db($database_connection_lcl, $connection_lcl);
$query_rc_duyurular = "SELECT * FROM duyurular_en";
$query_limit_rc_duyurular = sprintf("%s LIMIT %d, %d", $query_rc_duyurular, $startRow_rc_duyurular, $maxRows_rc_duyurular);
$rc_duyurular = mysql_query($query_limit_rc_duyurular, $connection_lcl) or die(mysql_error());
$row_rc_duyurular = mysql_fetch_assoc($rc_duyurular);

if (isset($_GET['totalRows_rc_duyurular'])) {
  $totalRows_rc_duyurular = strip_tags($_GET['totalRows_rc_duyurular']);
} else {
  $all_rc_duyurular = mysql_query($query_rc_duyurular);
  $totalRows_rc_duyurular = mysql_num_rows($all_rc_duyurular);
}
$totalPages_rc_duyurular = ceil($totalRows_rc_duyurular/$maxRows_rc_duyurular)-1;

$maxRows_rc_songezdik = 5;
$pageNum_rc_songezdik = 0;
if (isset($_GET['pageNum_rc_songezdik'])) {
  $pageNum_rc_songezdik = strip_tags($_GET['pageNum_rc_songezdik']);
}
$startRow_rc_songezdik = $pageNum_rc_songezdik * $maxRows_rc_songezdik;

mysql_select_db($database_connection_lcl, $connection_lcl);

$ip=$_SERVER['REMOTE_ADDR'];
//$query_rc_songezdik = "SELECT DISTINCT sayfa_en.sayfa_link, sayfa_en.sayfa_adi FROM WHERE session_id==$ip sayfa_en ORDER BY sayfa_en.tarih DESC ";


$query_rc_songezdik = "SELECT DISTINCT sayfa_en.sayfa_link, sayfa_en.sayfa_adi FROM sayfa_en WHERE sayfa_en.session_id='$id' ORDER BY sayfa_en.tarih DESC";
$query_limit_rc_songezdik = sprintf("%s LIMIT %d, %d", $query_rc_songezdik, $startRow_rc_songezdik, $maxRows_rc_songezdik);
$rc_songezdik = mysql_query($query_limit_rc_songezdik, $connection_lcl) or die(mysql_error());
$row_rc_songezdik = mysql_fetch_assoc($rc_songezdik);

if (isset($_GET['totalRows_rc_songezdik'])) {
  $totalRows_rc_songezdik = strip_tags($_GET['totalRows_rc_songezdik']);
} else {
  $all_rc_songezdik = mysql_query($query_rc_songezdik);
  $totalRows_rc_songezdik = mysql_num_rows($all_rc_songezdik);
}
$totalPages_rc_songezdik = ceil($totalRows_rc_songezdik/$maxRows_rc_songezdik)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<meta name="description" CONTENT="Individual and Corporate banking services">
<meta name="keywords" content="mellat bank,mellat bank turkey,bank mellat,bank mellat turkey,,�ran,bank,�ran bank,banking,international banking">
<meta name="Author" content="Bank Mellat">
<meta name="Content-Language" content="english">
<meta name="robots" content="index,follow">
<meta name="revisit-after" content="30 days">
<meta name="distribution" content="global"> 
<meta name="rating" content="general">

<!-- TemplateBeginEditable name="doctitle" -->
<title>Bank Mellat Turkey</title>
<!-- TemplateEndEditable -->
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

<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<link href="../human_resource/css/style_include.css" rel="stylesheet" type="text/css" />
</head>
<body> 
<div id="div_main" align="center">
  <div id="div_top">
  <div id="div_top_country">BANK MELLAT TURKEY</div>
    <div id="div_top_content"><a href="links.php">&nbsp;&nbsp;&nbsp;Links&nbsp;&nbsp;&nbsp;</a>|<a href="http://bankmellat.ir" target="_blank">&nbsp;&nbsp;&nbsp;Bank Mellat Iran&nbsp;&nbsp;&nbsp;</a></div>
    
    <div id="div_top_lang"> <a href="../tr/index.php" title="Turkish">&nbsp;&nbsp;&nbsp;TR&nbsp;&nbsp;&nbsp;</a>|<a href="index.php" title="English">&nbsp;&nbsp;&nbsp;EN&nbsp;&nbsp;&nbsp;</a></div>
  </div>
  
  <div class="div_menu" id="div_menu">
    <table width="980" height="30" border="0" cellpadding="0" cellspacing="0" bgcolor="#333">
      <tr align="left" valign="top">
        <td>
        <?php include_once '../includes/include_menu_en.php'; ?>
          <!--<div style="clear:both"></div>
<div style="clear:both"></div> --></td>
      </tr>
    </table>
    <!-- content table     -->
    <table height="210px" width="980px" border="0" bordercolor="#CCCCCC"  bgcolor="#FFFFFF" style="background-repeat:no-repeat; color: #FFF;" cellpadding="0" cellspacing="0" vspace="2" hspace="0">
      <tr align="left" valign="top">
        <td>
        <!--tablo1 start  -->
        <table border="0" bordercolor="#CCCCCC" width="100%" align="center" cellspacing="2" cellpadding="5" vspace="0" hspace="0">
  		<tr align="center" valign="top">
    <td><object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="100%" height="208">
      <param name="movie" value="../swf/main1.swf" />
        <param name="quality" value="high" />
        <param name="wmode" value="opaque" />
        <param name="swfversion" value="6.0.65.0" />
        <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don�t want users to see the prompt. -->
        <param name="expressinstall" value="../Scripts/expressInstall.swf" />
        <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
        <!--[if !IE]>-->
        <object type="application/x-shockwave-flash" data="../swf/main1.swf" width="958" height="208">
          <!--<![endif]-->
          <param name="quality" value="high" />
          <param name="wmode" value="opaque" />
          <param name="swfversion" value="6.0.65.0" />
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
  
  <div id="div_icerik">  
   
     <table width="960" height="250" border="0" align="center" cellpadding="4" cellspacing="7" class="table_border" id="Table_" vspace="0">
      <tr>
        <td width="140" height="90"><a href="../image/tsarruf.jpg" target="_blank" class="transparan"><img src="../image/box_banner/tmsf1.gif" alt="" width="140" height="90" border="0" /></a></td>
        <td width="140" colspan="-5"><a href="personelcustomer.php" class="transparan"><img src="../image/box_banner/product1.gif" alt="" width="140" height="90" border="0" /></a></td>
        <td width="140"><a href="human_resource.php" class="transparan"><img src="../image/box_banner/humanResource.gif" width="140" height="90" border="0"/></a></td>
        <td width="152"><a href="branch_istanbul.php" class="transparan"><img src="../image/box_banner/branches.gif" width="140" height="90" border="0"/></a></td>
        <td width="321" rowspan="2" align="left" valign="top"><table width="300" height="200" border="0" align="right" cellpadding="0">
          <tr>
            <td>
            
            <table width="300" height="100" border="0" align="center" cellpadding="0" cellspacing="0" class="table_border">
  <tr>
    <td align="center" height="13" valign="top" class="table_headerB"> Exchange Rates </td>
  </tr>
  <tr>
    <td height="82"><table width="300" border="0" align="center" cellpadding="2" cellspacing="1">
      <tr class="table_header">
        <td width="28%" height="19" align="center">&nbsp;</td>
        <td width="37%" align="center">Buy</td>
        <td width="35%" align="center">Sell</td>
      </tr>
      <tr class="table_icerikbir">
        <td align="center">USD</td>
        <td width="37%" align="center"><?=$dolar_alis ?>
          TL </td>
        <td width="35%" align="center"><?=$dolar_satis ?>
          TL</td>
      </tr>
      <tr align="center" class="table_icerikiki">
        <td height="21">EUR </td>
        <td width="37%"><?=$euro_alis ?>
          TL</td>
        <td width="35%"><?=$euro_satis ?>
          TL</td>
      </tr>
      <tr align="center" class="table_icerikuc">
        <td height="20"> IRR </td>
        <td><?=$rial_alis ?>
          TL</td>
        <td><?=$rial_satis ?>
          TL</td>
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
                  <td align="center" height="13" class="table_headerB"> Announcements </td>
                  </tr>
                <tr>
                  
                  <td height="76" >
  <table width="292" height="auto" border="0" align="left" cellpadding="0">
    <tr>
      <td align="center" valign="top">
        <marquee align="middle" scrollamount="1" direction="up"  scrolldelay="50"  height="50" hspace="0" vspace="0" onmouseover="this.stop()" onmouseout="this.start()">
          <ul type="circle" class="bullet">
           
              <?php do { ?>
                <li><a href="announcements.php?id=<?php echo $row_rc_duyurular['duyuru_id']; ?>" class="duyurularLink"><?php echo $row_rc_duyurular['duyuru_adi']; ?> </a></li>
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
        <td><a href="ibans.php" class="transparan"> <img src="../image/box_banner/iban1.gif" alt="" width="140" height="90" border="0"/></a></td>
        <td colspan="-5"><a href="interest.php" class="transparan"><a href="interest.php" class="transparan"><img src="../image/box_banner/rates1.gif" alt="" width="140" height="90" border="0"/></a></td>

        <td><a href="financial_reports.php" class="transparan"><img src="../image/box_banner/financialreport.gif" width="140" height="90" border="0" /></a></td>
        <td><a href="branch_contact.php" class="transparan"><img src="../image/box_banner/contact.gif" width="140" height="90" border="0"/></a></td>
       </tr>
     </table>
  </div>
  
  <div id="div_footer">
    <table width="980" height="150" border="0" cellpadding="0">
      <tr>
        <td>
        <table width="884" height="120" border="0" align="center" cellpadding="0" cellspacing="5">
          <tr>
            <td width="140" height="34" align="left" valign="top" class="altmenu">
            	<a href="history.php" class="altmenu1">History</a><br />
              <a href="mission.php" class="altmenu1">Mission and Vision</a><br />
              <a href="information.php" class="altmenu1">�nformation</a><br />
              <a href="deposits.php" class="altmenu1">Deposits</a><br />
              <a href="investments.php" class="altmenu1">Investments</a><br />
              <a href="bailedclaims.php" class="altmenu1">Bailed Claims</a><br /></td>
            <td width="166" align="left" valign="top" class="altmenu">
            <a href="banking_services.php" class="altmenu1">Other Banking</a><br />
              <a href="transfers.php" class="altmenu1">Transfers</a><br />
              <a href="letters_guarantee.php" class="altmenu1">Letters Of Guarantee</a><br />
              <a href="confirmations.php" class="altmenu1">Confirmations</a><br />
              <a href="avalizations.php" class="altmenu1">Avalizations and Acceptances</a><br />
              <a href="letter_credit.php" class="altmenu1">Letter Of Credit</a><br />
              <a href="collections.php" class="altmenu1">Collections</a></td>
            <td width="145" align="left" valign="top" class="altmenu">
            <a href="branch_istanbul.php" class="altmenu1">Branches</a><br />
              <a href="branch_istanbul.php" class="altmenu1">�stanbul Main Branch</a><br />
              <a href="branch_ankara.php" class="altmenu1">Ankara Branch</a><br />
              <a href="branch_izmir.php" class="altmenu1">�zmir Branch</a></td>
            <td width="177" align="left" valign="top" class="altmenu"> Recently Viewed <br />
              <?php do { ?>
                <?php echo $row_rc_songezdik['sayfa_adi']; ?><br />
              <?php } while ($row_rc_songezdik = mysql_fetch_assoc($rc_songezdik)); ?></td>
            <td width="227" align="left" valign="top" class="altmenu"><b> Account Openning Form </b>
            <br /><a href="../document/GERCEK_KIS_ING.pdf" class="altmenu1" target="_blank">Real Persons Account Opening Information</a>
            <br /><a href="../document/TUZEL_KISI_ING.pdf" class="altmenu1" target="_blank">Legal Entity Customer Information</a>
             </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="30" align="center"><span id="footer" style="font-size:9px;font-family:Arial;color:#666;text-align:center">Copyright � 2011 Bank Mellat Turkey Istanbul Main Branch</span></td>
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
<?php
mysql_free_result($rc_duyurular);

mysql_free_result($rc_songezdik);
?>
