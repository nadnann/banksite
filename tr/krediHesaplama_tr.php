<?php require_once('../Connections/connection_lcl.php'); ?>
<?php include_once '../includes/include_header_tr.php'; ?>
<?php include_once '../includes/KrediHesaplamaOrtak.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine-tr.js"></script>


<link type="text/css" href="../css/style_krediHesaplama.css" rel="stylesheet" />
<script type="text/javascript" src="../jquery/krediHesaplama_tr.js"></script>

 <div id="div_icerik_template">
<table width="960" height="300" border="1" align="center" cellpadding="4" cellspacing="7" class="table_border" id="Table_" vspace="0">
      <tr>
        <td width="230" height="90" align="left" valign="top"><img src="../image/image_ir/foreignletterofguarantee.jpg" width="230" height="325" class="resim" /></td>
        <td width="730" colspan="-5" align="left" valign="top">
<h4 id="hesaplink" align="center" class="template" >Örnek Kredi Hesaplama</h4>
<div id ="anaHesapDiv">
 
<form id ="formHesap" name="krediHesap" method="post" action="" >
  <table width="550" align="center" class="template">
    <tr>
      <td><label>Kredi Türü </label>&nbsp;</td> 
       <td><select class="kurumTip" name="kurumTipi">
        <option value="0">Bireysel</option>
        <option value="1">Ticari</option>
      </select></td>
    </tr>
    <tr>
      <tr>
      <td><label>Kredi Tutarı </label>&nbsp;</td> 
       <td><input type="text" id ="Anapara" name ="Anapara"  placeholder="Kredi Tutarı" pattern="\d*" title="Sadece rakam giriniz..!" required onblur="GirisKontrol();"><span id="UyariAnapara" style="color:Red;"> </span></td>
    </tr>
    <tr>
    <td><label>Aylık Faiz Oranı </label>&nbsp;</td> 
       <td><input type="text" class ="faizOrani" name ="faizOrani" value = "1" placeholder="Faiz Oranı" pattern="\d*+([\.,])" title="Sadece rakam giriniz..!" step="0.01" required></td>
    </tr>
     <tr>
    <td><label>VadeBaşı </label>&nbsp;</td> 
       <td><input type="date" name ="vadeBasi" class="tarih" placeholder="vadeBasi" value="<?php echo date('Y-m-d');?>" required></td>
    </tr>
    <tr>
    <td><label>Taksit Sayısı </label>&nbsp;</td> 
       <td><input type="text" name ="taksitSayisi" id ="taksitSayisi" placeholder="Taksit Sayısı" value="1" pattern="\d*" title="Sadece rakam giriniz..!" required onblur="GirisKontrol();"><span id="UyariTaksitSayisi" style="color:Red;"> </span></td>
    </tr>
    <tr>
    <td><label>Taksit Ödeme Aralığı </label>&nbsp;</td> 
       <td><input type="text" name ="taksit_Araligi" id ="taksit_Araligi" placeholder="Taksit Aralığı" value="1" pattern="\d*" title="Sadece rakam giriniz..!" required value=1 onblur="GirisKontrol();"><span id="UyariTaksitAraligi" style="color:Red;"> </span></td>
    </tr>
    <tr>
    <td><label>KKDF </label>&nbsp;</td> 
       <td><input type="text" name ="kkdf" class ="kkdf"  placeholder="KKDF"  required readonly onblur="GirisKontrol();"><span id="UyariKKDF" style="color:Red;"></td>
    </tr>
    <tr>
    <td><label>BSMV </label>&nbsp;</td> 
       <td><input type="text" name ="bsmv" placeholder="BSMV" value="0.05" required readonly onblur="GirisKontrol();"><span id="UyariBSMV" style="color:Red;"></td>
    </tr>
    <tr></tr>
    <tr>
       <td><input type="submit"  style="width: 150px; border-radius: 50px 20px; height: 30px;" id ="submitId" value ="Hesapla"></td>
       
    </tr>
  
  </table>

</form>
 
     
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>

<h4 align="center" class="odemePlan">Ödeme Planı</h4>

 <table class="tablo" width="100%">
       <tr>
           <td align="center"><b>Müşteri Tipi</b></td>
	       <td align="center"><b>Kredi Tutarı</b></td>
	       <td align="center"><b>Döviz Cinsi</b></td>
	       <td align="center"><b>Taksit Sayısı</b></td>
	       <td align="center"><b>Taksit Odeme Aralığı</b></td>
	       <td align="center"><b>KKDF</b></td>
	       <td align="center"><b>BSMV</b></td>
	       <td align="center"><b>Taksit Tutarı</b></td>
	       <td align="center"><b>Aylık Faiz Oranı</b></td>
	       <td align="center"><b>Aylık Maliyet Oranı</b></td>
	       <td align="center"><b>Efektif Faiz Oranı</b></td>
       </tr>
        <?php 
        $deger = odemePlaniHazirlaTaksitli($values);
		        if ($values['kurumTipi'] == 0)
		        	$kurumTip ="Bireysel";
		        else
		        	$kurumTip ="Kurumsal";
        
        ?>
      
        <tr class ="basliksatirilk">
           <td align="center"><?php echo $kurumTip;?></td>
	       <td align="center" ><?php echo  number_format(floatval($values['anapara']), 2, ',', '.');?></td>
	       <td align="center">TL</td>
           <td align="center"><?php echo round($values['taksitSayisi'], 2)." Ay";?></td>
           <td align="center"><?php echo round($values['taksit_Araligi'], 2);?></td>
           <td align="center"><?php echo "%".round($values['kkdf']*100, 2);?></td>
           <td align="center"><?php echo "%".round($values['bsmv']*100, 2);?></td>
           <td align="center"><?php echo number_format(floatval($deger[1]['TAKSIT']), 2, ',', '.');?></td>  
           <td align="center"><?php echo "%".round($values['aylikFaizOrani']*100, 2);?></td>
           <td align="center"><?php echo "%".round($values['yillikFaizOrani']/10, 4);?></td>
           <td align="center"><?php echo "%".round($deger['efektif'], 4);?></td>
       </tr>
 </table>
 <br>

<table class="tablo" width="100%"  id ="tableSonuc">
  
   <tr class ="basliksatir">
      <td align="center"><b>Taksit No</b></td>
      <td align="center"><b>Vade</b></td>
      <td align="center"><b>Gun</b></td>
      <td align="center"><b>Taksit</b></td>
      <td align="center"><b>Anapara</b></td>
      <td align="center"><b>Faiz</b></td>
      <td align="center"><b>KKDF</b></td>
      <td align="center"><b>BSMV</b></td>
     <td align="center"><b>Kalan Anapara</b></td>
   </tr>
     <?php  
     $toplamFaiz = 0;
     $toplamkkdf = 0;
     $toplamVergi= 0;
     $toplamAnapara = 0;
     $toplamTaksit = 0;
     
     for ($i =1; $i <= $values['taksitSayisi']; $i++) { 
     	//echo "rrr ".print_r($values, 1);
     	$toplamFaiz += $deger[$i]['FAIZ'];
     	$toplamkkdf += $deger[$i]['FON'];
     	$toplamVergi += $deger[$i]['VERGI'];
     	$toplamAnapara += $deger[$i]['BBAL'] - $deger[$i]['KALANBAKIYE'];
     	$toplamTaksit += $deger[$i]['TAKSIT'];
     	
     if ($i % 2 == 0) {
         $class = "cift";
     } else {
	    $class = "tek";
     }	
     ?>   
      
     <tr class="<?php echo $class;?>">
        <td align="center" ><?php echo $i;?></td>
        <td align="center"><?php echo date("Y-m-d", strtotime($deger[$i]['VADE']));?></td>
        <td align="center"><?php echo $deger[$i]['GUN'];?></td>
        <td align="center"><?php echo number_format(floatval($deger[$i]['TAKSIT']), 2, ',', '.');?></td>
        <td align="center"><?php echo round($deger[$i]['BBAL'] - $deger[$i]['KALANBAKIYE'], 2);?></td>
        <td align="center"><?php echo number_format(floatval($deger[$i]['FAIZ']), 2, ',', '.');?></td>
        <td align="center"><?php echo number_format(floatval($deger[$i]['FON']), 2, ',', '.');?></td>
        <td align="center"><?php echo number_format(floatval($deger[$i]['VERGI']), 2, ',', '.');?></td>
        <td align="center"><?php echo number_format(floatval($deger[$i]['KALANBAKIYE']), 2, ',', '.');?></td>
     </tr>

     <?php 
       }
      ?>
      
        <tr>
        <td align="center" colspan = "3"><b>TOPLAM</b></td>
        <td align="center"><b><?php echo number_format(floatval($toplamTaksit), 2, ',', '.');?></b></td>
        <td align="center"><b><?php echo number_format(floatval($toplamAnapara), 2, ',', '.');?></td>
        <td align="center"><b><?php echo number_format(floatval($toplamFaiz), 2, ',', '.');?></b></td>
        <td align="center"><b><?php echo number_format(floatval($toplamkkdf), 2, ',', '.');?></b></td>
        <td align="center"><b><?php echo number_format(floatval($toplamVergi), 2, ',', '.');?></b></td>
        <td align="center"></td>
        
     </tr>
</table>

 </td>
      </tr>
    </table>
    <p class="aciklama"><b>&#9940;Gerçek Kredi Başvuru sırasında banka faiz oranları geçerlidir..!</b></p>
   
</div>
</div>

