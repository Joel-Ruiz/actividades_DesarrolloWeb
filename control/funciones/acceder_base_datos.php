<?php
function abrirConexion(){
    $pconector = mysqli_connect($GLOBALS["servidor"],$GLOBALS["usuario"],$GLOBALS["contrasena"])or die(mysqli_connect_error());
    return $pconector;
}

function seleccionarBaseDatos($pconector){
    mysqli_select_db($pconector, $GLOBALS["base_datos"]) or die(mysqli_connect_error($pconector)); 
}

function cerrarConexion($pconector){
    mysqli_close($pconector);
}

function existeRegistro($pconector, $cquery){
    $lexiste_referencia = true;
    $lresult = mysqli_query($pconector, $cquery);

    if(!$lresult){
        $cerror = "No fue posible recuperar la informaci&oacute;n de la base de datos. <br>";
        $cerror .= "SQL: $cquery <br>";
        $cerror .= "Descripci&oacute;n de error: ".mysqli_connec_error($pconector);
        die($cerror);
    }else{
        if(mysqli_num_rows($lresult) == 0){
            $lexiste_referencia = false;
        }
    }

    mysqli_free_result($lresult);

    return $lexiste_referencia;
}

function insertarDatos($pconector, $cquery){
    $lentrada_creada = false;
    $lresult = mysqli_query($pconector, $cquery);

    if(!$lresult){
        $cerror = "Ocurri&oacute; un error al acceder a la base de datos. <br>";
        $cerror .= "SQL: $cquery <br>";
        $cerror .= "Descripci&oacute;n de error: ".mysqli_connec_error($pconector);
        die($cerror);
    }else{
        if(mysqli_affected_rows($pconector) > 0){
            $lentrada_creada = true;
        }
    }

    return $lentrada_creada;
}

function extraerRegistro($pconector, $cquery){
    $aregistro = array();
    $lresult = mysqli_query($pconector, $cquery);
    if(!$lresult){
        $cerror = "No fue posible recuperar la informaci&oacute;n de la base de datos.<br>";
        $cerror .=  "SQL: $cquery <br>";
        $cerror .= "Descripci&oacute;n: ".mysqli_connect_error($pconector);
        die($cerror);
    }else{
        if(mysiqli_num_rows($lresult) > 0){
            $aregistro = mysqli_fetch_array($lresult);
        }
    }
    mysqli_free_result($lresult);
    reset($aregistro);

    return $aregistro;
}

function editarDatos($pconector, $cquery){
    $ledicion_completada = false;
    $lresult =  mysqli_query($pconector, $cquery);

    if(!$lresult){
        $cerror = "No fue posible recuperar la informaci&oacute;n de la base de datos.<br>";
        $cerror .=  "SQL: $cquery <br>";
        $cerror .= "Descripci&oacute;n: ".mysqli_connect_error($pconector);
        die($cerror);
    }else{
        $ledicion_completada = true;
    }

    return $ledicion_completada;
}

function borrarDatos($pconector, $cquery){
    $laccion_completada = false;
    $lresult = mysqli_query($pconector, $cquery);;

    if(!$lresult){
        $cerror = "No fue posible recuperar la informaci&oacute;n de la base de datos.<br>";
        $cerror .=  "SQL: $cquery <br>";
        $cerror .= "Descripci&oacute;n: ".mysqli_connect_error($pconector);
        die($cerror);
    }else{
        $laccion_completada = true;
    }

    return $laccion_completada;
}


?>