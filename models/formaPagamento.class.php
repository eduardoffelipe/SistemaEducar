<?php 
class FormaPagamento{

    private $descricao;
    private $numeroParcela;
  
  

    // ---- CONSTRUCTOR ---- // 

    /**
     * Class constructor.
     */
    public function __construct($descricao, $numeroParcela)
    {
        $this->descricao = $descricao;
        $this->numero$numeroParcela = $numeroParcela;
    }

    
    // ---- GETTERS AND SETTERS ---- // 


    /**
     * Get the value of Descricao
     * 
     * @param String
     * @return self
     */ 
    public function getDescricao()
    {
        return $this->$descricao;
    }

    /**
     * Set the value of Descricao
     *
     */ 
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * Get the value of reference from NumeroParcela
     * 
     * @param Integer
     * @return self
     */ 
    public function getidEstado()
    {
        return $this->$numeroParcela;
    }

    /**
     * Set the value of reference from NumeroParcela
     *
     */ 
    public function setIdEstado($numeroParcela)
    {
        $this->numero$numeroParcela = $numeroParcela;
    }

   
}

?>