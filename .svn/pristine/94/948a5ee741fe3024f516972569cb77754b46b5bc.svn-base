


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
<script src="../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById) {
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
</head>
<body leftmargin="auto" rightmargin="auto" bottommargin="0">



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
        <td align="center" valign="middle">
        
        <table width="964" height="359" border="0" align="center" cellpadding="4" cellspacing="7" id="Table_" vspace="0">
      <tr>
        <td width="242" height="345" align="left" valign="top"><img src="../image/image_ir/Internalbranches.jpg" width="230" height="325" class="resim" /></td>
        <td width="685" colspan="-5" align="left" valign="top"><header class="template_baslik">HUMAN RESOURCE-SEND YOUR CV</header>
          <table width="675" align="center">
          <tr>            </tr>
          </table>
          <table width="685" align="left" cellspacing="1" class="table_border">
            <tr>
              <td><table width="675" align="center">
                <tr>                  </tr>
              </table>
                <form action="" method="post" enctype="multipart/form-data" name="send_cv" id="send_cv">
                  <table width="100%" align="left" cellspacing="1">
                    <tr>
                      <td width="25%" align="right" valign="middle" class="sendmail">Your Name Surname: </td>
                      <td width="516" class="sendmail"><span id="sprytextfield1" >
                        <label for="adsoyad"></label>
                        <input type="text" name="adsoyad" id="adsoyad" />
                        <span class="textfieldRequiredMsg">Enter your name and surname</span></span></td>
</tr>
                    <tr>
                      <td width="160" align="right" valign="middle" class="sendmail">E-Mail Address:</td>
                      <td class="sendmail"><span id="sprytextfield2">
                        <label for="email"></label>
                        <input name="email" type="text" id="email" onblur="MM_validateForm('email','','NisEmail');return document.MM_returnValue" />
                        <span class="textfieldRequiredMsg">Enter your e-mail address</span></span></td>
                    </tr>
                    <tr>
                      <td width="160" align="right" valign="middle" class="sendmail">Position:</td>
                      <td class="sendmail"><span id="sprytextfield3">
                        <label for="position"></label>
                        <input type="text" name="pozisyon" id="pozisyon" />
                        <span class="textfieldRequiredMsg">Enter your position</span></span></td>
                    </tr>
                    <tr>
                      <td align="left" valign="middle" class="sendmail">&nbsp;</td>
                      <td class="sendmail" style="font-family:Arial;font-size:11px;color:#333333"><label for="attachment"></label>
                        <input type="file" name="attachment" id="attachment" />
                        <span class="div_iban_baslik1">(.doc,.docx,.pdf,.rar,.zip)</span></td>
                    </tr>
                    <tr>
                      <td class="div_iban_baslik1">&nbsp;</td>
                      <td class="sendmail"><input type="submit" name="button" id="button" value="Send CV" />
                        <span class="sendmail">
                          <? 

if(isset($_POST) && !empty($_POST))
{
if(!empty($_FILES['attachment']['name']))	
{	
$file_name=$_FILES['attachment']['name'];	
$temp_name=$_FILES['attachment']['tmp_name'];
$file_type=$_FILES['attachment']['type'];	

$base=basename($file_name);
$extension=substr($base,strlen($base)-4,strlen($base));

$allowed_extensions=array(".doc","docx",".pdf",".zip",".rar");

if(in_array($extension,$allowed_extensions)) {
	$from=$_POST['email'];
	$to="postmaster@localhost";
	$subject="Web Site CV";
	$message="herhangi bir mesaj";
	
	
	$file=$temp_name;
	$content=chunk_split(base64_encode(file_get_contents($file)));
	$uid=md5(uniqid(time()));
	
	$header="From: ".$from."\r\n";
	$header .="Reply-To: " .$replyto."\r\n";
	$header .="MIME-Version: 1.0\r\n";
	
	$header .="Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
	$header .="This is a multi-part messsage in MIME format.\r\n";
	
	$header .="--".$uid."\r\n";
	$header .="Content-type:text/plain; charset=iso-8859-1\r\n";
	$header .="Content-Transfer-Encoding: 7bit\r\n\r\n";
	$header .=$message."\r\n\r\n";
	
	$header .="--".$uid."\r\n";
	$header .="Content-Type: ". $file_type."; name=\"". $file_name."\"\r\n";
	$header .="Content-Transfer-Encoding: base64\r\n";
	$header .="Content-Disposition: attachment; filename=\"" .$file_name."\"\r\n";
	$header .=$content ."\r\n\r\n";
	
	if(mail($to,$subject,"",$header))
	{
		echo "CV Sent Successfully";
	}
	else{
	echo "CV has not been sent";	
	}
	
}else
{
	echo "File type not allowed";
}

}
else
{
	echo "dosya y&uuml;klenmedi";
}
}
?>
                        </span></td>
                    </tr>
                  </table>
                </form></td>
            </tr>
          </table> 
          
 
</td>
       
        
      </tr>
    </table>
        
        <br />
        
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
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
</script>
</body>
</html>
