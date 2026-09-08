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
    	UyariNesne.innerHTML = " Please Enter Number..!";
    	AnaparaNesne.value = "";
     } else {
    	 UyariNesne.innerHTML="";
     }
        
    if (AnaparaNesne.value > 1000000000) {
    	UyariNesne.innerHTML = " Amount of Loan cannot be greater than 1.000000000...!";
    	AnaparaNesne.value = "";
    }

    if(isNaN(taksitSayisiNesne.value)) {
    	UyariTaksitSayisi.innerHTML = " Please Enter Number..!";
    	taksitSayisiNesne.value = "";
     } else {
    	 UyariTaksitSayisi.innerHTML="";
     }
        
    if (taksitSayisiNesne.value > 120) {
    	UyariTaksitSayisi.innerHTML = " Number of Installments accepts numbers in the range of 1-120..!";
    	taksitSayisiNesne.value = "";
    }

    if(isNaN(taksit_AraligiNesne.value)) {
    	UyariTaksitAraligi.innerHTML = " Please Enter Number..!";
    	taksit_AraligiNesne.value = "";
     } else {
    	 UyariTaksitAraligi.innerHTML="";
     }
        
    if (taksit_AraligiNesne.value > 12) {
    	UyariTaksitAraligi.innerHTML = " Installment Assignment must be between 1 - 12..!";
    	taksit_AraligiNesne.value = "";
    }
    if (taksit_AraligiNesne.value > taksitSayisiNesne.value) {
    	UyariTaksitAraligi.innerHTML = "Installment Range cannot be greater than the Number of Installments..!";
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
