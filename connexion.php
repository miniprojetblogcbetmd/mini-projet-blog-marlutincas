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
<form action="formulaire-article.php" method="post">
Pseudo : <input type="text" name="pseudo" value="<?php if (isset($_POST['pseudo'])) echo htmlentities(trim($_POST['pseudo'])); ?>"><br />
Mot de passe : <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>"><br />
<br/>
<input type="submit" name="connexion" value="Connexion">
</form>



<br/>
</section>
<!-- prochainement inscription nouvel abonné

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
-->

    <?php 
	include ("aside-droite.php"); /* aside droite */
	?>		
<hr/>
	<?php 
	include ("footer.php"); /* footer */
	?>
   <script src="https://maps.googleapis.com/maps/api/js"></script>
   <script src="js/google.js" type="text/javascript"></script>

</body>
</html>