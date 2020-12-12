<?php

require_once('interfaces/IAlunoDao.php');
require_once('../models/aluno.php');

class AlunoDao implements IAlunoDao
{
    private $con;

    // ---- CONSTRUCTOR ---- // 

    /**
     * Class construct and estabilish connection
     * 
     * @param Object
     */
    function __construct(Conexao $con)
    {
        $this->con = $con->getConexao();
    }



    // ---- METHODS ---- // 


    /**
     * Create Aluno in the BD, and set infos to Pessoa and Aluno tables
     * 
     * @param Object 
     */
    public function create(Aluno $aluno): void
    {
        $sql = $this->con->prepare("INSERT INTO Pessoa(nome, cpf, rg, orgaoEmissor, telefone, dataNascimento, estadoCivil, sexo) 
                                    VALUES (:nome, :cpf, :rg, :orgaoEmissor, :telefone, :dataNascimento, :estadoCivil, :sexo);");
        
        $sql->bindValue(':nome', $aluno->getNome());
        $sql->bindValue(':cpf', $aluno->getCpf());
        $sql->bindValue(':rg', $aluno->getRg());
        $sql->bindValue(':orgaoEmissor', $aluno->getOrgaoEmissor());
        $sql->bindValue(':telefone', $aluno->getTelefone());
        $sql->bindValue(':data_nascimento', $aluno->getDataNascimento());
        $sql->bindValue(':estadoCivil', $aluno->getEstadoCivil());
        $sql->bindValue(':sexo', $aluno->getSexo());
        $sql->execute();

        $sql2 = $this->con->prepare("INSERT INTO Aluno(nivelAcademico)
                                     VALUES (:nivelAcademico)");
        $sql2->bindValue(':nivelAcademico', $aluno);
        $sql2->execute();

    }

    /**
     * Update Aluno in the BD, and set infos to Pessoa and Aluno tables
     * 
     */
    public function update(Aluno $aluno): void
    {
        $sql = $this->con->prepare("UPDATE Pessoa SET nome=:nome, cpf=:cpf, rg=:rg, orgaoEmissor=:orgaoEmissor, telefone=:telefone, dataNascimento=:dataNascimento, estadoCivil=:estadoCivil, sexo=:sexo");
        
        $sql->bindValue(':nome', $aluno->getNome());
        $sql->bindValue(':cpf', $aluno->getCpf());
        $sql->bindValue(':rg', $aluno->getRg());
        $sql->bindValue(':orgaoEmissor', $aluno->getOrgaoEmissor());
        $sql->bindValue(':telefone', $aluno->getTelefone());
        $sql->bindValue(':data_nascimento', $aluno->getDataNascimento());
        $sql->bindValue(':estadoCivil', $aluno->getEstadoCivil());
        $sql->bindValue(':sexo', $aluno->getSexo());
        $sql->execute();

        $sql2 = $this->con->prepare("UPDATE Aluno SET nivelAcademico=:nivelAcademico");

        $sql2->bindValue(':nivelAcademico', $aluno);
        $sql->execute();

    }

    /**
     * Delete Aluno in the BD, and set infos to Pessoa and Aluno tables
     * 
     */
    public function delete($cpf): void
    {
        $sql = $this->con->prepare("DELETE FROM Pessoa WHERE cpf = :cpf");
        $sql->bindValue(':cpf', $cpf);
        $sql->execute();
    }

    /**
     * List all Alunos
     * 
     * @return arrayOfAlunos
     */
    public function ListAll()
    {
        $rs = $this->con->query("SELECT * FROM pessoas");
        $pessoas = array();

        while ($pessoa = $rs->fetch(PDO::FETCH_OBJ)) {
            $pessoas[] = $pessoa;
        }

        return $pessoas;
    }

    /**
     * List a singleAluno
     * 
     * @return Aluno
     */
    public function showSingleAluno($cpf)
    {
        $sql = $this->con->prepare("SELECT * FROM Pessoa WHERE cpf = :cpf");
        $sql->bindValue(':cpf', $cpf);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }
}
