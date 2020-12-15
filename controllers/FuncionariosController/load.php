<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->
<?php 
require_once('../../database/Conexao.php');
require_once('../../models/funcionario.class.php');
require_once('../../dao/FuncionarioDao.php');


$conexao = new Conexao();

$FuncionarioDao = new FuncionarioDao($conexao);


$funcionarios = $FuncionarioDao->listAll();


session_start();

if($funcionarios){
    $_SESSION['funcionarios'] = $funcionarios;
}else{
    $_SESSION['funcionarios'] = null;
}


header('Location:../../funcionario.php');