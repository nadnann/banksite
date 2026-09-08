<?php require_once('../Connections/connection_lcl.php'); ?>
<?php include_once '../includes/include_header_tr.php'; ?>
<div id="div_icerik_template">    

        <table width="960" height="300" border="0" align="center" cellpadding="4" cellspacing="7" class="table_border" id="Table_" vspace="0">
      <tr>
        <td width="960" height="90" align="left" valign="top"><iframe src="./bireysel_musteri/bireysel.pdf" width="940" height="600"></iframe></td>
        </tr>
    </table>
    

  </div>
  
  <div id="div_footer_template">
    <table width="980" height="30" border="0" cellpadding="0">
      <tr>
        <td height="30" align="center"><span id="footer" style="font-size:9px;font-family:Arial;color:#666;text-align:center">Copyright � 2011 Bank Mellat Türkiye İstanbul Merkez Şubesi</span></td>
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
</html>
<?
@mysql_close($connection_lcl);
?>