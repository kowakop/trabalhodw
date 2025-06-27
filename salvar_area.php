<?php
    require_once "conexao.php";
    
    // pega as valores lá do formulário
    $area = $_POST['area'];
    $descricao = $_POST['descricao'];
    $area_id = $_POST ?? null;

    $sql = "INSERT INTO vagas (vagas_nome, vagas_descricao, area_vagas_id) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    // letra s -> varchar, date, datetime, char
    // letra i -> int
    // letra d -> float, decimal
    mysqli_stmt_bind_param($comando, 'ssi', $area, $descricao, $area_id);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    header("Location: principal.php");
?>