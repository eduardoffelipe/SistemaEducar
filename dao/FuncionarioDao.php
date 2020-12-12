<?php

require_once('interfaces/IFuncionarioDao.php');
require_once('../models/funcionario.php');

class FuncionarioDao implements IFuncionarioDao
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
     * Create Funcionario in the BD, and set infos to Pessoa and Funcionario tables
     * 
     * @param Object
     */
    public function create(Funcionario $funcionario): void
    {
        $sql = $this->con->prepare("INSERT INTO Pessoa(nome, cpf, rg, orgaoEmissor, telefone, dataNascimento, estadoCivil, sexo) 
                                    VALUES (:nome, :cpf, :rg, :orgaoEmissor, :telefone, :dataNascimento, :estadoCivil, :sexo);");
        
        $sql->bindValue(':nome', $funcionario->getNome());
        $sql->bindValue(':cpf', $funcionario->getCpf());
        $sql->bindValue(':rg', $funcionario->getRg());
        $sql->bindValue(':orgaoEmissor', $funcionario->getOrgaoEmissor());
        $sql->bindValue(':telefone', $funcionario->getTelefone());
        $sql->bindValue(':data_nascimento', $funcionario->getDataNascimento());
        $sql->bindValue(':estadoCivil', $funcionario->getEstadoCivil());
        $sql->bindValue(':sexo', $funcionario->getSexo());
        $sql->execute();

        $sql2 = $this->con->prepare("INSERT INTO Funcionario(cargo, email, senha)
                                     VALUES (:cargo, :email, :senha)");
        $sql2->bindValue(':cargo', $aluno);
        $sql2->bindValue(':email', $aluno);
        $sql2->bindValue(':senha', $aluno);
        $sql2->execute();

    }

    /**
     * Update Funcionario in the BD, and set infos to Pessoa and Funcionario tables
     * 
     * @param Object 
     */
    public function update(Funcionario $funcionario): void
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

        $sql2 = $this->con->prepare("UPDATE Funcionario SET cargo=:cargo, email=:email, senha=:senha");
        
        $sql2->bindValue(':cargo', $aluno);
        $sql2->bindValue(':email', $aluno);
        $sql2->bindValue(':senha', $aluno);
        $sql2->execute();
        
    }

    /**
     * Delete Funcionario in the BD by CPF
     * 
     * @param String 
     */
    public function delete($cpf): void
    {
        $sql = $this->con->prepare("DELETE FROM Pessoa WHERE cpf = :cpf");
        $sql->bindValue(':cpf', $cpf);
        $sql->execute();
    }

    /**
     * List all Funcionarios
     * 
     * @return arrayOfFuncionarios
     */
    public function ListAll()
    {
        $rs = $this->con->query("SELECT * FROM funcionario");
        $funcionarios = array();

        while ($funcionario = $rs->fetch(PDO::FETCH_OBJ)) {
            $funcionarios[] = $funcionario;
        }

        return $funcionarios;
    }

    /**
     * List a single Funcionario
     * 
     * @return Funcionario
     */
    public function showSingleFuncionario($cpf)
    {
        $sql = $this->con->prepare("SELECT * FROM Pessoa WHERE cpf = :cpf");
        $sql->bindValue(':cpf', $cpf);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }
}
