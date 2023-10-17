function calcularSuma(){
    const x = parseInt(document.getElementById('campo1').value);
    const y = parseInt(document.getElementById('campo2').value);
    const resultado = document.getElementById('resultado');
    console.log(x + y);
    resultado.value = x + y;
}