<?php require_once('../Connections/connection_lcl.php'); ?>
<? 
ob_start();
session_start();
?>

<?


if(!isset($_SESSION["MM_Username1"])) {
header("location:index.php");

}

?>
<?php

	$kullanici=$_SESSION['MM_Username1'];
	$uye_giris_saati=$_SESSION['MM_girissaati'];
	$uye_cikis_saati=date("Y/m/d H:i:s");
	$ip_adresi=$_SERVER['REMOTE_ADDR'];
	
	$veriyolu=mysql_pconnect("localhost","mellatba_admin","mwsite2011.");
	mysql_select_db("db_mbank_wsite",$veriyolu);
	$sorgu=mysql_query("update uye_islemleri set uye_cikis_saati='$uye_cikis_saati' where uye_giris_saati='$uye_giris_saati'");
	
	

//initialize the session
if (!isset($_SESSION)) {
  session_start();
  

	
	
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")) {
	
	  	
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")) {
	

	
	
	
	
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
  
	
  $logoutGoTo = "index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Kullanýcý Sayfasý</title>
<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css_menu/default.css">

</head>

<body>
<table width="965" border="1" bordercolor="#000" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td colspan="3"><table width="965" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td align="center" valign="middle"><table width="969" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="../image/top_Content/top_Content_.png" alt="" width="969" height="102" /></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="middle"><table width="970" height="126" border="0" align="center" cellpadding="4" cellspacing="7" class="table_border" id="Table_" vspace="0">
          <tr>
            <td width="970" height="112" colspan="-5" align="left" valign="top"><header class="template_baslik"><b>Y&Ouml;NETÝM PANELÝ</b></header>
            <p></p>
            <table width="800" border="0" align="center" cellpadding="5" cellspacing="5" class="template">
  <tr>
    <td width="353" align="left" valign="top" bgcolor="#E5E5E5"><p class="parag"><img src="images/logout.png" alt="" width="16" height="16" border="0" /><a href="<?php echo $logoutAction ?>" class="paraglink">G&uuml;venli &ccedil;ýkýþ</a></p></td>
    <td width="201" bgcolor="#E5E5E5">
    <p class="parag"><b><a href="d56b699830e77ba53855679cb1d252da_finansal_raporlar.php" class="paraglink">Finansal Rapor Ekleyin (Tr)</a></b></p></td>
    
    <td width="202" bgcolor="#E5E5E5"><p class="parag"><b><a href="e77ba53855679cb1d252da_finansal_raporlar_en.php" class="paraglink">Finansal Rapor Ekleyin ( En )</a></b></p>
     </td>
    
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F5F5F5"><p class="parag">Hoþgeldiniz</p></td>
    <td bgcolor="#F5F5F5"><p class="parag"><b><a href="d56b699830e77ba53855finansal_duzenle.php" class="paraglink">Finansal Rapor D&uuml;zenle (Tr)</a></b></p></td>
    <td bgcolor="#F5F5F5"><p class="parag"><b><a href="e77ba53855finansal_duzenle_en.php" class="paraglink">Finansal Rapor D&uuml;zenle (En)</a></b></p></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#E5E5E5"><p class="parag"> <img src="images/user.png" width="16" height="16" /> Kullanýcý Adý: <b><?php echo ucwords($_SESSION['MM_Username1']); ?></b></p></td>
    <td bgcolor="#E5E5E5"><p class="parag"><b><a href="d56b699830e77ba53855duyurular.php" class="paraglink"> Duyurular (Tr)</a></b></p></td>
    <td bgcolor="#E5E5E5"><p class="parag"><b><a href="e77ba53855duyurular.php" class="paraglink"> Duyurular(En)</a></b></p></td>
  </tr>
  <tr>
    <td align="left" valign="top" bgcolor="#F5F5F5"><p class="parag"> Giriþ Saati: <b><?php echo $_SESSION['MM_girissaati']; ?></b></p></td>
    <td bgcolor="#F5F5F5"><p class="parag"><b><a href="d56b699830e77ba53855kayitli_kullanici.php" class="paraglink">Kayýtlý Kullanýcýlar </a></b></p></td>
    <td bgcolor="#F5F5F5"><p class="parag"><b><a href="d56b699830kayitli_kullanici_giris.php" class="paraglink">Kayýtlý Kullanýcý Giriþ-&Ccedil;ýkýþ</a></b></p></td>
  </tr>
            </table>
            <p></p>
 
             </td>
          </tr>
        </table>
          <br /></td>
      </tr>
      <tr>
        <td align="center" valign="middle" bgcolor="#333333"><span id="footer" style="font-size:9px;font-family:Arial;color:#666;text-align:center; line-height:20px" >Copyright &copy; 2011 Bank Mellat Turkey Istanbul Main Branch</span></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?php
@mysql_close($connection_lcl);
?>