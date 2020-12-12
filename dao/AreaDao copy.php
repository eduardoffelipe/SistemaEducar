<?php

require_once('interfaces/ICidadeDao.php');
require_once('../models/cidade.class.php');

class AreaDao implements IAreaDao
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
     * List all Areas
     * 
     * @return ArrayOfAreas
     */
    public function listAll()
    {
        $rs = $this->con->query("SELECT * FROM area");

        $areas = array();
        while ($prod = $rs->fetch(PDO::FETCH_OBJ)) {
            $areas[] = $area;
        }

        return $areas;
    }


    /**
     * Create and insert info inner BD
     * 
     * @param Object
     */
    public function create(Area $produto): void
    {
        $sql = $this->con->prepare("INSERT INTO produtos (nome, preco_base, descricao) VALUES (:nome, :preco_base, :descricao)");
        $sql->bindValue(':nome', $produto->getNome());
        $sql->bindValue(':preco_base', (float) $produto->getPreco_base());
        $sql->bindValue(':descricao', $produto->getDescricao());
        $sql->execute();
    }


    /**
     * Update info from Area
     * 
     * @param Object
     */
    public function update(Area $area): void
    {
        $sql = $this->con->prepare("UPDATE Area SET nome=:nome WHERE idArea=:id");
        $sql->bindValue(':nome', $area->getNome());
        $sql->bindValue(':id', $area->getId());
        $sql->execute();
    }

    /**
     * Delete Area
     * 
     * @param Integer
     */
    public function delete(int $id): void
    {
        $sql = $this->con->prepare("DELETE from area WHERE idArea=:id");

        $sql->bindValue(':id', $id);
        $sql->execute();
    }


    /**
     * Show single Area
     * 
     * @param Integer
     * @return Object
     */
    public function show(int $id): stdClass
    {
        $sql = $this->con->prepare("SELECT * from area WHERE idArea=:id");

        $sql->bindValue(':id', $id);
        $sql->execute();

        $area = $sql->fetch(PDO::FETCH_OBJ);

        return $area;
    }
}
