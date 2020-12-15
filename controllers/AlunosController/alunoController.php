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
require_once('../../dao/alunoDao.php');


$conexao = new Conexao();

$alunoDao = new AlunoDao($conexao);

switch ($option) {
    case 1:
       

        break;

    case 2:
        $alunos = $alunoDao->listAll();

        session_start();
        $_SESSION['alunos'] = $alunos;

        header('Location:../aluno.php');
        break;

    case 3:
        $idAluno = $_REQUEST['id'];

        $alunoDao->delete($idAluno;

        echo "
                <script>
                alert('Aluno excluído com sucesso!');
                window.location='alunoController.php?option=2';
                </script>
                ";

        break;

    case 4:
        $idAluno = $_REQUEST['id'];
        $aluno = $alunoDao->showSingleAluno($idAluno);
        
        session_start();

        $_SESSION['aluno'] = $aluno;

        header('Location: ../singleAluno.php');
       
        break;

    default:
        break;
}
