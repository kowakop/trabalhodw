<?php
    require_once "conexao.php";
    
    // pega as valores lá do formulário
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone']
    
    $nome_arquivo = $_FILES['foto']['name'];
    $caminho_temporario = $_FILES['foto']['tmp_name'];

    //pegar a extensão do arquivo
    $extensao = pathinfo($nome_arquivo, PATHINFO_EXTENSION);

    //gerar um novo nome
    $novo_nome = uniqid() . "." . $extensao;

    // lembre-se de criar a pasta e de ajustar as permissões.
    $caminho_destino = "fotos/" . $novo_nome;

    // move a foto para o servidor
    move_uploaded_file($caminho_temporario, $caminho_destino);

    $sql = "INSERT INTO cadastro (nome, idade, cpf, telefone, foto) VALUES (?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    // letra s -> varchar, date, datetime, char
    // letra i -> int
    // letra d -> float, decimal
    mysqli_stmt_bind_param($comando, 'sssss', $nome, $idade, $cpf, $telefone, $foto);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    header("Location: index.php");
?>
