<?php
 require_once('../Connections/connection_lcl.php');  
 mysql_select_db($database_connection_lcl, $connection_lcl);

?>
<?
if (!isset($_SESSION)) {
  session_start();
  
}

ob_start();
?>


<?php
$ad=$_POST['user_name'];
$sifre=$_POST['user_password'];

  $sorgu=mysql_query("SELECT uye_user_adi, uye_user_sifre FROM uyeler WHERE uye_user_adi='$ad' AND uye_user_sifre='$sifre'");
  if($row=mysql_fetch_assoc($sorgu))
  {
	$ad_m=$row['uye_user_adi'];
	$sifre_m= $row['uye_user_sifre'];
  }
 if($ad_m==$ad)
  {
	if ( (strip_tags($_REQUEST["txtCaptcha"]) == $_SESSION["security_code"])) {
		
		header('Location: d56b699830e77ba53855679cb1d252da.php');

	}
	else
	{
	echo "G�venlik kodu hatal�";

	header('Location: cb5e100e5a9a3e7f6d1fd97512215282.php');	
	}
  }
  else
  {
	header('Location: cb5e100e5a9a3e7f6d1fd97512215282.php');
  }

$uye_user_adi=$_POST['user_name'];
$uye_giris_saati=date("Y/m/d H:i:s");
$uye_cikis_saati=date("Y/m/d H:i:s");
$ip_adresi=$_SERVER['REMOTE_ADDR'];


mysql_query("insert into uye_islemleri(uye_user_adi_m,uye_giris_saati,uye_cikis_saati,ip_adresi) values('$uye_user_adi','$uye_giris_saati','$uye_cikis_saati','$ip_adresi')");

  
	
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	
	$_SESSION['MM_Username1']=$uye_user_adi;
	$_SESSION['MM_girissaati']=$uye_giris_saati;	
		



/***/
ob_end_flush();
?>
