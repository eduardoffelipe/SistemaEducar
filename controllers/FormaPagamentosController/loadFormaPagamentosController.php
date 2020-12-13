<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->
<?php 
require_once('../database/Conexao.php');
require_once('../models/formaPagamento.class.php');
require_once('../dao/FormaPagamentoDao.php');


$conexao = new Conexao();

$formaPagamentoDao = new FormaPagamentoDao($conexao);


$formaPagamentos = $formaPagamentoDao->listAll();



session_start();

if($formaPagamentos){
    $_SESSION['formaPagamentos'] = $formaPagamentos;
}else{
    $_SESSION['formaPagamentos'] = null;
}


header('Location:../index.php');