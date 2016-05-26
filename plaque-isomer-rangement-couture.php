<!DOCTYPE html>
<html lang="fr">
   <meta charset="utf-8">
    <?php include("entete.php"); /* head */
  $title = "idees rangements d'ateier de couture";
  $style = "styles/produits.css";
  $content = "blog couture, loisirs créatifs, tuto couture et rangement d'atelier de couture";
    affichage($title, $style, $content);
  ?>	
 
  <body background="img/background.png">
<?php 
    include ("nav.php"); /* header : menu + logo + h1 */
	$titreh1 = "DETOURNER UNE PLAQUE ISOMER EN COUTURE";
	$styleform = "";
	titre ($titreh1, $styleform);
    ?>
      <div class="wrapper">
	    <aside class="news">
		  <p><a href="newsletter.html">Inscription Newsletter</a></p>
	    </aside>
	    <section class="main">
		  <article>
			  <header>
			   <h2 class="titrearticle">Détourner une plaque isomer en couture</h2>
	           <p class="date">date</p>
			  </header>
			  <aside class="particle">
	           <img src="img/atelier/plaque-isomer.jpg" width="100px" height="50px"/>
	           <p>1er paragraphe</p>
			   <p>2e paragraphe</p>
			   <p>3e paragraphe</p>
			   <p>4e paragraphe</p>
			   <p>5e paragraphe</p>
			   </aside>
          </article>
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
