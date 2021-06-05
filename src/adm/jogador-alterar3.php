<?php
session_start();
require_once "../server/verificaloginadm.php";
require_once "../server/ConexaoBD.php";
$con = new ConexaoDB();

$id = mysqli_real_escape_string($con->getConexao(), $_POST['id']);
$n = mysqli_real_escape_string($con->getConexao(), $_POST['nome']);
$d = mysqli_real_escape_string($con->getConexao(), $_POST['email']);
$senhaAlterada = false;
if (empty($_POST['senha'])) {
  
    $sql1 = "UPDATE jogadores SET nome = '$n', email = '$d' WHERE pk_id_jogador = '$id';";
} else {
    $senhaAlterada = true;
    $q = mysqli_real_escape_string($con->getConexao(), md5($_POST['senha']));
    $sql1 = "UPDATE jogadores SET nome = '$n', email = '$d', senha = '$q' WHERE pk_id_jogador = '$id';";
}


$sql2 = "SELECT email, pk_id_jogador FROM jogadores WHERE email = '$d' ;";
$resultado = $con->executQuery($sql2);
$linha = mysqli_fetch_array($resultado);    

if (mysqli_num_rows($resultado) != 0) {

    if($linha['pk_id_jogador'] != $id){
        $_SESSION['emailJaExiste'] = "qualquer";
        header("location: jogador-alterar2.php?id=$id");
        exit();
    }
    
}

$sql3 = "SELECT email FROM administradores WHERE email = '$d' ;";
$resultado = $con->executQuery($sql3);

$linha = mysqli_fetch_array($resultado);

if (mysqli_num_rows($resultado) != 0){
    $_SESSION['emailJaExiste'] = "qualquer";
    header("location: jogador-alterar2.php?id=$id");
    exit();
}
$con->executQuery($sql1);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Alterar jogador3</title>
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
    <h2>Alterar jogador</h2>

    <P>Os dados do jogador foram alterados com sucesso:</P>
    Nome: <?php echo $n; ?><br />
    nickname: <?php echo $d; ?><br />
    senha: <?php echo $q; ?><br />
    <?php
    if($senhaAlterada == true){
    echo"Senha alterada com suceso";
    }
    else{
        echo"Senha não alterada";
    }
    ?>

    <br /><br />
    <a href="jogador-alterar1.php">Retornar</a>
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