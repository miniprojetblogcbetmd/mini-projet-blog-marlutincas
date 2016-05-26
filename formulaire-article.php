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
	
<h2> Vous allez pouvoir modifier les articles enregistrés </br>par date du plus récent au plus ancien. </h2>

	<?php
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
        if ((isset($_POST['pseudo']) && !empty($_POST['pseudo'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

            $base = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($base,'projetnfa_083');
            
            // on teste si une entrée de la base contient ce couple pseudo / pass
     	    $sql = "SELECT login, pass_md5 FROM client WHERE login='".mysql_escape_string($_POST['pseudo'])."' AND pass_md5='".mysql_escape_string($_POST['pass'])."'";
            $req = mysqli_query($base, $sql);
            }
else {
$erreur = 'Au moins un des champs est vide.';
}

$data = mysqli_fetch_array($req, MYSQLI_ASSOC);
		    // si on obtient une réponse, alors l'utilisateur est un client
           if (!$data['login']) {
                  ?> <p class="erreur"><?php  echo 'Compte non reconnu.'; ?> </p>
				  
         <?php   }
	        // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son pseudo, soit dans son mot de passe
 
              else {
                    session_start();
                    $_SESSION['pseudo'] = $_POST['pseudo']; ?>
                   <p class="ok"><?php echo 'bonjour '.$_SESSION['pseudo']; ?></p>
              
  	   
	 	      
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
     $sql3="SELECT * FROM articles ORDER BY date_article DESC";
	  
/* affichage requête 3 ============================================================= */
     
    $req3 = mysqli_query($db, $sql3);
	
	while ($row = mysqli_fetch_array($req3, MYSQLI_ASSOC)) {   /* tableau associatif */?>
    
    <form class="form" action="formulaire-article-post.php" method="POST" name="form1" onSubmit="return_valider;">
	    
		<label for="id"></label> <!-- à ne pas modifier -->
		 <input type="hidden" name="id" id="id" value="<?php echo $row['id_article'];?>" /> 
		<label for="date_article">Date de publication de l'article :</label>
		 <textarea type="text" id="content" name="date" ><?php echo $row['date_article'];?></textarea>
		<label for="titre_article">Titre de l'article :</label> 
		 <textarea type="text" id="content" name="titre" ><?php echo $row['titre_article'];?> </textarea>
        <label for="resume_article">Résumé de l'article :</label>		
		 <textarea type="text" id="content" name="resume" ><?php echo $row['resume_article'];?> </textarea>
		<label for="contenu">Contenu de l'article :</label> 
		 <textarea type="text" id="content" name="contenu" ><?php echo $row['contenu'];?> </textarea>
		<p class="boutonenvoyer">
          <input type="submit" value="Modifier" />
        </p>
        </form>
		
	<?php  }

   }
	
}	  
?>	




<?php
function WriteCsv() { 
// configuration de la base de données base de données
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'projetnfa_083';
 $nom_fichier = 'export';

//format du CSV
 $csv_terminated = "\n";
 $csv_separator = ";";
 $csv_enclosed = '"';
 $csv_escaped = "\\";

// requête MySQL
 $sql_query = "SELECT * FROM articles ORDER BY date_article DESC";

// connexion à la base de données
 $link = mysqli_connect($host, $user, $pass) or die("Je ne peux me connecter." . mysql_error());
 mysqli_select_db($db) or die("Je ne peux me connecter.");

// exécute la commande
 $result = mysql_query($sql_query);
 $fields_cnt = mysql_num_fields($result);

$schema_insert = '';

for ($i = 0; $i < $fields_cnt; $i++)
 {
     $l = $csv_enclosed . str_replace($csv_enclosed, $csv_escaped . $csv_enclosed,
 stripslashes(mysql_field_name($result, $i))) . $csv_enclosed;
     $schema_insert .= $l;
     $schema_insert .= $csv_separator;
 } // fin for

$out = trim(substr($schema_insert, 0, -1));
 $out .= $csv_terminated;

// Format des données
 while ($row = mysql_fetch_array($result))
 {
     $schema_insert = '';
     for ($j = 0; $j < $fields_cnt; $j++)
     {
 if ($row[$j] == '0' || $row[$j] != '')
 {

    if ($csv_enclosed == '')
     {
 $schema_insert .= $row[$j];
     } else
     {
 $schema_insert .= $csv_enclosed .
     str_replace($csv_enclosed, $csv_escaped . $csv_enclosed, $row[$j]) . $csv_enclosed;
     }
 } else
 {
     $schema_insert .= '';
 }

if ($j < $fields_cnt - 1)
 {
     $schema_insert .= $csv_separator;
 }
     } // fin for

    $out .= $schema_insert;
     $out .= $csv_terminated;
 } // fin while

// Envoie au fureteur pour le téléchargement
 header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
 header("Content-Length: " . strlen($out));
 header("Content-type: text/x-csv");
 header("Content-Disposition: attachment; filename=" . $nom_fichier);
 readfile($file); 
unlink($file);
  
?> 
	<a href="download.php">Télécharger !</a>
<?php
 
 }
?>






      	
<hr/>
	<?php 
	include ("footer.php"); /* footer */
	?>
<!-- appel du ficier JS externe-->	
	<script src="js/contact.js" type="text/javascript"></script>
	<script src="js/captcha.js" type="text/javascript"></script>
    <script type="text/javascript">window.onload=randomNums();</script>

		
  </body>
</html>