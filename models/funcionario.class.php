<?php 
class Funcionario extends Pessoa {

    private $cargo;
    private $email;
    private $senha;
  
  

    // ---- CONSTRUCTOR ---- // 

    /**
     * Class constructor.
     */
    public function __construct($nome, $cpf, $rg, $orgaoEmissor, $telefone, $dataNascimento, $estadoCivil, $sexo, $cargo, $email, $senha)
    {
        parent::__construct($nome, $cpf, $rg, $orgaoEmissor, $telefone, $dataNascimento, $estadoCivil, $sexo, $cargo, $email, $senha);
        $this->cargo = $cargo;
        $this->email = $email;
        $this->senha = $senha;

    }

    


    // ---- GETTERS AND SETTERS ---- // 

    /**
     * Get the value of Cargo
     * 
     * @param String
     * @return self
     */ 
    public function getCargo()
    {
        return $this->$cargo;
    }

    /**
     * Set the value of Cargo
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
        return $this->$email;
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
    public function getEmail()
    {
        return $this->$senha;
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