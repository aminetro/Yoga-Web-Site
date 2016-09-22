function verifierAdmin(){
	msg="";
	if (document.getElementById('login').value==""){
		msg+="champ LOGIN est vide \n";
		}	
	if (document.getElementById('password').value=="")
		{
		msg+="champ PASSWORD est vide \n";
		}	
	if (msg=="") {return document.formAdmin.submit();	 }
	else {alert(msg);return false;}


}

function verifierEntraineur(){
	msg="";
	if (document.getElementById('nom').value==""){
		msg+="champ NOM est vide \n";
		}	
	if (document.getElementById('prenom').value=="")
		{
		msg+="champ PRENOM est vide \n";
		}	
	if (document.getElementById('tel').value=="")
		{
		msg+="champ TEL est vide \n";
		}else{
				x=document.getElementById('tel').value;
				if  (isNaN(x)){
					msg+="TEL non numerique \n";		
				}else{
					if(x.length!=8){
						msg+="TEL doit etre compose de 8 chiffre \n";
					}
					}
			}
	if (document.getElementById('mail').value=="")
		{
		msg+="champ E-mail est vide \n";
		}else{
			m=document.getElementById('mail').value;
			x = m.indexOf("@");
			if (x==-1)
				msg+="E-MAIL doit contenir le caractere @ \n";
			}
	if (document.getElementById('spec').value==""){
		msg+="champ SPECIALITE est vide \n";
		}	
	if (msg=="") {return document.formEntraineur.submit();	 }
	else {alert(msg);return false;}


}


function verifierContact(){
	msg="";
	if (document.getElementById('nom').value==""){
		msg+="champ NOM est vide \n";
		}	
	if (document.getElementById('prenom').value=="")
		{
		msg+="champ PRENOM est vide \n";
		}	
	if (document.getElementById('tel').value=="")
		{
		msg+="champ TEL est vide \n";
		}else{
				x=document.getElementById('tel').value;
				if  (isNaN(x)){
					msg+="TEL non numerique \n";		
				}else{
					if(x.length!=8){
						msg+="TEL doit etre compose de 8 chiffre \n";
					}
					}
			}
	if (document.getElementById('mail').value=="")
		{
		msg+="champ E-mail est vide \n";
		}else{
			m=document.getElementById('mail').value;
			x = m.indexOf("@");
			if (x==-1)
				msg+="E-MAIL doit contenir le caractere @ \n";
			}
	if (document.getElementById('message').value==""){
		msg+="champ MESSAGE est vide \n";
		}	
	if (msg=="") {return document.formContact.submit();	 }
	else {alert(msg);return false;}


}


function verifierClient(){
	msg="";
	if (document.getElementById('nom').value==""){
		msg+="champ NOM est vide \n";
		}	
	if (document.getElementById('prenom').value=="")
		{
		msg+="champ PRENOM est vide \n";
		}	
	if (document.getElementById('tel').value=="")
		{
		msg+="champ TEL est vide \n";
		}else{
				x=document.getElementById('tel').value;
				if  (isNaN(x)){
					msg+="TEL non numerique \n";		
				}else{
					if(x.length!=8){
						msg+="TEL doit etre compose de 8 chiffre \n";
					}
					}
			}
	if (document.getElementById('mail').value=="")
		{
		msg+="champ E-mail est vide \n";
		}else{
			m=document.getElementById('mail').value;
			x = m.indexOf("@");
			if (x==-1)
				msg+="E-MAIL doit contenir le caractere @ \n";
			}
	if (document.getElementById('login').value==""){
		msg+="champ LOGIN est vide \n";
		}	
	if (document.getElementById('password').value==""){
		msg+="champ PASSWORD est vide \n";
		}	
	if (document.getElementById('token').value=="")
		{
		msg+="champ TOKEN est vide \n";
		}else{
				t=document.getElementById('token').value;
				if  (isNaN(t)){
					msg+="TOKEN non numerique \n";		
				}
			}
			
	if (msg=="") {return document.formClient.submit();	 }
	else {alert(msg);return false;}


}

function verifier(){
	msg="";
	if (document.getElementById('nom').value==""){
		msg+="champ NOM est vide \n";
		}	
	if (document.getElementById('desc').value=="")
		{
		msg+="champ DESCRIPTION est vide \n";
		}
	if (document.getElementById('jour').value=="jour")
		{
		msg+="champ JOUR est vide \n";
		}
	if (document.getElementById('mois').value=="mois")
		{
		msg+="champ MOIS est vide \n";
		}
	if (document.getElementById('annee').value=="annee")
		{
		msg+="champ ANNEE est vide \n";
		}
		
	if (document.getElementById('nbr').value=="")
		{
		msg+="champ NOMBRE DE PLACE est vide \n";
		}else{
				x=document.getElementById('nbr').value;
				if  (isNaN(x)){
					msg+="NOMBRE DE PLACE non numerique \n";		
				}else{
					if(x<15){
						msg+="NOMBRE DE PLACE doit etre superieur a 15 \n";
					}
					}
			}
	if (msg=="") {return document.form1.submit();	 }
	else {alert(msg);return false;}


}

function verifierSeance(){
	msg="";

	if (document.getElementById('placeRes').value==""){
		msg+="champ PLACES RESERVEES est vide \n"; 
		}else{
				x=document.getElementById('placeRes').value;
				if  (isNaN(x)){
					msg+="PLACES RESERVEES non numerique \n";	
				}
			}	
	if (document.getElementById('placeTotal').value=="")
		{
		msg+="champ PLACES TOTALES est vide \n";
		}else{
				y=document.getElementById('placeTotal').value;
				if  (isNaN(y)){
					msg+="PLACES TOTALES non numerique \n";
				}else if(y<15) {msg+="PLACES TOTALES doit etre superieur ou egale a 15 \n";}
			}
			
	if (msg==""){
		if(Number(x) > Number(y)){msg+="PLACES RESERVEES doit etre inferieur a PLACES TOTALES \n";}
	}
	if (msg=="") {return document.formSeance.submit();	 }
	else {alert(msg);return false;}


}