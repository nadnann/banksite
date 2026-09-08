<?php require_once('../Connections/connection_lcl.php'); ?>
<?
if(!isset($_SESSION["MM_Username1"])) {
header("location:index.php");

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>Kullanıcı Sayfası</title>
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
            <td width="970" height="112" colspan="-5" align="left" valign="top"><header class="template_baslik">Y&Ouml;NETİM PANELİ</header>
            <p class="parag">&nbsp;<a href="d56b699830e77ba53855679cb1d252da01.php" class="paraglink"><img src="images/Home.png" width="24" height="24" border="0" />Anasayfa</a></p>
            
            <p class="parag">Kullanıcı Adı: <b><?php echo strip_tags(ucwords($_SESSION['MM_Username1'])); ?></b></p>
            <p class="parag">
            <?
			
		
function turkce($metin) {
   $aranan=array("ç","Ç","ğ","Ğ","ı","İ","ö","Ö","ş","Ş","ü","Ü"," ");
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
	
echo "Sadece pdf uzantılı dosyaları yükleyebilirsiniz.Lütfen başka formatı denemeyin,sistem izin vermeyecektir.";
	
}

elseif($dboyut>="10485760")
{
echo "yükleyeceğiniz dosya 10 MB geçemez";	
	
}



else
{
//$dyukle=move_uploaded_file($dkaynak,$dhedef."/".$yeniadi);	

$dyukle=move_uploaded_file($dkaynak,$dhedef."/".$disim);
	if($dyukle)
	{
	echo "<br>Dosya yüklenme başarıyla gerçekleşmiştir.<br><br>";	
	}
	else
	{
		echo "dosya yüklenemedi";
	}
	
echo "Dosyanın geldiği kaynak: ".$dkaynak."<br>";
echo "Dosyanın adı: ".$disim."<br>";
echo "Dosyanın formatı: ".$dtype."<br>";
echo "Dosyanın boyutu: ".round($dboyut/1024/1024,2)." MB <br>";

}

$_SESSION['MM_dosyaismi']=strip_tags($disim);

            
            ?>
            
            </p>
            
            <p class="parag">2.Adım Devam için <a href="d56b699830e77ba53855679cb1d252da_finansal_raporlar3.php" class="paraglink">tıklayın</a></p>
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