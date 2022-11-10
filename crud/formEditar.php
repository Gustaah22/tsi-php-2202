<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="atualizar.php" method="post">
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" value="<?php echo $aluno["nome"]?>">
        <input type="text" name= "id" value="<?php echo $aluno["id"]?>" style="display:none">
        <br>
        <label for="turno">Turno:</label>
        <select name="turno" id="turno">
            <option value="">Escolha</option>
            <option value="matuino" <?php echo $aluno['turno'] == 'matuino' ? 'selected' : '';?>
            >Matuino</option>
            <option value="vespertino" <?php echo $aluno['turno'] == 'vespertino' ? 'selected' : '';?>
            >Vespertino</option>
            <option value="noturno" <?php echo $aluno['turno'] == 'noturno' ? 'selected' : '';?>
            >Noturno</option>
        </select>
        <br>
        <label for="">Início</label>
        <input type="date" name="inicio" id="inicio" value="<?php echo $aluno["inicio"] ?>">
        <br>
        <input  class= "btn" type="submit" value="Atualizar">
    </form>
</body>
</html>