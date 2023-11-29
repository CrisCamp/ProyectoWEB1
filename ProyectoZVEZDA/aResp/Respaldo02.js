let mouse;
let dislexia;
let numero;

function actualizarEstilo(cambio) {
    var body = document.body;

    if (cambio === 'cursor') {
        //mouse = !mouse;
        body.classList.toggle('cursor-grande', mouse);
        body.classList.toggle('cursor-pequeno', !mouse);
    } else if (cambio === 'fuente') {
        //dislexia = !dislexia;
        var elementos = document.getElementsByClassName('contenido-texto');
        if (dislexia) {
            for (var i = 0; i < elementos.length; i++) {
                elementos[i].classList.add('fuente-dislexia');
            }
            document.getElementById('navb').classList.add('fuente-dislexia');
        } else {
            for (var i = 0; i < elementos.length; i++) {
                elementos[i].classList.remove('fuente-dislexia');
            }
            document.getElementById('navb').classList.remove('fuente-dislexia');
        }
    }
}

function cambiarTamanoTexto(tamano, num) {
    var elementos = document.getElementsByClassName('contenido-texto');

    for (var i = 0; i < elementos.length; i++) {
        elementos[i].classList.remove('texto-pequeno', 'texto-mediano', 'texto-grande');
        elementos[i].classList.add(tamano);
    }
    document.getElementById('navb').classList.remove('texto-pequeno', 'texto-mediano', 'texto-grande');
    document.getElementById('navb').classList.add(tamano);

    numero = num;
    guardarPreferencias();
}

function VistaAnterior() {
    // Usa las variables mouse, dislexia y numero aquí ...
    console.log('Estado actual de mouse:', mouse);
    console.log('Estado actual de dislexia:', dislexia);
    console.log('Número actual:', numero);

    // Llama a la función actualizarEstilo con los valores actuales
    actualizarEstilo('cursor');
    actualizarEstilo('fuente');

    // Verifica el valor de numero y llama a cambiarTamanoTexto
    if (numero === 1) {
        cambiarTamanoTexto('texto-pequeno', numero);
    } else if (numero === 3) {
        cambiarTamanoTexto('texto-grande', numero);
    } else {
        cambiarTamanoTexto('texto-mediano', numero);
    }
}
