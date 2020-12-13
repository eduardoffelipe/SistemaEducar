<?php

require_once('interfaces/ICompraDao.php');
require_once('../models/compra.class.php');

class CompraDao implements ICompraDao
{

    // ---- CONSTRUCTOR ---- // 

    /**
     * Class constructor and establish connection with bd.
     * 
     */
    public function __construct(Conexao $con)
    {
        $this->con = $con->getConexao();
    }


    // ---- METHODS ---- // 

    /**
     * List all Compras
     * 
     * @return ArrayOfCompras
     */
    public function listAll()
    {
        $rs = $this->con->query("SELECT * FROM compra");

        $compras = array();
        while ($compra = $rs->fetch(PDO::FETCH_OBJ)) {
            $compras[] = $compra;
        }

        return $compras;
    }


    /**
     * Create and insert info inner BD
     * 
     * @param Object
     */
    public function create(Compra $compra): void
    {
        $sql = $this->con->prepare("INSERT INTO compra (idCurso, idAluno, idFormaPagamento, valor) VALUES (:idCurso, :idAluno, :idFormaPagamento, :valor)");
        $sql->bindValue(':idCurso', $compra->getIdCurso());
        $sql->bindValue(':idAluno', $compra->getIdAluno());
        $sql->bindValue(':idFormaPagamento', $compra->getIdFormaPagamento());
        $sql->bindValue(':valor', $compra->getValor());
        $sql->execute();
    }


    /**
     * Update info from Compra
     * 
     * @param Object
     */
    public function update(Compra $compra): void
    {
        $sql = $this->con->prepare("UPDATE compra SET (idFormaPagamento=:idFormaPagamento, valor=:valor) WHERE idCurso=:idCurso AND idArea=:idArea");
        $sql->bindValue(':idFormaPagamento', $compra->getIdFormaPagamento());
        $sql->bindValue(':valor', $compra->getValor());
        $sql->bindValue(':idCurso', $compra->getIdCurso());
        $sql->bindValue(':idAluno', $compra->getIdAluno());
        $sql->execute();
    }

    /**
     * Delete Compra
     * 
     * @param Integer
     */
    public function delete(int $idCurso, int $idAluno): void
    {
        $sql = $this->con->prepare("DELETE from compra WHERE idCurso=:idCurso AND idAluno=:idAluno");

        $sql->bindValue(':idCurso', $idCurso);
        $sql->bindValue(':idAluno', $idAluno);
        $sql->execute();
    }


    /**
     * Show single Compra
     * 
     * @param Integer
     * @return Object
     */
    public function showSingleCompra(int $idCurso, int $idAluno): stdClass
    {
        $sql = $this->con->prepare("SELECT * from compra WHERE idCurso=:idCurso AND idAluno=:idAluno");

        $sql->bindValue(':idCurso', $idCurso);
        $sql->bindValue(':idAluno', $idAluno);
        $sql->execute();

        $compra = $sql->fetch(PDO::FETCH_OBJ);

        return $compra;
    }
}
