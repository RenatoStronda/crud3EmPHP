<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Atualização De Usuário </title>
</head>
<body>
    <h1> Atualização De Usuário </h1>
    <form method="POST" action="update.php">
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
            <input type="submit" value="Atualizar">
        </p>
    </form>
</body>
</html>