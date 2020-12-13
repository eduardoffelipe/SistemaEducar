<!--
Autor 1: Eduardo Toledo
Matrícula: 2016203716

------------------------

Autor 2: Devair Silva
Matrícula: 2016204168

-->
<?php
require_once('../database/Conexao.php');
require_once('../models/produto.class.php');
require_once('../dao/ProdutoDao.php');

$option = $_REQUEST['option'];

$conexao = new Conexao();

$produtoDao = new ProdutoDao($conexao);

switch ($option) {
    case 1:
        $name = $_REQUEST['fname'];
        $preco_base = $_REQUEST['fpreco_base'];
        $descricao = $_REQUEST['fdescricao'];
        $id = $_REQUEST['fid'];


        if ($id) { //caso exista o produto, atualiza
            $produto = new Produto($name, $preco_base, $descricao);

            $produto->setId($id);

            $produtoDao->update($produto);

            echo "
            <script>
            alert('Produto atualizado com sucesso!');
            window.location='produtoController.php?option=2';
            </script>
            ";
        } else { // caso não exista, cadastra um novo
            $produto = new Produto($name, $preco_base, $descricao);

            $produtoDao->create($produto);

            echo "
            <script>
            alert('Produto cadastrado com sucesso!');
            window.location='produtoController.php?option=2';
            </script>
            ";
        }

        break;

    case 2:
        $produtos = $produtoDao->all();

        session_start();
        $_SESSION['produtos'] = $produtos;

        header('Location:../restrict/listProducts.php');
        break;

    case 3:
        $id_produto = $_REQUEST['id'];

        $produtoDao->delete($id_produto);

        echo "
                <script>
                alert('Produto excluído com sucesso!');
                window.location='produtoController.php?option=2';
                </script>
                ";

        break;

    case 4:
        $id_produto = $_REQUEST['id'];
        $produto = $produtoDao->show($id_produto);
        
        session_start();

        $_SESSION['produto'] = $produto;

        header('Location: ../singleProduct.php');
       
        break;


    default:
        break;
}
