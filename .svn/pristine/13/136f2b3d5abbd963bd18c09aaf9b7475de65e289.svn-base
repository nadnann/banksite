
<?php 
define('FINANCIAL_ACCURACY', 1.0e-6);
define('FINANCIAL_MAX_ITERATIONS', 100);

define('FINANCIAL_SECS_PER_DAY', 24 * 60 * 60);
define('FINANCIAL_HALF_SEC', 0.5 / FINANCIAL_SECS_PER_DAY);



if (isset($_POST)) {
	$kurumTipi = htmlspecialchars($_POST["kurumTipi"]);
	$anapara = htmlspecialchars($_POST["Anapara"]);
	$faizOrani = htmlspecialchars($_POST["faizOrani"]);
	$faizOrani = $faizOrani * 12;
	$yillikFaizOrani= $faizOrani;
	$faizOraniEkran = htmlspecialchars($_POST["faizOrani"]);
	$vadeBasiTarih = htmlspecialchars($_POST["vadeBasi"]);
	$taksitSayisi = htmlspecialchars($_POST["taksitSayisi"]);
	$taksit_Araligi = htmlspecialchars($_POST["taksit_Araligi"]);
	$kkdf = htmlspecialchars($_POST["kkdf"]);
	$bsmv = htmlspecialchars($_POST["bsmv"]);

	$aylikFaizOrani=$faizOrani/1200;

	$faizOraniEkran = round($faizOrani/1200, 2);
	$aylikbrutFaizOrani = ($aylikFaizOrani*$taksit_Araligi * ( 1 + $kkdf + $bsmv)) /$taksit_Araligi;
	$yillikbrutFaizOrani = 12 * $aylikbrutFaizOrani;
	$aylikTaksit=$anapara*($aylikbrutFaizOrani) /(1-pow(1+($aylikbrutFaizOrani), -$taksitSayisi));

	$values = array(
			"kurumTipi" =>$kurumTipi,
			"anapara" =>$anapara,
			"faizOrani" =>$faizOrani,
			"vadeBasi" =>$vadeBasiTarih,
			"taksitSayisi" =>$taksitSayisi,
			"taksit_Araligi" =>$taksit_Araligi,
			"kkdf" =>$kkdf,
			"bsmv" =>$bsmv,
			"aylikFaizOrani"=>$aylikFaizOrani,
			"aylikbrutFaizOrani"=>$aylikbrutFaizOrani,
			"yillikbrutFaizOrani"=>$yillikbrutFaizOrani,
			"aylikTaksit"=>$aylikTaksit,
			"faizOraniEkran" =>$faizOraniEkran,
			"yillikFaizOrani"=>$yillikFaizOrani
	);
	
	
}


function DateAdd($interval, $number, $date)
{

	$date_time_array = getdate(strtotime($date));
	$hours = $date_time_array["hours"];
	$minutes = $date_time_array["minutes"];
	$seconds = $date_time_array["seconds"];
	$month = $date_time_array["mon"];
	$day = $date_time_array["mday"];
	$year = $date_time_array["year"];

	switch ($interval) {

		case "y":
		case "yyyy":
			$year+=$number;
			break;
		case "q":
			$year+=($number*3);
			break;
		case "m":
			$month+=$number;
			break;
		case "d":
		case "w":
			$day+=$number;
			break;
		case "ww":
			$day+=($number*7);
			break;
		case "h":
			$hours+=$number;
			break;
		case "n":
			$minutes+=$number;
			break;
		case "s":
			$seconds+=$number;
			break;
	}
	$timestamp= date("Y-m-d H:i:s ", mktime($hours, $minutes, $seconds, $month, $day, $year));
	return $timestamp;
}

function DATEDIFF($datepart, $startdate, $enddate)
{
	switch (strtolower($datepart)) {
		case 'yy':
		case 'yyyy':
		case 'year':
			$di = getdate($startdate);
			$df = getdate($enddate);
			return $df['year'] - $di['year'];
			break;
		case 'q':
		case 'qq':
		case 'quarter':
			die("Unsupported operation");
			break;
		case 'n':
		case 'mi':
		case 'minute':
			return round(($enddate - $startdate) / 60);
			break;
		case 'hh':
		case 'hour':
			return round(($enddate - $startdate) / 3600);
			break;
		case 'd':
		case 'dd':
		case 'day':
			return round(($enddate - $startdate) / 86400);
			break;
		case 'wk':
		case 'ww':
		case 'week':
			return round(($enddate - $startdate) / 604800);
			break;
		case 'm':
		case 'mm':
		case 'month':
			$di = getdate($startdate);
			$df = getdate($enddate);
			return ($df['year'] - $di['year']) * 12 + ($df['mon'] - $di['mon']);
			break;
		default:
			die("Unsupported operation");
	}
}


function XNPVm($rate, $values, $dates)
{
	if ((!is_array($values)) || (!is_array($dates))) return null;
	if (count($values) != count($dates)) return null;

	$xnpv = 0.0;
	for ($i = 0; $i < count($values); $i++) {
		$xnpv += $values[$i] / pow(1 + $rate, DATEDIFF('month', $dates[0], $dates[$i]) / 12);
	}
	return (is_finite($xnpv) ? $xnpv: null);
}
/*
 * XIRRm
* Returns the internal rate of return for a schedule of cash flows
* that is not necessarily periodic. To calculate the internal rate
* of return for a series of periodic cash flows, use the IRR function.
*
* Adapted from routine in Numerical Recipes in C, and translated
* from the Bernt A Oedegaard algorithm in C
*
**/
function XIRRm($values, $dates, $guess = 0.1)
{
	if ((!is_array($values)) && (!is_array($dates))) return null;
	if (count($values) != count($dates)) return null;

	// create an initial bracket, with a root somewhere between bot and top
	$x1 = 0.0;
	$x2 = $guess;
	$f1 = XNPVm($x1, $values, $dates);
	$f2 =XNPVm($x2, $values, $dates);
	for ($i = 0; $i < FINANCIAL_MAX_ITERATIONS; $i++) {
		if (($f1 * $f2) < 0.0) break;
		if (abs($f1) < abs($f2)) {
			$f1 =XNPVm($x1 += 1.6 * ($x1 - $x2), $values, $dates);
		} else {
			$f2 = XNPVm($x2 += 1.6 * ($x2 - $x1), $values, $dates);
		}
	}
	if (($f1 * $f2) > 0.0) return null;

	$f = XNPVm($x1, $values, $dates);
	if ($f < 0.0) {
		$rtb = $x1;
		$dx = $x2 - $x1;
	} else {
		$rtb = $x2;
		$dx = $x1 - $x2;
	}

	for ($i = 0;  $i < FINANCIAL_MAX_ITERATIONS; $i++) {
		$dx *= 0.5;
		$x_mid = $rtb + $dx;
		$f_mid = XNPVm($x_mid, $values, $dates);
		if ($f_mid <= 0.0) $rtb = $x_mid;
		if ((abs($f_mid) < FINANCIAL_ACCURACY) || (abs($dx) < FINANCIAL_ACCURACY)) return $x_mid;
	}
	return null;
}



if ( ! function_exists("efektifFaizHesaplama") ) {
	function efektifFaizHesaplama($to_irr, $to_irr_t)
	{
		foreach ($to_irr_t as $tarih) {
			$vadeler[] = date("Ymd", $tarih);
		}

		$gun=array();

		$tanapara = abs($to_irr[0]);
		

		$efXX =XIRRm($to_irr, $to_irr_t, 0.0001)*100;
		$efektifFaizOran = $efXX;
		

		$vadebasi =date("Ymd", $to_irr_t[0]);
		$vadesonu = date("Ymd", end($to_irr_t));

		$krediToplamGun = DATEDIFF('d', strtotime($vadeler[0]), strtotime(end($vadeler)));

		$efektifFaizHesaplamaToplam = 0;
		$gecenGun = 0;
		for ($i = 1; $i < count($to_irr); $i++) {
			$gun[$i]['GUN']=DATEDIFF('d', strtotime($vadeler[$i - 1]), strtotime($vadeler[$i]));
			$gecenGun += $gun[$i]['GUN'];
			$hesaplanan = ROUND($to_irr[$i] / (pow((1+($efektifFaizOran/100.0)), ($gecenGun/$krediToplamGun))), 2);
			
			$efektifFaizHesaplamaToplam = $efektifFaizHesaplamaToplam + $hesaplanan;
			//echo "<br>Hesaplamalar: Faiz Oranı:".$tka->efektifFaizOran." Gün". $tgun." Toplam Gün".$krediToplam
		}
		$mFark = $efektifFaizHesaplamaToplam-$tanapara;
		//mk_trace("<br>1216 1216 Fark = ".$mFark." efektifFaizHesaplamaToplam ".$efektifFaizHesaplamaToplam. "dddd" .$tanapara." ToplamGun".$krediToplamGun);
		/*snb_sbkd, snb_gonderimDurum, snb_senetno, snb_girisTarih, snb_cikisTarih, snb_duzenlemeTarih*/
		$sayac = 0;
		$pKatsayi=1;

		$efektifFaizHesaplamaToplam = 0;

		while ((abs($efektifFaizHesaplamaToplam-$tanapara)>0.005) && ($sayac<20)) {


		 //   mk_trace("<br>1:($sayac): ".$this->efektifFaizOran." aaaa".abs($efektifFaizHesaplamaToplam-$tanapara));
		  
		  
			$aabs=1.0*abs($efektifFaizHesaplamaToplam-$tanapara);
			if ($aabs>20)
				$katsayi=32768;
			else if ($aabs>10)
				$katsayi=16384;
			else if ($aabs>5)
				$katsayi=8192;
			else if ($aabs>4)
				$katsayi=4096;
			else if ($aabs>2.048)
				$katsayi=2048;
			else if ($aabs>1.024)
				$katsayi=1024;
			else if ($aabs>0.512)
				$katsayi=512;
			else if ($aabs>0.256)
				$katsayi=256;
			else if ($aabs>0.128)
				$katsayi=128;
			else if ($aabs>0.064)
				$katsayi=64;
			else if ($aabs>0.032)
				$katsayi=32;
			else if ($aabs>0.016)
				$katsayi=16;
			else if ($aabs>0.008)
				$katsayi=8.13;
			else if ($aabs>0.004)
				$katsayi=4.13;
			else if ($aabs>0.002)
				$katsayi=2.13;
			else
				$katsayi=1;
		  
			if ($pKatsayi==$katsayi)
				$katsayi = $katsayi*100;
		  
			if ($efektifFaizHesaplamaToplam>$tanapara) {
				$efektifFaizOran = $efektifFaizOran + (0.0000001*$katsayi);
			} else {
				$efektifFaizOran = $efektifFaizOran - (0.0000001*$katsayi);
			}
			$efektifFaizHesaplamaToplam  = 0;
			$gecenGun = 0;

			for ($j = 1; $j < count($to_irr); $j++) {
				$gun[$j]['GUN']=DATEDIFF('d', strtotime($vadeler[$j - 1]), strtotime($vadeler[$j]));
				$gecenGun += $gun[$j]['GUN'];
				$hesaplanan = ROUND($to_irr[$j] / (pow((1+($efektifFaizOran/100.0)), ($gecenGun/$krediToplamGun))), 2);
				
				$efektifFaizHesaplamaToplam = $efektifFaizHesaplamaToplam + $hesaplanan;
				//echo "<br>Hesaplamalar: Faiz Oranı:".$tka->efektifFaizOran." Gün". $tgun." Toplam Gün".$krediToplam
			}
		  

			$sayac++;
		}
		return $efektifFaizOran;
	}
}
function odemePlaniHazirlaTaksitli($data="")
{

	$ebal =$data['anapara'];
	$tanapara = $ebal;
	$ccint =0.0;
	$caylikTaksit = 0.0;
	//$tarih=$this->vadeBasi;
	$oncekitarih=$data['vadeBasi'];
	$tgun = 0;
	$efektifFaizHesaplamaToplam = 0;
	$bugun = date('d/m/Y');

	if (abs($ebal) <= 0.01) {
		;
	} else {

		while (abs($ebal) > 0.01) {
			$deger = round(($ebal/$data['taksitSayisi']), 2);
			$ebal = $data['anapara'];
			$ccint =0.0;
			$caylikTaksit = 0.0;
			//$tarih=$this->vadeBasi;
			$oncekitarih=$data['vadeBasi'];
			//$vadeBasi = $this->kullanimTarihi;
			$odemePlani=array();
			$to_irr = array();
			$to_irr_t = array();
			$efektifFaizHesaplamaToplam = 0;
			$tgun = 0;
			$efek = array();
			$gun1 = array();
			$tanapara = $data['anapara'];

			$to_irr[] = 0-$ebal;

			$to_irr_t[] =  strtotime($data['vadeBasi']);
				

			$data['aylikTaksit'] = $data['aylikTaksit'] + $deger;
			$efektifFaizHesaplamaToplam = 0;
			for ($pnum = 1; $pnum <= $data['taksitSayisi']; $pnum++) {
				$tarih=DateAdd('m', ($pnum)*$data['taksit_Araligi'], $data['vadeBasi']);

				$odemePlani[$pnum]['VADE']=$tarih;

				$bbal = $ebal;

				$odemePlani[$pnum]['BBAL']=$bbal;

				if ($pnum == 1) {
					$gun=DATEDIFF('d', strtotime($data['vadeBasi']), strtotime($tarih));
				} else {
						
					$gun=DATEDIFF('d', strtotime($oncekitarih), strtotime($tarih));

				}

				$odemePlani[$pnum]['GUN']=$gun;

				$odemePlani[$pnum]['FAIZ']=round(($data['aylikFaizOrani']*12*$gun*$bbal)/360, 2);
				$odemePlani[$pnum]['FON']=round($odemePlani[$pnum]['FAIZ']* $data['kkdf'], 2);
				$odemePlani[$pnum]['VERGI']=round($odemePlani[$pnum]['FAIZ']* $data['bsmv'], 2);

				if (abs($ebal)<= 0.5 && $pnum==$data['taksitSayisi']) {
					$odemePlani[$pnum]['ANAPARAODEME'] = $bbal;
				} else {
					$odemePlani[$pnum]['ANAPARAODEME']=$data['aylikTaksit'] - round($odemePlani[$pnum]['FAIZ'], 2) - round($odemePlani[$pnum]['FON'], 2) - round($odemePlani[$pnum]['VERGI'], 2);
				}

				$odemePlani[$pnum]['TAKSIT']=round($odemePlani[$pnum]['FAIZ'], 2)+round($odemePlani[$pnum]['FON'], 2)+round($odemePlani[$pnum]['VERGI'], 2)+round($odemePlani[$pnum]['ANAPARAODEME'], 2);
				
				//efektif faiz hesaplama
				//$to_irr_t[] = strtotime($this->odemePlani[$pnum]['VADE']);
				//$to_irr[] = round($this->odemePlani[$pnum]['TAKSITYUVARLANMIS'], 2);
				
				
				$ebal = $odemePlani[$pnum]['BBAL'] - $odemePlani[$pnum]['ANAPARAODEME'];

				$odemePlani[$pnum]['TAKSITYUVARLANMIS']= $odemePlani[$pnum]['TAKSIT'];
				if (abs($ebal)<= 0.5) {
					$odemePlani[$pnum]['ANAPARAODEME']= $odemePlani[$pnum]['ANAPARAODEME'] + $ebal;
					$odemePlani[$pnum]['TAKSITYUVARLANMIS']= $odemePlani[$pnum]['TAKSIT'] + $ebal;
					//$to_irr[] = round($this->odemePlani[$pnum]['TAKSITYUVARLANMIS'], 2);
					//$to_irr_t[] = strtotime($this->odemePlani[$pnum]['VADE']);
					$caylikTaksit = $caylikTaksit + $data['aylikTaksit'] + $ebal;
					$ebal = $odemePlani[$pnum]['BBAL'] - $odemePlani[$pnum]['ANAPARAODEME'];
				} else {
					$ebal = $odemePlani[$pnum]['BBAL'] - $odemePlani[$pnum]['ANAPARAODEME'];
					$caylikTaksit = $caylikTaksit + $data['aylikTaksit'];
				}
				$to_irr[] = round($odemePlani[$pnum]['TAKSIT'], 2);
				$to_irr_t[] = strtotime($odemePlani[$pnum]['VADE']);

				
				
				
				$toplamOdenecek=$caylikTaksit;  //total amount paid at end of loan

				$odemePlani[$pnum]['KALANBAKIYE']=$ebal;


				$ccint = $ccint + $odemePlani[$pnum]['FAIZ'];
				$odemePlani[$pnum]['TOPLAMFAIZ']=$ccint;
				$odemePlani[$pnum]['TOPLAMODEME']=$caylikTaksit;

				$oncekitarih=$tarih;
			}
			$efektifFaizOrani = efektifFaizHesaplama($to_irr, $to_irr_t);
			$odemePlani['efektif'] = $efektifFaizOrani;
		}

	}
	return $odemePlani;
}
?>