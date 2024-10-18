
$('#formAdicionarProduto').on('submit', function(event) {
    event.preventDefault(); // Previne o envio padrão do formulário

    const nome_produto = $('#nome_produto').val();
    const descricao_produto = $('#descricao_produto').val();
    const preco_produto = $('#preco_produto').val();
    const estoque_produto = $('#estoque_produto').val();

    // Enviando dados via AJAX
    $.ajax({
        url: './conexoes/inserir.php', // Mudou para inserir.php
        type: 'POST',
        contentType: 'application/json',
        data: JSON.stringify({
            nome_produto: nome_produto,
            descricao_produto: descricao_produto,
            preco_produto: preco_produto,
            estoque_produto: estoque_produto
        }),
        success: function(response) {
            $('#resultado').text(response); // Mostra a resposta do PHP
            // $('#formAdicionarProduto')[0].reset(); // Limpa o formulário
        },
        error: function(xhr, status, error) {
            $('#resultado').text('Erro: ' + error);
        }
    });
});

