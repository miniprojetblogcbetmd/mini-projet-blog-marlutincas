<?php
function affichage($title, $style, $content)
{?>
    <head>
    <meta http-equiv="content-type" content="text:html" charset="utf8"/>
    <link href="<?php echo $style ?>" rel ="stylesheet" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="img/fav-noir-blanc.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="img/fav-noir-blanc.ico" /><!--pour IE-->
	<meta name="description" content="<?php echo $content ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <title><?php echo $title ?></title>	
  </head>
	<?php
	} ?>