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

$id=strip_tags($_SERVER['REMOTE_ADDR']);
if($id) {
$sayfalink=strip_tags($_SERVER['REQUEST_URI']);
$sayfa_adi="Human Resource CV";
$veriyolu=mysql_pconnect("localhost","mellatba_admin","mwsite2011.");
mysql_select_db("sayfa_en",$veriyolu);
@mysql_query("insert into sayfa_en(session_id,sayfa_link,sayfa_adi) values('$id','$sayfalink','$sayfa_adi')");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Bank Mellat Turkey</title>
<link rel="icon" href="../image/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css_menu/default.css">
<link href="../human_resource/css/style_include.css" rel="stylesheet" type="text/css" />
</head>
<body leftmargin="auto" rightmargin="auto" bottommargin="0">
<table width="969" border="1" bordercolor="#000" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="968" colspan="3"><table width="969" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td width="969" align="center" valign="middle"><table width="970" border="0" align="left" cellpadding="0" cellspacing="0">
          <tr>
            <td><img src="../image/top_Content/top_Content_.png" alt="" width="969" height="102" border="0" /></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="middle">
        
        <table width="500" height="123" border="0" cellpadding="4" cellspacing="7" id="Table_" vspace="0" align="CENTER">
      <tr>
        <td height="109" align="left" valign="top"><header class="template_baslik">HUMAN RESOURCE</header>
<table width="500" border="0" cellpadding="0" cellspacing="0" class="table_border" align="CENTER">
  <tr>
    <td width="900">
    <table width="500" align="CENTER" class="table_isbasvurusu" cellspacing="2">
    <tr>
            
              <td colspan="2" align="CENTER" valign="MIDDLE"><label for="textfield5">Ýþ Baþvuru Formu</label></td>
    </tr>
            <tr>
            
              <td width="178" bgcolor="#F3F3F3">Ad:</td>
              <td bgcolor="#F3F3F3" width="232"><label for="textfield5"></label>
                <input type="text" name="ikform_ad" id="textfield5" /></td>
              </tr>
            <tr bgcolor="#F9F9F9">
              <td bgcolor="#F3F3F3">Soyad:</td>
              <td><label for="textfield6"></label>
                <input type="text" name="ikform_soyad" id="textfield6" /></td>
              </tr>
            <tr>
              <td bgcolor="#F3F3F3">Telefon:</td>
              <td bgcolor="#F3F3F3"><LABEL for="ikform_ad"></LABEL><input type="text" name="ikform_telefon" id="textfield"></td>
            </tr><tr><td bgcolor="#F3F3F3">E-Mail:</td><td bgcolor="#F3F3F3"><LABEL for="ikform_soyad"></LABEL><input type="text" name="ikform_telefon" id="textfield2"></td></tr>
    <tr><td bgcolor="#F3F3F3">&Ouml;ðrenim Durumu:</td><td bgcolor="#F3F3F3"><LABEL for="ikform_soyad"><select name="ikform_ogrenim" id="ikform_ogrenim"><option selected="selected">Se&ccedil;iniz</option><option value="Lisans&uuml;st&uuml;/Doktora">Lisans&uuml;st&uuml;/Doktora</option><option value="Lisans">Lisans</option><option value="&Ouml;n Lisans">&Ouml;n Lisans</option><option value="Lise">Lise</option><option value="Ýlkokul/Ortaokul">Ýlkokul/Ortaokul</option></select></LABEL></td></tr>
            <tr><td bgcolor="#F3F3F3">Baþvurduðunuz Pozisyon:</td><td bgcolor="#F3F3F3"><LABEL for="select2"></LABEL><select name="select2" id="select2"><option>Se&ccedil;iniz</option><option value="Muhasebe">Muhasebe</option><option value="Dýþ Ýþlemler">Dýþ Ýþlemler</option><option value="Krediler">Krediler</option><option value="Bilgi Teknolojileri">Bilgi Teknolojileri</option><option value="Destek Hizmetler">Destek Hizmetler</option><option value="Risk Y&ouml;netimi">Risk Y&ouml;netimi</option><option value="Ý&ccedil; Kontrol">Ý&ccedil; Kontrol</option><option value="Fon Y&ouml;netimi">Fon Y&ouml;netimi</option><option value="Ýnsan Kaynaklarý">Ýnsan Kaynaklarý</option></select><LABEL for="ikform_ogrenim"></LABEL></td></tr><tr><td bgcolor="#F3F3F3">Ýþ Tecr&uuml;besi:</td><td bgcolor="#F3F3F3"><LABEL for="ikform_tecrube"></LABEL><textarea name="ikform_tecrube" id="ikform_tecrube" cols="30" rows="4"></textarea></td></tr><tr><td bgcolor="#F3F3F3">Yabancý Dil:</td><td bgcolor="#F3F3F3"><LABEL for="ikform_dil"></LABEL><textarea name="ikform_dil" id="ikform_dil" cols="30" rows="4"></textarea></td></tr><tr><td bgcolor="#F3F3F3">Notlar:</td><td bgcolor="#F3F3F3"><LABEL for="ikform_notlar"></LABEL><textarea name="ikform_notlar" id="ikform_notlar" cols="30" rows="4"></textarea></td></tr><tr><td bgcolor="#F3F3F3">&nbsp;</td><td bgcolor="#F3F3F3"><input type="submit" name="bt_gonder" id="bt_gonder" value="G&ouml;nder"> <input type="reset" name="bt_temizle" id="bt_temizle" value="Temizle"></td></tr>
          </table>
    <p></p>
  </td>
</tr>
</table></td>
        </tr>
    </table>        
        </td>
      </tr>
      <tr>
        <td align="center" valign="middle" bgcolor="#333333">
        <span id="footer" style="font-size:9px;font-family:Arial;color:#666;text-align:center; line-height:20px" >Copyright © 2011 Bank Mellat Turkey Istanbul Main Branch</span>
        </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
<?
@mysql_close($connection_lcl);
?>