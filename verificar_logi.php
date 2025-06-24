<?php

        require_once "conexao.php";

        // SELECT * FROM tb_livro;
        $sql = "SELECT * FROM vaga";
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);

        // echo $resultados;
        // print_r($resultados);

        mysqli_stmt_close($comando);    
    ?>