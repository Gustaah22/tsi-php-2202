<?php

//Vetores 

$diasemana = [0 => 'Domingo', 1 => 'Segunda',
2 => 'Terça', 3 => 'Quarta', 4 => 'Quinta',
5 => 'Sexta', 6 => 'Sabado'];


//Muito importante para depuração do código - var_dump()
// var_dump($diasemana);

$hoje = date('w');


echo "Hoje é {$diasemana[$hoje]} <br><br>"; 

//interpolação com vetor precisa das {}


$aluno =[0 => ['matricula' => 463123,
                'nome' => 'Joao',
                'semestre' => 2],
        1 => ['matricula' => 128737,
                'nome' => 'Paulo',
                'semestre' => 3],
        2 => ['matricula' => 2318283,
                'nome' => 'Maria',
                'semestre' => 1]];

echo" 
<table border = 5>
    <tr>
        <th>Matricula</th>
        <th>Semestre</th>
        <th>Nome</th>
    </tr>";

// for( $i = 0 ; $i < count($aluno) ; $i++){
//     echo "
//         <tr>
//             <td>{$aluno[$i]["matricula"]}</td>
//             <td>{$aluno[$i]["nome"]}</td>
//             <td>{$aluno[$i]["semestre"]}</td>
//         </tr>";
// }

foreach($aluno as $index => $valor){
    echo "
         <tr>
             <td>{$valor["matricula"]}</td>
             <td>{$valor["nome"]}</td>
             <td>{$valor["semestre"]}</td>
         </tr>";
};

echo '</table>';


// var_dump($aluno); 









