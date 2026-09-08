<?php require_once('../Connections/connection_lcl.php'); ?>
<?php include_once '../includes/include_header_tr.php'; ?>

  <div id="div_icerik_template">

  <!-- InstanceBeginEditable name="duzenlenilirAlan" -->
        <table width="960" height="300" border="0" align="center" cellpadding="4" cellspacing="7" class="table_border" id="Table_" vspace="0">
      <tr>
        <td width="230" height="90" align="left" valign="top"><img src="../image/image_ir/ertebat-mostaghim.jpg" width="230" height="325" class="resim" /></td>
        <td width="730" colspan="-5" align="left" valign="top"><header class="template_baslik">DUYURULAR</header><p></p>
        <!-- 21 nisan 2016 d�zenlendi  -->
        <!-- 04 kas�m 2016 d�zenlendi  -->
        <!-- 06 subat 2018 d�zenlendi  -->
          <p class="parag">
          <b>Duyuru: <?php echo strip_tags($row_rc_duyuru_idg['duyuru_id']); ?><br />
		  </b></p>
          <p class="parag"><b>Duyuru Adı: </b>
		  <?php echo ($row_rc_duyuru_idg['duyuru_adi']); ?></b><br /></p>
          <p class="parag"><b>Duyuru Açıklaması: </b> <?php echo ($row_rc_duyuru_idg['duyuru_metni']); ?>
          </p>
<p class="parag">&nbsp;</p></td>
        <br />
        
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
