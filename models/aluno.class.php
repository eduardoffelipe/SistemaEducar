<?php 
class Aluno extends Pessoa {

    private $idPessoa;
    private $nivelAcademico;
  
  

    // ---- CONSTRUCTOR ---- // 

    /**
     * Class constructor.
     */
    public function __construct($nome, $cpf, $rg, $orgaoEmissor, $telefone, $dataNascimento, $estadoCivil, $sexo, $nivelAcademico)
    {
        parent::__construct($nome, $cpf, $rg, $orgaoEmissor, $telefone, $dataNascimento, $estadoCivil, $sexo);
        $this->nivelAcademico = $nivelAcademico;

    }

    


    // ---- GETTERS AND SETTERS ---- // 

    /**
     * Get the value of IdAluno
     * 
     * @return self
     */ 
    public function getId()
    {
        return $this->$idAluno;
    }


    /**
     * Get the value of NivelAcademico
     * 
     * @return self
     */ 
    public function getNivelAcademico()
    {
        return $this->$nivelAcademico;
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