<?php

require_once('interfaces/IAreaDao.php');
require_once('../models/area.class.php');

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
        while ($area = $rs->fetch(PDO::FETCH_OBJ)) {
            $areas[] = $area;
        }

        return $areas;
    }


    /**
     * Create and insert info inner BD
     * 
     * @param Object
     */
    public function create(Area $area): void
    {
        $sql = $this->con->prepare("INSERT INTO area(nome) VALUES (:nome)");
        $sql->bindValue(':nome', $area->getNome());
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
