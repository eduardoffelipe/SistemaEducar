<?php 
class Area{

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
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
   
}

?>