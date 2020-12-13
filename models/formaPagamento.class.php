<?php 
class FormaPagamento{

    private $idFormadePagamento;
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
     * Get the value of idFormaPagamento
     * 
     * @return self
     * 
     */ 
    public function getIdFormaPagamento()
    {
        return $this->$idFormaPagamento;
    }


    /**
     * Get the value of Descricao
     * 
     * @return self
     * 
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
     * Get the value of reference from NumeroParcela
     * 
     * @return self
     * 
     */ 
    public function getidEstado()
    {
        return $this->$numeroParcela;
    }

    /**
     * Set the value of reference from NumeroParcela
     * 
     * @param Integer
     *
     */ 
    public function setIdEstado($numeroParcela)
    {
        $this->numero$numeroParcela = $numeroParcela;
    }

   
}

?>