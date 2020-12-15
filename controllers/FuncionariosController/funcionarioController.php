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
require_once('../../dao/funcionarioDao.php');

$option = $_REQUEST['option'];

$conexao = new Conexao();

$funcionarioDao = new FuncionarioDao($conexao);

switch ($option) {
    case 1:



        if ($id) { //caso exista funcionario, atualiza
            $funcionario = new Funcionario($nome, $cpf, $rg, $dataNascimento, $orgaoEmissor, $telefone, $estadoCivil, $sexo, $cargo, $email, $senha);

            $funcionario->setId($id);

            $funcionarioDao->update($funcionario);

            echo "
            <script>
            alert('Funcionario atualizada com sucesso!');
            window.location='funcionarioController.php?option=2';
            </script>
            ";
        } else { // caso não exista, cadastra um novo

        break;

    case 2:
        $funcionarios = $funcionarioDao->listAll();

        session_start();
        $_SESSION['funcionarios'] = $funcionarios;

        header('Location:../funcionario.php');
        break;

    case 3:
        $idFuncionario = $_REQUEST['id'];

        $funcionarioDao->delete($idFuncionario;

        echo "
                <script>
                alert('Funcionario excluído com sucesso!');
                window.location='funcionarioController.php?option=2';
                </script>
                ";

        break;

    case 4:
        $idFuncionario = $_REQUEST['id'];
        $funcionario = $funcionarioDao->showSingleFuncionario($idfuncionario);
        
        session_start();

        $_SESSION['funcionario'] = $funcionario;

        header('Location: ../singleFuncionario.php');
       
        break;

    default:
        break;
}
