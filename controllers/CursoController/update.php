<?php

require_once('../../database/Conexao.php');
require_once('../../models/curso.class.php');
require_once('../../dao/CursoDao.php');

$conexao = new Conexao();

$cursoDao = new CursoDao($conexao);

$idCurso = $_REQUEST['fidCurso'];
$nome = $_REQUEST['fnome'];
$descricao = $_REQUEST['fdescricao'];
$certificacao = $_REQUEST['fcertificacao'];
$preRequisito = $_REQUEST['fpreRequisito'];
$publicoAlvo = $_REQUEST['fpublicoAlvo'];
$cargaHoraria = $_REQUEST['fcargaHoraria'];
$idCategoria = $_REQUEST['fidCategoria'];
$idArea = $_REQUEST['fidArea'];

  $curso = new Curso($idCurso ,$nome, $descricao, $certificacao, $preRequisito, $publicoAlvo, $cargaHoraria, $idCategoria, $idArea);

  $curso->setId($idCurso);
  


  $cursoDao->update($curso);

  echo "
  <script>
  alert('Curso atualizado com sucesso!');
  window.location='load.php';
  </script>
  "

?>