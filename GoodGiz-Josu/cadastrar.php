<?php

echo $_POST['nome'] . '<br>';
echo $_POST['endereco'] . '<br>';
echo $_POST['telefone'] . '<br>';
echo $_POST['cidade'] . '<br>';
echo $_POST['estado'] . '<br>';

$servername = "localhost";
$database = "goodgiz";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die("ERRO DE CONEXÃO COM BANCO DE DADOS: " . mysqli_connect_error());
}
echo "Conexão com banco de dados realizada com sucesso!!!" . '<br>';

$codigo =  $_POST['codigo'];
$nome =  $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
 
//Inserindo na tabela aluno
$sql = "INSERT INTO aluno values (" . "'$nome'," . "'$endereco'," . "'$telefone'," . "'$cidade'," . "'$estado');";

if(mysqli_query($conn, $sql)) {
    echo "Pessoa cadastrada com sucesso!!!" . '<br>';
} else {
    echo "Erro no cadastro de pessoa: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>