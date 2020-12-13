<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->
<?php 
require_once('../database/Conexao.php');
require_once('../models/endereco.class.php');
require_once('../dao/EnderecoDao.php');


$conexao = new Conexao();

$enderecoDao = new EnderecoDao($conexao);


$enderecos = $enderecoDao->listAll();



session_start();

if($enderecos){
    $_SESSION['enderecos'] = $enderecos;
}else{
    $_SESSION['enderecos'] = null;
}


header('Location:../index.php');