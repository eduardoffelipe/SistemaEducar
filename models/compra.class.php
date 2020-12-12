<?php 
class Compra {

    private $valor; 
    private $idFormaPagamento;
  

    // ---- CONSTRUCTOR ---- // 

    /**
     * Class constructor.
     */
    public function __construct($valor, $idFormaPagamento)
    {
        $this->valor = $valor;
        $this->idFormaPagamento = $idFormaPagamento;
    }

    
    // ---- GETTERS AND SETTERS ---- // 


    /**
     * Get the value of Valor
     * 
     * @param Double
     * @return self
     */ 
    public function getValor()
    {
        return $this->$valor;
    }

    /**
     * Set the value of Valor
     *
     */ 
    public function setValor($valor)
    {
        $this->valor = $valor;
    }


    /**
     * Get the value of idFormaPagamento
     * 
     * @param Integer
     * @return self
     */ 
    public function getidFormaPagamento()
    {
        return $this->$idFormaPagamento;
    }

    /**
     * Set the value of idFormaPagamento
     *
     */ 
    public function setidFormaPagamento($idFormaPagamento)
    {
        $this->idFormaPagamento = $idFormaPagamento;
    }
   
}

?>