<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="POST">
            Nome: <input type="text" name="nome">
            Idade:<input type="number" name="idade">
            <input type="submit" name="gravar" value="gravar">          

        </form>
        <?php
        include './classes/conexao.class.php';
        include './classes/DAO/pessoaDAO.class.php';
        include './classes/entidades/pessoa.class.php';

        $pessoaDAO = new pessoaDAO();
        $pessoa = new pessoa();

        if ($_POST) {
            if ($_POST['gravar']) {
                $nome = $_POST['nome'];
                $idade = $_POST['idade'];

                $pessoa->setNome($nome);
                $pessoa->setIdade($idade);

                $resultado = $pessoaDAO->inserir($pessoa);

                if ($resultado == true) {
                    echo 'Usuário inserido com sucesso';
                } else {
                    echo 'Falha ao inserir usuário';
                }
            }
        }
        ?>
    </body>
</html>
