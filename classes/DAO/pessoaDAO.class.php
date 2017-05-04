<?php

class pessoaDAO {
 
    private $conexao;

    public function __construct() {
        $this->conexao = new Conexao();
    }

    public function inserir($usuario) {
        $sql = "INSERT INTO pessoa (nome, idade) VALUES('" . $usuario->getNome() . "', '" . $usuario->getIdade() . "')";
        if (mysqli_query($this->conexao->getCon(), $sql)) {
            return true;
        } else {
            return false;
        }
    }

}
