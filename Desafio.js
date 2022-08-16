let aleatorio = Math.floor(Math.random() * 101);
let palpites = new Array();

function enviarPalpite() {

    let palpite = document.getElementById("palpite");

    let divResultado = document.getElementById("resultado");

    palpites.push(palpite.value)
    divResultado.innerHTML = palpites

    if (palpite.value == aleatorio) {

        alert("Ganhou");
        document.location.reload(true);

    }

    else if (palpite.value > aleatorio) {

        alert("Número muito grande");

    }

    else if (palpite.value < aleatorio) {

        alert("Número muito pequeno");

    }




}

