<?php

require_once "conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nome_produto'], $_POST['descricao_produto'], $_POST['preco_produto'], $_POST['estoque_produto'])) {
        $nome_produto = $_POST['nome_produto'];
        $descricao_produto = $_POST['descricao_produto'];
        $preco_produto = $_POST['preco_produto'];
        $estoque_produto = $_POST['estoque_produto'];

        $stmt = $conn->prepare("INSERT INTO produtos (nome_produto, descricao_produto, preco_produto, estoque_produto) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssdi", $nome_produto, $descricao_produto, $preco_produto, $estoque_produto);

        if ($stmt->execute()) {
            echo "Novo produto inserido com sucesso";
        } else {
            echo "Erro: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Dados incompletos recebidos.";
    }
}

$conn->close();
?>
