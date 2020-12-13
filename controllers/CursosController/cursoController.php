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
require_once('../../dao/cursoDao.php');

$option = $_REQUEST['option'];

$conexao = new Conexao();

$cursoDao = new CursoDao($conexao);

switch ($option) {
    case 1:
        $name = $_REQUEST['fname'];
        $preco_base = $_REQUEST['fpreco_base'];
        $descricao = $_REQUEST['fdescricao'];
        $id = $_REQUEST['fid'];


        if ($id) { //caso exista curso, atualiza
            $curso = new Curso($name, $preco_base, $descricao);

            $curso->setId($id);

            $cursoDao->update($curso);

            echo "
            <script>
            alert('curso atualizado com sucesso!');
            window.location='produtoController.php?option=2';
            </script>
            ";
        } else { // caso não exista, cadastra um novo
            $curso = new curso($name, $preco_base, $descricao);

            $cursoDao->create($curso);

            echo "
            <script>
            alert('Curso cadastrado com sucesso!');
            window.location='cursoController.php?option=2';
            </script>
            ";
        }

        break;

    case 2:
        $cursos = $cursoDao->all();

        session_start();
        $_SESSION['cursos'] = $cursos;

        header('Location:../restrict/listProducts.php');
        break;

    case 3:
        $id_curso = $_REQUEST['id'];

        $cursoDao->delete($id_curso;

        echo "
                <script>
                alert('Curso excluído com sucesso!');
                window.location='cursoController.php?option=2';
                </script>
                ";

        break;

    case 4:
        $id_curso = $_REQUEST['id'];
        $curso = $cursoDao->show($id_curso);
        
        session_start();

        $_SESSION['curso'] = $curso;

        header('Location: ../singlecurso.php');
       
        break;


    default:
        break;
}
