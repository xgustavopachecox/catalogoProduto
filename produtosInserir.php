<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produto</title>
</head>
<body>
    <section id="formulario">
        <h2>Adicionar Produto</h2>
        <form id="formAdicionarProduto" action="./conexoes/inserir.php" method="POST">
            <input type="text" name="nome_produto" id="nome_produto" placeholder="Nome do Produto" required>
            <input type="text" name="descricao_produto" id="descricao_produto" placeholder="Descrição do Produto" required>
            <input type="number" name="preco_produto" id="preco_produto" placeholder="Preço do Produto" step="0.01" required>
            <input type="number" name="estoque_produto" id="estoque_produto" placeholder="Estoque do Produto" required>
            <button type="submit">Salvar</button>
        </form>
        <div id="resultado"></div>
    </section>
</body>
</html>
<script src="./scripts/script.js"></script>
