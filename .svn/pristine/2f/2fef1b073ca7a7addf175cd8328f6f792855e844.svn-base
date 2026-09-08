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
  $updateSQL = sprintf("UPDATE duyurular SET duyuru_adi=%s, duyuru_metni=%s, duyuru_link=%s, duyuru_tarihi=%s, duyuru_ekleyen_kullanici=%s WHERE duyuru_id=%s",
                       GetSQLValueString($_POST['duyuru_adi'], "text"),
                       GetSQLValueString($_POST['duyuru_metni'], "text"),
                       GetSQLValueString($_POST['duyuru_link'], "text"),
                       GetSQLValueString($_POST['duyuru_tarih'], "date"),
                       GetSQLValueString($_POST['duyuru_ekleyen'], "text"),
                       GetSQLValueString($_POST['duyuru_id'], "int"));

  mysql_select_db($database_connection_lcl, $connection_lcl);
  $Result1 = mysql_query($updateSQL, $connection_lcl) or die(mysql_error());

  $updateGoTo = "d56b699830e77ba53855duyurular_edit2.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_Recordset1 = "-1";
if (isset($_GET['id'])) {
  $colname_Recordset1 = strip_tags($_GET['id']);
}
mysql_select_db($database_connection_lcl, $connection_lcl);
$query_Recordset1 = sprintf("SELECT * FROM duyurular WHERE duyuru_id = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $connection_lcl) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>

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
            <p class="parag"> Kullan�c� Ad�: <b><?php echo ucwords($_SESSION['MM_Username1']); ?></b> </p>
             <p class="parag"> Giri� Saati: <b><?php echo $_SESSION['MM_girissaati']; ?></b></p>
             <p class="parag">&nbsp;<a href="d56b699830e77ba53855679cb1d252da01.php" class="paraglink"><img src="images/Home.png" width="24" height="24" border="0" />Anasayfa</a></p>
             <form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
               <table width="800" border="0" cellpadding="0" cellspacing="3" class="template">
                 <tr>
                   <th width="211" align="left" valign="top">Duyuru No</th>
                   <td width="576"><label>
                     <input name="duyuru_id" type="text" id="duyuru_id" value="<?php echo $row_Recordset1['duyuru_id']; ?>" readonly="readonly" />
                   </label></td>
                 </tr>
                 <tr>
                   <th align="left" valign="top">Duyuru Ad�</th>
                   <td><label>
                     <input name="duyuru_adi" type="text" id="duyuru_adi" value="<?php echo $row_Recordset1['duyuru_adi']; ?>" />
                   </label></td>
                 </tr>
                 <tr>
                   <th align="left" valign="top">Duyuru Metni</th>
                   <td><label>
                     <textarea name="duyuru_metni" id="duyuru_metni" cols="45" rows="5"><?php echo $row_Recordset1['duyuru_metni']; ?></textarea>
                   </label></td>
                 </tr>
                 <tr>
                   <th align="left" valign="top">Duyuru Link</th>
                   <td><label>
                     <input name="duyuru_link" type="text" id="duyuru_link" value="<?php echo $row_Recordset1['duyuru_link']; ?>" />
                   </label></td>
                 </tr>
                 <tr>
                   <th align="left" valign="top">Duyuru Tarihi</th>
                   <td><label>
                     <input name="duyuru_tarih" type="text" id="duyuru_tarih" value="<?php echo $row_Recordset1['duyuru_tarihi']; ?>" readonly="readonly" />
                   </label></td>
                 </tr>
                 <tr>
                   <th align="left" valign="top">Duyuru Ekleyen Kullan�c�</th>
                   <td><label>
                     <input name="duyuru_ekleyen" type="text" id="duyuru_ekleyen" value="<?php echo $row_Recordset1['duyuru_ekleyen_kullanici']; ?>" readonly="readonly" />
                   </label></td>
                 </tr>
                 <tr>
                   <td>&nbsp;</td>
                   <td><label>
                     <input type="submit" name="button" id="button" value="  Duyuru D&uuml;zenle  " />
                   </label></td>
                 </tr>
               </table>
               <input type="hidden" name="MM_update" value="form1" />
             </form>
             <p class="parag">&nbsp;</p></td>
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