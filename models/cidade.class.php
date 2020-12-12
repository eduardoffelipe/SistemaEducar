<?php 
class Cidade {

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
     * Get the value of nome
     * 
     * @param String
     * @return self
     */ 
    public function getNome()
    {
        return $this->$nome;
    }

    /**
     * Set the value of nome
     *
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Get the value of reference from Estado
     * 
     * @param Integer
     * @return self
     */ 
    public function getidEstado()
    {
        return $this->$idEstado;
    }

    /**
     * Set the value of reference from Estado
     *
     */ 
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;
    }

   
}

?>