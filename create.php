<?php
    require_once("connection.php");

    if (isset($_POST["nome"]) && isset($_POST["login"])&& isset($_POST["senha"]) && !empty($_POST["nome"]) 
    && !empty($_POST["login"]) && !empty($_POST["senha"]))
    {
        $nome = $_POST["nome"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $result = mysqli_query($conn, "SELECT * FROM usuario WHERE nm_login = '$login' LIMIT 1") or die("Erro Ao Buscar O Usuário");

        if (mysqli_num_rows($result) > 0)
        {
            echo "<script language=\"javascript\"> alert(\"Usuário Já Cadastrado!\"); history.back(-1); </script>";
        }
        else
        {
            $result = mysqli_query($conn, "INSERT INTO usuario(nm_usuario, nm_login, nm_senha) VALUES('$nome', '$login', '$senha')")
             or die("Erro Ao Inserir O Usuário");

            if ($result)
            {
                echo "<script language=\"javascript\"> alert(\"Usuário Cadastrado Com Sucesso!\"); history.back(-1); </script>";
            }
        }

        mysqli_close($conn);
    }
?>