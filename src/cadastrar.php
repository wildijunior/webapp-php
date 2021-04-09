<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


# require class to create user on db
require_once 'db_class.php';

# resgata valores 
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);


# instancia classe 
$objt_db = new db();

# atribui a variavel a funcao de conexao
$objt_db->conectar();

# cria query para insercao de dados no db
$sql = "INSERT INTO usuarios(nome, email, senha) VALUES('$nome','$email','$senha')";

# tenta insercao
if (mysqli_query($objt_db->conectar(), $sql)) {
    echo 'CADASTRO REALIZADO COM SUCESSO';
} else {
    die("Falha de conexao: " . mysqli_connect_error());
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="/styles.css">


    <title>TWITTER CLONE</title>
</head>

<body>


    <!-- BARRA DE NAVEGACAO -->
    <?php require_once './header.php' ?>


    <!-- INICIO SECTION -->
    <section class='caixinha'>
        <div class='container'>
            <h4>CADASTRO EFETUADO COM SUCESSO</h4>
            <a href='index.php' class='btn btn-success'>BACK TO INDEX TO LOGIN</a>
        </div>
    </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>