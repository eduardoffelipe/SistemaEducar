<?php

require_once('interfaces/ICursoDao.php');
require_once('../models/curso.class.php');

class CursoDao implements ICursoDao
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
     * List all Cursos
     * 
     * @return ArrayOfCurso
     */
    public function listAll()
    {
        $rs = $this->con->query("SELECT * FROM curso");

        $cursos = array();
        while ($curso = $rs->fetch(PDO::FETCH_OBJ)) {
            $cursos[] = $curso;
        }

        return $cursos;
    }


    /**
     * Create and insert info inner BD
     * 
     * @param Object
     */
    public function create(Curso $curso): void
    {
        $sql = $this->con->prepare("INSERT INTO curso(nome, descricao, certificacao, preRequisito, publicoAlvo, cargaHoraria, idCategoria, idArea) VALUES (:nome, :descricao, certificacao, :preRequisito, :publicoAlvo, :cargaHoraria, :idCategoria, :idArea)");
        $sql->bindValue(':nome', $curso->getNome());
        $sql->bindValue(':descricao', $curso->getDescricao());
        $sql->bindValue(':certificacao', $curso->getCertificacao());
        $sql->bindValue(':preRequisito', $curso->getPreRequisito());
        $sql->bindValue(':publicoAlvo', $curso->getPublicoAlvo());
        $sql->bindValue(':cargaHoraria', $curso->getCargaHoraria());
        $sql->bindValue(':idCategoria', $curso->getIdCategoria());
        $sql->bindValue(':idArea', $curso->getIdArea());
        $sql->execute();
    }


    /**
     * Update info from curso
     * 
     * @param Object
     */
    public function update(Curso $curso): void
    {
        $sql = $this->con->prepare("UPDATE curso SET (nome=:nome, descricao=:descricao, certificacao=:certificacao, preRequisito=:preRequisito, publicoAlvo=:publicoAlvo, cargaHoraria=:cargaHoraria, idCategoria=:idCategoria, idArea=:idArea) WHERE idCurso=:id");        
        $sql->bindValue(':id', $curso->getId());
        $sql->bindValue(':nome', $curso->getNome());
        $sql->bindValue(':descricao', $curso->getDescricao());
        $sql->bindValue(':certificacao', $curso->getCertificacao());
        $sql->bindValue(':preRequisito', $curso->getPreRequisito());
        $sql->bindValue(':publicoAlvo', $curso->getPublicoAlvo());
        $sql->bindValue(':cargaHoraria', $curso->getCargaHoraria());
        $sql->bindValue(':idCategoria', $curso->getIdCategoria());
        $sql->bindValue(':idArea', $curso->getIdArea());
        $sql->execute();
    }

    /**
     * Delete Cidade
     * 
     * @param Integer
     */
    public function delete(int $id): void
    {
        $sql = $this->con->prepare("DELETE from curso WHERE idCurso=:id");

        $sql->bindValue(':id', $idCurso);
        $sql->execute();
    }


    /**
     * Show single Cidade
     * 
     * @param Integer
     * @return Object
     * 
     */
    public function showSingleCurso(int $id): stdClass
    {
        $sql = $this->con->prepare("SELECT * from curso WHERE idCurso=:id");

        $sql->bindValue(':id', $idCurso);
        $sql->execute();

        $curso = $sql->fetch(PDO::FETCH_OBJ);

        return $curso;
    }
}
?>