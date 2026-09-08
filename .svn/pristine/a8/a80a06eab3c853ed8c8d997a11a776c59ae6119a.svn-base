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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO finansal_raporlar_en (yil, aciklama, link, ekleyen_kullanici, eklenme_tarihi) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['rapor_yil'], "int"),
                       GetSQLValueString($_POST['rapor_adi'], "text"),
                       GetSQLValueString($_POST['rapor_link'], "text"),
                       GetSQLValueString($_POST['ekleyen_kullanici'], "text"),
                       GetSQLValueString($_POST['rapor_tarih'], "date"));

  mysql_select_db($database_connection_lcl, $connection_lcl);
  $Result1 = mysql_query($insertSQL, $connection_lcl) or die(mysql_error());

  $insertGoTo = "e77ba53855679cb1d252da_finansal_raporlar_en4.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<? session_start();?>
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
            <p class="parag">Kullanýcý Adý: <b><?php echo ucwords($_SESSION['MM_Username1']); ?></b></p>
            <p class="parag">
            <?
			
		
function turkce($metin) {
   $aranan=array("ç","Ç","ð","Ð","ý","Ý","ö","Ö","þ","Þ","ü","Ü"," ");
   $yerine=array("c","c","g","g","i","i","o","o","s","s","u","u","_");
   return str_replace($aranan,$yerine,$metin);
}



$dkaynak=$_FILES['dup']['tmp_name'];
$disim=turkce($_FILES['dup']['name']);
$dtype=$_FILES['dup']['type'];
$dboyut=$_FILES['dup']['size'];
$dhedef="../upload";


$duzanti=substr($disim,-4);
$rastgeleisim=substr(md5(uniqid(rand)), 0, 5);
$yeniadi=$rastgeleisim.$duzanti;
//$dtype!="image/jpeg")
if($dtype!="application/pdf")
{
	
echo "Sadece pdf uzantýlý dosyalarý yükleyebilirsiniz.Lütfen baþka formatý denemeyin,sistem izin vermeyecektir.";
	
}
elseif($dboyut>="10485760")
{
echo "yükleyeceðiniz dosya 10 MB geçemez";	
	
}



else
{
//$dyukle=move_uploaded_file($dkaynak,$dhedef."/".$yeniadi);	

$dyukle=move_uploaded_file($dkaynak,$dhedef."/".$disim);
	if($dyukle)
	{
	echo "<br>Dosya yüklenme baþarýyla gerçekleþmiþtir.<br><br>";	
	}
	else
	{
		echo "dosya yüklenemedi";
	}
	
echo "Dosyanýn geldiði kaynak: ".$dkaynak."<br>";
echo "Dosyanýn adý: ".$disim."<br>";
echo "Dosyanýn formatý: ".$dtype."<br>";
echo "Dosyanýn boyutu: ".round($dboyut/1024/1024,2)." MB <br>";

}



            
            ?>
            </p>
            
            <p class="parag">3.Adým Kayýt<a class="paraglink"></a></p>
            <table width="900" border="0" align="left" cellpadding="5" cellspacing="1">
              <tr>
                <td height="87" align="left" valign="top"><form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
                  
                  <table width="900" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><table width="600" border="0" cellpadding="0" cellspacing="0" class="template">
                        <tr>
                          <td width="152" align="left">&nbsp;Finansal Rapor Adý:</td>
                          <td width="442"><label>
      
                            <input name="rapor_adi" type="text" id="rapor_adi" size="50" />
                          </label></td>
                        </tr>
                        <tr>
                          <td align="left">&nbsp;Finansal Rapor Linki:</td>
                          <td><label>
                            <input name="rapor_link" type="text" id="rapor_link" size="50" value="<? echo $_SESSION['MM_dosyaismi']; ?>"/>
                          </label></td>
                        </tr>
                        <tr>
                          <td align="left">&nbsp;Eklenme Tarihi:</td>
                          <td><label>
                            <input name="rapor_tarih" type="text" id="rapor_tarih" size="50" readonly="readonly" value="<? echo date("Y/m/d H:i:s"); ?>" />
                          </label></td>
                        </tr>
                        <tr>
                          <td align="left">&nbsp;Ekleyen Kullanýcý:</td>
                          <td><label>
                            <input name="ekleyen_kullanici" type="text" id="ekleyen_kullanici"  value="<? echo $_SESSION['MM_Username1']; ?>" readonly="readonly"/>
                          </label></td>
                        </tr>
                        <tr>
                          <td align="left">&nbsp;Yýl:</td>
                          <td><label>
                            <select name="rapor_yil" id="rapor_yil">
<option value="2012">2012</option>
                              <option value="2013">2013</option>
                              <option value="2014">2014</option>
                              <option value="2015">2015</option>
                              <option value="2016">2016</option>
                              <option value="2017">2017</option>
                              <option value="2018">2018</option>
                              <option value="2019">2019</option>
                              <option value="2020">2020</option>
                            </select>
                          </label></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><label>
                            <input type="submit" name="button" id="button" value="  Finansal Rapor Ekle  " />
                          </label></td>
                        </tr>
                      </table></td>
                    </tr>
                  </table>
                  <input type="hidden" name="MM_insert" value="form1" />
                </form></td>
              </tr>
            </table>
            <p class="parag">
              
            </p>
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