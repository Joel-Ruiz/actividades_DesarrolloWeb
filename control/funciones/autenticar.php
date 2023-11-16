<?php
include_once("../config.inc.php");
include_once("acceder_base_datos.php");

if ( isset($_POST["btnEnviar"]) && $_POST["btnEnviar"]=="Enviar"){
	
  //echo "se presiono el bot&oacute;n Enviar";	
  $curl = "Location:".$GLOBALS["raiz_sitio"]."index.php";
  $adatos = array();
  $pconexion = abrirConexion();	
  seleccionarBaseDatos($pconexion);
  
  $usuario = $_POST["txtUsuario"];
  $contrasena = $_POST["txtClave"];
  
  $cquery = "SELECT id_usuario FROM usuarios"; 
  $cquery .= " WHERE (usuario='$usuario')"; 
  $cquery .= " AND (contrasena='$contrasena')";
  
  
  $adatos = extraerRegistro($pconexion, $cquery);
  if (!empty($adatos)){
	$cidsesion = $adatos["id_usuario"].$usuario;
	session_start();
	$_SESSION["cidusuario"]=$cidsesion;
	$curl = "Location:".$GLOBALS["raiz_sitio"]."productos.php";
  }
  
  cerrarConexion($pconexion);
  //echo $curl;
  header($curl);
  exit();	
}
?> 