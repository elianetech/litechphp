<?php

// CONEXÃO COM O BANCO
$servidor = 'localhost';
$user_banco = 'root';
$senha_banco = '';
$banco = 'projetoloja';

$conexao = new mysqli($servidor, $user_banco, $senha_banco, $banco);