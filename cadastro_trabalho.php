<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de vaga</title>
    <link rel="shortcut icon" href="imagens/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="reset.css">
    <style>
        body {
            background-color: #ffffff;
            padding-top: 100px;
        }
        h1 {
            text-align: center;
            color: rgb(0, 0, 0);
            font-size: large;
            font-weight: bold;
            font-family: Arial, sans-serif;
            text-transform: uppercase;
        }
        form {
            width: 300px;
            margin: 0 auto;
            padding-top: 20px;
        }
        input[type="text"] {
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
        #folha {
            background-color: lightgray;
            border-radius: 15px;
            margin: 0 auto;
            width: 27vw;
            height: 350px;
            padding-top: 30px;

        }
        p {
            text-align: center;
            color: rgb(0, 0, 0);
            margin-bottom: 20px;
            margin-top: 20px;
        }

            a {
            color: rgb(0, 0, 0);
            font-weight: bold;
        }
    </style>
</head>
<body>
<div id="folha">

    <h1>Trabalho</h1>

    <form action="salvar_trabalho.php" method="post" enctype="multipart/form-data">

        Área de trabalho: 
        <input type="text" name="nome"> 

        Descrição: 
        <input type="text" name="descricao">

        <button type="submit">cadastro vaga</button>

        <p>Ir para 
            <a href="cadastro_vaga.php">Cadastro de Vaga</a>
        </p> 

        <p>Voltar para 
            <a href="principal.php">Página inicial</a>
        </p>

        </form>
</div>
</body>
</html>