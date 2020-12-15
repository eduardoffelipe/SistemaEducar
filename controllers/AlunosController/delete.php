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

      $idPessoa = $_REQUEST['idPessoa'];
      $alunoDao->delete($idPessoa);

      echo "
        <script>
        alert('Aluno excluído com sucesso!');
        window.location='load.php';
        </script>
        ";
?>