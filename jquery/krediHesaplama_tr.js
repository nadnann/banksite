function GirisKontrol()
{
    var UyariNesne = document.getElementById('UyariAnapara');
    var AnaparaNesne = document.getElementById('Anapara');
    var taksitSayisiNesne = document.getElementById('taksitSayisi');
    var taksit_AraligiNesne = document.getElementById('taksit_Araligi');

    var taksit_AraligiNesne = document.getElementById('taksit_Araligi');
    var taksit_AraligiNesne = document.getElementById('taksit_Araligi');
    var taksit_AraligiNesne = document.getElementById('taksit_Araligi');
    var taksit_AraligiNesne = document.getElementById('taksit_Araligi');
    
    if(isNaN(AnaparaNesne.value)) {
    	UyariNesne.innerHTML = " Lütfen Sayı Girişi Yapınız..!";
    	AnaparaNesne.value = "";
     } else {
    	 UyariNesne.innerHTML="";
     }
        
    if (AnaparaNesne.value > 1000000000) {
    	UyariNesne.innerHTML = " Kredi Tutarı  1,000000000 den büyük olamaz..!";
    	AnaparaNesne.value = "";
    }

    if(isNaN(taksitSayisiNesne.value)) {
    	UyariTaksitSayisi.innerHTML = " Lütfen Sayı Girişi Yapınız..!";
    	taksitSayisiNesne.value = "";
     } else {
    	 UyariTaksitSayisi.innerHTML="";
     }
        
    if (taksitSayisiNesne.value > 120) {
    	UyariTaksitSayisi.innerHTML = " Taksit Sayısı 1-120 aralığında sayıları kabul etmektedir..!";
    	taksitSayisiNesne.value = "";
    }

    if(isNaN(taksit_AraligiNesne.value)) {
    	UyariTaksitAraligi.innerHTML = " Lütfen Sayı Girişi Yapınız..!";
    	taksit_AraligiNesne.value = "";
     } else {
    	 UyariTaksitAraligi.innerHTML="";
     }
        
    if (taksit_AraligiNesne.value > 12) {
    	UyariTaksitAraligi.innerHTML = " Taksit Atalığı 1 - 12  arasında olmalıdır..!";
    	taksit_AraligiNesne.value = "";
    }
    
    if (taksit_AraligiNesne.value > taksitSayisiNesne.value) {
    	UyariTaksitAraligi.innerHTML = " Taksit Araligi Taksit Sayısından büyük olamaz..!";
    	taksit_AraligiNesne.value = "";
    }
    
    
        
}
      
$(document).ready(function(){
	$(".kkdf").val("0.15");
	$(".kurumTip").change(function(){
	   if($(".kurumTip").val()=="0") {
		   $(".kkdf").val("0.15");
	   } else {
		   $(".kkdf").val("0");
		 }
	});
	
});

