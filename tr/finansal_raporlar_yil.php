<?php require_once('../Connections/connection_lcl.php'); ?>
<?php include_once '../includes/include_header_tr.php'; ?>
<?php

//echo print_r($_GET, 1);
//echo print_r($_REQUEST, 1);

if (isset($_GET['raporDonemi']))
    $raporDonemi = GetSQLValueString(strip_tags($_GET['raporDonemi']), "int");
else 
    $raporDonemi = '';




$maxRows_rc_finansaltablo2012 = 8;
$pageNum_rc_finansaltablo2012 = 0;
if (isset($_GET['pageNum_rc_finansaltablo2012'])) {
    $pageNum_rc_finansaltablo2012 = strip_tags($_GET['pageNum_rc_finansaltablo2012']);
}
$startRow_rc_finansaltablo2012 = $pageNum_rc_finansaltablo2012 * $maxRows_rc_finansaltablo2012;

mysqli_select_db($connection_lcl, $database_connection_lcl);
$query_rc_finansaltablo2012 = "SELECT * FROM finansal_raporlar where yil='".$raporDonemi."'";
$query_limit_rc_finansaltablo2012 = sprintf("%s LIMIT %d, %d", $query_rc_finansaltablo2012, $startRow_rc_finansaltablo2012, $maxRows_rc_finansaltablo2012);


//echo "aaaa".$query_limit_rc_finansaltablo2012;

$rc_finansaltablo2012 = mysqli_query( $connection_lcl, $query_limit_rc_finansaltablo2012) or die(mysqli_error($connection_lcl));
$row_rc_finansaltablo2012 = mysqli_fetch_assoc($rc_finansaltablo2012);

if (isset($_GET['totalRows_rc_finansaltablo2012'])) {
    $totalRows_rc_finansaltablo2012 = strip_tags($_GET['totalRows_rc_finansaltablo2012']);
} else {
    $all_rc_finansaltablo2012 = mysqli_query($connection_lcl, $query_rc_finansaltablo2012);
    $totalRows_rc_finansaltablo2012 = mysqli_num_rows($all_rc_finansaltablo2012);
}
$totalPages_rc_finansaltablo2012 = ceil($totalRows_rc_finansaltablo2012/$maxRows_rc_finansaltablo2012)-1;



?>
<div id="div_icerik_template">

  <!-- InstanceBeginEditable name="duzenlenilirAlan" -->
    <table width="960" height="300" align="center" cellpadding="4" cellspacing="7" class="table_border" id="Table_" vspace="0">
      <tr>
        <td width="230" height="90" align="left" valign="top"><img src="../image/image_ir/Statistics-and-Economical-Researches.jpg" width="230" height="325" class="resim" /></td>
        <td width="730" colspan="-5" align="left" valign="top">
<header class="template_baslik">FİNANSAL RAPORLAR - '<?php echo $raporDonemi ?>' YILI</header>
<table width="670" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#F2F2F2" class="table_border">
  <tr>
    <td>
    <table width="680" cellpadding="2" cellspacing="1" border="1" bordercolor="#CCCCCC">
      <tr class="financialr_baslik">
        <td width="114" align="center" valign="top" class="transparan">Yıl</td>
        <td width="390" align="left" valign="top" class="transparan">Açıklama</td>
        <td width="160" align="center" valign="middle">Dosya</td>
      </tr>
      <?php do { ?>
        <tr valign="middle">
          <td bgcolor="#f0f3f7" align="center" class="financialr_alt_baslik"><?php echo $row_rc_finansaltablo2012['yil']; ?></td>
          <td bgcolor="#f0f3f7" class="financialr_alt_baslik"><?php echo $row_rc_finansaltablo2012['aciklama']; ?> </td>
          <td bgcolor="#f0f3f7" align="center" class="financialr_alt_baslik"><a href="../upload/<?php echo $row_rc_finansaltablo2012['link']; ?>" target="popup"><img src="../image/pdf_icon.png" width="16" height="16" border="0"/></a></td>
        </tr>
        <?php } while ($row_rc_finansaltablo2012 = mysqli_fetch_assoc($rc_finansaltablo2012)); ?>
    </table></td>
  </tr>
</table></td>        
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
<?php
@mysql_free_result($rc_finansaltablo2012);

@mysql_close($connection_lcl);
?>