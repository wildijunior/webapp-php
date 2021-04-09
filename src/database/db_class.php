<?php


class db
{

    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'webapp_db';

    public function conectar()
    {

        # cria variavel que armazena tentativa de login
        $conexao = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        // check connection
        if (!$conexao) {
            die("Falha de conexao: " . mysqli_connect_error());
            exit();
        }
        return $conexao;
    }
}
