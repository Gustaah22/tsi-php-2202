<?php

$dsn = 'mysql:dbname=senac;host=localhost;port=3307';
$user = 'Gustavo';
$pass = '12345678';

//instancia da classe.
//Conectamos ao SGBD
$bd = new PDO($dsn, $user, $pass);

var_dump($bd);