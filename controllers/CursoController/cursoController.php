<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->

<?php
require_once('../../database/Conexao.php');
require_once('../../models/curso.class.php');
require_once('../../dao/CursoDao.php');

$option = $_REQUEST['option'];

$conexao = new Conexao();

$cursoDao = new CursoDao($conexao);

switch ($option) {
    case 1:

       

        break;

    case 2:
        $cursos = $cursoDao->listAll();

        session_start();
        $_SESSION['cursos'] = $cursos;

        header('Location:../../curso.php');
        break;

    case 3:
      

        break;

    case 4:
        $idCurso = $_REQUEST['id'];
        $curso = $cursoDao->showSingleCurso($idCurso);
        
        session_start();

        $_SESSION['curso'] = $curso;

        header('Location: ../singlecurso.php');
       
        break;


    default:
        break;
}
