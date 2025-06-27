<?php

        require_once "conexao.php";

        // SELECT * FROM tb_livro;
        $sql = "SELECT * FROM vagas";
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);

        // echo $resultados;
        // print_r($resultados);

        while ($area = mysqli_fetch_assoc($resultados)) {
            $nome = $area['nome'];
            $descricao = $area['descricao'];
            
            // echo "$id_livro - $nome<br>";

            echo "<div>";
            echo "$nome";
            echo "$descricao";
            echo "</div>";


        }



        mysqli_stmt_close($comando);    
    ?>