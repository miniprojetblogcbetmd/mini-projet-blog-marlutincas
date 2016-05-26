<!DOCTYPE html>
<html lang="fr">
  <meta charset='UTF-8' />

  <?php include("entete.php"); /* head */
  $title = "accueil blog couture marlutincas";
  $style = "styles/style.css";
  $content = "blog couture, loisirs créatifs, tuto couture et rangement d'atelier de couture";
    affichage($title, $style, $content);
  ?>
 
  <body background="img/background.png">
    <?php 
    include ("nav.php"); /* header : menu + logo + h1 */
	$titreh1 = "Bienvenue dans le monde de la couture. Marlutincas vous propose des tutos pour tous les niveaux de couture";
	$styleform = "";
	titre ($titreh1, $styleform);
    ?>
        
      <div class="wrapper">
		  <aside class="news">
	        <p><a href="newsletter.html">Inscription Newsletter</a></p>
	      </aside>
	      <section class="main">
	        <header><h2 class="titrecat"> Tutos couture : Vêtements </h2></header>
			<article>
			  
<?php
/* Variables de connexion à la BDD ================================== */
      $serveur = 'localhost';       $loginserveur = 'root';   $mdpserveur = '';
      $nombdd  = 'projetnfa_083'; /*PBO : pas de tirets */

    /* CONNEXION serveur, définition du charset, connexion BDD, requete SQL ============*/
      $db = mysqli_connect($serveur, $loginserveur, $mdpserveur)
        or die("Impossible de se connecter : " . mysql_error()); /* affichage erreur si pb */
      $db->set_charset('utf8');
      mysqli_select_db($db, $nombdd);
      
/* variable ==========================================================================*/
     $sql3="SELECT titre_article, resume_article, page_article, date_article, img_article"
." FROM articles WHERE page_article='tutos-couture-vetements.php' ORDER BY date_article DESC LIMIT 1";
     $sql4="SELECT titre_article, resume_article, page_article, date_article, img_article"
." FROM articles WHERE page_article='tutos-couture-accessoires.php' ORDER BY date_article DESC LIMIT 1";
     $sql5="SELECT titre_article, resume_article, page_article, date_article, img_article"
." FROM articles WHERE page_article='idees-rangements-atelier.php' ORDER BY date_article DESC LIMIT 1";

/* affichage requête 3 ============================================================= */
     
    $req3 = mysqli_query($db, $sql3);
    
    while ($row = mysqli_fetch_array($req3, MYSQLI_ASSOC)) {   /* tableau associatif */?>
    <header>
	  <h3 class="titrearticle"><?php echo $row['titre_article']; ?></h3>
	  <p class="date"><?php echo $row['date_article']; ?></p>
	</header>
      <aside class="particle">
	            <img class="imgarticle" src="<?php echo $row['img_article']; ?>" width="200px" height="auto"/>
				<p><?php echo $row['resume_article']; ?></p>
	          </aside>
			</article>
			
	        <header><h2 class="titrecat"> Tutos couture : Accessoires </h2></header>
			<article><?php  }

?>

<?php 
/* affiche la requete 4 ============================================================= */
    $req4 = mysqli_query($db, $sql4);
    
    while ($row = mysqli_fetch_array($req4, MYSQLI_ASSOC)) {   /* tableau associatif */?>
    
			  <header>
			    <h3 class="titrearticle"><?php echo $row['titre_article']; ?></h3>
	            <p class="date"><?php echo $row['date_article']; ?></p>
              </header>
			  <aside class="particle">
	            <img class="imgarticle" src="<?php echo $row['img_article']; ?>"/>
				<p class="resume"><?php echo $row['resume_article']; ?>
				</p>
				</aside>
			</article><?php  }

?>
<?php 
/* affiche la requete 4 ============================================================= */
    $req5 = mysqli_query($db, $sql5);
    
    while ($row = mysqli_fetch_array($req5, MYSQLI_ASSOC)) {   /* tableau associatif */?>
 
			<header><h2 class="titrecat"> Idées rangements d'atelier </h2></header>
			<article>
			  <header>
			    <h3 class="titrearticle"><?php echo $row['titre_article']; ?></h3>
	            <p class="date"><?php echo $row['date_article']; ?></p>
              </header>
			  <aside class="particle">
	            <img class="imgarticle" src="<?php echo $row['img_article']; ?>"/>
				<p class="resume"><?php echo $row['resume_article']; ?></p>
				</aside>
			</article><?php  }

?>
	      </section>
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
