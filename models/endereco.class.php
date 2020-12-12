<?php
class Endereco
{
    private $rua;
    private $cep;  
    private $numero;
    private $bairro;
    private $complemento;
    public  $idCidade;


  // ---- CONSTRUCTOR ---- // 

  /**
   * Class constructor.
   */
  function __construct($rua, $cep, $numero, $bairro, $complemento, $idCidade)
    {
        $this->rua = $rua;
        $this->cep = $cep;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->complemento = $complemento;
        $this->idCidade = $idCidade;
    }


    // ---- GETTERS AND SETTERS ---- // 

    /**
     * Get the value of rua
     * 
     * @param String
     * @return  self
     */ 
    function getRua()
    {
        return $this->rua;
    }


    /**
     * Set the value of rua
     */ 
    function setRua($rua)
    {
        $this->rua = $rua;
    }

     /**
     * Get the value of cep
     * 
     * @param String
     * @return  self
     */ 
    function getCep()
    {
        return $this->cep;
    }


    /**
     * Set the value of cep
     */ 
    function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * Get the value of numero
     * 
     * @param Integer
     * @return  self
     */ 
    function getNumero()
    {
        return $this->numero;
    }


    /**
     * Set the value of numero
     */ 
    function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get the value of bairro
     * 
     * @param String
     * @return  self
     */ 
    function getBairro()
    {
        return $this->bairro;
    }


    /**
     * Set the value of bairro
     */ 
    function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * Get the value of complemento
     * 
     * @param String
     * @return  self
     */ 
    function getComplemento()
    {
        return $this->complemento;
    }


    /**
     * Set the value of complemento
     */ 
    function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }


    /**
     * Get the value of reference from Cidade
     * 
     * @param Integer
     * @return  self
     */ 
    function getidCidade()
    {
        return $this->idCidade;
    }


    /**
     * Set the value of reference from Cidade
     */ 
    function setidCidade($idCidade)
    {
        $this->idCidade = $idCidade;
    }
  }