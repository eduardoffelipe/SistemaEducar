<!--
Autor: Davi Borges
Matrícula: 2015208127
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