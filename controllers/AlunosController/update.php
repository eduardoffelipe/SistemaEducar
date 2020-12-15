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

$idPessoa = $_REQUEST['fidPessoa'];
$nome = $_REQUEST['fnome'];
$cpf = $_REQUEST['fcpf'];
$rg = $_REQUEST['frg'];
$orgaoEmissor = $_REQUEST['forgaoEmissor'];
$telefone = $_REQUEST['ftelefone'];
$dataNascimento = $_REQUEST['fdataNascimento'];
$estadoCivil = $_REQUEST['festadoCivil'];
$sexo = $_REQUEST['fsexo'];
$nivelAcademico = $_REQUEST['fnivelAcademico'];
$idEndereco = $_REQUEST['fidEndereco'];


$aluno = new Aluno($idPessoa ,$nome, $cpf, $rg, $dataNascimento, $orgaoEmissor, $telefone, $estadoCivil, $sexo, $nivelAcademico, $idEndereco);

            $aluno->setId($idPessoa);

            $alunoDao->update($aluno);

            echo "
            <script>
            alert('Aluno atualizada com sucesso!');
            window.location='load.php';
            </script>
            ";

?>