<?php
class Endereco
{
    private $idEndereco
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
     * Get the value of idEndereco
     * 
     * @return  self
     */ 
    function getId()
    {
        return $this->idEndereco;
    }

    /**
     * Get the value of rua
     * 
     * @return  self
     */ 
    function getRua()
    {
        return $this->rua;
    }


    /**
     * Set the value of rua
     * 
     * @param String
     */ 
    function setRua($rua)
    {
        $this->rua = $rua;
    }

     /**
     * Get the value of cep
     * 
     * @return  self
     */ 
    function getCep()
    {
        return $this->cep;
    }


    /**
     * Set the value of cep
     * 
     * @param String
     * 
     */ 
    function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * Get the value of numero
     * 
     * @return  self
     * 
     */ 
    function getNumero()
    {
        return $this->numero;
    }


    /**
     * Set the value of numero
     * 
     * @param Integer
     * 
     */ 
    function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get the value of bairro
     * 
     * @return  self
     * 
     */ 
    function getBairro()
    {
        return $this->bairro;
    }


    /**
     * Set the value of bairro
     * 
     * @param String
     */ 
    function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * Get the value of complemento
     * 
     * @return  self
     */ 
    function getComplemento()
    {
        return $this->complemento;
    }


    /**
     * Set the value of complemento
     * 
     * @param String
     */ 
    function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }


    /**
     * Get the value of reference from Cidade
     * 
     * @return  self
     */ 
    function getidCidade()
    {
        return $this->idCidade;
    }


    /**
     * Set the value of reference from Cidade
     * 
     * @param Integer
     */ 
    function setidCidade($idCidade)
    {
        $this->idCidade = $idCidade;
    }
  }