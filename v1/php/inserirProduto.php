<?php
require('conexao.php');

// captando dados do form 
$nome_produto = $_POST['nome'];
$qtd_estoque =  $_POST['estoque'];
$preco = $_POST['preco'];
$tamanho = $_POST['tamanho'];
$caminho_imagem = $_POST['imagem'];

//INSERIR DADOS NO BANCO
$sql = "INSERT INTO produtos VALUES (DEFAULT, '$nome_produto' , $qtd_estoque, $preco, '$tamanho', '$caminho_imagem')";
$conexao->query($sql);
echo "Dados inseridos";

