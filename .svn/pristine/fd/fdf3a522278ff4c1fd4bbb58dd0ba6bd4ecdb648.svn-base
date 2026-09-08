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
$_SESSION['adresler'].=$_SERVER['REQUEST_URI'];

$id=$_SERVER['REMOTE_ADDR'];
if($id) {
$sayfalink=$_SERVER['REQUEST_URI'];
$sayfa_adi="Interest Rates";
$veriyolu=mysql_pconnect("localhost","mellatba_admin","mwsite2011.");
mysql_select_db("sayfa_en",$veriyolu);
mysql_query("insert into sayfa_en(session_id,sayfa_link,sayfa_adi) values('$id','$sayfalink','$sayfa_adi')");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />

<meta name="description" CONTENT="Interest">
<meta name="keywords" content="mellat bank,mellat bank turkey,bank mellat,bank mellat turkey,,�ran,bank,�ran banking,banking,international banking">
<meta name="Author" content="Bank Mellat"> 
<meta name="Content-Language" content="english">
<meta name="robots" content="index,follow">
<meta name="revisit-after" content="30 days">
<meta name="distribution" content="global"> 
<meta name="rating" content="general">

<title>Bank Mellat Turkey</title>

<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">

<link href="../css/style_en_faiz.css" rel="stylesheet" type="text/css" />
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
  <div id="div_top_country">BANK MELLAT TURKEY ISTANBUL MAIN BRANCH </div>
    <div id="div_top_content"><a href="links.php">&nbsp;&nbsp;&nbsp;Links&nbsp;&nbsp;&nbsp;</a>|<a href="http://en.bankmellat.ir/portal.aspx">&nbsp;&nbsp;&nbsp;Bank Mellat Iran&nbsp;&nbsp;&nbsp;</a></div>
     
    <div id="div_top_lang"> <a href="../tr/index.php" title="Turkish">&nbsp;&nbsp;&nbsp;TR&nbsp;&nbsp;&nbsp;</a>|<a href="index.php" title="English">&nbsp;&nbsp;&nbsp;EN&nbsp;&nbsp;&nbsp;</a></div>
  </div>
  
  <div class="div_menu" id="div_menu">
    <table width="980" height="30" border="0" cellpadding="0" cellspacing="0" bgcolor="#333">
      <tr align="left" valign="top">
        <td><ul id="sddm">
          <li><a href="index.php">Home</a></li>
          <li><a href="#" onmouseover="mopen('m1')" onmouseout="mclosetime()">About Us</a>
            <div id="m1" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="history.php">History&nbsp;</a> 
            <a href="organisation.php">Organization&nbsp;&nbsp;</a> <a href="managers.php">Board Of Managers&nbsp;</a>  
            <a href="mission.php">Mission & Vision&nbsp;&nbsp;</a> <a href="information.php">Information Technology&nbsp;&nbsp;</a> <a href="human_resource.php">Human Resources&nbsp;</a> </div>
          </li>
          <li><a href="#" onmouseover="mopen('m2')" onmouseout="mclosetime()">Services Rendered</a>
            <div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="deposits.php">Deposits&nbsp;&nbsp;&nbsp;</a> <a href="investments.php">Loans&nbsp;&nbsp;&nbsp;</a> <a href="bailedclaims.php">Bailed Claims&nbsp;&nbsp;&nbsp;</a> 
            <a href="banking_services.php">Other Banking Services&nbsp;&nbsp;&nbsp;</a> </div>
            
        
            
          </li>
          <li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()">Terms & Conditions</a>
            <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"><a href="personelcustomer.php">Personel Customer</a> <a href="commercial_customer.php">Commercial / Corporate Customer</a> </div>
          </li>
          <li><a href="branch_istanbul.php" onmouseover="mopen('m4')" onmouseout="mclosetime()">Branches </a>
            <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="branch_istanbul.php">Istanbul Main Branch&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a> 
            <a href="branch_ankara.php">Ankara Branch&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
            <a href="branch_izmir.php">Izmir Branch&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </div>
          </li>
          <li><a href="correspondents.php">Correspondents</a></li>
          <li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">Daily Rates</a>
            <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="foreign_exchange.php">Foreign Exchange&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> 
            <a href="interest.php">Interest&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></div>
          </li>
          <li><a href="#" onmouseover="mopen('m6')" onmouseout="mclosetime()">Financial Reports</a>
            <div id="m6" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"><a href="financial_reports_2012.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2012&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="financial_reports_2011.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2011&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="financial_reports_2010.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2010&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="financial_reports_2009.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2009&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="financial_reports_2008.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2008&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="financial_reports_2007.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2007&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="financial_reports_2006.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2006&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="financial_reports_2005.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2005&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> </div>
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
  
   <div id="div_icerik_template">

        <table width="960" height="300" border="0" align="center" cellpadding="4" cellspacing="7" class="table_border" id="Table_" vspace="0">
      <tr>
        <td width="230" height="90" align="left" valign="top"><img src="../image/image_ir/foreignletterofguarantee.jpg" width="230" height="325" class="resim" /></td>
        <td width="730" colspan="-5" align="left" valign="top">
        <header class="template_baslik">INTEREST RATES</header><p></p><p></p>
         
           <table width="550" align="center" class="template" >
         
              <tr>
                <td colspan="6" align="center" valign="middle" bgcolor="#E5E5E5"><b>Interest Rates Applied To Deposit Account </b></td>
                </tr>
                              <tr>
                <td width="150" align="center" valign="middle" bgcolor="#E5E5E5"></td>
                <td width="110" align="center" valign="middle" bgcolor="#E5E5E5"> No Payment Term </td>
                <td width="70" align="center" valign="middle" bgcolor="#E5E5E5">1 Month </td>
                <td width="70" align="center" valign="middle" bgcolor="#E5E5E5">3 Months</td>
                <td width="70" align="center" valign="middle" bgcolor="#E5E5E5">6 Months</td>
                <td width="70" align="center" valign="middle" bgcolor="#E5E5E5">12 Months</td>
                </tr>
              <tr>
                <td align="center" valign="middle" bgcolor="#F5F5F5"><strong>TL</strong></td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 0 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 6,75 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 7,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 7,25 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 7,50 </td>
                </tr>
              <tr>
                <td align="center" valign="middle" bgcolor="#F5F5F5"><strong>USD</strong></td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 0 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 1,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 1,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 1,75 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 2,00 </td>
              </tr>
              <tr>
                <td align="center" valign="middle" bgcolor="#F5F5F5"><strong>EUR</strong></td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 0 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 3,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 3,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 3,75 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 3,75 </td>
              </tr>
              <tr>
                <td align="center" valign="middle" bgcolor="#F5F5F5"><strong>GBP</strong></td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 0 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 2,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 2,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 2,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 2,50 </td>
              </tr>           
          </table>
			<p></p>
            <p></p>
            <table width="675" align="center" class="template" >
         
              <tr>
                <td colspan="9" align="center" valign="middle" bgcolor="#E5E5E5"><b>Interest Rates Applied To Credits </b></td>
                </tr>
                              <tr>
                <td width="184" align="center" valign="middle" bgcolor="#E5E5E5"></td>
                <td width="55" align="center" valign="middle" bgcolor="#E5E5E5">TL</td>
                <td width="55" align="center" valign="middle" bgcolor="#E5E5E5">USD</td>
                <td width="55" align="center" valign="middle" bgcolor="#E5E5E5">EUR</td>
                <td width="55" align="center" valign="middle" bgcolor="#E5E5E5">GBP</td>
                <td width="55" align="center" valign="middle" bgcolor="#E5E5E5">JPY</td>
                <td width="55" align="center" valign="middle" bgcolor="#E5E5E5">CHF</td>
                <td width="55" align="center" valign="middle" bgcolor="#E5E5E5">AED</td>
                <td width="55" align="center" valign="middle" bgcolor="#E5E5E5">CNY</td>
                </tr>
              <tr>
                <td align="left" valign="middle" bgcolor="#F5F5F5"><strong>Discount and Repurchase Credits</strong></td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 17,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 9,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 11,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 10,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 8,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 8,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 13,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 13,50 </td>
                </tr>
              <tr>
                <td align="left" valign="middle" bgcolor="#F5F5F5"><strong>Generally</strong></td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 18,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 10,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 12,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 11,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 9,50 </td>
                 <td align="center" valign="middle" bgcolor="#F5F5F5"> 9,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 14,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 14,50 </td>
              </tr>
              <tr>
                <td align="left" valign="middle" bgcolor="#F5F5F5"><strong>Commercial Credits</strong></td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 18,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 10,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 12,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 11,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 9,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 9,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 14,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 14,50 </td>
              </tr>
              <tr>
                <td align="left" valign="middle" bgcolor="#F5F5F5"><strong>Consumer Credits</strong></td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 18,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 10,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 12,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 11,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 9,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 9,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 14,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 14,50 </td>
              </tr> 
                            <tr>
                <td align="left" valign="middle" bgcolor="#F5F5F5"><strong>Other Credits(*)</strong></td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 18,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 10,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 12,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 11,00 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 9,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 9,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 14,50 </td>
                <td align="center" valign="middle" bgcolor="#F5F5F5"> 14,50 </td>
              </tr>           
          </table>
            <p class="parag">(*) With the exception of reimbursement credits </p>
	      <p class="parag">Interest rate stipulated in the reimbursement credit agreement shall be applied.</p>
          <p class="parag">Within the framework of aggrement for prevention of double taxation concluded between Iran and Turkey, in order to exempt some of your earnings gained in Turkey from taxation and since those of the entities who earn interest y�elds in Turkey are expected to submit a document indicating that they are full tax-payers over their global yields, you are kindly requested to provide such document from your tax office and send us immediately having translated into turkish and certified by turkish embassy authorities in your country pls note that this document will be valid until the end of the year and be aware that such document should be renewed and sent us for each successive year in same manner.</p>
        
        
         
        </td>
    
        
      </tr>
    </table>
    

  </div>
  
  <div id="div_footer_template">
    <table width="980" height="30" border="0" cellpadding="0">
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
