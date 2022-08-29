document.getElementById("verificar").addEventListener("click", function verificaPalindromo(){
    let entrada = document.getElementById("entrada").value;
    entrada = entrada.toLowerCase();
    entrada = entrada.replace(/\s/g, '');
    j = entrada.length-1;
    palindromo = true;

    for(i=0; i<entrada.length; i++){
        if(i == j)
            break;
        if(entrada[i]==[entrada[j]])
            palindromo = true;
        else{
            palindromo = false;
            break;
        }
        j--;
    }
    if(palindromo == true)
        document.getElementById("resultado").value = "É Palíndromo";
    else document.getElementById("resultado").value = "Não é Palíndromo";
});