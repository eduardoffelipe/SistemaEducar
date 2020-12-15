<?php 
class Funcionario {

    private $idPessoa;
    private $cargo;
    private $email;
    private $senha;
  
  

    // ---- CONSTRUCTOR ---- // 

    /**
     * Class constructor.
     */
    public function __construct($idPessoa ,$nome, $cpf, $rg, $orgaoEmissor, $telefone, $dataNascimento, $estadoCivil, $sexo, $idEndereco, $cargo, $email, $senha)
    {
        $this->idPessoa = $idPessoa;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->orgaoEmissor = $orgaoEmissor;
        $this->telefone = $telefone;
        $this->dataNascimento = $dataNascimento;
        $this->estadoCivil = $estadoCivil; 
        $this->sexo = $sexo;
        $this->idEndereco =$idEndereco;
        $this->cargo = $cargo;
        $this->email = $email;
        $this->senha = $senha;

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
    function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of Sexo
     * 
     * @param String
     * 
     */
    function setSexo($sexo)
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
     * Get the value of Cargo
     * 
     * @return self
     * 
     */ 
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set the value of Cargo
     *
     * @param String
     * 
     */ 
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

    }

    /**
     * Get the value of Email
     * 
     * @param String
     * @return self
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of Email
     *
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

    }
   
     /**
     * Get the value of Senha
     * 
     * @param String
     * @return self
     */ 
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set the value of Senha
     *
     */ 
    public function setSenha($senha)
    {
        $this->senha = $senha;

    }
}