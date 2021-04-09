<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="img/web.png" width="42px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="index.php">Home</a>
                    <a class="nav-link" href="cadastrese.php">Cadastrar</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Logar <i class="fas fa-key"></i>
                        </a>
                        <ul style="width:250px;" class="dropdown-menu p-3" aria-labelledby="navbarDropdown">

                            <!-- FORM -->

                            <form class='justify-content-center' action="logar.php" method="post">
                                <div class="form-floating mb-1">
                                    <input type="email" class="form-control" id="email" name='email' placeholder="Email">
                                    <label for="email">Email</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" id="senha" name='senha' placeholder="Senha">
                                    <label for="senha">Senha</label>
                                </div>
                                <button class='btn btn-success' type="submit"><i class="fas fa-sign-in-alt"></i></button>
                            </form>

                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </nav>
</header>