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

$id=$_SERVER['REMOTE_ADDR'];
if($id) {
$sayfalink=$_SERVER['REQUEST_URI'];
$sayfa_adi="Letter Credit";
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

<link href="../css/style_en_letter.css" rel="stylesheet" type="text/css" />
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
        <td>
        <?php include_once '../includes/include_menu_en.php'; ?>
        
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
        <td width="230" height="90" align="left" valign="top"><img src="../image/image_ir/foreignletterofguarantee.jpg" width="230" height="325" class="resim" /></td>
        <td width="730" colspan="-5" align="left" valign="top">
        <header class="template_baslik">LETTER OF CREDIT</header><p></p><p></p>
 <p class="parag">
 <ul>
  <li class="ul_parag"><b>Import Letters of Credit</b></li>
</ul>  
</p>
        
<p class="parag">The client's<a href="../document/13.pdf" class="paraglink"> application</a> for opening an import letter of credit is received by the import section and submitted to Executive Board of Bank Mellat in order take non-cash credit resolution for this purpose. Having received such resolution, the client is ought to give below mentioned documents while signing <a href="../document/7.pdf" class="paraglink">General Credit Agreemen</a>t with the Bank and giving collaterals if resolved as well as other required documents. These documents are scrutinized by the import section to check that they are complete and consistent with each other. The letter of credit opening swift then be prepared taking the terms and condition of the importer into account. </p>  
<p class="parag">The L/C should then be reviewed by the import section and transmitted to advising bank. The bill of lading must also be made to the order of Bank Mellat. When the payment for the L/C is received, it will be endorsed in the name the client. Moreover, the insurance policy should be in the name of Bank Mellat or assigned to Bank Mellat even if the L/C is financed by Bank Mellat.

</p>        
<p class="parag">After completion of opening process, the negotiating bank will send the documents specified in the L/C to the import section. Some of them are as follows;
 <ul>
  <li class="ul_parag">Invoice</li>
  <li class="ul_parag">Bill of lading</li>
  <li class="ul_parag">Certificate of origin</li>
  <li class="ul_parag">Insurance Policy</li>
   <li class="ul_parag">Packing List</li>
   <li class="ul_parag">Bill of exchange (as the case may require)</li>
</ul>  
</p>
<p class="parag">On receipt of the documents, they are first checked for compliance with the terms of the L/C; then the client is informed. If there is any discrepancy, it is pointed out to the client and his instructions are obtained. If the client does not accept the discrepancy, the negotiating bank is informed immediately by swift asked to credit Bank Mellat's account which was debited on negotiation of documents. All amendments are also submitted to the client for his approval.
</p>  
<p class="parag">In case of direct clients, the documents are to be handed over to the client after debiting his account with Bank Mellat. In case of financing, the proceed of documents is provided by the credit department sometimes partly by the client and the related import file is remarked by a special clause indicating this point. All documents under process are safeguarded in locked cabinets when not in actual use.
</p>  
</p>  
<p class="parag">If the L/C is opened for transit trade purpose,<a href="../document/14.pdf" class="paraglink"> a specific form</a> is filled out in pursuance of the concerned a circular letter of Central Bank in order to follow up and close the relevant export and import commitments of trader for completion of sale and purchase transactions. </p>  
<p class="parag">An <a href="../document/15.pdf" class="paraglink">undertaking format letter</a> must be signed for all messages, instructions commitment letter and other similar binding documents prepared and sent to our Bank through fax communications by the applicants. </p> 
 <p class="parag">
 It is also a must to sign a <a href="../document/16.pdf" class="paraglink">commitment letter</a> indicating the obligatory conditions for issuance of documantary credits.
 <ul>
  <li class="ul_parag"><b>Export Letters of Credit</b></li>
</ul>  
 </p>  
 <p class="parag">IWhen a letters of credit opening swift on telex is received by the export section, this is entered in a register. The exporter is informed of the L/C by means of a letter bearing the copy of such L/C without obligation. Having received of the L/C, following documents should bu submitted by the exporter to the Bank Mellat Export Section as the case may require.
</p>  

 <p class="parag">
 <ul>
  <li class="ul_parag">Draft, (to be received for settlement of the documents amount sent on collection basis if the parties agree in this way)</li>
  <li class="ul_parag">Articles of Association</li>
  <li class="ul_parag">Sale invoice, (X)</li>
  <li class="ul_parag">Transportation Documents (i.e. Bill of lading, airway bill, fiata multi-model Transport Bill of Lading etc.,)</li>
 <li class="ul_parag">Certificate of origin, (X)</li>
  <li class="ul_parag">Weight List,</li>
    <li class="ul_parag">Packing List,</li>
      <li class="ul_parag">Health Certificate, (X)</li>
        <li class="ul_parag">Certificate of analysis, (X)</li>
         <li class="ul_parag">Insurance Policy,</li>
         <li class="ul_parag">Any other document asked in the L/C.</li>

</ul>  
</p>      
<p class="parag">
(X) Consular authentication of the importing country may be required when stipulated in the L/C.</p>

<p class="parag">The shipping documents are checked for compliance with the terms of Letter of Credit. If found in order, they are sent to the opening bank and payment is claimed from the reimbursing bank. If documents have some discrepancies they are reverted back to the exporter for correction. If the exporter does not wish to correct them, they are sent on collection basis.</p>   
<p class="parag">The proceeds of the export must be brought in Turkey within 360 days following the date of shipment according to the rules of the Central Bank of Turkey. The export commitments under USD 50.000 are closed by the negotiating banks in Turkey. Over this amount such commitments can be settled by the competent authorities of this Bank.</p>
<p class="parag">Custom declaration and FX buying documents must submitted for closure of export commitments.</p>
<p class="parag">In case of failure in bringing export proceeds to Turkey within the acceptable period as mentioned above, some sanctions are implemented against these exporters.</p>
<p class="parag">In case of the customer confirmation request to be added to any L/C documents, they are required to assign the proceeds of such shipping documents in favor of our Bank.</p>
<p class="parag">Should the proceeds of L/C is assigned to its manufacturer or to any third party, a <a href="../document/17.pdf" class="paraglink">format assignment letter</a> is signed and handed to our Bank while delivering one of its copy to the assignee in order to be informed. This informing process is made with an <a href="../document/18.pdf" class="paraglink">advising letter.</a></p>

<p class="parag">Expert L/C's are backed by a <a href="../document/19.pdf" class="paraglink">commitment letter</a> impresing the liabilities arisen from the uniform customer and applications for Documentary Credits Brochure No: 500 of the ICC to be signed by the beneficiary.</p>
<p class="parag">The beneficiaries are compelled to sign an <a href="../document/20.pdf" class="paraglink">undertaking letter</a> indicating their responsibility if they do not submit the documents to our Bank indicating represantation and binding charges within the entity on time which is going to be based on transaction to be settled. </p>
        
        
        
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
<?
@mysql_close($connection_lcl);
?>