function mostrar_ventana(imagen,descripcion){
    let ventana = window.open("","ventana","width=500 heigth=440 scrollbars=true");
    ventana.document.open();
    ventana.document.write("<html><head><title>Ampliar... </title><link  href=\"estilos.css\" rel=\"stylesheet\" type=\"text/css\"></head><body>");
    ventana.document.write("<table align=\"center\"><tr><td><img src=\"" + imagen +"\"> ");
    ventana.document.write("");
    ventana.document.close();
    ventana.focus();
}

function producto(descripcion,imagen_chica,imagen_grande){
    this.descripcion = descripcion;
    this.imagen_chica = imagen_chica;
    this.imagen_grande = imagen_grande;
    this.mostrar_celda = this.mostrar_celda;
}

function mostrar_celda(){
    let cuadro_imagen = "";
    const correo="ventas@ajuaresprimor.com";

    if(this.descripcion != ""){
        cuadro_imagen = "<td>";
        cuadro_imagen += "<a href=\"javascrpt:mostrar_ventana('" + this.imagen_chica + " ', '" + this.descripcion + " ')\">";
        cuadro_imagen += "<img src=\"" + this.imagen_chica + "\" border =\"0\"></a>";
        cuadro_imagen += "</td>";
        cuadro_imagen += "<td>";
        cuadro_imagen += "<p class=\"pequeno\">" + this.descripcion + "<br>";
        cuadro_imagen += "<a href=\"javascrpt:mostrar_ventana('" + this.imagen_chica + " ', '" + this.descripcion + " ')\" title=\"Ampliar imagen\">[+]</a></b>";
        cuadro_imagen += "<a href\"mailto:" + correo + "?subject=solicitud de informaci&oacute;n\" title=\"M&aacute;s informaci&oacute;n\">[?]</a></b>";
        cuadro_imagen += "</p></td>";
    }
    else{
        cuadro_imagen = "<td>&nsbp;</td><td>&nsbp;</td>";
    }
    return cuadro_imagen;
}

let Bautizo = new Array();
Bautizo[0] = new producto("Ajuar bautizo<br>Modelo 200","minuatura/miniatura01.jpg");
Bautizo[1] = new producto("Ajuar bautizo<br>Modelo 201","minuatura/miniatura02.jpg");
Bautizo[2] = new producto("Ajuar bautizo<br>Modelo 202","minuatura/miniatura03.jpg");
Bautizo[3] = new producto("Ajuar bautizo<br>Modelo 203","minuatura/miniatura04.jpg");
Bautizo[4] = new producto("Ajuar bautizo<br>Modelo 204","minuatura/miniatura05.jpg");
Bautizo[5] = new producto("","","");

function listar_catalogo(){
    
    let tabla_productos = "";

    tabla_productos = "<table border=\"0\" align=\"center\" cellspacing=\"20\">";
    for(i = 0; i<Bautizo.length;i=i+2){
        tabla_productos += "<tr>";
        tabla_productos += Bautizo[i].mostrar_celda();
        tabla_productos += "<td width=\"20\">&nbsp;</td>";
        tabla_productos += Bautizo[i+1].mostrar_celda();
        tabla_productos += "</tr>";
    }
    tabla_productos += "</table>";

    return tabla_productos;
}

window.addEventListener("load", function(){
    document.getElementById("catalogo").innerHTML = listar_catalogo();
})

/*window.onload = function(){
    document.getElementById("catalogo").innerHTML = listar_catalogo();
}*/
