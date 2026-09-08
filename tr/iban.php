<?php require_once('../Connections/connection_lcl.php'); ?>
<?php include_once '../includes/include_header_tr.php'; ?>

<?php
function filterXSS($val) {
	$val = preg_replace('/([\x00-\x08][\x0b-\x0c][\x0e-\x20])/', '', $val);
	$search = 'abcdefghijklmnopqrstuvwxyz';
	$search .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$search .= '1234567890!@#$%^&*()';
	$search .= '~`";:?+/={}[]-_|\'\\';
	for ($i = 0; $i < strlen($search); $i++) {
	$val = preg_replace('/(&#[x|X]0{0,8}'.dechex(ord($search[$i])).';?)/i', $search[$i], $val); // with a ;
	$val = preg_replace('/(&#0{0,8}'.ord($search[$i]).';?)/', $search[$i], $val); // with a ;
	}
	// 20121019_2204 ile yapÄ±lan meta -> <meta>
	$ra1 = Array('javascript', 'vbscript', 'expression', 'applet', '<meta>', 'xml', 'blink', 'link', 'style', 'script', 'embed', 'object', 'iframe', 'frame', 'frameset', 'ilayer', 'layer', 'bgsound', 'title', 'base');
	$ra2 = Array('onabort', 'onactivate', 'onafterprint', 'onafterupdate', 'onbeforeactivate', 'onbeforecopy', 'onbeforecut', 'onbeforedeactivate', 'onbeforeeditfocus', 'onbeforepaste', 'onbeforeprint', 'onbeforeunload', 'onbeforeupdate', 'onblur', 'onbounce', 'oncellchange', 'onchange', 'onclick', 'oncontextmenu', 'oncontrolselect', 'oncopy', 'oncut', 'ondataavailable', 'ondatasetchanged', 'ondatasetcomplete', 'ondblclick', 'ondeactivate', 'ondrag', 'ondragend', 'ondragenter', 'ondragleave', 'ondragover', 'ondragstart', 'ondrop', 'onerror', 'onerrorupdate', 'onfilterchange', 'onfinish', 'onfocus', 'onfocusin', 'onfocusout', 'onhelp', 'onkeydown', 'onkeypress', 'onkeyup', 'onlayoutcomplete', 'onload', 'onlosecapture', 'onmousedown', 'onmouseenter', 'onmouseleave', 'onmousemove', 'onmouseout', 'onmouseover', 'onmouseup', 'onmousewheel', 'onmove', 'onmoveend', 'onmovestart', 'onpaste', 'onpropertychange', 'onreadystatechange', 'onreset', 'onresize', 'onresizeend', 'onresizestart', 'onrowenter', 'onrowexit', 'onrowsdelete', 'onrowsinserted', 'onscroll', 'onselect', 'onselectionchange', 'onselectstart', 'onstart', 'onstop', 'onsubmit', 'onunload');
	$ra = array_merge($ra1, $ra2);
	$found = true;
	while ($found == true) {
	$val_before = $val;
	for ($i = 0; $i < sizeof($ra); $i++) {
	$pattern = '/';
	for ($j = 0; $j < strlen($ra[$i]); $j++) {
	if ($j > 0) {
	$pattern .= '(';
	$pattern .= '(&#[x|X]0{0,8}([9][a][b]);?)?';
	$pattern .= '|(&#0{0,8}([9][10][13]);?)?';
	$pattern .= ')?';
	}
	$pattern .= $ra[$i][$j];
	}
	$pattern .= '/i';
	$replacement = substr($ra[$i], 0, 2).'(?)'.substr($ra[$i], 2);
	$val = preg_replace($pattern, $replacement, $val);
	if ($val_before == $val) {
	$found = false;
	}
	}
	}
	return $val;
} 

?>

<div id="div_icerik_template">
<table width="965" border="1" bordercolor="#000" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td colspan="3"><table width="965" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#000000">
      <tr>
        <td align="center" valign="middle"><table width="969" border="0" cellspacing="0" cellpadding="0">
          
        </table></td>
      </tr>
      <tr>
        <td align="center" valign="middle">
        
        <table width="960" height="300" border="0" align="center" cellpadding="4" cellspacing="7" class="table_border" id="Table_" vspace="0">
      <tr>
        <td width="230" height="90" align="left" valign="top"><img src="../image/image_ir/InternationalRelations.jpg" width="230" height="325" class="resim" /></td>
        <td width="730" colspan="-5" align="left" valign="top"><header class="template_baslik">IBAN</header>
          <p class="parag">
          <table align="left" class="table_border">
  <!--DWLayoutTable-->
  <tr align="center">
    
    <td width="735" rowspan="2" valign="top" bgcolor="#FFFFFF">
      <form name="ibanolustur" action="../tr/iban.php?mode=2" method="post" onsubmit="
    if(this.hesapno.value =='') {
    alert('Hesap no giriniz.');
    this.hesapno.focus();
    return false;
  }

   return true;
      
      ">
        <table width="600" align="center" cellspacing="2" >
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;
            
            
            
            </td>
            </tr>
          <tr>
            <td align="left" valign="middle" class="div_iban_baslik1">Şube:</td>
            <td align="left" valign="middle" class="div_iban_baslik2"><select id="sube" name="sube">
              <option value="01">İstanbul</option>
              <option value="02">Ankara</option>
              <option value="03">İzmir</option>
            </select></td>
            </tr>
          <tr>
            <td align="left" valign="middle" class="div_iban_baslik1">Hesap T&uuml;r&uuml;:</td>
            <td align="left" valign="middle" class="div_iban_baslik2"><select id="hesapturu" name="hesapturu">
              <option value="1">Vadesiz Hesap</option>
            </select></td>
            </tr>
          <tr>
            <td align="left" valign="middle" class="div_iban_baslik1">D&ouml;viz:</td>
            <td align="left" valign="middle" class="div_iban_baslik2"><select id="doviz" name="doviz">
              <option value="00">TRY</option>
              <option value="01">USD</option>
              <option value="32">EUR</option>
              <option value="45">STG</option>
              <option value="28">AED</option>
              <option value="27">JPY</option>
              <option value="22">CHF</option>
            </select></td>
            </tr>
          <tr>
            <td align="left" valign="middle" class="div_iban_baslik1">Hesap No:</td>
            <td align="left" valign="middle" class="div_iban_baslik2"><input name="hesapno" id="hesapno" type="text" size="15" maxlength="11" />
              <input name="bankakod" id="bankakod" type="hidden" value="00094" />
              <input name="ulke" id="ulke" type="hidden" value="TR" />
              <input type="submit" value="IBAN Hesabı Oluştur"/></td>
            </tr>
          <tr>
            <td colspan="2" class="div_iban_baslik">
              
              <?php
/**
 * ibanKontrol v.1.0 08.04.2009
 * IBAN numaralarinin valid olup olmadigini denetleyen fonksiyon
 *
 * Ornek Kullanim: echo ibanKontrol('TR390009400110000000003197');
 * @param string $iban
 * @return bool true/false
 */
function ibanKontrol($iban) {
    $iban = str_replace(array(" ", "  ", "   ", "\t"), "", $iban);
    $iban = strtoupper(str_replace(" ", "", $iban));
    if(strlen($iban)>34)
        return false;
    $acceptabel = "A B C D E F G H I J K L M N O P Q R S T U V W X Y Z 1 2 3 4 5 6 7 8 9 0";
    $acceptabel = explode(" ", $acceptabel);
    for($i = 0; $i<strlen($iban); $i++) {
        if(in_array(substr($iban, $i, 1), $acceptabel) === false)
            return false;
    }
    $alfa = "A B C D E F G H I J K L M N O P Q R S T U V W X Y Z";
    $alfa = explode(" ", $alfa);
    for($i = 1; $i<27; $i++) {
        $alfa_replace[] = $i+9;
    }
    $controlegetal = str_replace($alfa, $alfa_replace, substr($iban, 4, strlen($iban)-4).substr($iban, 0, 2)."00");
    $controlegetal = 98 - (int)bcmod($controlegetal,97);
    if((int)$controlegetal === (int)substr($iban, 2, 2)){
        return true;
    }else{
        return false;
    }
}




/**
 * ibanOlustur v.1.0 08.04.2009
 * Verilen bilgilerden iban numarasini olusturur
 *
 *  Ornek Kullanim: echo ibanOlustur('01','1','00','00000003197','000940','TR');
 *
 * @param string $sube (01:istanbul, 02:Ankara, 03: &iuml;&iquest;&frac12;zmir)
 * @param string $hesapturu (1:ACH, 2:VCH, 3:BCH)
 * @param string $doviz (00:TRY,01:USD,32:EUR,45:STG)
 * @param string $hesapno (Ornek=> 00000003197)
 * @param string $bankakod (Mellat icin => 000940 )
 * @param string $ulke (Turkiye icin => TR)
 *
 * @return string $ibanno Olusturulmus iban numarasi doner
 */
function ibanOlustur($sube,$hesapturu,$doviz,$hesapno,$bankakod=94,$ulke="TR"){

	/*
	 Mellat IBAN 16 Hanesi shu sekilde olusmakta:
	   xx   x          xx    xxxxxxxxxxx
	   sube hesap_turu doviz hesap_no
	   "%05d%d%02d%d%02d%011ld",94,0,sube,htip,doviz,hesapno
	*/
	$ilkno=sprintf("%05d%d%02d%d%02d%011ld",$bankakod,0,$sube,$hesapturu,$doviz,$hesapno);
	$yenino=$ilkno.$ulke.'00';
	$alfa = "A B C D E F G H I J K L M N O P Q R S T U V W X Y Z";
	    $alfa = explode(" ", $alfa);
	    for($i = 1; $i<27; $i++) {
	        $alfa_replace[] = $i+9;
	    }
	$rakamno=str_replace($alfa, $alfa_replace,$yenino);
	$mod=(int)bcmod($rakamno,97);
	$chck=98-$mod;
		if(strlen($chck)==1){
			$chck= "0".$chck;
		}
	$ibanno=$ulke.$chck.$ilkno;
	return $ibanno;
}


if(count($_POST)>0){
	if($_GET['mode']=='1'){
		if(ibanKontrol(filterXSS($_POST['iban']))){
			echo "<h2 style='color:green;'>Ge&ccedil;erli IBAN Numarası</h2>";
		}else{
			echo "<h2 style='color:red;'>Ge&ccedil;ersiz IBAN Numarası !</h2>";
		}
	}else{
		echo "IBAN Numaranız: <h2><b>".ibanOlustur(filterXSS($_POST['sube']),filterXSS($_POST['hesapturu']),filterXSS($_POST['doviz']),filterXSS($_POST['hesapno']),filterXSS($_POST['bankakod']),filterXSS($_POST['ulke']))."</h2></b>";
	}
}


?>
              
              
              &nbsp;</td>
            </tr>
        </table>
      </form>
      <br>
      <form name="ibankontrol" action="../tr/iban.php?mode=1" method="post" onsubmit="
    if(this.iban.value =='') {
    alert('IBAN no giriniz.');
    this.iban.focus();
    return false;
  }

   return true;      
      ">
      <table width="600">
          <tr>
            <td><span class="div_iban_baslik1">IBAN Kontrol:</span></td>
            <td class="div_iban_baslik2"><strong>
              <input style="font-size:9pt;" name="iban" id="iban" type="text" size="45" maxlength="35" />
              <input type="submit" value="Kontrol Et"/>
            </strong></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;
            
            
            
            </td>
          </tr>
        </table>
      </form></td>
  </tr>
  <tr>
  </tr>
</table>
          
</p>        
  
        
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

<?php
@mysql_close($connection_lcl);
?>