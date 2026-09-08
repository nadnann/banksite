<?php require_once('../Connections/connection_lcl.php'); ?>
<?php include_once '../includes/include_header_tr.php'; ?>
  
<div id="div_icerik_template">
  
    <table width="960" height="300" border="0" align="center" cellpadding="4" cellspacing="7" class="table_border" id="Table_" vspace="0">
      <tr>
        <td width="230" height="90" align="left" valign="top"><img src="../image/image_ir/Core-Banking.jpg" width="230" height="325" class="resim" /></td>
        <td width="730" colspan="-5" align="left" valign="top"><header class="template_baslik">ÜCRET TARİFESİ</header><p></p>
        <p class="parag">
 <ul>
  <!--
  <li class="ul_parag"><a href="bireysel_musteri.php" class="paraglink">Bireysel �cret Tarifesi</a></li>
  <li class="ul_parag"><a href="kurumsal_musteri.php" class="paraglink">Kurumsal �cret Tarifesi</a></li>
-->
	<li class="ul_parag"><a href="bireysel_musteri.php" class="paraglink">Ürün ve Hizmet Ücretleri</a></li>

</ul>  
</p>   
      
           
        </td>        
      </tr>
    </table>
  <!-- InstanceEndEditable -->

  </div>

  

  <div id="div_footer_template">

    <table width="980" height="30" border="0" cellpadding="0">

      <tr>

        <td height="30" align="center"><span id="footer" style="font-size:9px;font-family:Arial;color:#666;text-align:center">Copyright © 2011 Bank Mellat Türkiye İstanbul Merkez Şubesi</span></td>

      </tr>

    </table>

  </div>

</div>



<script type="text/javascript">

<!--

swfobject.registerObject("FlashID2");

//--> 

</script>

</body>

<!-- InstanceEnd --></html>
<?
@mysql_close($connection_lcl);
?>