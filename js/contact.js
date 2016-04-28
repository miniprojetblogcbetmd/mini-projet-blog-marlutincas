/* formulaire */  
function valider_nom(){
	var $nom = document.form1.nom.value;
	var $reponse = /[^0-9]+$/;
		if ($nom.match($reponse))
		{document.form1.nom.style.border="DarkGoldenrod solid 2px";
		return true; }
		else   {document.form1.nom.focus();
		        document.form1.nom.style.border="red solid 2px";
                alert("saisie du nom sans numéros");
		        return false;
				}
}

function valider_prenom(){
	var $prenom = document.form1.prenom.value;
	var $reponse = /[^0-9]+$/;
		if ($prenom.match($reponse))
		{document.form1.prenom.style.border="DarkGoldenrod solid 2px";
		return true; }
		else   {document.form1.prenom.focus();
		        document.form1.prenom.style.border="red solid 2px";
                alert("saisie du nom sans numéros");
		        return false;
				}
}

function valider_message(){
	var $text = document.form1.message.value;
		if ($text.match(/\+|\/|\>|\</))
		    {document.form1.message.focus();
			document.form1.message.style.border="red solid 2px";
			alert ("veuillez saisir votre message sans caractères spéciaux dangereux liés à l'insertion de script :<et> notament.");
			 return false;
			 }
		else { document.form1.message.style.border="DarkGoldenrod solid 2px";
		return true;
		}
}

function valider_tel(){
    var $tel = document.form1.tel.value;
	var $crt_tel = /[^a-zA-ZÀ-ÿ]+$/;
		if (!$tel.match($crt_tel))
		{document.form1.tel.focus();
		document.form1.tel.style.border="red solid 2px";
		alert("Saisir que des chiffres");
		return false;
		}
		else {document.form1.tel.style.border="DarkGoldenrod solid 2px";
		return true;}
}

function valider_mail(){
    var $mail = document.form1.mail.value;
	var $reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,})+$/;
        if ($mail.match($reg))
		{document.form1.mail.style.border="DarkGoldenrod solid 2px";
		return true; }
		else   {document.form1.mail.focus();
		        document.form1.mail.style.border="red solid 2px";
                alert("saisie du mail incorrect");
		        return false;
				}
}

function return_valider(){
    var $fenetre = window.innerWidth; /* taille fenetre client récupéré à l'envoi du message*/
	document.form1.fenetre.value = $fenetre;

    var $datemessage = document.getElementById("startdate"); /* date heure envoi message */
    var $date1   = new Date();
    var $jour     = $date1.getDate();
    var $mois    = $date1.getMonth()+1;
    var $annee  = $date1.getFullYear();
    $datemessage.innerHTML = 'date brute : '+$date1;
	document.form1.startdate.value = $date1;
}
