<?php
    //Busca codigo que conecta no banco
    require_once "../bancoDeDados/conecta.php";
    require_once "../bancoDeDados/login/autenticacao.php";
    
    //Recebe os dados via post e guarda em variáveis
    $nome = $_POST['nome'];
    $turno = $_POST['turno'];
    $inicio = $_POST['inicio'];
    
    // Prepara a inserção dos dados recebidos no formulário 
    $consulta = $bd->prepare("INSERT INTO alunos(nome, turno, inicio) VALUES(:nome, :turno, :inicio)");

    //Substitui a os valores do prepare pelas váriaveis
    $consulta->bindValue(':nome', $nome);
    $consulta->bindValue(':turno', $turno);
    $consulta->bindValue(':inicio', $inicio);

    //Executa a inserção
    if($consulta->execute()){
        $gravou = true;
    }
    else{
        $gravou = false;
    }

    include 'index.php';
/*
    A função $bd->prepare está retornando o objStmt(Statement), uma 
    variavel que consegue juntar todos os dados do usario com uma consulta
    no SGBD.
*/

/*
    $objConsulta->bindParam(':nome', $nome);
    $objConsulta->bindParam(':turno', $turno);
    $objConsulta->bindParam(':inicio', $inicio);

*/
/*
A função $objConsulta->bindParam() substitui os rótulos (ex.: ":nome") pelos dados inseguros
*/

/*
$objConsulta->execute();

Executando a consulta no SGDB
*/

