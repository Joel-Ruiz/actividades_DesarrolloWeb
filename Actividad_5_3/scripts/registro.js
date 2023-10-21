function verInformacion() {
    let i;
    let ocupacion = "";
    let pasatiempos = "";

    const nombre = document.getElementById('txtNombre');
    const edad = document.getElementById('txtEdad');
    const estado = document.getElementById('cmbEstado');
    const aOcupacion = document.getElementsByName('rdOcupacion');
    const aPasatiempos = document.getElementsByName('chkPasatiempo');
    
    for (i = 0; i < aOcupacion.length; i++) {
        if (aOcupacion[i].checked) {
            ocupacion = aOcupacion[i].value;
            i = aOcupacion.length;
        }
    }

    for (i = 0; i < aPasatiempos.length; i++) {
        if (aPasatiempos[i].checked) {
            pasatiempos += aPasatiempos[i].value + "";
        }
    }

    const ventana = window.open("", "vtnInformacion", "width=300,height=200");

    ventana.document.open();
    ventana.document.writeln("Nombre: " + nombre.value.toUpperCase() + "<br>");
    ventana.document.writeln("Edad: " + edad.value + "<br>");
    ventana.document.writeln("Estado civil: " + estado.options[estado.selectedIndex].text + "<br>");
    ventana.document.writeln("Ocupacion: " + ocupacion + "<br>");
    ventana.document.writeln("Pasatiempos: " + pasatiempos + "<br>");
    ventana.document.close();
    ventana.focus();
}

window.onload = function () {
    
    document.getElementById('btnEnviar').onclick = verInformacion;
}