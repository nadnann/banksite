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

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE uye_islemleri SET uye_user_adi_m=%s, uye_giris_saati=%s, uye_cikis_saati=%s, ip_adresi=%s WHERE id=%s",
                       GetSQLValueString($_POST['kullanici_adi'], "text"),
                       GetSQLValueString($_POST['giris_saati'], "date"),
                       GetSQLValueString($_POST['cikis_saati'], "date"),
                       GetSQLValueString($_POST['ip_adresi'], "text"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_connection_lcl, $connection_lcl);
  $Result1 = mysql_query($updateSQL, $connection_lcl) or die(mysql_error());

  $updateGoTo = "d56b699830e77ba53855679cb1d252da01.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_Recordset1 = "-1";
if (isset($_SESSION['MM_Username'])) {
  $colname_Recordset1 = $_SESSION['MM_Username'];
}
mysql_select_db($database_connection_lcl, $connection_lcl);
$query_Recordset1 = sprintf("SELECT * FROM uye_islemleri WHERE uye_user_adi_m = %s", GetSQLValueString($colname_Recordset1, "text"));
$Recordset1 = mysql_query($query_Recordset1, $connection_lcl) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
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
            <p class="parag">Sistem &Ccedil;ýkýyorsunuz</p>
            <form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
              <label for="textfield"></label>
              <input name="id" type="hidden" id="id" value="<?php echo $row_Recordset1['id']; ?>" />
              <input name="cikis_saati" type="hidden" id="cikis_saati" value="<? echo date("Y/m/d H:i:s")?>" />
              <input name="kullanici_adi" type="hidden" id="kullanici_adi" value="<?php echo $_SESSION['MM_Username1']; ?>" />
              <input name="giris_saati" type="hidden" id="giris_saati" value="<?php echo $row_Recordset1['uye_giris_saati']; ?>" />
              <input type="hidden" name="ip_adresi" id="ip_adresi" value="<? echo $_SERVER['REMOTE_ADDR'];?>" />
<input type="submit" name="button" id="button" value="Sistem &Ccedil;ýkýþ" />
<input type="hidden" name="MM_update" value="form1" />
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
mysql_free_result($Recordset1);
?>
<?php
@mysql_close($connection_lcl);
?>