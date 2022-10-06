<?php

//Dados para nos conectarmos ao SGBD
$dsn = 'mysql:dbname=senac;host=localhost;port=3307';
$user = 'root';
$pass = '';

//instancia da classe.
//Conectamos ao SGBD
$bd = new PDO($dsn, $user, $pass);
