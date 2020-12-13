<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->
<?php 
require_once('../database/Conexao.php');
require_once('../models/categoria.class.php');
require_once('../dao/CategoriaDao.php');


$conexao = new Conexao();

$categoriaDao = new CategoriaDao($conexao);


$categorias = $categoriaDao->listAll();



session_start();

if($categorias){
    $_SESSION['categorias'] = $categorias;
}else{
    $_SESSION['categorias'] = null;
}


header('Location:../index.php');