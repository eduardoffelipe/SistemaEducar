<?php
abstract class Pessoa
{
    private $nome;
    private $cpf;  
    private $rg;
    private $orgaoEmissor;
    private $dataNascimento;
    private $telefone;
    private $estadoCivil;
    private $sexo;
    private $idEndereco;

    
    // ---- CONSTRUCTOR ---- // 

    /**
     * Class constructor.
     */
    function __construct($nome, $cpf, $rg, $orgaoEmissor, $telefone, $dataNascimento, $estadoCivil, $sexo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->orgaoEmissor = $orgaoEmissor;
        $this->telefone = $telefone;
        $this->dataNascimento = $dataNascimento;
        $this->estadoCivil = $estadoCivil;
        $this->sexo = $sexo;
        $this->idEndereco = $idEndereco;
    }


    // ---- GETTERS AND SETTERS ---- // 

    /**
     * Get the value of nome
     * 
     * @param String
     * @return  self
     */ 
    function getNome()
    {
        return $this->nome;
    }


    /**
     * Set the value of nome
     */ 
    function setNome($nome)
    {
        $this->nome = $nome;
    }


    /**
     * Get the value of CPF
     * 
     * @param String
     * @return  self
     */ 
    function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of nome
     */ 
    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }


    /**
     * Get the value of RG
     * 
     * @param String
     * @return  self
     */ 
    function getRg()
    {
        return $this->rg;
    }

    /**
     * Set the value of RG
     */
    function setRg($rg)
    {
        $this->rg = $rg;
    }


    /**
     * Get the value of OrgaoEmissor
     * 
     * @param String 
     * @return  self
     */    
    function getOrgaoEmissor()
    {
        return $this->orgaoEmissor;
    }

    /**
     * Set the value of OrgaoEmissor
     */     
    function setOrgaoEmissor($orgaoEmissor)
    {
        $this->orgaoEmissor = $orgaoEmissor;
    }

    /**
     * Get the value of Telefone
     * 
     * @param String
     * @return  self
     */ 
    function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of Telefone
     */ 
    function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * Get the value of DataNascimento
     * 
     * @param String
     * @return  self
     */ 
    function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * Set the value of DataNascimento
     */     
    function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }
 
    /**
     * Get the value of EstadoCivil
     * 
     * @param String
     * @return  self
     */      
    function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set the value of EstadoCivil
     */ 
    function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    }

    /**
     * Get the value of Sexo
     * 
     * @param String
     * @return  self
     */     
    function getsexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of Sexo
     */
    function setsexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * Get the value of refence Endereco
     * 
     * @param Integer
     * @return  self
     */    
    function getIdEndereco()
    {
        return $this->idEndereco;
    }

    /**
     * Set the value of refence Endereco
     */  
    function setIdEndereco($idEndereco)
    {
        $this->idEndereco = $idEndereco;
    }

}
