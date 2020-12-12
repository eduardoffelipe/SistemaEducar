<!--
Autor: Davi Borges
Matrícula: 2015208127
-->
<?php 
require_once('../database/Conexao.php');
require_once('../models/produto.class.php');
require_once('../dao/ProdutoDao.php');


$conexao = new Conexao();

$produtoDao = new ProdutoDao($conexao);


$produtos = $produtoDao->all();


session_start();

if($produtos){
    $_SESSION['produtos'] = $produtos;
}else{
    $_SESSION['produtos'] = null;
}


header('Location:../index.php');