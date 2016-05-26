<!DOCTYPE html>
<html lang="fr">
  <meta charset='UTF-8' />

  <?php include("entete.php"); /* head */
  $title = "page de contact du site marlutincas";
  $style = "styles/formulaire.css";
  $content = "question, contact, message avec marlutincas";
    affichage($title, $style, $content);
  ?>
  <body background="img/background.png">
    
	 <?php 
    include ("nav.php"); /* header : menu + logo + h1 */
	$titreh1 = "Prenez contact avec Marlutincas";
	$styleform = "contact";
	titre ($titreh1, $styleform);
    ?>

    <h2>Formulaire de contact</h2></header>
		<form class="form" action="message.php" method="GET" name="form1" onSubmit="return_valider();" >
	      <p>
            <label for="nom">Nom*:</label>
		    <input type="text" name="nom" id="nom" 
		    onchange="valider_nom()" onblur="this.value=this.value.toUpperCase();" required/><!--"this.value=this.value.toUpperCase();"-->
          </p>
		  <p>
            <label for="prenom">Prénom*:</label>
		    <input type="text" name="prenom" id="prenom" 
		    onchange="valider_prenom()" onblur="this.value=this.value.toUpperCase();" required/><!--"this.value=this.value.toUpperCase();"-->
          </p>
          <p>
            <label for="sujet">Sujet du message:</label>
            <select name="sujet" id="sujet" size="3" multiple="multiple">
              <option value="1" selected="selected">Demande de contact</option>
              <option value="2">Demande d'information</option>
              <option value="3">Suggestion d'amélioration</option>
            </select>
          </p>
          <p>
            <label for="message">Votre message*:</label>
            <textarea name="message" cols="800" rows="20" placeholder="Saisissez votre message ici" id="message" onchange="valider_message()" required></textarea>
          </p>
          <p>	
            <label for="tel">Numéro de téléphone:</label>
            <input type="tel" name="tel" id="telephone" placeholder="+33(0)0.00.00.00.00" onchange="valider_tel()"/>
          </p>
          <p>	
            <label for="mail">Adresse Email*:</label>
            <input type="email" name="mail" id="mail" onchange="valider_mail()" required/>
          </p>
          <p>
            <label for="captcha"> Combien font*: </label>
            <span id="digit1"></span> +
            <span id="digit2"></span> =
            <input type="text" name="captcha" id="answer" onblur="valider_captcha()" required/>		
          </p>
          <p class="boutonenvoyer">
            <input type="hidden" name="startdate" id="startdate" value="" />
            <input type="hidden" name="fenetre" value="" />
            <input type="reset" value="Annuler"/> | <input type="submit" value="Envoyer" />
          </p>
        </form>
      <?php 
	include ("aside-droite.php"); /* aside droite */
	?>		
<hr/>
	<?php 
	include ("footer.php"); /* footer */
	?>
<!-- appel du ficier JS externe-->	
	<script src="js/contact.js" type="text/javascript"></script>
	<script src="js/captcha.js" type="text/javascript"></script>
    <script type="text/javascript">window.onload=randomNums();</script>
  </body>
</html>
	
