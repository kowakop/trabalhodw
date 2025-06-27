<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="imagens/icon.png" type="image/x-icon">
        <link rel="stylesheet" href="reset.css">
        <title>ContrataJá</title>
        <!-- import do  bootstrap -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
            crossorigin="anonymous">

        <style>

            .card-body {
                background-color: #d04c00;
                color: #ffffff;
            }

            .card {
                margin: 20px auto;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .card-img-top {
                border-radius: 10px 10px 0 0;
                height: 200px;
                object-fit: cover;
                width: 100%;
            }

            .card-title {
                font-size: 1.5rem;
                font-weight: bold;
            }

            .card-text, .card-title {
                font-size: 1.4rem;
                margin-bottom: 20px;
                text-align-last: center;
            }

            .btn:hover {
                background-color: #fff264;
                font-weight: bold;
                border-radius: 15px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }

            .btn {
                font-weight: bold;
                display: block;
            }

            #botao_vaga{
                height: 50px;
                margin: 10px;
                border-radius: 10px;
                background-color: white;
                text-align: right;
            }

            #botao_voltar{
                height: 50px;
                margin: 10px;
                border-radius: 10px;
                background-color: white;
                text-align: right;
            }

            .botao_nav{
                text-decoration: none;
                color: black;
            }

            #nav{
                text-align: right;
                background-color: #d04c00;
                height: 75px;
                display: flex;
                flex-wrap:wrap;
            }

            #global{
                width: 100vw;
                display: flex;
                justify-content: center;
                gap: 50px;
                flex-wrap: wrap;
            }
        </style>
    </head>

    <nav id="nav">

        <button id="botao_vaga" class="btn">
            <a class="botao_nav" href="cadastro_area.php">Criar nova Vaga</a>
        </button>

         <button id="botao_voltar" class="btn">
            <a class="botao_nav" href="index.html">Voltar</a>
        </button>

    </nav>
    <body>

        <!-- importado do bootstrap -->
        <!-- única parte responsiva desse site (╥﹏╥) -->
         <?php

        require_once "conexao.php";

        // SELECT * FROM tb_livro;
        $sql = "SELECT * FROM vagas";
        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_execute($comando);

        $resultados = mysqli_stmt_get_result($comando);

        // echo $resultados;
        // print_r($resultados);

        echo"<div id='global'>";
        while ($area = mysqli_fetch_assoc($resultados)) {
            $nome = $area['vagas_nome'];
            $descricao = $area['vagas_descricao'];
            

            // essa parada aqui mermão, não ta encontrando o nome e descrição, n era pra isso acontecer não
            echo "<div class='row row-cols-1 row-cols-md-3 g-4'>";
            echo "  <div class='col'>";
            echo "      <div class='card h-100' style='width: 300px;'>";
            echo "          <img src='imagens/teste.jpeg' class='card-img-top'>";
            echo "          <div class='card-body'>";
            echo "              <h5 class='card-title'>$nome</h5>";
            echo "              <p class='card-text'>$descricao</p>";
            echo "              <a href='#' class='btn btn-light'>Solicitar Vaga</a>";
            echo "          </div>";
            echo "      </div>";
            echo "  </div>";
            echo "</div>";


        }
        echo"</div>";


        mysqli_stmt_close($comando);    
    ?>
    </body>
</html>