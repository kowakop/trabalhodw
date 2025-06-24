<?php

        require_once "conexao.php";

        // SELECT * FROM tb_livro;
        $sql = "SELECT * FROM vaga";
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);

        // echo $resultados;
        // print_r($resultados);

        echo "<table>";
        echo "<tr>";
        echo "<td>Nome</td>";
        echo "<td>descrição</td>";
        echo "</tr>";
        while ($area = mysqli_fetch_assoc($resultados)) {
            $nome = $area['nome'];
            $descricao = $area['descricao'];
            
            // echo "$id_livro - $nome<br>";

            echo "<tr>";
            echo "<td>$nome</td>";
            echo "<td>$descricao</td>";
            echo "</tr>";


        }
        echo "</table>";



        mysqli_stmt_close($comando);    
    ?>