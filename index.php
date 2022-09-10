<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Cadastro De Usuário </title>
</head>
<body>
    <h1> Cadastro De Usuário </h1>
    <form method="POST" action="create.php">
        <p>
            <label>Nome:</label>
            <input type="text" name="nome">
        </p>
        <p>
            <label>Login:</label>
            <input type="text" name="login">
        </p>
        <p>
            <label>Senha:</label>
            <input type="text" name="senha">
        </p>
        <p>
            <input type="submit" value="Cadastrar">
        </p>
    </form>

    <p>
       <a href="page_update.php">Atualizar Usuário</a><br>
       <a href="page_delete.php">Deletar Usuário</a><br>
       <a href="selectAll.php"> Exibir Usuários </a>  
    </p>
</body>
</html>