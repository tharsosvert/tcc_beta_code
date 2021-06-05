<?php
session_start();
require_once "../server/verificaloginadm.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>excluir adm2</title>
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
    <h2>Excluir jogador</h2>
    <?php
    $codigo = $_GET["id"];
    $sql = "SELECT* FROM jogadores WHERE pk_id_jogador = '$codigo';";
    require_once '../server/ConexaoBD.php';
    $con = new ConexaoDB();
    $consulta = $con->executQuery($sql);
    if (mysqli_num_rows($consulta) == 0)
        echo "Esse jogador não existe";
    else {
        $linha = mysqli_fetch_array($consulta);
        $n = $linha["nome"];
        $d = $linha["email"];
        echo "Voce REALMENTE quer excluir o jogador?</br>";
        echo"id: $codigo</br>";
        echo "Nome: $n</br>";
        echo "email: $d</br>"; 
        echo"<a href='jogador-exclui3.php?id=$codigo' class='btn btn-danger'>Excluir</a>";
    }
    ?>
    
    <br /><br /><a href="jogador-exclui1.php">cancelar</a>
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