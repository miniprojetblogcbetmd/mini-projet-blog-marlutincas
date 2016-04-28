<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href="styles/formulaire.css" rel ="stylesheet" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="img/fav-noir-blanc.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="img/fav-noir-blanc.ico" /><!--pour IE-->
	<meta name="description" content="blog couture, loisirs créatifs, tuto couture"/>
    <meta name="viewport" content="width=device-width"/>
    <title>accueil blog marlutincas</title>	
  </head>
  <body background="img/background.png">
    <header>
	  <nav class="menuprincipal">
	  <input type="checkbox" id="nav" /><label class="contact" for="nav"></label>
        <ul id="menu-deroulant">
          <li id="selection"><a href="index.html">Accueil</a></li>
          <li class="sousmenu"><a href="tutos-couture.html">Tutos couture</a> 
           <ul>
              <li class="sousmd"><a href="Vêtements.html">- Vêtements</a></li>
              <li class="sousmd"><a href="autres.html">- Autres</a></li>
           </ul>
		  </li>
		  <li class="sousmenu"><a href="tutoautres.html">Idées rangements d'atelier</a></li>
          <!-- ajouter un bouton BOUTIQUE ultérieurement - à voir réalisation BOUTIQUE sur drupal-->
        </ul>
		  <a href="https://www.facebook.com/coralie.baffou"><img class="logo" src="img/logo-pinterest.png"/></a>
		  <a href="https://www.facebook.com/coralie.baffou"><img class="logo" src="img/logo-facebook.gif"/></a>
		  <a href="https://www.facebook.com/coralie.baffou"><img class="logo" src="img/logo-instagram.png"/></a>
      </nav>
      <h1>
          <img id="banniere" src="img/banniere-rose.png" alt="Marlutincas"/>
          <p id="titre">Bienvenu dans le monde de Marlutincas</p>
      </h1>
    </header><!--balise structurante html5 haut de page-->
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
      <aside class="menudroite">
        <article>A propos:</article>
	    <article>Me suivre:
		     <p><a href="https://www.facebook.com/coralie.baffou"><img class="logoaside" src="img/logo-pinterest.png"/></a>
		     <a href="https://www.facebook.com/coralie.baffou"><img class="logoaside" src="img/logo-facebook.gif"/></a>
		     <a href="https://www.facebook.com/coralie.baffou"><img class="logoaside" src="img/logo-instagram.png"/></a>
             </p>
        </article>
	    <article>Me trouver:</article>
	    <article>Par tags:</article>
	  </aside>		
<hr/>
	<footer><!--balise structurante pied de page-->
		<p class="baspage"><a href="mentions.html">| Mentions légales</a> | <a href="equipe.html">Plan du site</a> <!-- les catégories, les tags, les pages, 
		les albums, las archives par mois... --> | <a href="contact.php">Contact</a> |</p>
	</footer>
<!-- appel du ficier JS externe-->	
	<script src="js/contact.js" type="text/javascript"></script>
	<script src="js/captcha.js" type="text/javascript"></script>
    <script type="text/javascript">window.onload=randomNums();</script>
  </body>
</html>
	
