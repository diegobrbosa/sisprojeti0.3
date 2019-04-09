<?php

include_once "../config/conexao.php";

$nome = $_POST["txtNome"];
$email = $_POST["txtEmail"];
$senha = $_POST["txtSenha"];
$confirmacao_senha = $_POST["confirmacaoSenha"];

$sql = "INSERT INTO usuario (nome,email,senha,confirmacao_senha)
VALUES ('{$nome}','{$email}',{$senha},{$confirmacao_senha})";

if (mysqli_query($conn, $sql)) {
    echo " Usuario Inserido no Banco de Dados";
} else {
    echo "Usuário não foi inserido no banco: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>