<?php
require_once "./conexoes/conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>
    <header>
        <h1>Relatório de Vendas</h1>
        <p>Data: <span id="dataDeHoje"></span></p>
    </header>

    <section id="introducao">
        <p>Este é um CRUD para armazenar produtos</p>
    </section>
    <div class="linha-vertical"></div>
    <section id="dados">
        <h2>Dados de Vendas</h2>
        <div class="conjuntoBotao">
            <a href="produtosInserir.php">Adicionar</a>
            <a href="inserir.php">Editar</a>
            <a href="inserir.php">Excluir</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Valor Unitário</th>
                    <th>Valor Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Produto A</td>
                    <td>100</td>
                    <td>R$ 50,00</td>
                    <td>R$ 5.000,00</td>
                </tr>
                <tr>
                    <td>Produto B</td>
                    <td>150</td>
                    <td>R$ 30,00</td>
                    <td>R$ 4.500,00</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="conclusao">
        <p>Temos um total de <span id="totalProdutos"></span>produtos</p>
    </section>

</body>
</html>
<script src="./scripts/script.js"></script>

<!-- <script>
    // retorno da data atual
    const dataDeHoje = $('#dataDeHoje');
    const data = new Date().toLocaleDateString();
    
    dataDeHoje.text(data);
    //fim da função

    //funcao para somar quantos produtos tem

    

</script> -->