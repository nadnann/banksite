<link href="../../human_resource/css/style_include.css" rel="stylesheet" type="text/css">
<? 
$content = file_get_contents("http://www.tcmb.gov.tr/kurlar/today.xml"); 
$dolar_bul = explode('<Currency Kod="USD" CurrencyCode="USD">' ,$content); 
$dolar_bul = explode('</ForexBuying>',$dolar_bul[1]); 
$dolar_alis = explode('<ForexBuying>',$dolar_bul[0]); 
$dolar_bul = explode('</ForexSelling>',$dolar_bul[1]); 
$dolar_satis = explode('<ForexSelling>',$dolar_bul[0]); 
$dolar_alis = $dolar_alis[1]; 
$dolar_satis = $dolar_satis[1]; 

$euro_bul = explode('<Currency Kod="EUR" CurrencyCode="EUR">' ,$content); 
$euro_bul = explode('</ForexBuying>',$euro_bul[1]); 
$euro_alis = explode('<ForexBuying>',$euro_bul[0]); 
$euro_bul = explode('</ForexSelling>',$euro_bul[1]); 
$euro_satis = explode('<ForexSelling>',$euro_bul[0]); 
$euro_alis = $euro_alis[1]; 
$euro_satis = $euro_satis[1]; 

$rial_bul = explode('<Currency Kod="IRR" CurrencyCode="IRR">' ,$content); 
$rial_bul = explode('</ForexBuying>',$rial_bul[1]); 
$rial_alis = explode('<ForexBuying>',$rial_bul[0]); 
$rial_bul = explode('</ForexSelling>',$rial_bul[1]); 
$rial_satis = explode('<ForexSelling>',$rial_bul[0]); 
$rial_alis = $rial_alis[1]; 
$rial_satis = $rial_satis[1]; 
?>
<table width="270" height="104" border="0" align="center" cellpadding="0" cellspacing="0" class="table_border">
  <tr>
    <td align="center" valign="top" class="table_headerB"> Exchange Rates </td>
  </tr>
  <tr>
    <td height="82"><table width="270" border="0" align="center" cellpadding="2" cellspacing="1">
      <tr class="table_header">
        <td width="28%" height="19" align="center">&nbsp;</td>
        <td width="37%" align="center">Buy</td>
        <td width="35%" align="center">Sell</td>
      </tr>
      <tr class="table_icerikBir">
        <td align="center">USD</td>
        <td width="37%" align="center"><?=$dolar_alis ?>
          TL </td>
        <td width="35%" align="center"><?=$dolar_satis ?>
          TL</td>
      </tr>
      <tr align="center" class="table_icerikÝki" style="font-family: Arial;font-size: 9px;color:#333;background-color: #B2B2B2;
	text-align: center;">
        <td height="21">EUR </td>
        <td width="37%"><?=$euro_alis ?>
          TL</td>
        <td width="35%"><?=$euro_satis ?>
          TL</td>
      </tr>
      <tr align="center" class="table_icerikUc">
        <td height="20"> IRR </td>
        <td><?=$rial_alis ?>
          TL</td>
        <td><?=$rial_satis ?>
          TL</td>
      </tr>
    </table></td>
  </tr>
</table>
