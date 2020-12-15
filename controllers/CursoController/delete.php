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

  $conexao = new Conexao();

  $cursoDao = new CursoDao($conexao);
  
  $idCurso = $_REQUEST['idCurso'];

  $cursoDao->delete($idCurso);

  echo "
          <script>
          alert('Curso excluído com sucesso!');
          window.location='load.php';
          </script>
          ";


?>