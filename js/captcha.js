function valider_captcha(){
  var $answer = document.getElementById("answer").value;
  var $digit1 = parseInt(document.getElementById("digit1").innerHTML);
  var $digit2 = parseInt(document.getElementById("digit2").innerHTML);
  var $sum = $digit1 + $digit2;
     if ($answer == null || $answer == "") {
           alert("Calculer la somme de l'addition");
           return false;
     }else if ($answer != $sum){
           alert ("Votre calcul est faux");
	 }else {document.getElementById("status").innerHTML = "processing";
            document.getElementById("answer").innerHTML = "processing";
     }
}

function randomNums(){
   var rand_num1 = Math.floor(Math.random() *10) +1;
   var rand_num2 = Math.floor(Math.random() *10) +1;
  document.getElementById("digit1").innerHTML=rand_num1;
  document.getElementById("digit2").innerHTML=rand_num2;
}