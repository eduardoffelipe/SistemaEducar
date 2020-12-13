<?php 
class Cidade {
    
    private $idcidade;
    private $nome;
    private $idEstado;
  
  

    // ---- CONSTRUCTOR ---- // 

    /**
     * Class constructor.
     */
    public function __construct($nome, $idEstado)
    {
        $this->nome = $nome;
        $this->idEstado = $idEstado;
    }

    
    // ---- GETTERS AND SETTERS ---- // 

    /**
     * Get the value of idcidade
     * 
     * @return self
     */ 
    public function getId()
    {
        return $this->$idcidade;
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
     * Get the value of reference from Estado
     * 
     * @return self
     */ 
    public function getidEstado()
    {
        return $this->$idEstado;
    }

    /**
     * Set the value of reference from Estado
     *
     * @param Integer
     */ 
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;
    }

   
}

?>