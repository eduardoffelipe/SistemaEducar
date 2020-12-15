<?php 

require_once('../../database/Conexao.php');
require_once('../../models/funcionario.class.php');
require_once('../../dao/FuncionarioDao.php');


$conexao = new Conexao();

$funcionarioDao = new FuncionarioDao($conexao);
            
            
$idPessoa = $_REQUEST['fidPessoa'];
$nome = $_REQUEST['fnome'];
$cpf = $_REQUEST['fcpf'];
$rg = $_REQUEST['frg'];
$dataNascimento = $_REQUEST['fdataNascimento'];
$orgaoEmissor = $_REQUEST['forgaoEmissor'];
$telefone = $_REQUEST['ftelefone'];
$estadoCivil = $_REQUEST['festadoCivil'];
$sexo = $_REQUEST['fsexo'];
$cargo = $_REQUEST['fcargo'];
$senha = $_REQUEST['fsenha'];
$email = $_REQUEST['femail'];
$idEndereco = $_REQUEST['fidEndereco'];

            
            
      $funcionario = new Funcionario($idPessoa ,$nome, $cpf, $rg, $orgaoEmissor, $telefone, $dataNascimento, $estadoCivil, $sexo, $idEndereco, $cargo, $email, $senha);

      $funcionarioDao->create($funcionario);

      echo "
        <script>
        alert('Funcionario cadastrado com sucesso!');
        window.location=load.php;
        </script>
        ";



?>