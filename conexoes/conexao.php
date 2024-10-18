<?php
$servername = "localhost";
$username = "pacheco";
$password = "";
$dbname = "relatorio";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else

?>
