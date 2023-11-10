<?php
/*include_once("config.inc.php"); 
include_once("./funciones/acceder_base_datos.php");
include_once("./funciones/listar.php");*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <title>Sistema de control</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="estilos/general.css" type="text/css">   
</head>
<body>
   <table width="100%" cellpadding="0" cellspacing="0">
      <tr>
         <td width="432"><img src="imagenes/diseno_01.gif" align="middle" width="432" height="123"></td>
         <td width="45"><img src="imagenes/diseno_02.gif" align="middle" width="45" height="123"></td>
         <td width="100%" background="imagenes/diseno_03.gif">&nbsp;</td>
      </tr>
      <tr>
         <td><img src="imagenes/diseno_04.gif" align="middle" width="432" height="30"></td>
         <td><img src="imagenes/diseno_05.gif" align="middle" width="45" height="30"></td>
         <td bgcolor="#BAB8CE"><span id="seccion">Productos</span></td>
      </tr>
      <tr>
         <td colspan="3" bgcolor="#BAB8CE" class="menu"> <a href="productos.php" class="menu">Inicio</a> - <a href="javascript:;" class="menu">Avisos</a> - <a href="javascript:;" class="menu">Usuarios</a> - <a href="productos.php" class="menu">Productos</a> - <a href="javascript:;" class="menu">Cerrar</a></td>
      </tr>
      <tr>
         <td colspan="3" background="imagenes/linea.gif" height="4"></td>
      </tr>
   </table>
   <p align="center"><strong>Listado de productos</strong></p>
   <p>&nbsp;</p>
   <table border="0" align="center">
      <tr>
         <th>Clave del Producto</th>
	       <th width=\"10\">&nbsp;</th>
         <th>Descripci&oacute;n</th>
	       <th width=\"10\">&nbsp;</th>
         <th>Precio</th>
	       <th width=\"10\">&nbsp;</th>
         <th>Cantidad</th>
	       <th width=\"10\">&nbsp;</th>
         <th>Proveedor</th>
	       <th width=\"10\">&nbsp;</th>	
	       <th width=\"10\">&nbsp;</th>
      </tr>
      <?php 
         //echo listarProductos();  
      ?>
   </table>
</body>
</html>