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

$funcionarioDao = new FuncionarioDao($conexao);

$idPessoa = $_REQUEST['idPessoa'];

$funcionario = $funcionarioDao->showSingleFuncionarioAll($idPessoa);



session_start();

if($funcionario){
    $_SESSION['funcionario'] = $funcionario;
}else{
    $_SESSION['funcionario'] = null;
}


header('Location:../../funcionariosingle.php');