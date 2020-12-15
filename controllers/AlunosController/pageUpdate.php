<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->
<?php 

require_once('../../database/Conexao.php');
require_once('../../models/aluno.class.php');
require_once('../../dao/AlunoDao.php');



$conexao = new Conexao();

$alunoDao = new AlunoDao($conexao);

$idAluno = $_REQUEST['fidEdit'];


$aluno = $alunoDao->showSingleAluno($idAluno);


session_start();

if($aluno){
    $_SESSION['aluno'] = $aluno;
}else{
    $_SESSION['aluno'] = null;
}


header('Location:../../alunoupdate.php');