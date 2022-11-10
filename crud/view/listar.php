<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Listar</title>
</head>
<body>
<div class="container">

    <a href="formIncluir.php"><button class="btn">Novo aluno</button></a>
    <?php

    //Sucesso ou falha ao editar
    if(isset($atualizou))
    {
        if(!$atualizou){
            echo '<div class="alert alert-danger" role="alert">
            Erro ao editar dados do aluno
            </div>';
        }
        else
        {
            echo "<div class='alert alert-success'>
            Aluno editado com sucesso
            </div>";
            
        }    
    }

    //Sucesso ou falha ao gravar
    if(isset($gravou))
    {
        if(!$gravou){
            echo '<div class="alert alert-danger" role="alert">
            Erro ao tentar gravar o aluno
            </div>';
        }
        else
        {
            echo "<div class='alert alert-success'>
            Aluno gravado com sucesso
            </div>";
        }    
    }

    //Sucesso ou falha ao deletar
    if(isset($deletou))
    {
        if(!$deletou){
            echo '<div class="alert alert-danger" role="alert">
            Erro ao deletar aluno
            </div>';
        }
        else
        {
            echo "<div class='alert alert-success' role='alert'>
            Aluno deletado com sucesso
            </div>";
        }    
    }

    ?>
    <form action="" method="post">
        <table class="table">
            <thead>
                <th>Nome</th>
                <th>Id</th>
                <th>Turno</th>
                <th>Inicio</th>
                <th>Ações</th>
            </thead>
            <?php        
            foreach($alunos as $aluno)
            {
                echo "<tr>
                        <td>{$aluno['nome']}</td>
                        <td>{$aluno['id']}</td>
                        <td>{$aluno['turno']}</td>
                        <td>{$aluno['inicio']}</td>
                        <td>
                            <button class='btn btn-success' formaction='editar.php' value={$aluno["id"]} name='id' >
                                Editar
                            </button>
                            <button class='btn btn-danger' formaction='apagar.php' value={$aluno["id"]} name='id' >
                                Apagar
                            </button>
                        </td>
                    </tr>";
            }    
            ?>
        </table>
    </form>
</div>
</body>
</html>