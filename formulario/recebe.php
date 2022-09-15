<?php
    $nome = $_POST["nomeUsuario"];
    $idade = $_POST["idadeUsuario"];
    $CPF = $_POST["cpfUsuario"];
    $periodo = $_POST["periodoUsuario"];
    echo "Seja bem-vindo(a), $nome sua idade é $idade, seu cpf $CPF e seu periodo é $periodo";

    //echo "Seja bem-vindo(a)," . $_POST['nomeUsuario'] . '!<br><br>';
    //echo "Você tem {$_POST['idadeUsuario']} anos, CPF: {$_POST['cpfUsuario']}<br>";
    //echo "E o periodo escolhido foi o {$_POST['periodoUsuario']}";


    $arquivo = fopen('alunos.csv', 'a');//abro o arquivo para append
    fwrite($arquivo, "$nome; $idade; $CPF; $periodo\r\n");
    fclose($arquivo);
