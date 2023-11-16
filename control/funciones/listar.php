<?php 
function listarProductos(){
 
 $ccontenido = "";
 //Conexión con el servidor de base de datos
 $pconexion = abrirConexion();
 //Selección de la base de datos
 seleccionarBaseDatos($pconexion);
 //Construcción de la sentencia SQL
 $cquery = "SELECT productos.id_producto AS Id_Producto, productos.descripcion AS Descripcion,";
 $cquery .= " productos.precio AS Precio, productos.cantidad AS Cantidad,";
 $cquery .= " proveedores.nombre AS Nombre";
 $cquery .= " FROM productos, proveedores";
 $cquery .= " WHERE (productos.id_proveedor=proveedores.id_proveedor)"; 
  
 //Se ejecuta la sentencia SQL
 $lresult = mysqli_query($pconexion, $cquery); 
	 
 if (!$lresult) {
   $cerror = "No fue posible recuperar la informaci&oacute;n de la base de datos.<br>";
   $cerror .= "SQL: $cquery <br>";
   $cerror .= "Descripci&oacute;n: ".mysqli_connect_error($pconexion);
   die($cerror);
 } 
 else{ 
   //Verifica que la consulta haya devuelto por lo menos un registro
   if (mysqli_num_rows($lresult) > 0){
  	 //Recorre los registros arrojados por la consulta SQL
	 while ($adatos = mysqli_fetch_array($lresult, MYSQLI_BOTH)){
       $cid_producto = $adatos["Id_Producto"]; //**
	   $ccontenido .= "<tr>";
	   $ccontenido .= "<td align=\"center\">".$adatos["Id_Producto"]."</td>";
	   $ccontenido .= "<td width=\"10\">&nbsp;</td>";	
	   $ccontenido .= "<td><a href=\"edicion_productos.php?cid_producto=$cid_producto\">".$adatos["Descripcion"]."</a></td>"; //**
	   $ccontenido .= "<td width=\"10\">&nbsp;</td>";
	   $ccontenido .= "<td>\$".$adatos["Precio"]."</td>";
	   $ccontenido .= "<td width=\"10\">&nbsp;</td>";
	   $ccontenido .= "<td align=\"center\">".$adatos["Cantidad"]."</td>";
	   $ccontenido .= "<td width=\"10\">&nbsp;</td>";
	   $ccontenido .= "<td>".$adatos["Nombre"]."</td>";
	   $ccontenido .= "<td width=\"10\">&nbsp;</td>"; //***
	   $ccontenido .= "<td><a href=\"funciones/borrar.php?cid_producto=$cid_producto\">"; //***
	   $ccontenido .= "<img src=\"imagenes/borrar.gif\" border=\"0\" alt=\"Eliminar producto\"></a></td>";
	   $ccontenido .= "</tr>";	
	 }   
   }	 
 }	 
 
 mysqli_free_result($lresult); 
 
 if ( empty($ccontenido) ){
   $ccontenido .= "<tr>";
   $ccontenido .= "<td colspan=\"11\">No se obtuvieron resultados</td>";		
   $ccontenido .= "</tr>";
 }
 
 cerrarConexion($pconexion); 
 return $ccontenido; 
}
?>