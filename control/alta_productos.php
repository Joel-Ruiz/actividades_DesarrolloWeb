<?php
include_once("config.inc.php"); 
include_once("./funciones/acceder_base_datos.php");
include_once("./funciones/administrar_productos.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
   <title>Sistema de control</title>  
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="estilos/general.css"  type="text/css"> 
</head>
<body>
   <table width="100%" cellpadding="0" cellspacing="0" >
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
         <td colspan="3" bgcolor="#BAB8CE" class="menu"> <a href="javascript:;" class="menu">Inicio</a> - <a href="javascript:;" class="menu">Noticias</a> - <a href="javascript:;" class="menu">Usuarios</a> - <a href="productos.php" class="menu">Productos</a> - <a href="javascript:;" class="menu">Cerrar</a></td>
      </tr>
      <tr>
         <td colspan="3" background="imagenes/linea.gif" height="4"></td>
      </tr>
   </table>
   <p class="titulo">Agregar Producto </p>
   <form name="frm_agregar" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
      <p align="center" class="estado"><?php echo agregarProducto(); ?></p>
      <table align="center">
         <tr>
            <td>Descripci&oacute;n del producto:</td>
         </tr>
         <tr>
            <td><input type="text" name="txt_descripcion" id="txt_descripcion" size="40" value="<?php echo (isset($_POST["txt_descripcion"]))?$_POST["txt_descripcion"]:""; ?>"></td>
         </tr>
         <tr>
            <td>Imagen asociada:</td>
         </tr>
         <tr>
            <td><input type="file" name="fl_imagen" accept="image/*"></td>
         </tr>
         <tr>
            <td>Precio:</td>
         </tr>
         <tr>
            <td><input type="text" name="txt_precio" id="txt_precio" size="15" value="<?php echo (isset($_POST["txt_precio"]))?$_POST["txt_precio"]:""; ?>"></td>
         </tr>
         <tr>
            <td>Cantidad:</td>
         </tr>
         <tr>
            <td><input type="text" name="txt_cantidad" id="txt_cantidad" size="15" value="<?php echo (isset($_POST["txt_cantidad"]))?$_POST["txt_cantidad"]:""; ?>"></td>
         </tr>
         <tr>
            <td>Proveedor:</td>
         </tr>
         <tr>
            <td>
	             <select name="cmb_idproveedor" id="cmb_idproveedor">
		              <option value="0"></option>
                  <?php echo listarProveedores(); ?>
               </select>
	          </td>
         </tr>
         <tr>
            <td align="right">&nbsp;</td>
         </tr>
         <tr>
            <td align="right"><input type="submit" name="btn_grabar" id="btn_grabar" value="Grabar"></td>
         </tr>
      </table>
   </form>
   <p>&nbsp;</p>
</body>
</html>