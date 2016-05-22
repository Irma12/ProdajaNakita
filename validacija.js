

function ValidirajTelefon(tel){
	if(tel.value!="")
	{
		tel.style="background-color:white; border: 2px solid lightblue;";
		return true;
	}
	else
	{
		tel.style="background-color:#ff8566; border:2px solid #ff0000;";
		return false;
	}
}

function ValidacijaInputa(ulaz){
	if(ulaz.value==""){
		ulaz.style="background-color:#ff8566; border:2px solid #ff0000;";
		document.getElementById("Dugme").disabled=true;
	}
	else{
		ulaz.style="background-color:white; border: 2px solid lightblue;";
		document.getElementById("Dugme").disabled=false;
	}
}

function ValidirajFormu(forma){
	var prolaz=true;
	if(document.getElementById("Naslov").value=="")
	{
		document.getElementById("Naslov").style="background-color:#ff8566; border:2px solid #ff0000;";
		prolaz=false;
		document.getElementById("Dugme").disabled=true;
	}
	else{
		document.getElementById("Naslov").style="background-color:white; border: 2px solid lightblue;";
		document.getElementById("Dugme").disabled=false;
	}
	if(document.getElementById("TxtNovosti").value=="")
	{
		document.getElementById("TxtNovosti").style="background-color:#ff8566; border:2px solid #ff0000;";
		prolaz=false;
		document.getElementById("Dugme").disabled=true;
	}
	else{
		document.getElementById("TxtNovosti").style="background-color:white; border: 2px solid lightblue;";
		document.getElementById("Dugme").disabled=false;
	}

	if(document.getElementById("dkd").value=="")
	{
		document.getElementById("dkd").style="background-color:#ff8566; border:2px solid #ff0000;";
		prolaz=false;
		document.getElementById("Dugme").disabled=true;
	}
	else{
		document.getElementById("dkd").style="background-color:white; border: 2px solid lightblue;";
		document.getElementById("Dugme").disabled=false;
	}

	if(document.getElementById("tbroj").value=="")
	{
		document.getElementById("tbroj").style="background-color:#ff8566; border:2px solid #ff0000;";
		prolaz=false;
		document.getElementById("Dugme").disabled=true;
	}
	else{
		document.getElementById("tbroj").style="background-color:white; border: 2px solid lightblue;";
		document.getElementById("Dugme").disabled=false;
	}
	if(prolaz)
		alert("Uspjesno ste unijeli novost!");

return prolaz;
}