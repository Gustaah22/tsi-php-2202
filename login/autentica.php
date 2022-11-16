<?php
    //Busca codigo que conecta no banco
    require_once "../bancoDeDados/conecta.php";
     $email = trim($_POST['email']);
     $senha = trim($_POST['senha']);

     $stmt = $bd->prepare(" SELECT 
                                nome, senha 
                            FROM 
                                usuarios
                            WHERE 
                                email = :email");

    $stmt->bindParam(':email', $email);

    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    $autenticou = false;
    //
    if( isset($usuario['nome'])){//Se existir o usuário 
        //Compara a senha para ver a veracidade da mesma
        if(password_verify($senha, $usuario['senha']) ){

            //Sessão inicializada mesmo com o require once 
            session_start();
            $_SESSION['id'] = $email;
            //Direciona para o meno principal
            header('Location: /tsi-php-2202/login');
        }
    }
    include 'index.php';