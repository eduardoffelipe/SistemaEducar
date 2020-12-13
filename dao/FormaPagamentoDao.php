<?php

require_once('interfaces/IFormaPagamentoDao.php');
require_once('../models/formaPagamento.php');

class FormaPagamentoDao implements IFormaPagamentoDao
{
    private $con;


    // ---- CONSTRUCTOR ---- // 

    /**
     * Class construct and estabilish connection
     * 
     * @param Object
     */
    function __construct(Conexao $con)
    {
        $this->con = $con->getConexao();
    }


    // ---- METHODS ---- // 


    /**
     * Create FormaPagamento in the BD
     * 
     * @param Object
     */
    public function create(FormaPagamento $formaPagamento): void
    {
        $sql = $this->con->prepare("INSERT INTO formaPagamento(descricao, numeroParcela) 
                                    VALUES (:descricao, :numeroParcela);");
        
        $sql->bindValue(':descricao', $formaPagamento->getDescricao());
        $sql->bindValue(':numeroParcela', $formaPagamento->getNumeroParcela());
        $sql->execute();

    }

    /**
     * Update FormaPagamento in the BD
     * 
     * @param Object
     *  
     */
    public function update(FormaPagamento $formaPagamento): void
    {
        $sql = $this->con->prepare("UPDATE formaPagamento SET (descricao=:descricao, numeroParcela=:numeroParcela)");
 
        $sql->bindValue(':descricao', $formaPagamento->getDescricao());
        $sql->bindValue(':numeroParcela', $formaPagamento->getNumeroParcela());
        $sql->execute();

    }

    /**
     * Delete FormaPagamento in the BD
     * 
     * @param Integer 
     */
    public function delete($id): void
    {
        $sql = $this->con->prepare("DELETE FROM Pessoa WHERE idFormaPagamento = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    /**
     * List all FormaPagamentos
     * 
     * @return arrayOfFormaPagamentos
     */
    public function ListAll()
    {
        $rs = $this->con->query("SELECT * FROM formaPagamento");
        $formaPagamentos = array();

        while ($formaPagamento = $rs->fetch(PDO::FETCH_OBJ)) {
            $formaPagamentos[] = $formaPagamento;
        }

        return $formaPagamentos;
    }

    /**
     * List a single FormaPagamento
     * 
     * @return FormaPagamento
     */
    public function showSingleFormaPagamento($id)
    {
        $sql = $this->con->prepare("SELECT * FROM Pessoa WHERE idFormaPagamento = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }
}
