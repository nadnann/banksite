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

mysql_select_db($database_connection_lcl, $connection_lcl);
$query_Recordset1 = "SELECT * FROM duyurular_en";
$Recordset1 = mysql_query($query_Recordset1, $connection_lcl) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);

mysql_select_db($database_connection_lcl, $connection_lcl);
$query_Recordset1 = "SELECT * FROM duyurular_en";
$Recordset1 = mysql_query($query_Recordset1, $connection_lcl) or die(mysql_error());

mysql_query("SET NAMES 'latin5'");  
mysql_query("SET CHARACTER SET latin5");  
mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Kullanýcý Sayfasý-Duyurular Sayfasý</title>
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
        <td align="center" valign="middle"><table width="965" height="126" border="0" align="center" cellpadding="4" cellspacing="7" class="table_border" id="Table_" vspace="0">
          <tr>
            <td width="970" height="112" colspan="-5" align="left" valign="top"><header class="template_baslik">Y&Ouml;NETÝM PANELÝ</header>
            <p class="parag">Hoþgeldiniz</p>
            <p class="parag"> Kullanýcý Adý: <b><?php echo ucwords($_SESSION['MM_Username1']); ?></b> </p>
             <p class="parag"> Giriþ Saati: <b><?php echo $_SESSION['MM_girissaati']; ?></b></p>

<p class="parag">&nbsp;<a href="d56b699830e77ba53855679cb1d252da01.php" class="paraglink"><img src="images/Home.png" width="24" height="24" border="0" />Anasayfa</a></p>

             <table width="934" border="0" align="left" cellpadding="2" cellspacing="2" class="template">
               <tr>
                 <th width="115" align="center" valign="middle" bgcolor="#D6D6D6">Duyuru No</th>
                 <th width="125" align="center" valign="middle" bgcolor="#D6D6D6">Duyuru Adý</th>
                 <th width="143" align="center" valign="middle" bgcolor="#D6D6D6">Duyuru Metni</th>
                 <th width="124" align="center" valign="middle" bgcolor="#D6D6D6">Duyuru Link</th>
                 <th width="132" align="center" valign="middle" bgcolor="#D6D6D6">Duyuru Tarihi</th>
                 <th width="190" align="center" valign="middle" bgcolor="#D6D6D6">Ekleyen Kullanýcý</th>
                 <th width="73" align="center" valign="middle" bgcolor="#D6D6D6">&nbsp;</th>
               </tr>
               <?php do { ?>
                 <tr align="center" valign="middle" bgcolor="#E6E6E6">
                   <td bgcolor="#E6E6E6"><?php echo $row_Recordset1['duyuru_id']; ?></td>
                   <td bgcolor="#E6E6E6"><?php echo $row_Recordset1['duyuru_adi']; ?></td>
                   <td align="left" valign="middle"><?php echo $row_Recordset1['duyuru_metni']; ?></td>
                   <td><?php echo $row_Recordset1['duyuru_link']; ?></td>
                   <td><?php echo $row_Recordset1['duyuru_tarihi']; ?></td>
                   <td><?php echo $row_Recordset1['duyuru_ekleyen_kullanici']; ?></td>
                   <td>&nbsp;<a href="e77baduyurular_ekle.php"><img src="images/ekle.png" width="16" height="16" border="0" /></a> <a href="e77ba53855duyurular_edit.php?id=<?php echo $row_Recordset1['duyuru_id']; ?>"><img src="images/duzenle.png" width="16" height="16" border="0" /></a>&nbsp; <a href="e77ba53855duyurular_delete2.php?id=<?php echo $row_Recordset1['duyuru_id']; ?>"><img src="images/delete.png" width="16" height="16" border="0" /></a></td>
                 </tr>
                 <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
             </table></td>
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