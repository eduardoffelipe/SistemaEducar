<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->
<?php 
require_once('../database/Conexao.php');
require_once('../models/aluno.class.php');
require_once('../dao/AlunoDao.php');


$conexao = new Conexao();

$alunoDao = new AlunoDao($conexao);


$alunos = $alunoDao->listAll();



session_start();

if($alunos){
    $_SESSION['alunos'] = $alunos;
}else{
    $_SESSION['alunos'] = null;
}


header('Location:../index.php');