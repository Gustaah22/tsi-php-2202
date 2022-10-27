<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Listar</title>
</head>
<body>
    <div class="container">
        <a href="formIncluir.php"><button class='btn'>Novo Aluno</button></a>
        <?php
        //Mensagem de sucesso ou falha na hora de gravar o aluno
        if(isset($gravou)){
            if(!$gravou){
                echo '<div class="alert alert-danger">
                Errou ao tentar gravar o Aluno!
                </div>';
            }else{
                echo'<div class="alert alert-success">
                Aluno gravado com sucesso!
                </div>';
            }
        }
        //Mensagem de sucesso ou falha na hora de apagar o aluno
        if(isset($apagado)){
            if(!$apagado){
                echo '<div class="alert alert-danger">
                Erro ao tentar apagar o Aluno!
                </div>';
            }else{
                echo'<div class="alert alert-success">
                Aluno apagado com sucesso!
                </div>';
            }
        }
        ?>
        
        <form method="post">
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Turno</th>
                    <th>Inicio</th>
                    <th>Ações</th>
                </thead>

                <?php
                foreach($alunos as $aluno)
                {
                    echo
                    "<tr>
                        <td>{$aluno["id"]}</td>
                        <td>{$aluno["nome"]}</td>
                        <td>{$aluno["turno"]}</td>
                        <td>{$aluno["inicio"]}</td>
                        <td><button formaction='apagar.php' class='btn btn-danger' value={$aluno['id']} name='id'>Apagar</button></td>
                        <td><button formaction='editar.php' class='btn btn-success' value={$aluno['id']} name='id'>Editar</button></td>
                    </tr>";
                }
                ?>
            </table>
        </form>
    </div>  
</body>
</html>