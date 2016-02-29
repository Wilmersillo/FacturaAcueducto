<?php
	include("conexion.php");//se incluye la clase conexion
	$consulta="select * from empleado where cod='".$_POST['user']."' and pass='".md5($_POST['pass'])."'";//realizamos una consulta al servidor
	$resultado_consulta=mysql_query($consulta,$con);//la ejecutamos
	if(mysql_num_rows($resultado_consulta)==0)header('Location: ../login/index.php?v=nok');
	else{
		$row=mysql_fetch_array($resultado_consulta);
		session_start();
		$_SESSION['cod']=$row['cod'];
		$_SESSION['nom']=$row['nom'];
		$_SESSION['ape']=$row['ape'];
		$_SESSION['cargo']=$row['acceso'];
		header('Location: ../index.php');}
	?>