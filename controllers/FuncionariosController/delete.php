<?php
  
  require_once('../../database/Conexao.php');
  require_once('../../models/funcionario.class.php');
  require_once('../../dao/FuncionarioDao.php'); 

  $conexao = new Conexao();

  $funcionarioDao = new FuncionarioDao($conexao);
  
  $idPessoa = $_REQUEST['idPessoa'];

  $funcionarioDao->delete($idPessoa);

  echo "
          <script>
          alert('Funcionario excluído com sucesso!');
          window.location='load.php';
          </script>
          ";


?>