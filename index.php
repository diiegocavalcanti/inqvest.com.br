<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <?php include("inc/head.inc.php") ?>
    <title>InQvest</title>
</head>
<body>

	<?php include("inc/header.inc.php"); ?>

	<?php

		if(isset($_GET["url"])){

			if($_GET["url"] == "home"){
				include("inc/home.inc.php");
			}
			if($_GET["url"] == "teste-conhecimento"){
				include("inc/teste-conhecimento.inc.php");
			}
			if($_GET["url"] == "duelos"){
				include("inc/duelos.inc.php");
			}
			if($_GET["url"] == "desafios"){
				include("inc/desafios.inc.php");
			}
			if($_GET["url"] == "planos"){
				include("inc/planos.inc.php");
			}
			if($_GET["url"] == "noticias"){
				include("inc/noticias.inc.php");
			}


		} else{
			include("inc/home.inc.php");
		}

	?>

	<?php include("inc/footer.inc.php"); ?>

</body>
</html>

