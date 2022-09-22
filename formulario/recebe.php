<?php
    $nome = $_POST["nomeUsuario"];
    $idade = $_POST["idadeUsuario"];
    $CPF = $_POST["cpfUsuario"];
    $periodo = $_POST["periodoUsuario"];
    echo "Seja bem-vindo(a), $nome sua idade é $idade, seu cpf $CPF e seu periodo é $periodo";

    //echo "Seja bem-vindo(a)," . $_POST['nomeUsuario'] . '!<br><br>';
    //echo "Você tem {$_POST['idadeUsuario']} anos, CPF: {$_POST['cpfUsuario']}<br>";
    //echo "E o periodo escolhido foi o {$_POST['periodoUsuario']}";

    //$_SERVER possui muitas variáveos de ambiente que podem ser
    //muito importantes para você em algum momento, ex: IP do
    //requisitante (exemplo 4 do 'alunos.csv')


    $arquivo = fopen('alunos.csv', 'a');//abro o arquivo para append
    fwrite($arquivo, "$nome; $idade; $CPF; $periodo; {$_SERVER['REMOTE_ADDR']}\r\n");
    fclose($arquivo);
