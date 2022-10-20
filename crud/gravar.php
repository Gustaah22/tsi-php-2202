<?php
//Buscamos o código que conecta no SBBD
require_once '../bancoDeDados/conecta.php';
//Na linha 3 estamos trazendo o código de ../bancoDeDados/conecta.php para este código
//include_once(); não gera erro fatal se não existir o arquivo


//Dados provenientes do formulário HTML
$nome = $_POST["nome"];
$turno = $_POST["turno"];
$inicio = $_POST["inicio"];

$objConsulta = $bd->prepare('  INSERT INTO alunos 
                    (nome, turno, inicio) 
                VALUES
                    (:nome, :turno, :inicio)');



$objConsulta->bindValue(':nome', $nome);
$objConsulta->bindValue(':turno', $turno);
$objConsulta->bindValue(':inicio', $inicio);

//Executa a inserção
if($objConsulta->execute()){
    $gravou = true;
}else{
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

