<?php
include_once("../config.inc.php");
include_once("acceder_base_datos.php");

if (isset($_POST["btnEnviar"]) && $_POST["btnEnviar"]=="Enviar") {
    $curl ="Location:".$GLOBALS["raiz_sitio"]."index.php";
    $adatos = array();
    $pconexion = abrirConexion();
    seleccionarBaseDatos($pconexion);

    $usuario = $_POST["txtUsuario"];
    $contrasena = $_POST["txtClave"];

    $cquery = "SELECT id_usuario FROM usuario";
    $cquery .= "WHERE (usuarios = ´$contrasena´)";
    $cquery .= "AND (contrasena=´$contrasena´)";

    $adatos = estraerRegistro($pconexion, $cquery);
    if(!empty($adatos)){
        $cidsesion = $adatos["id_usuario"].$usuario;
        session_start();
        $_SESSION["cidusuario"]=$cidusuario;
        $curl = "Location:".$GLOBALS["raiz_sitio"]."productos.php";
    }

    cerrarConexion($pconexion);
    header($curl);
    exit();

}
?>