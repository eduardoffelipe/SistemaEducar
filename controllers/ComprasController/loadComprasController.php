<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->
<?php 
require_once('../database/Conexao.php');
require_once('../models/compra.class.php');
require_once('../dao/CompraDao.php');


$conexao = new Conexao();

$compraDao = new CompraDao($conexao);


$compras = $compraDao->listAll();



session_start();

if($compras){
    $_SESSION['compras'] = $compras;
}else{
    $_SESSION['compras'] = null;
}


header('Location:../index.php');