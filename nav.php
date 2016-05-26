<?php
function titre($titreh1, $styleform)
{?>
<header>   
	<nav class="menuprincipal">
	  <input type="checkbox" id="nav" /><label class="<?php echo $styleform ?>" for="nav"></label>
        <ul id="menu-deroulant">
          <li class="sousmenu"><a href="index.php">Accueil</a></li>
          <li class="sousmenu"><a href="tutos-couture.php">Tutos couture</a> 
           <ul>
              <li class="sousmd"><a href="tutos-couture-vetements.php">- Vêtements</a></li>
              <li class="sousmd"><a href="tutos-couture-accessoires.php">- Accessoires</a></li>
           </ul>
		  </li>
		  <li class="sousmenu"><a href="idees-rangements-atelier.php">Idées de rangements pour atelier de couture</a></li>
          <li class="moncompte"><a href="connexion.php"><img class="icone" src="img/icone-mon-compte-rose.png" />Mon compte</a></li>
		  <!-- ajouter un bouton BOUTIQUE ultérieurement - à voir réalisation BOUTIQUE sur drupal-->
        </ul>
    </nav>
        <h1>
          <img id="banniere" src="img/banniere-rose.png" alt="Marlutincas"/>
          <p id="titre"><?php echo $titreh1 ?></p>
        </h1>
</header><!--balise structurante html5 haut de page-->
<?php
	} ?>

	
<!-- id="selection" à voir pour modifier le style du menu selectionner / pour indiquer où le client se 
situe dans le menu quand il est sur une page -->