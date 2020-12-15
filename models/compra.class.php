<?php 
class Compra {

    private $idCurso;
    private $idAluno;
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
     * Get the value of idCurso
     * 
     * @return self
     */ 
    public function getIdCurso()
    {
        return $this->$idCurso;
    }

    /**
     * 
     * Set Id Curso
     * 
     * @param Integer
    */
    public function setIdCurso($id)
    {
        $this->id = $idCurso;

    }

    /**
     * 
     * Set Id Aluno
     * 
     * @param Integer
    */
    public function setId($id)
    {
        $this->$idAluno = $id;

    }

    /**
     * Get the value of idAluno
     * 
     * @return self
     */ 
    public function getIdAluno()
    {
        return $this->$idCidade;
    }


    /**
     * Get the value of Valor
     * 
     * @return self
     */ 
    public function getValor()
    {
        return $this->$valor;
    }

    /**
     * Set the value of Valor
     *
     * @param Double
     */ 
    public function setValor($valor)
    {
        $this->valor = $valor;
    }


    /**
     * Get the value of idFormaPagamento
     * 
     * @return self
     */ 
    public function getIdFormaPagamento()
    {
        return $this->$idFormaPagamento;
    }

    /**
     * Set the value of idFormaPagamento
     *
     * @param Integer
     */ 
    public function setIdFormaPagamento($idFormaPagamento)
    {
        $this->idFormaPagamento = $idFormaPagamento;
    }
   
}

?>