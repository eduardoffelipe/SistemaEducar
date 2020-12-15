<?php 
class Estado {

    private $idEstado;
    private $nome; 
  

    // ---- CONSTRUCTOR ---- // 

    /**
     * Class constructor.
     */
    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    
    // ---- GETTERS AND SETTERS ---- // 

    /**
     * Get the value of idEstado
     * 
     * @return self
     */ 
    public function getId()
    {
        return $this->$idEstado;
    }

    /**
     * 
     * Set Id
     * 
     * @param Integer
    */
    public function setId($id)
    {
        $this->idEstado = $id;

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
     *
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
   
}

?>