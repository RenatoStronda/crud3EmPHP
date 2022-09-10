<?php
require_once("connection.php");

if(isset($_POST["login"]) && !empty($_POST["login"]))
{
    $login = $_POST["login"];
    $result = mysqli_query($conn, "SELECT * FROM usuario WHERE nm_login = '$login' LIMIT 1") or die("Erro Ao Buscar O Usuário");

    if(mysqli_num_rows($result) > 0)
    {
        $result = mysqli_query($conn, "DELETE FROM usuario WHERE nm_login = '$login'") or die("Erro Ao Excluir O Usuário");

        if($result)
        {  
            echo "<script language=\"javascript\"> alert(\"Usuário Excluido Com Sucesso!\"); history.back(-1); </script>";
        }
    }
    else
    {
        echo "<script language=\"javascript\"> alert(\"Usuário Inexistente!\"); history.back(-1); </script>";
    }
    
    mysqli_close($conn);
}
?>