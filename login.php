<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: none;
            background-color: #d04c00;
        }

        button {
            width: 107%;
            padding: 10px;
            background-color: rgb(0, 0, 0);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;;
        }

        button a {
            text-decoration: none;
            color: rgb(255, 255, 255);
            font-weight: bold;
        }

        button:hover {
            background-color: #4f88b1;
        }

        p {
            text-align: center;
            color: rgb(0, 0, 0);
            margin-bottom: 20px;
            margin-top: 20px;
        }

        a {
            color: rgb(0, 0, 0);
            text-decoration: underline;
        }

        #folha {
            background-color: lightgray;
            border-radius: 15px;
            margin: 0 auto;
            width: 27vw;
            height: 500px;
            padding-top: 30px;
        }

        #botao_entrar{
            color: white;
        }
    </style>
</head>
<body>
        <div id="folha">

            <h1>Login</h1>
            
            <form action="verificar_logi.php" name="login" method="POST">
                
                <p>Email:</p>
                <input type="text" name="email" required> 
            
                <p>Senha:</p> 
                <input type="password" name="senha" required> 
                
                <button type="submit"><span id="botao_entrar">Entrar</span></button>
            
            </form>
        
        
            <p>Não tem uma conta? 
                <a href="cadastro.php">Cadastre-se</a>
            </p>
            
            <p>Esqueceu a senha? 
                <a href="index.php">Vai ter que lembrar</a>
            </p>
            
            <p>Voltar para a 
                <a href="index.php">página inicial</a>
            </p>
        </div>
        


</body>
</html>