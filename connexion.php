<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href="styles/connexion.css" rel ="stylesheet" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="img/fav-noir-blanc.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="img/fav-noir-blanc.ico" /><!--pour IE-->
	<meta name="description" content="blog couture, loisirs créatifs, tuto couture"/>
    <meta name="viewport" content="width=device-width"/>
    <title>accueil blog marlutincas</title>	
  </head>

<body background="img/background.png">
    <header>
	  <nav class="menuprincipal">
	  <input type="checkbox" id="nav" /><label for="nav"></label>
        <ul id="menu-deroulant">
          <li class="sousmenu"><a href="index.html">Accueil</a></li>
          <li class="sousmenu"><a href="tutos-couture.html">Tutos couture</a> 
           <ul>
              <li class="sousmd"><a href="Vêtements.html">- Vêtements</a></li>
              <li class="sousmd"><a href="autres.html">- Autres</a></li>
           </ul>
		  </li>
		  <li class="sousmenu"><a href="idees-rangements-atelier.html">Idées de rangements pour atelier couture</a></li>
          <li class="moncompte"><a href="connexion.php"><img class="icone" src="img/icone-mon-compte-rose.png" />Mon compte</a></li>
		  <!-- ajouter un bouton BOUTIQUE ultérieurement - à voir réalisation BOUTIQUE sur drupal-->
        </ul>
       </nav>
        <h1>
          <img id="banniere" src="img/banniere-rose.png" alt="Marlutincas"/>
          <p id="titre">Bienvenue dans le monde de Marlutincas</p>
		</h1>
  </header><!--balise structurante html5 haut de page-->
<section class="gauche">
<h2>Déja membre ! :</h2>
<form action="index.php" method="post">
Pseudo : <input type="text" name="pseudo" value="<?php if (isset($_POST['pseudo'])) echo htmlentities(trim($_POST['pseudo'])); ?>"><br />
Mot de passe : <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />
<br/>
<input type="submit" name="connexion" value="Connexion">
</form>
<br/>
</section>
<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
<?php
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
        if ((isset($_POST['pseudo']) && !empty($_POST['pseudo'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

        $base = mysql_connect ('serveur', 'pseudo', 'password');
        mysql_select_db ('nom_base', $base);

        // on teste si une entrée de la base contient ce couple pseudo / pass
     	$sql = 'SELECT count(*) FROM membre WHERE pseudo="'.mysql_escape_string($_POST['pseudo']).'" AND pass_md5="'.mysql_escape_string(md5($_POST['pass'])).'"';
        $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
        $data = mysql_fetch_array($req);

	    mysql_free_result($req);
        mysql_close();
        
		// si on obtient une réponse, alors l'utilisateur est un membre
        if ($data[0] == 1) {
                session_start();
                $_SESSION['pseudo'] = $_POST['pseudo'];
                header('Location: membre.php');
                exit();
        }
	    // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son pseudo, soit dans son mot de passe
        elseif ($data[0] == 0) {
                $erreur = 'Compte non reconnu.';
        }
        // sinon, alors la, il y a un gros problème :)
        else {
                $erreur = 'Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
        }
      }
      else {
      $erreur = 'Au moins un des champs est vide.';
      }
}
?>

<section class="droite">
<h2>Inscription à l'espace membre :</h2>
<form action="inscription.php" method="post">
Pseudo : <input type="text" name="pseudo" value="<?php if (isset($_POST['pseudo'])) echo htmlentities(trim($_POST['pseudo'])); ?>"><br />
Mot de passe : <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />
Confirmation du mot de passe : <input type="password" name="pass_confirm" value="<?php if (isset($_POST['pass_confirm'])) echo htmlentities(trim($_POST['pass_confirm'])); ?>"><br />
<input type="submit" name="inscription" value="Inscription">
</form>
<br/>
</section>
<?php
if (isset($erreur)) echo '<br />',$erreur;
?>

<?php
// on teste si le visiteur a soumis le formulaire
if (isset($_POST['inscription']) && $_POST['inscription'] == 'Inscription') {
        // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
        if ((isset($_POST['pseudo']) && !empty($_POST['pseudo'])) && (isset($_POST['pass']) && !empty($_POST['pass'])) && (isset($_POST['pass_confirm']) && !empty($_POST['pass_confirm']))) {
        // on teste les deux mots de passe
        if ($_POST['pass'] != $_POST['pass_confirm']) {
        $erreur = 'Les 2 mots de passe sont différents.';
        }
        else {
                $base = mysql_connect ('serveur', 'pseudo', 'password');
                mysql_select_db ('nom_base', $base);

                // on recherche si ce pseudo est déjà utilisé par un autre membre
                $sql = 'SELECT count(*) FROM membre WHERE pseudo="'.mysql_escape_string($_POST['pseudo']).'"';
                $req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
                $data = mysql_fetch_array($req);



                if ($data[0] == 0) {
                $sql = 'INSERT INTO membre VALUES("", "'.mysql_escape_string($_POST['pseudo']).'", "'.mysql_escape_string(md5($_POST['pass'])).'")';
mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

                session_start();
                $_SESSION['pseudo'] = $_POST['pseudo'];
                header('Location: membre.php');
                exit();
                }
                else {
                $erreur = 'Un membre possède déjà ce pseudo.';
                }

        }
        }
        else {        
        $erreur = 'Au moins un des champs est vide.';  
        }
        }

?>

    <aside class="menudroite">
	       <article>A propos:</article>
	         <img class="imgprofil" src="img/atelier/atelier.jpg"/>
		   <article>Me suivre:
		     <p><a href="https://www.facebook.com/coralie.baffou"><img class="logoaside" src="img/logo-pinterest.png"/></a>
		     <a href="https://www.facebook.com/coralie.baffou"><img class="logoaside" src="img/logo-facebook.gif"/></a>
		     <a href="https://www.facebook.com/coralie.baffou"><img class="logoaside" src="img/logo-instagram.png"/></a>
             </p>
           </article>
	       <article>Me trouver:</article>
	         <p id="map"></p>
		   <article>Par tags:</article>
    </aside>
		
    <footer><!--balise structurante pied de page-->
		<p class="baspage"><a href="mentions.html">| Mentions légales</a> | <a href="equipe.html">Plan du site</a> <!-- les catégories, les tags, les pages, 
		les albums, las archives par mois... --> | <a href="contact.php">Contact</a> |</p>
   </footer>
   <script src="https://maps.googleapis.com/maps/api/js"></script>
   <script src="js/google.js" type="text/javascript"></script>

</body>
</html>