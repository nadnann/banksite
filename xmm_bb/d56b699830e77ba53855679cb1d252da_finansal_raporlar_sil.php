<?php require_once('../Connections/connection_lcl.php'); ?>
<?


if(!isset($_SESSION["MM_Username1"])) {
header("location:index.php");

}

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

if ((isset($_GET['id'])) && ($_GET['id'] != "")) {
  $deleteSQL = sprintf("DELETE FROM finansal_raporlar WHERE id=%s",
                       GetSQLValueString(strip_tags($_GET['id']), "int"));

  mysql_select_db($database_connection_lcl, $connection_lcl);
  $Result1 = mysql_query($deleteSQL, $connection_lcl) or die(mysql_error());

  $deleteGoTo = "d56b699830e77ba5385finansal_raporlar_sil2.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

mysql_select_db($database_connection_lcl, $connection_lcl);
$query_rc_finansal_sil = "SELECT aciklama, eklenme_tarihi FROM finansal_raporlar";
$rc_finansal_sil = mysql_query($query_rc_finansal_sil, $connection_lcl) or die(mysql_error());
$row_rc_finansal_sil = mysql_fetch_assoc($rc_finansal_sil);
$totalRows_rc_finansal_sil = mysql_num_rows($rc_finansal_sil);
?>
<? session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Kullan�c� Sayfas�</title>
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
            <td width="970" height="112" colspan="-5" align="left" valign="top"><header class="template_baslik">Y&Ouml;NET�M PANEL�</header>
            <p class="parag">Ho�geldiniz</p>
            <p class="parag">&nbsp;<a href="d56b699830e77ba53855679cb1d252da01.php" class="paraglink"><img src="images/Home.png" width="24" height="24" border="0" />Anasayfa</a></p>
            <p class="parag"> Kullan�c� Ad�: <b><?php echo strip_tags(ucwords($_SESSION['MM_Username1'])); ?></b> </p>
            
             <p class="parag"> Giri� Saati: <b><?php echo strip_tags($_SESSION['MM_girissaati']); ?></b></p>
             <table width="700" border="0" cellspacing="0" cellpadding="0">
               <tr>
                 <td><form id="form_sil" name="form_sil" method="post" action="">
                   <table width="700" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td colspan="2" align="center" valign="middle">Silinecek finansal rapor:</td>
                       </tr>
                     <tr>
                       <td width="225">Finansal Rapor Ad�:</td>
                       <td width="475"><label>
                         <input name="finansal_rapor_adi" type="text" id="finansal_rapor_adi" value="<?php echo strip_tags($row_rc_finansal_sil['aciklama']); ?>" size="30" />
                       </label></td>
                     </tr>
                     <tr>
                       <td>Finansal Rapor Eklenme Tarihi:</td>
                       <td><label>
                         <input name="finansal_rapor_tarihi" type="text" id="finansal_rapor_tarihi" value="<?php echo strip_tags($row_rc_finansal_sil['eklenme_tarihi']); ?>" size="30" />
                       </label></td>
                     </tr>
                     <tr>
                       <td>&nbsp;</td>
                       <td><label>
                         <input type="submit" name="button" id="button" value="  Finansal Raporu Sil    " />
                       </label></td>
                     </tr>
                   </table>
                 </form></td>
               </tr>
             </table>
             
             </p>
             <p class="parag">&nbsp;</p>
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
mysql_free_result($rc_finansal_sil);
?>
<?php
@mysql_close($connection_lcl);
?>