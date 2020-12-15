<?php 

class Aluno {

    private $idPessoa;
    private $nome;
    private $cpf;
    private $rg;
    private $orgaoEmissor;
    private $telefone;
    private $dataNascimento;
    private $estadoCivil;
    private $sexo;
    private $nivelAcademico;
  
  

    // ---- CONSTRUCTOR ---- // 

    /**
     * Class constructor.
     */
    public function __construct($idPessoa ,$nome, $cpf, $rg, $dataNascimento, $orgaoEmissor, $telefone, $estadoCivil, $sexo, $nivelAcademico, $idEndereco)
    {
        $this->idPessoa = $idPessoa;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->dataNascimento = $dataNascimento;
        $this->orgaoEmissor = $orgaoEmissor;
        $this->telefone = $telefone;
        $this->estadoCivil = $estadoCivil; 
        $this->sexo = $sexo;
        $this->nivelAcademico = $nivelAcademico;
        $this->idEndereco = $idEndereco;

    }

    


    // ---- GETTERS AND SETTERS ---- // 
 /**
     * Get the value of idPessoa
     * 
     * @return  self
     * 
     */ 
    function getId()
    {
        return $this->idPessoa;
    }


    
    /**
     * 
     * Set Id
     * 
     * @param Integer
    */
    public function setId($id)
    {
        $this->idPessoa = $id;

    }
    


    /**
     * Get the value of nome
     * 
     * @return  self
     * 
     */ 
    function getNome()
    {
        return $this->nome;
    }


    /**
     * Set the value of nome
     * 
     * @param String
     * 
     */ 
    function setNome($nome)
    {
        $this->nome = $nome;
    }


    /**
     * Get the value of CPF
     * 
     * @return  self
     * 
     */ 
    function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of nome
     * 
     * @param String
     * 
     */ 
    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }


    /**
     * Get the value of RG
     * 
     * @return  self
     * 
     */ 
    function getRg()
    {
        return $this->rg;
    }

    /**
     * Set the value of RG
     * 
     * @param String
     * 
     */
    function setRg($rg)
    {
        $this->rg = $rg;
    }


    /**
     * Get the value of OrgaoEmissor
     *  
     * @return  self
     * 
     */    
    function getOrgaoEmissor()
    {
        return $this->orgaoEmissor;
    }

    /**
     * Set the value of OrgaoEmissor
     * 
     * @param String
     * 
     */     
    function setOrgaoEmissor($orgaoEmissor)
    {
        $this->orgaoEmissor = $orgaoEmissor;
    }

    /**
     * Get the value of Telefone
     * 
     * @return  self
     * 
     */ 
    function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set the value of Telefone
     * 
     * @param String
     * 
     */ 
    function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * Get the value of DataNascimento
     * 
     * @return  self
     * 
     */ 
    function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * Set the value of DataNascimento
     * 
     * @param String
     * 
     */     
    function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }
 
    /**
     * Get the value of EstadoCivil
     * 
     * @return  self
     * 
     */      
    function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set the value of EstadoCivil
     * 
     * @param String
     * 
     */ 
    function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    }

    /**
     * Get the value of Sexo
     * 
     * @return  self
     * 
     */     
    function getsexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of Sexo
     * 
     * @param String
     * 
     */
    function setsexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * Get the value of refence Endereco
     * 
     * @return  self
     * 
     */    
    function getIdEndereco()
    {
        return $this->idEndereco;
    }

    /**
     * Set the value of refence Endereco
     * 
     * @param Integer
     * 
     */  
    function setIdEndereco($idEndereco)
    {
        $this->idEndereco = $idEndereco;
    }



    /**
     * Get the value of NivelAcademico
     * 
     * @return self
     */ 
    public function getNivelAcademico()
    {
        return $this->nivelAcademico;
    }

    /**
     * Set the value of NivelAcademico
     *
     * @param String
     */ 
    public function setNivelAcademico($nivelAcademico)
    {
        $this->nivelAcademico = $nivelAcademico;

    }

   
}