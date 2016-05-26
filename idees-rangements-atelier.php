<!DOCTYPE html>
<html lang="fr">
  
    <meta charset="utf-8">
    <?php include("entete.php"); /* head */
  $title = "idees de rangements pour atelier de couture";
  $style = "styles/categorie-b.css";
  $content = "blog couture, loisirs créatifs, tuto couture et rangement d'atelier de couture";
    affichage($title, $style, $content);
  ?>	
 
  <body background="img/background.png">
<?php 
    include ("nav.php"); /* header : menu + logo + h1 */
	$titreh1 = "IDEES DE RANGEMENTS POUR ATELIER DE COUTURE";
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
			    <h2 class="titrearticle">Détourner une simple étagère</h2>
	            <p class="date">date</p>
              </header>
			  <aside class="particle">
	            <img class="imgarticle" src="img/atelier/rangement-etagere-1.jpg"/>
				<p class="resume">On se dit tous la même chose: je n'ai pas assez de place!
				Et bien en plus de trouver un autre espace de rangement, il y a un côté design, décoration d'intérieure!
				En couture c'est top, on a tout à portée de main....</p>
				<p class="voirplus">Voir plus en détail le rangement sur l'étagère>>>>>></p>
	          </aside>
			</article>
	      <article>
			  <header>
	    	   <h2 class="titrearticle">Détourner un meuble IKEA</h2>
	           <p class="date">date</p>
			  </header>
			  <aside class="particle">
	           <img class="imgarticle" src="img/atelier/meuble-ikea.jpg"/>
	           <p class="resume">Résumé</p>
			   <p class="voirplus">Voir en détail cette idée de rangement>>>>>></p>
	          </aside>
          </article>
	      <article>
			  <header>
	    	   <h2 class="titrearticle">Détourner une plaque isomer en couture</h2>
	           <p class="date">date</p>
			  </header>
			  <aside class="particle">
	           <img class="imgarticle" src="img/atelier/plaque-isomer.jpg" width="100px" height="50px"/>
	           <p class="resume">Résumé</p>
			   <p class="voirplus"><a href="plaque-isomer-rangement-couture.php">Voir plus en détail cette idée de rangement PLAQUE ISOMER>>>>>></a></p>
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
