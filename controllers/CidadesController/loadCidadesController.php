<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->
<?php 
require_once('../database/Conexao.php');
require_once('../models/cidade.class.php');
require_once('../dao/CidadeDao.php');


$conexao = new Conexao();

$cidadeDao = new CidadeDao($conexao);


$cidades = $cidadeDao->listAll();



session_start();

if($cidades){
    $_SESSION['cidades'] = $cidades;
}else{
    $_SESSION['cidades'] = null;
}


header('Location:../index.php');