<!DOCTYPE html>
<html lang="fr">
      <meta charset='utf-8' />
	  
    <?php include("entete.php"); /* head */
  $title = "Formulaire de modification des aticles du site marlutincas";
  $style = "styles/formulaire.css";
  $content = "forulaire de modification des articles";
    affichage($title, $style, $content);
  ?>	
  
  <body background="img/background.png">
  
    <?php 
    include ("nav.php"); /* header : menu + logo + h1 */
	$titreh1 = "Bienvenue sur le Backoffice";
	$styleform = "";
	titre ($titreh1, $styleform);
	?>
	
<h2> Vous modifications ont été enregistré et vont être transmi à la base de donnée. </h2>
  
	   		 
<?php
try
{
	// Sous WAMP (Windows)
$bdd = new PDO('mysql:host=localhost;dbname=projetnfa_083;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
    <section class="messagephp">
	    <p> <?php $id      = $_POST['id']; echo 'id : '.$id;                ?> </p>
	    <p> <?php $date    = $_POST['date']; echo 'date : '.$date;          ?> </p>
		<p> <?php $titre   = $_POST['titre']; echo 'titre : '.$titre;       ?> </p>
		<p> <?php $resume  = $_POST['resume']; echo 'resume : '.$resume;    ?> </p>
		<p> <?php $contenu = $_POST['contenu']; echo 'contenu : '.$contenu; ?> </p>
	 </section>
     	
<?php
$req = $bdd->prepare("UPDATE articles SET date_article= :date, titre_article= :titre, resume_article= :resume, contenu= :contenu WHERE id_article = :id");
$req->execute(array(
	'date' => $date,
	'titre' => $titre,
	'resume' => $resume,
	'contenu' => $contenu,
	'id' => $id
	));
	 
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($req)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  {
    echo("L'insertion à échouée") ;
  }

?>

      	
<hr/>
	<?php 
	include ("footer.php"); /* footer */
	?>
<!-- appel du ficier JS externe-->	
	<script src="js/contact.js" type="text/javascript"></script>
		
  </body>
</html>



