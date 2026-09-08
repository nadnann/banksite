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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form_kaydet")) {
  $insertSQL = sprintf("INSERT INTO duyurular (duyuru_adi, duyuru_metni, duyuru_link, duyuru_tarihi, duyuru_ekleyen_kullanici) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['duyuru_adi'], "text"),
                       GetSQLValueString($_POST['duyuru_metin'], "text"),
                       GetSQLValueString($_POST['duyuru_link'], "text"),
                       GetSQLValueString($_POST['duyuru_tarih'], "date"),
                       GetSQLValueString($_POST['duyuru_ekleyen'], "text"));

  mysql_select_db($database_connection_lcl, $connection_lcl);
  $Result1 = mysql_query($insertSQL, $connection_lcl) or die(mysql_error());

  $insertGoTo = "d56b699830e77baduyurular_ekle2.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_connection_lcl, $connection_lcl);
$query_rc_kullanicilar = "SELECT uye_user_adi FROM uyeler";
$rc_kullanicilar = mysql_query($query_rc_kullanicilar, $connection_lcl) or die(mysql_error());

mysql_query("SET NAMES 'latin5'");  
mysql_query("SET CHARACTER SET latin5");  
mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");  



$row_rc_kullanicilar = mysql_fetch_assoc($rc_kullanicilar);
$totalRows_rc_kullanicilar = mysql_num_rows($rc_kullanicilar);
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
            <td width="970" height="112" colspan="-5" align="left" valign="top"><header class="template_baslik">Y&Ouml;NETÝM PANELÝ</header>
            <p class="parag">Hoþgeldiniz</p>
            <p class="parag"> Kullanýcý Adý: <b><?php echo ucwords($_SESSION['MM_Username1']); ?></b> </p>
             <p class="parag"> Giriþ Saati: <b><?php echo $_SESSION['MM_girissaati']; ?></b></p>
             <p class="parag">&nbsp;<a href="d56b699830e77ba53855679cb1d252da01.php" class="paraglink"><img src="images/Home.png" width="24" height="24" border="0" />Anasayfa</a></p>
             <p class="parag">Duyuru Ekle</p>
             <form id="form_kaydet" name="form_kaydet" method="POST" action="<?php echo $editFormAction; ?>">
               <table width="800" border="0" cellpadding="0" cellspacing="0" class="template">
                 <tr>
                   <td width="211">&nbsp;Duyuru Adý</td>
                   <td width="589"><label>
                     <input type="text" name="duyuru_adi" id="duyuru_adi" />
                   </label></td>
                 </tr>
                 <tr>
                   <td>&nbsp;Duyuru Link</td>
                   <td><label>
                     <input type="text" name="duyuru_link" id="duyuru_link" />
                   </label></td>
                 </tr>
                 <tr>
                   <td>&nbsp;Duyuru Metin</td>
                   <td><label>
                     <textarea name="duyuru_metin" id="duyuru_metin" cols="45" rows="5"></textarea>
                   </label></td>
                 </tr>
                 <tr>
                   <td>&nbsp;Duyuru Tarih</td>
                   <td><label>
                     <input name="duyuru_tarih" type="text" id="duyuru_tarih" value="<? echo date("Y/m/d H:i:s"); ?>" readonly="readonly" />
                   </label></td>
                 </tr>
                 <tr>
                   <td>&nbsp;Duyuru Ekleyen Kullanýcý</td>
                   <td><label>
                     <select name="duyuru_ekleyen" id="duyuru_ekleyen">
                       <?php
do {  
?>
                       <option value="<?php echo $row_rc_kullanicilar['uye_user_adi']?>"<?php if (!(strcmp($row_rc_kullanicilar['uye_user_adi'], $row_rc_kullanicilar['uye_user_adi']))) {echo "selected=\"selected\"";} ?>><?php echo $row_rc_kullanicilar['uye_user_adi']?></option>
                       <?php
} while ($row_rc_kullanicilar = mysql_fetch_assoc($rc_kullanicilar));
  $rows = mysql_num_rows($rc_kullanicilar);
  if($rows > 0) {
      mysql_data_seek($rc_kullanicilar, 0);
	  $row_rc_kullanicilar = mysql_fetch_assoc($rc_kullanicilar);
  }
?>
                     </select>
                   </label></td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td><label>
                     <input type="submit" name="button" id="button" value="Duyuru Ekle" />
                   </label></td>
                 </tr>
               </table>
               <input type="hidden" name="MM_insert" value="form_kaydet" />
             </form></td>
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
mysql_free_result($rc_kullanicilar);
?>
<?php
@mysql_close($connection_lcl);
?>