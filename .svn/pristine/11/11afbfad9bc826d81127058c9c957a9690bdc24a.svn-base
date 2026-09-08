<?php
 require_once('../Connections/connection_lcl.php');  
 mysql_select_db($database_connection_lcl, $connection_lcl);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title></title>
<link href="css/admin_style_css.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="450" border="0" align="center" cellpadding="0" cellspacing="0" class="admin_table">
  <tr>
    <td><form id="212_login" name="212_login" method="POST" action="index2.php" onsubmit="
    if((this.user_name.value =='') || (this.user_password.value =='' )|| (this.txtCaptcha.value=='')) {
    alert('Kullanıcı adı , parola ya da güvenlik kodunu yanlış girdiniz.');
    this.user_name.focus();
    return false;
  }
   return true;  
     ">
      <table width="449" height="301" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01" >
        <tr>
          <td width="9" rowspan="8"><img src="images/admin_login_01.gif" width="9" height="300" alt="" /></td>
          <td colspan="9"><img src="images/admin_login_02.gif" width="432" height="9" alt="" /></td>
          <td width="10" rowspan="8"><img src="images/admin_login_03.gif" width="9" height="300" alt="" /></td>
        </tr>
        <tr>
          <td width="4" rowspan="6"><img src="images/admin_login_04.gif" width="4" height="283" alt="" /></td>
          <td width="8" rowspan="6" background="images/admin_login_05.gif"><img src="images/admin_login_05.gif" width="8" height="283" alt="" /></td>
          <td width="7" rowspan="6"><img src="images/admin_login_06.gif" width="7" height="283" alt="" /></td>
          <td width="69"><img src="images/admin_login_07.gif" width="69" height="122" alt="" /></td>
          <td colspan="3" background="images/admin_login_08.gif"><img src="images/admin_login_08.gif" width="220" height="122" alt="" /></td>
          <td width="111" background="images/admin_login_09.gif"><img src="images/admin_login_09.gif" width="111" height="122" alt="" /></td>
          <td width="13" rowspan="6" background="images/admin_login_10.gif"><img src="images/admin_login_10.gif" width="13" height="283" alt="" /></td>
        </tr>
        <tr>
          <td colspan="5"><img src="images/admin_login_11.gif" width="400" height="7" alt="" /></td>
        </tr>
        <tr>
          <td rowspan="4" background="images/admin_login_12.gif"><img src="images/admin_login_12.gif" width="69" height="154" alt="" /></td>
          <td colspan="2"><img src="images/admin_login_13.gif" width="72" height="28" alt="" /></td>
          <td colspan="2" background="images/admin_login_14.gif"><label>&nbsp;
            <input name="user_name" type="text" id="user_name" size="20"/>
            <input type="image" name="security_code" id="security_code" src="captcha.php" width="100px" height="20px" />
          </label></td>
        </tr>
        <tr>
          <td colspan="2"><img src="images/admin_login_15.gif" width="72" height="31" alt="" /></td>
          <td colspan="2" background="images/admin_login_16.gif"><label>&nbsp;
            <input name="user_password" type="password" id="user_password" size="20" />
          </label>
            <label for="txtCaptcha"></label>
            <input name="txtCaptcha" type="text" id="txtCaptcha" size="10" /></td>
        </tr>
        
        <tr>
          <td width="54"><img src="images/admin_login_17.gif" width="54" height="39" alt="" /></td>
          <td colspan="2" background="images/admin_login_17.gif">&nbsp;&nbsp; &nbsp;&nbsp; <label>
            &nbsp;<input name="button" type="submit" id="button" value="Login" />
          </label></td>
          <td rowspan="2" background="images/admin_login_19.gif"><img src="images/admin_login_19.gif" width="111" height="95" alt="" /></td>
        </tr>
        <tr>
          <td colspan="3" background="images/admin_login_20.gif"><img src="images/admin_login_20.gif" width="220" height="56" alt="" /></td>
        </tr>
        <tr>
          <td colspan="9"><img src="images/admin_login_21.gif" width="432" height="8" alt="" /></td>
        </tr>
        <tr>
          <td><img src="images/spacer.gif" width="9" height="1" alt="" /></td>
          <td><img src="images/spacer.gif" width="4" height="1" alt="" /></td>
          <td><img src="images/spacer.gif" width="8" height="1" alt="" /></td>
          <td><img src="images/spacer.gif" width="7" height="1" alt="" /></td>
          <td><img src="images/spacer.gif" width="69" height="1" alt="" /></td>
          <td><img src="images/spacer.gif" width="54" height="1" alt="" /></td>
          <td width="18"><img src="images/spacer.gif" width="18" height="1" alt="" /></td>
          <td width="148"><img src="images/spacer.gif" width="148" height="1" alt="" /></td>
          <td><img src="images/spacer.gif" width="111" height="1" alt="" /></td>
          <td><img src="images/spacer.gif" width="13" height="1" alt="" /></td>
          <td><img src="images/spacer.gif" width="9" height="1" alt="" /></td>
        </tr>
      </table>
    </form></td>
  </tr>
  
</table>


<p>&nbsp;</p>
</body>
</html>
<?php
@mysql_close($connection_lcl);
?>