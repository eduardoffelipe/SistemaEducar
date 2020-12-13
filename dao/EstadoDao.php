<?php

require_once('interfaces/IEstadoDao.php');
require_once('../models/estado.class.php');

class EstadoDao implements IEstadoDao
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
     * List all Estado
     * 
     * @return ArrayOfEstado
     */
    public function listAll()
    {
        $rs = $this->con->query("SELECT * FROM estado");

        $estados = array();
        while ($estado = $rs->fetch(PDO::FETCH_OBJ)) {
            $estados[] = $estado;
        }

        return $estados;
    }


    /**
     * Create and insert info inner BD
     * 
     * @param Object
     */
    public function create(Estado $estado): void
    {
        $sql = $this->con->prepare("INSERT INTO estado(nome, idEstado) VALUES (:nome, :idEstado)");
        $sql->bindValue(':nome', $estado->getNome());
        $sql->bindValue(':isEstado', $idEstado->getId());
        $sql->execute();
    }


    /**
     * Update info from Cidade
     * 
     * @param Object
     */
    public function update(Cidade $Cidade): void
    {
        $sql = $this->con->prepare("UPDATE Cidade SET nome=:nome, idEstado=:idEstado WHERE idCidade=:id");
        $sql->bindValue(':nome', $Cidade->getNome());
        $sql->bindValue(':id', $Cidade->getId());
        $sql->bindValue(':idEstado', $idEstado->getIdEstado());
        $sql->execute();
    }

    /**
     * Delete Cidade
     * 
     * @param Integer
     */
    public function delete(int $id): void
    {
        $sql = $this->con->prepare("DELETE from area WHERE idCidade=:id");

        $sql->bindValue(':id', $idCidade);
        $sql->execute();
    }


    /**
     * Show single Cidade
     * 
     * @param Integer
     * @return Object
     */
    public function show(int $id): stdClass
    {
        $sql = $this->con->prepare("SELECT * from area WHERE idCidade=:id");

        $sql->bindValue(':id', $id);
        $sql->execute();

        $cidade = $sql->fetch(PDO::FETCH_OBJ);

        return $cidade;
    }
}
