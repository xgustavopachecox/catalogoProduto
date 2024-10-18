

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <section id="formulario">
        <h2>Adicionar Produto</h2>
        <form id="formAdicionarProduto" action="./conexoes/inserir.php" method="POST">
            <input type="text" id="nome_produto" placeholder="Nome do Produto" required>
            <input type="text" id="descricao_produto" placeholder="Descrição do Produto" required>
            <input type="number" id="preco_produto" placeholder="Preço do Produto" required>
            <input type="number" id="estoque_produto" placeholder="Estoque do Produto" required>
            <button type="submit">Salvar</button>
        </form>
        <div id="resultado"></div>
    </section>
</body>
</html>
<script src="./scripts/script.js"></script>

