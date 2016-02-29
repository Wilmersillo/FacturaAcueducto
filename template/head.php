
<?php
	session_start();
	if(empty($_SESSION["cod"]))header('Location: ../login/index.php');

header('Content-Type: text/html; charset=UTF-8'); 

	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<meta charset="UTF-8">
<head>
    <link rel="shortcut icon" href="/FacturaAcueducto/template/images/ico.png"> 
	<!--
    Created by Artisteer v3.1.0.48375
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" style="#72EA10;" />
    <title>Empresa De Acueducto</title>
	
	<style type="text/css">
	body {
		background-image:url(/FacturaAcueducto/Imagenes/fondo1.jpg);
		
	}
	</style>

    <link rel="stylesheet" href="/FacturaAcueducto/template/style.css" type="text/css" media="screen" />


    <!--[if IE 6]><link rel="stylesheet" href="/llantaStore/template/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="/llantaStore/template/style.ie7.css" type="text/css" media="screen" /><![endif]-->
	<link href="/FacturaAcueducto/bootstrap-3.2.0-dist/css/bootstrap.css" rel="stylesheet">
	<script language="javascript" type="text/javascript" src="/FacturaAcueducto/javascript/Javascript_Usuario.js"></script>
	<script src="/FacturaAcueducto/bootstrap-3.2.0-dist/js/jquery-1.11.1.js"></script>
	<script src="/FacturaAcueducto/bootstrap-3.2.0-dist/js/bootstrap.min.js"></script>
	
    <script type="text/javascript" src="/FacturaAcueducto/template/jquery.js"></script>
    <script type="text/javascript" src="/FacturaAcueducto/template/script.js"></script>
	
<script type="text/javascript">
    function format(input)
    {
		var num = input.value.replace(/\./g,'');
		if(!isNaN(num))
		{
			num = num.toString().split('').reverse().join('').replace(/(?=\d*\.?)(\d{3})/g,'$1.');
			num = num.split('').reverse().join('').replace(/^[\.]/,'');
			input.value = num;
		}

		else{ alert('Solo se permiten numeros');
		input.value = input.value.replace(/[^\d\.]*/g,'');
		}
    }
</script>

</head>
<body>
	<header class="img-responsive" role="banner">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="test">
				<iframe src="/FacturaAcueducto/Imagenes/baner/index.html" style="width:100%;height:150px;max-width:100%;overflow:hidden;border:none;padding:0;margin:0 auto;display:block;" marginheight="0" marginwidth="0"></iframe>
				
			</div>
		</div>
	</header>
	
	
	
	<nav class='navbar navbar-inverse' role='navigation'>
	<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'><!--
		<a class='navbar-brand' href='/Sistemas_2/Index.php/inicio'><span class='glyphicon glyphicon-home'></span></a>
		<ul class='nav navbar-nav'>
			<li><a href='/Sistemas_2/Index.php/listarprodcuerda'><span class='glyphicon glyphicon-tasks'></span> Productos</a></li>
			<li class='dropdown'>
				<a href='#' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-bookmark'></span> Nosotros<span class='caret'></span></a>
				<ul class='dropdown-menu' role='menu'>
					<li><a href='/Sistemas_2/Index.php/mision'><span class='glyphicon glyphicon-bookmark'></span></span> Mision</a></li>
					<li><a href='/Sistemas_2/Index.php/vision'><span class='glyphicon glyphicon-bookmark'></span></span> Vision</a></li>
				</ul>
			</li>
		</ul>
		<ul class='nav navbar-nav navbar-right'>
      		<li><a href='/Sistemas_2/Index.php/iniciar_sesion'><span class='glyphicon glyphicon-log-in'></span> Ingresar</a></li>
    	</ul>-->
		<h1>Bienvenido a Su Empresa De Acueducto</h1>
	</div>
</nav>
	
	
	
<div class="row" >
	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

	<div class="panel panel-primary">
			<div class="panel-heading">
				<h1 class="panel-title"><b><center>
			
	
	
	
	
	
	
	
	
<div id="art-main">
    <div class="cleared reset-box"></div>
    <div class="art-header">
        <div class="art-header-position">
            <div class="art-header-wrapper">
                <div class="cleared reset-box"></div>
                <div class="art-header-inner">
                <div class="art-headerobject"></div>
                <div class="art-logo">
                                 <h1 class="art-logo-name"><a href="./index.html">CUIDA EL AMBIENTE</a></h1>
                                                 <h2 class="art-logo-text">'RECUERDA QUE SIN AGUA NO HAY VIDA' AHORRA  </h2>
                                </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="cleared reset-box"></div>
    <div class="art-box art-sheet">
        <div class="art-box-body art-sheet-body">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content">
<div class="art-box art-post">
    <div class="art-box-body art-post-body">
<div class="art-post-inner art-article">
                                <h2 class="art-postheader"><!---->