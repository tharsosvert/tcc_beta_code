<?php

session_start();

require_once "../server/verificaloginadm.php";

require_once '../server/ConexaoBD.php';

if (isset($_GET['nome'])) {

    $query = "select * jogos where nome like '%" . $_GET['nome'] . "%';";
} else {
    $query = "select * from jogos;";
}

$con = new ConexaoDB();

$result = $con->executQuery($query);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogos</title>

    <!-- Import do CSS do Bootstrap LOCAL -->
    <!--  <link rel="stylesheet" href="bootstrap-4.5.3-dist\css\bootstrap.min.css">  -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <h3 class="page-header">Seção do Administrador - Administrador logado: <?php echo $_SESSION['nomeAdm']; ?></h3>
    </nav>

    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="administrador.php">Pagina principal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../server/logout.php">DESLOGAR</a>
            </li>
        </ul>
    </nav>
    <br>


    <main class="container-fluid">

        <form action="jogo-busca.php" method="get">
            <label for="nome-jogo">Nome do jogo:</label>
            <input type="text" name="nome" value="<?php if (isset($_GET['nome'])) {
                                                        echo $_GET['nome'];
                                                    } ?>" id="nome-jogo">
            <input type="submit" value="Buscar">
        </form>

        <p>Para visualizar todos os jogos deixe o campo acima em branco e clique em "Buscar"</p>

        <?php
        if (mysqli_num_rows($result)) {

            while ($linha = mysqli_fetch_assoc($result)) {
                $dados[] = $linha;
            }
        ?>

            <table>
                <thead>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Preço</td>
                    <td>Lançamento</td>
                </thead>
                <?php
                for ($i = 0; $i < sizeof($dados); $i++) {
                    echo "<tr>";
                    echo "<td> " . $dados[$i]['pk_id_jogo'] . " </td>";
                    echo "<td> " . $dados[$i]['nome'] . " </td>";
                    echo "<td> " . $dados[$i]['preco'] . " </td>";
                    echo "<td> " . $dados[$i]['data_lancamento'] . " </td>";
                    echo "<td><a href='jogo-dados?id=" . $dados[$i]['pk_id_jogo'] . " '>Ver todos os dados</a></td>";
                    echo "<td><a href='jogo-alterar2?id=" . $dados[$i]['pk_id_jogo'] . " '>Altarar dados</a></td>";
                    echo "<td><a href='jogo-excluir2?id=" . $dados[$i]['pk_id_jogo'] . " '>Excluir</a></td>";
                    echo "<td><a href='jogo-carrinhos?id=" . $dados[$i]['pk_id_jogo'] . " '>Registros de compras do jogo</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>

        <?php
        } else {
            echo "Nenhum jogo encontrado com o nome " . $_GET['nome'];
        }
        ?>

    </main>


    <!-- Import do jQuery + JS do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- <script src="bootstrap-4.5.3-dist\js\bootstrap.min.js"></script> -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>