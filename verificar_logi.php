<?php

        require_once "conexao.php";

        $email = $_POST['email'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM bd_dw";
        $comando = mysqli_prepare($conexao, $sql);

        if {


        }
        else{
            if{

            }

            else{
                
            }
        }

        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);

        // echo $resultados;
        // print_r($resultados);

        mysqli_stmt_close($comando);    
    ?>