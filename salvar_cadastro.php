<?php
    require_once "conexao.php";
    
    // pega as valores lá do formulário
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $area_id=$_POST ?? null; 
    
    if (!str_ends_with($email, '@gmail.com')) {
        die("Erro: O e-mail deve ser do domínio @gmail.com. Por favor, clique em voltar e insira novamente. <br><a href='cadastro.php'>Voltar</a>");
    }

$imgperil_padrao = 'imagens/perfil.png'; // Altere para o caminho real da sua imagem padrão

if (!empty($_FILES['foto']['name'])) {
    $pasta = "imagens/";
    $nome_arquivo = uniqid() . "_" . basename($_FILES['foto']['name']);
    $caminho = $pasta . $nome_arquivo;
    move_uploaded_file($_FILES['foto']['name'], $caminho);
}
else {
    $caminho = $imgperil_padrao;
}

    $sql = "INSERT INTO usuario (usuario_nome, usuario_idade, usuario_cpf, usuario_telefone, usuario_senha, usuario_foto, usuario_email, area_area_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    // letra s -> varchar, date, datetime, char
    // letra i -> int
    // letra d -> float, decimal    
    mysqli_stmt_bind_param($comando, 'sssssssi', $nome, $idade, $cpf, $telefone, $senha, $caminho, $email, $area_id);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    header("Location: index.html");
?>
