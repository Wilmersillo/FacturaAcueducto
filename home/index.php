<?php
	include("../template/head.php");
	echo "Bienvenido ".$_SESSION['nom']." ".$_SESSION['ape'];
	include("../template/contenido.php");
	include("../template/footer.php");?>