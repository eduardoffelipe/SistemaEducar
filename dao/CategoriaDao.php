<?php

require_once('interfaces/ICategoriaDao.php');
require_once('../models/categoria.class.php');

class CategoriaDao implements ICategoriaDao
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
     * List all Categorias
     * 
     * @return ArrayOfCategorias
     */
    public function listAll()
    {
        $rs = $this->con->query("SELECT * FROM categoria");

        $categorias = array();
        while ($categoria = $rs->fetch(PDO::FETCH_OBJ)) {
            $categorias[] = $categoria;
        }

        return $categorias;
    }


    /**
     * Create and insert info inner BD
     * 
     * @param Object
     */
    public function create(Categoria $categoria): void
    {
        $sql = $this->con->prepare("INSERT INTO categorias (nome) VALUES (:nome)");
        $sql->bindValue(':nome', $categoria->getNome());
        $sql->execute();
    }


    /**
     * Update info from Categoria
     * 
     * @param Object
     */
    public function update(Categoria $categoria): void
    {
        $sql = $this->con->prepare("UPDATE Categoria SET nome=:nome WHERE idCategoria=:id");
        $sql->bindValue(':nome', $categoria->getNome());
        $sql->execute();
    }

    /**
     * Delete Categoria
     * 
     * @param Integer
     */
    public function delete(int $id): void
    {
        $sql = $this->con->prepare("DELETE from categoria WHERE idCategoria=:id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }


    /**
     * Show single Categoria
     * 
     * @param Integer
     * @return Object
     */
    public function showSingleCategoria(int $id): stdClass
    {
        $sql = $this->con->prepare("SELECT * from categoria WHERE idCategoria=:id");

        $sql->bindValue(':id', $id);
        $sql->execute();

        $categoria = $sql->fetch(PDO::FETCH_OBJ);

        return $categoria;
    }
}
