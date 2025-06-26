<?php
    require_once "conexao.php";
    
    // pega as valores lá do formulário
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO vagas (vagas_nome, vagas_descricao) VALUES (?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    // letra s -> varchar, date, datetime, char
    // letra i -> int
    // letra d -> float, decimal
    mysqli_stmt_bind_param($comando, 'ss', $nome, $descricao);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    header("Location: cadastro.php");
?>