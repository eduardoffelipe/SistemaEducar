<?php

require_once('interfaces/ICursoDao.php');
require_once('../../models/curso.class.php');

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
     * List all Cursos
     * 
     * @return ArrayOfCurso
     */
    public function listAllForTable()
    {
        $rs = $this->con->query("SELECT c.idCurso AS ID, c.nome AS NomeCurso, cat.nome AS NomeCategoria, a.nome AS NomeArea FROM curso c 
                                    INNER JOIN categoria cat ON c.idCategoria = cat.idCategoria
                                    INNER JOIN area a ON c.idArea = a.idArea");

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
        $sql = $this->con->prepare('INSERT INTO curso(idCurso, Nome, Descricao, Certificacao, PreRequisito, PublicoAlvo, CargaHoraria, idCategoria, idArea) 
                                                VALUES (:idCurso, :nome, :descricao, :certificacao, :preRequisito, :publicoAlvo, :cargaHoraria, :idCategoria, :idArea)');
        
        $sql->bindValue(':idCurso', $curso->getId());
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
        $sql = $this->con->prepare("UPDATE Curso SET idCurso=:idCurso, Nome=:nome, Descricao=:descricao, Certificacao=:certificacao, PreRequisito=:preRequisito, PublicoAlvo=:publicoAlvo, CargaHoraria=:cargaHoraria, idCategoria=:idCategoria, idArea=:idArea WHERE idCurso=:idCurso");        
        
        $sql->bindValue(':idCurso', $curso->getId());
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
    public function delete(int $idCurso): void
    {
        $sql = $this->con->prepare("DELETE FROM curso WHERE idCurso= :idCurso");
        $sql->bindParam(':idCurso', $idCurso);
        $sql->execute();
    }


    /**
     * Show single Cidade
     * 
     * @param Integer
     * @return Object
     * 
     */
    public function showSingleCurso(int $idCurso): stdClass
    {
        $sql = $this->con->prepare("SELECT * from curso WHERE idCurso=:idCurso");

        $sql->bindValue(':idCurso', $idCurso);
        $sql->execute();

        $curso = $sql->fetch(PDO::FETCH_OBJ);

        return $curso;
    }

    /**
     * Show single Cidade
     * 
     * @param Integer
     * @return Object
     * 
     */
    public function showSingleCursoAll(int $idCurso): stdClass
    {
        $sql = $this->con->prepare("SELECT  C.idCurso, C.Nome AS Curso, A.Nome AS Area, CAT.Nome AS Categoria, C.Descricao, C.Certificacao, C.PreRequisito, C.PublicoAlvo, C.CargaHoraria from Curso C 
                                    INNER JOIN Area A ON C.idArea = A.idArea    
                                    INNER JOIN Categoria CAT ON C.idCategoria = CAT.idCategoria    
                                    WHERE idCurso=:idCurso");

        $sql->bindValue(':idCurso', $idCurso);
        $sql->execute();

        $curso = $sql->fetch(PDO::FETCH_OBJ);

        return $curso;
    }


}
?>