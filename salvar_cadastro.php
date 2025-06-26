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

    // Suponha que $userProfilePicture seja o caminho da imagem do perfil do usuário,
// ou um valor que indica se ele tem uma foto (ex: nome do arquivo no DB, ou null/empty)

$userProfilePicture = getUserProfilePictureFromDatabase($userId); // Função de exemplo para buscar a foto do DB

$defaultImagePath = ''; // Altere para o caminho real da sua imagem padrão

if (empty($userProfilePicture) || !file_exists($userProfilePicture)) {
    // Se o usuário não tem foto ou o arquivo não existe, use a imagem padrão
    $imageToDisplay = $defaultImagePath;
} else {
    // Se o usuário tem foto, use a foto dele
    $imageToDisplay = $userProfilePicture;
}

    
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

    $sql = "INSERT INTO usuario (usuario_nome, usuario_idade, usuario_cpf, usuario_telefone, usuario_senha, usuario_foto, usuario_email, area_area_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    // letra s -> varchar, date, datetime, char
    // letra i -> int
    // letra d -> float, decimal    
    mysqli_stmt_bind_param($comando, 'sssssssi', $nome, $idade, $cpf, $telefone, $senha, $caminho_destino, $email, $area_id);

    mysqli_stmt_execute($comando);

    mysqli_stmt_close($comando);

    header("Location: index.html");
?>
