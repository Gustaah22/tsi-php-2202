<?php
//Busacamos o código que conecta no SGBD
require_once '../banco-de-dados/conecta.php';

//Apenas para ficar mais fácil de trabalhar e checando se o valor é nulo
$id = $_POST['id'] ?? 0;

$stmt = $bd->prepare('SELECT id, nome, turno, inicio
FROM aluno
WHERE id = :id');

$stmt->bindParam(':id', $id);

$stmt->execute();

$aluno = $stmt->fetch(PDO::FETCH_ASSOC);



//Mostrar um formulário HTML para usuário com os dados do aluno selecionado

//Ao clilcar "gravar" no formulário fazer o update e mostrar mensagem de erro ou sucesso

require_once 'formEditar.php';