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
		  <li class="sousmenu"><a href="tutoautres.html">Idée rangement d'atelier</a></li>
          <li class="sousmenu"><a href="contact.php">Contact</a></li>	
		<!-- ajouter un bouton BOUTIQUE ultérieurement - à voir réalisation BOUTIQUE sur drupal-->
        </ul>
	</nav>
        <h1>
          <img id="banniere" src="img/banniere-rose.png" alt="Marlutincas">
          <p id="titre">Bienvenu dans le monde de Marlutincas</p>
		</h1>
  </header><!--balise structurante html5 haut de page-->
    </aside>
<h2>Votre Message a bien été envoyé.</br>Vous serez redirigé vers la page d'accueil dans 6 secondes.</h2>
	  <section class="messagephp">
	    <P> <?php $nom = $_GET['nom']; echo 'Nom : '.$nom; ?> </p>
		<P> <?php $prenom = $_GET['prenom']; echo 'Prénom : '.$prenom; ?> </p>
	    <p> <?php $sujet = $_GET['sujet']; echo ' Sujet : '.$sujet; ?> </p>
	    <p> <?php $message = $_GET['message']; echo ' Message : '.$message; ?> </p>
	    <p> <?php $telephone= $_GET['tel']; echo ' Numéro de téléphone : ';	echo $telephone; ?> </p>
	    <p> <?php $email= $_GET['mail']; echo ' Email : '; echo $email; ?> </p>
	    <p> <?php $captcha = $_GET['captcha']; echo ' Captcha : '; echo $captcha; ?> </p>
	    <p> <?php $fenetre = $_GET['fenetre']; echo 'Taille fenêtre client : '; echo $fenetre; ?> </p>
        <p> <?php $startdate = $_GET['startdate']; echo 'Date et heure d envoi du message : '; echo $startdate; ?> </p>	
      </section>
	<?php 
	function redirect($url, $time = 90)
{
    header("Refresh:$time;Url=$url");
}
// Utilisation :
// Refresh au bout de 6 secondes vers la page d'accueil 
redirect("index.html", 6);
?>

<aside class="news">
	<p><a href="newsletter.html">Inscription Newsletter</a></p>
</aside>

<aside class="menudroite">
	<ul>
      <li><a href="a-propos.html">A propos:</a></li>
	  <li><a href="me-suivre.html">Me suivre:</a></li>
	  <li><a href="me-trouver.html">Me trouver:</a></li>
	  <li><a href="par-tags.html">Par tags:</a></li>
	</ul>
	</aside>
			
<hr/>
	<footer><!--balise structurante pied de page-->
		<p class="baspage"><a href="mentions.html">| Mentions légales</a> | <a href="equipe.html">Plan du site</a> <!-- les catégories, les tags, les pages, 
		les albums, las archives par mois... --> |</p>
	</footer>
</body>
</html>