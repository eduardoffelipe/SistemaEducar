<?php 
class Curso{

    private $idCurso;
    private $nome;
    private $descricao;
    private $certificacao;
    private $preRequisito;
    private $publicoAlvo;
    private $cargaHoraria;
    Private $idCategoria;
    private $idArea;
  

    // ---- CONSTRUCTOR ---- // 

    /**
     * Class constructor.
     */
    public function __construct($nome, $descricao, $certificacao, $preRequisito, $publicoAlvo, $cargaHoraria, $idCategoria, $idArea)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->preRequisito = $preRequisito;
        $this->publicoAlvo = $publicoAlvo;
        $this->cargaHoraria = $cargaHoraria;
        $this->idCategoria = $idCategoria;
        $this->idArea = $idArea;


    }

    
    // ---- GETTERS AND SETTERS ---- // 
    

     /**
     * Get the value of idCurso
     * 
     * @return self
     */ 
    public function getId()
    {
        return $this->$idCurso;
    }



    /**
     * Get the value of nome
     * 
     * @return self
     */ 
    public function getNome()
    {
        return $this->$nome;
    }

    /**
     * Set the value of nome
     *
     * @param String
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Get the value of Descricao
     * 
     * @return self
     */ 
    public function getDescricao()
    {
        return $this->$descricao;
    }

    /**
     * Set the value of Descricao
     *
     * @param String
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }


    /**
     * Get the value of Certificacao
     * 
     * @return self
     */ 
    public function getCertificacao()
    {
        return $this->$certificacao;
    }


    /**
     * Set the value of Certificacao
     *
     * @param String
     */ 
    public function setCertificacao($certificacao)
    {
        $this->certificacao = $certificacao;
    }


    /**
     * Get the value of PreRequisito
     * 
     * @return self
     */ 
    public function getPreRequisito()
    {
        return $this->$preRequisito;
    }

    /**
     * Set the value of PreRequisito
     *
     * @param String
     */ 
    public function setPreRequisito($preRequisito)
    {
        $this->preRequisito = $preRequisito;
    }
    

    /**
     * Get the value of PublicoAlvo
     * 
     * @return self
     */ 
    public function getPublicoAlvo()
    {
        return $this->$publicoAlvo;
    }

    /**
     * Set the value of PublicoAlvo
     *
     * @param String
     */ 
    public function setPublicoAlvo($publicoAlvo)
    {
        $this->publicoAlvo = $publicoAlvo;
    }


    /**
     * Get the value of CargaHoraria
     * 
     * @return self
     */ 
    public function getCargaHoraria()
    {
        return $this->$cargaHoraria;
    }

    /**
     * Set the value of CargaHoraria
     *
     * @param String
     */ 
    public function setCargaHoraria($cargaHoraria)
    {
        $this->cargaHoraria = $cargaHoraria;
    }
   

    /**
     * Get the value of idCategoria
     * 
     * @return self
     */ 
    public function getidCategoria()
    {
        return $this->$idCategoria;
    }

    /**
     * Set the value of idCategoria
     *
     * @param Integer
     */ 
    public function setidCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;
    }


    /**
     * Get the value of idArea
     * 
     * @return self
     */ 
    public function getidArea()
    {
        return $this->$idArea;
    }

    /**
     * Set the value of idArea
     *
     * @param Integer
     */ 
    public function setidArea($idArea)
    {
        $this->idArea = $idArea;
    }
}

?>