<?php

session_start();

require_once "../server/verificaloginadm.php";

require_once '../server/ConexaoBD.php';

if (!isset($_GET['id'])) {
    header('location: jogador-lista.php');
    exit();
} else if (empty($_GET['id'])) {
    header('location: jogador-lista.php');
    exit();
}

$id = $_GET['id'];
$query = "select jogos.* from jogos
join car_compra_jogo on jogos.pk_id_jogo = car_compra_jogo.fk_id_jogo
join carrinhos on car_compra_jogo.fk_id_car = carrinhos.pk_id_car
where carrinhos.pk_id_car = $id;";

$con = new ConexaoDB();

$result = $con->executQuery($query);

while ($linha = mysqli_fetch_assoc($result)) {
    $dados[] = $linha;
}

$query2 = "select * from carrinhos where pk_id_car = $id;";

$result2 = $con->executQuery($query2);
$linha2 = mysqli_fetch_assoc($result2);

$query3 = "select pk_id_jogador, nome from jogadores where pk_id_jogador = '". $linha2['fk_id_jogador'] ."';";

$result3 = $con->executQuery($query3);
$linha3 = mysqli_fetch_assoc($result3);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area do jogador</title>

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

        <h1>Jogos do carrinho de ID: <?php echo $id; ?></h1>
        <hr>
        <h2>Data da compra <?php echo $linha2['data_compra']; ?></h2>
        <h2>Carrinho do jogador: <?php echo $linha3['nome']; ?> - ID: <?php echo $linha3['pk_id_jogador']; ?></h2>

        <br>

        <table>
            <thead>
                <td>ID</td>
                <td>Nome</td>
                <td>Preço</td>
                <td>Requisitos</td>
                <td>Descrição</td>
                <td>Sistema</td>
                <td>Lançamento</td>
            </thead>
        <?php
        for ($i = 0; $i < sizeof($dados); $i++) {
            echo "<tr>";
            echo "<td> " . $dados[$i]['pk_id_jogo'] . " </td>";
            echo "<td> " . $dados[$i]['nome'] . " </td>";
            echo "<td> " . $dados[$i]['preco'] . " </td>";
            echo "<td> " . $dados[$i]['requisitos'] . " </td>";
            echo "<td> " . $dados[$i]['descricao'] . " </td>";
            echo "<td> " . $dados[$i]['sistema'] . " </td>";
            echo "<td> " . $dados[$i]['data_lancamento'] . " </td>";
            echo "</tr>";
        }
        ?>
        </table>

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