<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->
<?php 
require_once('../database/Conexao.php');
require_once('../models/estado.class.php');
require_once('../dao/EstadoDao.php');


$conexao = new Conexao();

$estadoDao = new EstadoDao($conexao);


$estados = $estadoDao->listAll();



session_start();

if($estados){
    $_SESSION['estados'] = $estados;
}else{
    $_SESSION['estados'] = null;
}


header('Location:../index.php');