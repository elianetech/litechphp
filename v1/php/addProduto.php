<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
</head>
<body>
    <h2>Formulário de Contato</h2>
    
    <form action="inserirproduto.php" method="post">
        <p>Nome do Produto <input type="text" name="nome"></p>
        <p>Quantidade em Estoque <input type="number" name= "estoque"></p>
       <p>Preço Unitário  <input type="number" step="0.1" name="preco"></p>
       <p>Tamanho <input type="text" name="tamanho"></p>
        <p>Nome da Imagem  <input type="text" name="imagem"></p>
        <input type="submit" value="Enviar" name="Enviar">
        
       

    </form>
</body>
</html>