
</div>
		</div>
	</div>

	
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="background:#F9F3F3;">

	
	
			<div class="panel-heading">
				<h1 class="panel-title" style="color:red;"><b><center>MENU</center></b></h1>
			</div>
			
<ul class='nav nav-pills nav-stacked' style="cursor:pointer;">
	
	<!--
	
	<li><a href='/Sistemas_2/Index.php/inicio'><span class='glyphicon glyphicon-home'></span> Inicio</a></li>
	<li><a href='/Sistemas_2/Index.php/listarprodcuerda'><span class='glyphicon glyphicon-tasks'></span> Productos</a></li>
	<li><a href='/Sistemas_2/Index.php/configuracion_cuenta'><span class='glyphicon glyphicon-cog'></span> Configuracion de Cuenta</a></li>
	<li><a href='/Sistemas_2/Index.php/cerrar_sesion'><span class='glyphicon glyphicon-log-out'> Salir</a></li>
	
	-->
	
	
	
	
	<li>
		<a><span class='glyphicon glyphicon-list-alt'></span> Nosotros</a>
		<ul >
			<?php 
				if($_SESSION["cargo"]==1){
					echo "<li><a href='../nosotros'><span class='glyphicon glyphicon-usd'></span>Mision</a></li>";
					}
					?>
			<li>
                <a href="../nosotros/vision.php"><span class='glyphicon glyphicon-shopping-cart'></span> Vision</a></li>
			<?php 
				if($_SESSION["cargo"]==1)
					echo "<li><a href='../compra/comprar.php'><span class='glyphicon glyphicon-plus-sign'></span> Nuevo</a></li><li><a href='../movimiento/consultar.php'><span class='glyphicon glyphicon-search'></span> Buscar</a></li>";?>
			
		</li>
			<?php
				if($_SESSION["cargo"]==1)
					echo "<li><a href='../columnario'><span class='glyphicon glyphicon-align-justify'></span> Listar</a></li>";?>
		</ul>
		
				<?php
					if($_SESSION["cargo"]==1){
						echo "
		<li>
			<a><span class='glyphicon glyphicon-list'></span> PUC</a>
			<ul><li><a href='../puc'><span class='glyphicon glyphicon-plus-sign'></span> Nuevo</a></li>";
						echo "<li><a href='../verpuc/consultar.php'><span class='glyphicon glyphicon-search'></span> Buscar</a></li>
				</ul>	
			</li>";}?>
				
		<?php 
			if($_SESSION["cargo"]==1){
				echo "<li><a><span class='glyphicon glyphicon-shopping-cart'></span> Inventario</a><ul>";
				echo "<li><a href='../inventario'><span class='glyphicon glyphicon-plus-sign'></span> Nuevo Producto</a></li>";
				echo "<li><a href='../inventario/kardex.php'><span class='glyphicon glyphicon-list'></span> Generar Kardex</a></li></ul></li>";}?>
		<?php
			if($_SESSION["cargo"]==1){
				echo "<li><a><span class='glyphicon glyphicon-user'></span> Usuarios</a><ul>";
				echo "<li><a href='../usuario'><span class='glyphicon glyphicon-plus-sign'></span> Nuevo</a></li>";
				echo "<li><a href='../usuario/listar.php'><span class='glyphicon glyphicon-align-justify'></span> Listar</a></li>";
				echo "<li><a href='../nomina'><span class='glyphicon glyphicon-list'></span>Generar Nomina</a></li>";
				echo "</ul></li>";}?>
		<?php
			if($_SESSION["cargo"]==1){
				echo "<li><a><span class='glyphicon glyphicon-list-alt'></span> Balances</a><ul>";
				echo "<li><a href='../balance'><span class='glyphicon glyphicon-plus-sign'></span> Balance Ajustado</a></li>";
				echo "<li><a href='../balance/general.php'><span class='glyphicon glyphicon-plus-sign'></span> Balance General</a></li>";
				echo "<li><a href='../balance/estadoresultado.php'><span class='glyphicon glyphicon-plus-sign'></span> Estado de Resultado</a></li></ul>";}/*?>
		<?php
			if($_SESSION["cargo"]==1){
				echo "<li><a>Activos</a></li><ul>";
				echo "<li><a href='../activos'>Registrar</a></li>";
				echo "<li><a href='../activos/depreciacion.php'>Depreciación</a></li></ul>";}?>
			<?php*/
				if($_SESSION["cargo"]==1)
					echo "<li><a href='../arqueocaja'>Arqueo de Caja</a></li>";
					?>

		<li>
			<a href="../configuracion/salir.php"><span class='glyphicon glyphicon-remove-circle'></span> Salir</a>
		</li>
	
	
</ul>
	
</div>
</div>
	</div>
	
	