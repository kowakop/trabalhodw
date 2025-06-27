<?php

        require_once "conexao.php";

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        
        $sql = "SELECT * FROM usuario WHERE usuario_email = '$email'";
        $comando = mysqli_prepare($conexao, $sql);
        mysqli_stmt_execute($comando);
        $resultado = mysqli_stmt_get_result($comando);
    
        $bd_dados = mysqli_fetch_assoc($resultado);
        mysqli_stmt_close($comando);
    
        if ($bd_dados == NULL) {
            header("Location: login.php");
            exit();
        }
    
        if ($bd_dados["usuario_senha"] != $senha) {
            header("Location: login.php");
            exit();
        } 

        setcookie("usuario_nome", $bd_dados["usuario_nome"], time() + 3600, "/");
        
        header("Location: principal.php");

?>