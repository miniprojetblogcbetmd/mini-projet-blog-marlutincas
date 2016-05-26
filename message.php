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
          <li id="selection"><a href="index.php">Accueil</a></li>
          <li class="sousmenu"><a href="tutos-couture.php">Tutos couture</a> 
           <ul>
              <li class="sousmd"><a href="tutos-couture-vetements.php">- Vêtements</a></li>
              <li class="sousmd"><a href="tutos-couture-accessoires.php">- Autres</a></li>
           </ul>
		  </li>
		  <li class="sousmenu"><a href="idees-rangements-atelier.php">Idée rangement d'atelier</a></li>
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
	
<?php
  
  /* Variables de connexion à la BDD ================================== */
      $serveur = 'localhost';       $loginserveur = 'root';   $mdpserveur = '';
      $nombdd  = 'projetnfa_083'; /*PBO : pas de tirets */

    /* CONNEXION serveur, définition du charset, connexion BDD, requete SQL ============*/
      $db = mysqli_connect($serveur, $loginserveur, $mdpserveur)
        or die("Impossible de se connecter : " . mysql_error()); /* affichage erreur si pb */
      $db->set_charset('utf8');
      mysqli_select_db($db, $nombdd);
   ?>   
  
  
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
	//requete sql
	$sql = "INSERT INTO message (nom_message, prenom_message, sujet_message, message, telephone_message, email_message, fenetre_message, heure_message)
	         VALUES ('$nom', '$prenom', '$sujet', '$message', '$telephone', '$email','$fenetre','$startdate')";
	//exécution de la requête SQL:
  $requete = mysqli_query($db, $sql) or die( mysql_error() ) ;
 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }
?>
	
	
	<?php 
	function redirect($url, $time = 90)
{
    header("Refresh:$time;Url=$url");
}
// Utilisation :
// Refresh au bout de 6 secondes vers la page d'accueil 
redirect("index.php", 6);
?>

<?php 
	include ("aside-droite.php"); /* aside droite */
	?>
     </div>		
<hr/>
	<?php 
	include ("footer.php"); /* footer */
	?>
</body>
</html>