let aleatorio = Math.floor(Math.random() * 101);
let palpites = new Array();
let chances = 10;

function enviarPalpite() {
    chances--;
    let palpite = document.getElementById("palpite");
    let histPalpites = document.getElementById("histPalpites")
    let divResultado = document.getElementById("resultado");

    palpites.push(palpite.value)
    histPalpites.innerHTML = palpites

    if (palpite.value == aleatorio) {

        divResultado.innerHTML = "Parabéns você ganhou"
        document.getElementById("btn_Palpitar").disabled = true;
    }

    else if (palpite.value > aleatorio) {

        divResultado.innerHTML = "Palpite muito alto";

    }

    else if (palpite.value < aleatorio) {

        divResultado.innerHTML = "Palpite muito baixo";

    }

    document.getElementById("chances")= chances;
    if(chances == 0){
        divResultado.innerHTML = "Chances Esgotadas";
        document.getElementById("btn_Palpitar").disabled = true;
    }



}

function reiniciar(){
    document.location.reload(true);
}

