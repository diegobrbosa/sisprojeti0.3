<?php
$servername = "localhost"; //variavel de conexão com o servidor local
$username = "root"; //variavel do nome do usuario da conexao local
$password = ""; //senha da conexao local
$dbname = "projeti01";

// Criando a conexao
$conn = new mysqli($servername, $username, $password,$dbname);//criando uma variavel de conexão atraves do new mysqli e passando como parametro as variaveis criadas com o nome do servidor local, usuario e senha

// Checkando a conexão com o banco
if ($conn->connect_error) { //se a conexão falhar sera exibido um erro de conexão
    die("A conexão falhou: " . $conn->connect_error);//exibindo o erro na tela
} 
echo "A conexão deu certo";//se a conexão der certo será exibido que a conexão foi um sucesso
return $conn;
?>