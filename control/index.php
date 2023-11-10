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
         <td bgcolor="#BAB8CE"><span id="seccion">Iniciar sesi&oacute;n</span></td>
      </tr>
      <tr>
         <td colspan="3" bgcolor="#BAB8CE" class="menu"><a href="#" class="menu">Inicio</a> - <a href="#" class="menu">Noticias</a> - <a href="#" class="menu">Cerrar</a></td>
      </tr>
      <tr>
         <td colspan="3" background="imagenes/linea.gif" height="4"></td>
      </tr>
   </table>
   <form name="frmAutenticar" action="./funciones/autenticar.php" method="post">
      <br>
      <br>
      <table align="center" style="border: solid thin #060">
         <tr>
            <td>
               <table>
                  <tr>
                     <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                     <td>Usuario:</td>
                     <td><input type="text" name="txtUsuario" id="txtUsuario"></td>
                  </tr>
                  <tr>
                     <td>Contrase&ntilde;a:</td>
                     <td><input type="password" name="txtClave" id="txtClave"></td>
                  </tr>
                  <tr>
                     <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                     <td align="right" colspan="2">
                        <input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar">&nbsp;&nbsp;&nbsp;
                        <input type="button" name="btnCancelar" id="btnCancelar" value="Cancelar">
                     </td>
                  </tr>
                  <tr>
                     <td colspan="2">&nbsp;</td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
   </form>
</body>
</html>