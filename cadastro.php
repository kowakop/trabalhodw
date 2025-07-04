

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="imagens/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="reset.css">
    <style>
        body {
            background-color: #ffffff;
        }

        h1 {
            text-align: center;
            color: rgb(0, 0, 0);
            font-size: large;
            font-weight: bold;
            font-family: Arial, sans-serif;
            text-transform: uppercase;
            margin-top: 50px;
        }

        form {
            width: 300px;
            margin: 0 auto;
            padding-top: 20px;
        }

        input[type="text"], input[type="date"], input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            background-color: #d04c00;
        }


        button {
            width: 108%;
            padding: 10px;
            background-color: rgb(0, 0, 0);
            border: none;
            cursor: pointer;
            color: white;
            font-weight: bold;
            margin-top: 50px;

        }
        
        button:hover {
            background-color: #4f88b1;
        }

        #pp {
            text-align: center;
            color: rgb(0, 0, 0);
            margin-top: 20px;
        }

        p {
            font-weight: bold;
            margin-top: 5px;
        }

        a {
            color: rgb(0, 0, 0);
            font-weight: bold;
        }

        #folha {
            background-color: lightgray;
            border-radius: 15px;
            margin: 0 auto;
            width: 27vw;
            height: 620px;
            padding-top: 3px;
            margin-top: 30px;
        }


    </style>
</head>
<body>

    <div id="folha">
    <h1>Cadastro</h1>
    <form action="salvar_cadastro.php" name="cadastro" method="POST" enctype="multipart/form-data">

        <p>Nome:</p>
        <input type="text" name="nome" required>

        <p>Data de nascimento:</p> 
        <input type="date" name="idade" required>

        <p>Email:</p>
        <input type="text" name="email" required>

        <p>CPF:</p>
        <input type="text" name="cpf" required>

        <p>Telefone:</p>
        <input type="text" name="telefone" required>

        <p>Senha:</p>
        <input type="password" name="senha" required>

        <p>Foto:</p>
        <input type="file" name="foto">

        <button type="submit">Cadastrar</button>

        <p id="pp">Já tem uma conta? 
            <a href="login.php">Faça login</a>

        </p>
        </div>

    </form>

    <?php
// include "conexao.php";

// Consulta para buscar todas as áreas cadastradas
// $sql = "SELECT area_id, area_nome FROM area ORDER BY area_nome";
// $result = $conn->query($sql);
?>
</body>
</html>