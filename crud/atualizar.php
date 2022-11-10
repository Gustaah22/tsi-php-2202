<?php

//Busacamos o código que conecta no SGBD
require_once '../banco-de-dados/conecta.php';

//Dados provenientes do formulário
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];
$id = $_POST['id'];

//Preparando e dando update
$stmt = $bd->prepare("UPDATE aluno
SET nome = :nome,
 turno = :turno,
 inicio = :inicio
WHERE id = :id");

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':turno', $turno);
$stmt->bindParam(':inicio', $inicio);
$stmt->bindParam(':id', $id);

$stmt->execute();

$atualizou = false;

if($stmt->rowCount() > 0){
    $atualizou = true;
}

include 'index.php';

