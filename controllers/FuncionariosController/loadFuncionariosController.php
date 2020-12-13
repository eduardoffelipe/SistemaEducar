<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->
<?php 
require_once('../database/Conexao.php');
require_once('../models/curso.class.php');
require_once('../dao/CursoDao.php');


$conexao = new Conexao();

$CursoDao = new CursoDao($conexao);


$cursos = $produtoDao->all();


session_start();

if($cursos){
    $_SESSION['cursos'] = $cursos;
}else{
    $_SESSION['cursos'] = null;
}


header('Location:../index.php');