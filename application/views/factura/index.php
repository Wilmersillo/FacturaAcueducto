

<form action="../configuracion/nfactura.php" method="post"><!--llevo datos a n factura-->
<div class="container"><!--trae menu-->
 
   <table class="art-article" border="0" cellspacing="0" cellpadding="0" style="width: 50%;">
   <tbody>


     <h4>Fecha Recibido:</h4>
     <input name="fech_actual" type="date" required/>
    


       <tr><td> Nro </td> <td><input  name="nro_factura" placeholder="Factura"  type="number" /></td></tr>  
<tr><td> Consumo: </td> <td><input name="consumo" placeholder="Consumo"  type="number" />mts3</td></tr>  
          

       <tr>
                  <td>Codigo Cliente:</td><td>
                  <input name="cod_cliente" placeholder="Codigo"  type="text" />
          <!--          <select name="cliente" class='form-control'>
                <?php   /* 
                      include("../configuracion/conexion.php");//se incluye la clase conexion
                      $consulta="select * from cliente";//realizamos una consulta al servidor
                      $resultado_consulta=mysql_query($consulta,$con);//la ejecutamos
                      while($row=mysql_fetch_array($resultado_consulta)){//se guardan los datos en un arreglo
                        echo "<option>";
                        echo $row['cod_cliente'];//se imprimen los resultados
                        echo "</option>";}
                        */
                        ?>
                    </select></td></tr>-->
    
         </tbody></table><br />
        
        <tr><input type="submit" class="btn btn-success" value="Registrar"/></tr>

   
    </form>
    </div>
    </div><!-- /.container -->