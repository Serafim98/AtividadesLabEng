<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include_once("index.html");

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
    <title>Atividades Laboratório Engenharia</title>
    <style>
        .container{
            display: inline;
            text-align: center;
        }

        .atividade{
            box-shadow: 20px 20px 50px grey;
            width: 200px;
            height: 50px;
            display: inline-block;
            text-align: center;
            padding: 12px 5px 5px 5px;
            margin: 15px 50px 5px 5px;
            background-color: #54BAB9;
            border-radius: 10px;
            color: whitesmoke;
        }

        .linkAtividade{
            color:whitesmoke;
            text-decoration: none;
            font-weight: bold;
        }

        .footer{
        position: fixed;
        left: 50%;
        bottom: 20px;
        transform: translate(-50%, -50%);
        margin: 0 auto;
        bottom: 0;
        }
    </style>
</head>
<body class="container">
    <h1>Atividades Laboratório de Banco de Dados</h1>
    <h5 class="text-secondary">Luis Fernando da Silva Serafim</h2>
    <div class="container-md">
        <div class="atividade">
        <i class="fa-solid fa-code"></i><a class="linkAtividade" href="./Aula01Jogo.html">Aula 01 - Jogo</a><br>
        </div>
        <div class="atividade">
        <i class="fa-solid fa-code"></i><a class="linkAtividade" href="./Aula02Data_e_Hora.html">Aula 02 - Data</a><br>
        </div>
        <div class="atividade">
        <i class="fa-solid fa-code"></i><a class="linkAtividade" href="./Aula02Relogio.html">Aula 02 - Relógio</a><br>
        </div>
        <div class="atividade">
            <i class="fa-solid fa-code"></i><a class="linkAtividade" href="./Aula03Palindromo.html">Aula 03 - Palíndromo</a><br>
        </div>
        <div class="atividade">
            <i class="fa-solid fa-code"></i><a class="linkAtividade" href="./atividadeReact.html">Atividade React</a><br>
        </div>
        <div class="atividade">
            <i class="fa-solid fa-code"></i><a class="linkAtividade" href="#"></a><br>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/5b174b52f1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
<footer class="footer">Análise e Desenvolvimento de Sistemas - Fatec - Presidente Prudente</footer>
</html>
