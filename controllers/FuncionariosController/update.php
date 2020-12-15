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

$idPessoa = $_REQUEST['fidPessoa'];
$nome = $_REQUEST['fnome'];
$cpf = $_REQUEST['fcpf'];
$rg = $_REQUEST['frg'];
$orgaoEmissor = $_REQUEST['forgaoEmissor'];
$telefone = $_REQUEST['ftelefone'];
$dataNascimento = $_REQUEST['fdataNascimento'];
$estadoCivil = $_REQUEST['festadoCivil'];
$sexo = $_REQUEST['fsexo'];
$idEndereco = $_REQUEST['fidEndereco'];
$cargo = $_REQUEST['fcargo'];
$email = $_REQUEST['femail'];
$senha = $_REQUEST['fsenha'];




$funcionario = new Funcionario($idPessoa ,$nome, $cpf, $rg, $orgaoEmissor, $telefone, $dataNascimento, $estadoCivil, $sexo, $idEndereco, $cargo, $email, $senha);

            $funcionario->setId($idPessoa);
            $funcionario->setIdEndereco($idEndereco);

            $funcionarioDao->update($funcionario);

            echo "
            <script>
            alert('Funcionario atualizada com sucesso!');
            window.location='load.php';
            </script>
            ";

?>