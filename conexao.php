<?php

// function conexao(){
$servername = "localhost";
$username = "pacheco";
$password = "";
$dbname = "relatorio";
// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// $conn->close();
// }

/*
create table Produto (
    id_produto integer serial,
    nome_produto char(50),
    descricao_produto(1000),
    Preco_produto decimal 10,2,
    estoque_produto(1000)
)
*/
function inserir(){
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO $dbname Values ()";
    $conn->close();
}
?> 