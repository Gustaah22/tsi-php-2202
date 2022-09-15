<?php

$nome = 'Gustavo Nunes'; //variavel
// echo "Olá $nome";
//Comentário de linha
#Cometário de linha
/*
Comentario 
de
bloco
*/

//documentação do php --> https://www.php.net

// FOR
    for($i = 1; $i <= 10; $i++) {
    echo "Olá $nome <br>";
} 

echo "<br><br>";

// WHILE 
$i = 0;
    while($i < 10) {
    echo " Olá $nome <br>" ; 
    $i++;
}  

echo "<br><br>";

// DO-WHILE
$i = 0;
do{
    echo " Olá $nome <br>" ; 
    $i++;
}while($i < 10);

echo "<br><br>";

 //IF e ELSE
 if(5 > 10){
     echo "5 é maior que 10 <br>";
 }
 else{
     echo "5 é menor que 10 <br>";
 }

$i = 10;

echo "<br><br>";

if ($i == 0) {
    echo "i é igual a 0 <br>";
} elseif ($i == 1) {
    echo "i é igual a 1 <br>";
} elseif ($i == 2) {
    echo "i é igual a 2 <br>";
}
elseif ($i == 3) {
    echo "i é igual a 3 <br>";
} elseif ($i == 4) {
    echo "i é igual a 4 <br>";
}
elseif ($i == 5) {
    echo "i é igual a 5 <br>";
} elseif ($i == 6) {
    echo "i é igual a 5 <br>";
}
switch($i){
    case 0: 
        echo "sabado";
        break;
    case 1:
        echo "domingo";
        break;
    case 2: 
        echo "segunda";
        break;
    case 3: 
        echo  "terca";
        break;
    case 4: 
        echo "quarta";
        break;
    case 5: 
        echo "quinta";
        break;
    case 6: 
        echo "sexta";
        break;
    default:
        echo "Numero invalido";
}

//Vetores

// $diasemana = [0 => 'domingo'; 1 => 'segunda';]