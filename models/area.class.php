<?php 
class Area{

    private $idArea;
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
     * Get the value of idArea
     * 
     * 
     * @return self
     */ 
    public function getId()
    {
        return $this->$idArea;
    }

    /**
     * 
     * Set Id
     * 
     * @param Integer
    */
    public function setId($id)
    {
        $this->idArea = $id;
    }


    /**
     * Get the value of nome
     * 
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
   
}

?>