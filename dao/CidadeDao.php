<?php

require_once('interfaces/ICidadeDao.php');
require_once('../models/cidade.class.php');

class CidadeDaoSql implements ICidadeDao
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
     * List all Cidade
     * 
     * @return ArrayOfCidade
     */
    public function listAll()
    {
        $rs = $this->con->query("SELECT * FROM cidade");

        $cidades = array();
        while ($cidade = $rs->fetch(PDO::FETCH_OBJ)) {
            $cidades[] = $cidade;
        }

        return $cidades;
    }


    /**
     * Create and insert info inner BD
     * 
     * @param Object
     */
    public function create(Cidade $cidade): void
    {
        $sql = $this->con->prepare("INSERT INTO cidade(nome, idEstado) VALUES (:nome, :idEstado)");
        $sql->bindValue(':nome', $cidade->getNome());
        $sql->bindValue(':idEstado', $cidade->getIdEstado());
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
        $sql->bindValue(':idEstado', $cidade->getIdEstado());
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
    public function showSingleCidade(int $id): stdClass
    {
        $sql = $this->con->prepare("SELECT * from area WHERE idCidade=:id");

        $sql->bindValue(':id', $id);
        $sql->execute();

        $cidade = $sql->fetch(PDO::FETCH_OBJ);

        return $cidade;
    }
}
