<?php

/*echo $_POST['nome'] . '<br>';
echo $_POST['sobrenome'] . '<br>';
echo $_POST['nick'] . '<br>';
echo $_POST['id'] . '<br>';
echo $_POST['idade'] . '<br>';
echo $_POST['genero'] . '<br>';
echo $_POST['whatsapp'] . '<br>';
echo $_POST['funcao'] . '<br>';
echo $_POST['trocaNick'] . '<br>';
echo $_POST['comentario'] . '<br>';
echo $_POST['satisfacao'] . '<br>';*/

$servername = "localhost";
$database = "recrutamento";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die("ERRO DE CONEXÃO COM BANCO DE DADOS: " . mysqli_connect_error());
}
echo "Conexão com banco de dados realizada com sucesso!!!" . '<br>';

$nome =  $_POST['nome'];
$sobrenome =  $_POST['sobrenome'];
$nick = $_POST['nick'];
$id = $_POST['id'];
$idade = $_POST['idade'];
$genero = $_POST['genero'];
$whatsapp = $_POST['whatsapp'];
$funcao = $_POST['funcao'];
$trocaNick = $_POST['trocaNick'];
$comentario =  $_POST['comentario'];
$satisfacao = $_POST['satisfacao'];

// Inserindo na tabela jogador
$sql = "INSERT INTO jogador values (" . "'$id'," . "'$nick'," . "'$funcao'," . "'$trocaNick'," . "'$comentario');";

if(mysqli_query($conn, $sql)) {
    echo "Jogador cadastrado com sucesso!!!" . '<br>';
} else {
    echo "Erro no cadastro do jogador: " . $sql . "<br>" . mysqli_error($conn);
}

//Inserindo na tabela pessoa
$sql = "INSERT INTO pessoa values (" . "'$nome'," . "'$sobrenome'," . "'$idade'," . "'$genero'," . "'$whatsapp'," . "'$satisfacao'," . "'$id');";

if(mysqli_query($conn, $sql)) {
    echo "Pessoa cadastrada com sucesso!!!" . '<br>';
} else {
    echo "Erro no cadastro de pessoa: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>