<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">

    <title>TWITTER CLONE</title>
</head>

<body>

    <!-- BARRA DE NAVEGACAO -->
    <nav class='navbar navbar-dark bg-primary fixed-top navbar-expand-lg'>

        <!-- CONTAINER -->
        <div class='container'>

            <!-- BRAND -->
            <a class='navbar-brand' href="index.php">
                <img src="img/web.png" width="42px">
            </a>

            <!-- BTN TOGGLER -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- DIV COLLAPSE -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

                <!-- UL'S -->
                <ul class='nav justify-content-center'>

                    <!-- DIV DROPDOWN -->
                    <div class="dropdown">

                        <!-- LI'S -->

                        <li class='nav-item'>

                            <a class='nav-link' href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                LOGAR
                            </a>

                            <!-- FORM DE LOGIN -->
                            <form class='dropdown-menu p-4' id='dropdownMenuLink' action="">
                                <div class="form-group">
                                    <input class='form-control' type="text" name='nome' id='nome' placeholder="Nome">
                                </div>

                                <div class='form-group'>
                                    <input class='form-control' type="password" name='senha' id='senha' placeholder="Senha">
                                </div>

                                <button class='btn btn-info' type="submit">ENTRAR</button>
                            </form>
                        </li>
                    </div>

                    <li class='nav-item'>
                        <a class='nav-link' href="cadastrese.php">CADASTRE-SE</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- INICIO SECTION -->
    <section class='caixinha'>
        <div class='container'>
            <div class='jumbotron'>
                <h4>WEB APP</h4>
            </div>
        </div>
    </section>


    <!-- FOOTER -->

    <footer style="margin-top: 25%;">
        <p>&copy; 2020 - Wildi Jr.</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>