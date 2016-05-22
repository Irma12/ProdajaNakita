function Racunaj(){
	var x = document.querySelectorAll("p.vrijemeObjave");


	for (var i = 0; i < x.length; i++) {

		var trenutno = new Date();
		var VrijemeNovosti = new Date(x[i].innerHTML);

		var razlika = trenutno- VrijemeNovosti;
		razlika=parseInt(razlika/1000);
		if(razlika<60)
		{
			//U sekundama
			x[i].innerHTML="Novost je objavljena prije par sekundi";
			
		}
		else
		{
			razlika=parseInt(razlika/60);

			if(razlika<60)
			{	
				//U minutama
				if(razlika==1){
					x[i].innerHTML="Novost je objavljena prije "+razlika+" minut";
					
				}
				else{
					x[i].innerHTML="Novost je objavljena prije "+razlika+" minuta";
				
				}
			}
			else
			{
				razlika=parseInt(razlika/60);
				//U satima
				if(razlika<24)
				{
					if(razlika==1 || razlika==21){
						x[i].innerHTML="Novost je objavljena prije "+razlika+" sat";
						
					}
					else if((razlika>1 && razlika<5) || (razlika>21 && razlika<24)){
						x[i].innerHTML="Novost je objavljena prije "+razlika+" sata";
						
					}
					else{
						x[i].innerHTML="Novost je objavljena prije "+razlika+" sati";
						
					}
				}
				else
				{
					razlika=parseInt(razlika/24);
					//U danima
					if(razlika<7)
					{
						if(razlika==1){
							x[i].innerHTML="Novost je objavljena prije "+razlika+" dan";
						
						}
						else{
							x[i].innerHTML="Novost je objavljena prije "+razlika+" dana";
							
						}
					}
					else if(razlika>31)
					{
						x[i].innerHTML="Datum objave novosti: "+ VrijemeNovosti;
					
					}
					else
					{
						razlika=parseInt(razlika/7);
						//U sedmicama
						if(razlika==1){
							x[i].innerHTML="Novost je objavljena prije "+razlika+" sedmicu";
						
						}
						else{
							x[i].innerHTML="Novost je objavljena prije "+razlika+" sedmice";
						
						}

					}
				}	
			}
		}
	}
}

function OdabirNovosti(control){

	var x = document.querySelectorAll("p.Kontrola");

	for (var i = 0; i < x.length; i++) {
		if(control==0){
			x[i].parentElement.style.display="block";
		}
		else if(control==1)
		{
			if(x[i].innerHTML=="1")
			{
				x[i].parentElement.style.display="block";
			}
			else
			{
				x[i].parentElement.style.display="none";	
			}
		}
		else if(control==2)
		{
			if(x[i].innerHTML=="1" || x[i].innerHTML=="2")
			{
				x[i].parentElement.style.display="block";
			}
			else
			{
				x[i].parentElement.style.display="none";
			}
		}
		else if(control==3)
		{
			if(x[i].innerHTML=="1" || x[i].innerHTML=="2"  || x[i].innerHTML=="3")
			{
				x[i].parentElement.style.display="block";	
			}
			else
			{
				x[i].parentElement.style.display="none";
			}
		}

	}

}

function Redirect1(){
	window.location.assign("prikaz.php?sort=abc");
}

function Redirect2(){
	window.location.assign("prikaz.php?sort=vrijeme");
}