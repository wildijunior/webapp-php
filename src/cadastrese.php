<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="/styles.css">


    <title>TWITTER CLONE</title>
</head>

<body>

    <!-- BARRA DE NAVEGACAO -->
    <?php require_once './header.php' ?>

    <!-- FORM -->
    <div class="container">
        <h4 class="text-center">
            <img src="https://img.icons8.com/fluent/96/000000/sign-in-form-password.png" />
            <br />Cadastre-se
        </h4>
        <form class='justify-content-center' action="cadastrar.php" method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome" name='nome' placeholder="Nome">
                <label for="nome">Nome</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name='email' placeholder="Email">
                <label for="email">Email</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="senha" name='senha' placeholder="Senha">
                <label for="senha">Senha</label>
            </div>
            <button class='btn btn-success' type="submit"><i class="fas fa-sign-in-alt"></i></button>
        </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>