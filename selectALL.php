<?php
    require_once("connection.php");

    $result = mysqli_query($conn, "SELECT * FROM usuario") or die("Erro Ao Buscar O Usuário");

    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo "Código: " . $row["cd_usuario"] . " | Nome: " . $row["nm_usuario"] . " | Login: " . $row["nm_login"]
            . " | Senha: " . $row["nm_senha"] . "<br>";
        }
    }
    else
    {
        echo "<script language=\"javascript\"> alert(\"Nenhum Usuário Encontrado!\"); location.href = \"index.php\"; </script>";
    }
mysqli_close($conn);
?>