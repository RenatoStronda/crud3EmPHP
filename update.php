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
            $result = mysqli_query($conn, "UPDATE usuario SET nm_usuario = '$nome', nm_senha = '$senha' WHERE nm_login = '$login'")
             or die("Erro Ao Atualizar O Usuário");

            if ($result)
            {
                echo "<script language=\"javascript\"> alert(\"Usuário Atualizado Com Sucesso!\"); history.back(-1); </script>";
            }
        }
        else
        {
            echo "<script language=\"javascript\"> alert(\"Usuário Inexistente!\"); location.href = \"index.php\"; </script>";
        }

        mysqli_close($conn);
    }
?>