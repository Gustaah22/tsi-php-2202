<?php
//Chama o controle de sessão 
require '../controledeSessao/controle.php';

//Destroi a sessão 
session_destroy();
//Redireciona o usuário para a tela de login 
header('Location: /tsi-php-2202/login');
