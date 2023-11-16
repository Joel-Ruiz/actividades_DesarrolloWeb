<?php
    function listarProovedores(){
        $copciones = "";
        $pconexion = abrirConexion();
        seleccionarBaseDatos($pconexion);

        $cquery = "SELECT * FROM proveedores";
        $cquery .= " ORDER BY nombre ASC";

        $lresult = mysqli_query($pconexion, $cquery);
        
        if($lresult){
            if(mysqli_num_rows($lresult > 0)){
                if(!$_POST["cmb_idproveedor"] || !isset($_POST["cmb_idproovedor"]) || $_POST["cmb_idproveedor"]=="0"){
                    while($adatos = mysqli_fetch_array($lresult)){
                        $copciones .= "<option value=\"".$adatos["id_proveedor"]"\">";
                        $copciones .= $adatos["nombre"];
                        $copciones .= "</option>\n";
                    }
                }else{
                    while($adatos = mysqli_fetch_array($lresult)){
                        if($_POST["cmb_idproveedor"] == $adatos["id_proveedor"]){
                            $copciones .= "<option value=\"".$adatos["id_proveedor"]."\"selected>";
                        }else{
                            $copciones .= "<option value=\"".$adatos["id_proveedor"]."\">";
                        }
                        $copciones .= $adatos["nombre"];
                        $copciones .= "</option>\n";
                    }
                }
            }
        }

        mysqli_free_result($lresult)
        cerrarConexion($pconexion);
        return $copciones;
    }

    function agregarProducto(){
        $cmensaje = "";
        if(isset($_POST["btn_agregar"]) && $_POST["btn_grabar"] == "Grabar"){
            $cdescripcion = $_POST["txt_descripcion"];
            $iprecio = $_POST["txt_precio"];
            $icantidad = $_POST["txt_cantidad"];
            $cid_proveedor = $_POST["cmb_idproveedor"];

            $cnombre_imagen = "sin imagen asociada";

            if(is_uploaded_file($_FILES["fl_imagen"]["tmp_name"])){
                $cnombre_imagen = $_FILES["fl_imagen"]["name"];
            }

            $pconexion = abrirConexion();
            seleccionarBaseDatos($pconexion);

            $cquery = "SELECT descripcion FROM productos";
            $cquery .= " WHERE descripcion = '$cdescripcion'";

            if(!existeRegistro($pconexion, $cquery)){
                $cquery = "INSERT INTO productos";
                $cquery .= " (descripcion, imagen, precio, cantidad, id_proveedores)";
                $cquery .= " VALUES ('$cdescripcion', '$cnombre_imagen', '$iprecio','$icantidad', '$cid_proveedor')";
                if(insertarDatos($pconexion, $cquery)){
                    $cmensaje = "Producto registrado";
                }else{
                    $cmensaje = "No fue posible registrar el producto en el cat&aacute;logo";
                }
            }else{
                $cmensaje = "Ya existe un producto con el nombre: $cdescripcion";
            }
            cerrarConexion($pconexion);
        }

        return $cmensaje;
    }

    function recuperarInfoProducto($cid_producto){
        $adatos = array();

        $pconexion = abrirConexion();
        seleccionarBaseDatos($pconexion);

        $cquery = "SELECT id_producto, descripcion, precio, cantidad FROM productos";
        $cquery .= " WHERE (id_producto = $cid_producto)";

        $adatos = extraerRegistro($pconexion, $cquery);
        cerrarConexion($pconexion);

        return $adatos;
    }
?>