<?php
require_once '../bancoDeDados/conecta.php';

$stmt = $bd->query('SELECT id, nome, turno, inicio FROM alunos'); 

//Mostra apenas o indice alfanumerico

$alunos = [];

while($registro = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    $alunos[] = $registro;
}


include 'view/listar.php';