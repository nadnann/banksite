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
</head>
<body>

<form id="form1" name="form1" method="post" action="d56b699830e77ba53855679cb1d252da01.php">
  <p style="font-family:Arial; font-size:14px;color:#333;"><span style="font-family:Arial; font-size:14px;color:#333;">Başarılı bir giriş  yaptınız!<br />
    <img src="images/user_37223.jpg" width="25" height="25" /><b> <?php echo ucwords($_SESSION['MM_Username1']); ?></b><br />
    <input name="button" type="submit" id="button" value=" Devam Et " />
</span></p>
  
</form>
<p>&nbsp;</p>
</body>
</html>

<?php
@mysql_close($connection_lcl);
?>