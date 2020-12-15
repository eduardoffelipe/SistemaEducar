<?php

require_once('interfaces/IAlunoDao.php');
require_once('../../models/aluno.class.php');

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
        $sql = $this->con->prepare("INSERT INTO pessoa(idPessoa, Nome, CPF, Rg, OrgaoEmissor, Telefone, DataNascimento, EstadoCivil, Sexo, idEndereco) 
                                    VALUES (:idPessoa, :nome, :cpf, :rg, :orgaoEmissor, :telefone, :dataNascimento, :estadoCivil, :sexo, :idEndereco);");
        
        $sql->bindValue(':idPessoa', $aluno->getId());
        $sql->bindValue(':nome', $aluno->getNome());
        $sql->bindValue(':cpf', $aluno->getCpf());
        $sql->bindValue(':rg', $aluno->getRg());
        $sql->bindValue(':orgaoEmissor', $aluno->getOrgaoEmissor());
        $sql->bindValue(':telefone', $aluno->getTelefone());
        $sql->bindValue(':dataNascimento', $aluno->getDataNascimento());
        $sql->bindValue(':estadoCivil', $aluno->getEstadoCivil());
        $sql->bindValue(':sexo', $aluno->getSexo());
        $sql->bindValue(':idEndereco', $aluno->getIdEndereco());
        $sql->execute();

        $sql2 = $this->con->prepare("INSERT INTO aluno(idPessoa, NivelAcademico)
                                     VALUES (:idPessoa, :nivelAcademico)");
        $sql2->bindValue(':idPessoa', $aluno->getId());
        $sql2->bindValue(':nivelAcademico', $aluno->getNivelAcademico());
        $sql2->execute();

    }

    /**
     * Update Aluno in the BD, and set infos to Pessoa and Aluno tables
     * 
     */
    public function update(Aluno $aluno): void
    {
        $sql = $this->con->prepare("UPDATE pessoa SET Nome=:nome, CPF=:cpf, RG=:rg, OrgaoEmissor=:orgaoEmissor, Telefone=:telefone, DataNascimento=:dataNascimento, EstadoCivil=:estadoCivil, Sexo=:sexo, idEndereco=:idEndereco WHERE idPessoa=:idPessoa;");
        
        $sql->bindValue(':idPessoa', $aluno->getId());
        $sql->bindValue(':nome', $aluno->getNome());
        $sql->bindValue(':cpf', $aluno->getCpf());
        $sql->bindValue(':rg', $aluno->getRg());
        $sql->bindValue(':orgaoEmissor', $aluno->getOrgaoEmissor());
        $sql->bindValue(':telefone', $aluno->getTelefone());
        $sql->bindValue(':dataNascimento', $aluno->getDataNascimento());
        $sql->bindValue(':estadoCivil', $aluno->getEstadoCivil());
        $sql->bindValue(':sexo', $aluno->getSexo());
        $sql->bindValue(':idEndereco', $aluno->getIdEndereco());
        

        $sql2 = $this->con->prepare("UPDATE Aluno SET NivelAcademico=:nivelAcademico WHERE idPessoa=:idPessoa");

        $sql2->bindValue(':idPessoa', $aluno->getId());
        $sql2->bindValue(':nivelAcademico', $aluno->getNivelAcademico());
        $sql->execute();

    }

    /**
     * Delete Aluno in the BD, and set infos to Pessoa and Aluno tables
     * 
     * @param Integer
     */
    public function delete($idPessoa): void
    {
        $sql = $this->con->prepare("DELETE FROM Aluno WHERE idPessoa = :idPessoa");
        $sql->bindValue(':idPessoa', $idPessoa);
        $sql->execute();

        $sql2 = $this->con->prepare("DELETE FROM Pessoa WHERE idPessoa = :idPessoa");
        $sql2->bindValue(':idPessoa', $idPessoa);
        $sql2->execute();
    }



    /**
     * List all Alunos
     * 
     * @return arrayOfAlunos
     */
    public function ListAll()
    {
        $rs = $this->con->query("SELECT * FROM Aluno a
                                    INNER JOIN Pessoa p ON a.idPessoa = p.idPessoa");
        $alunos = array();

        while ($aluno = $rs->fetch(PDO::FETCH_OBJ)) {
            $alunos[] = $aluno;
        }

        return $alunos;
    }


    /**
     * List a singleAluno
     * 
     * @return Aluno
     */
    public function showSingleAluno($idPessoa)
    {
        $sql = $this->con->prepare("SELECT * FROM Pessoa P
                                        INNER JOIN Aluno A ON P.idPessoa = A.idPessoa
                                    WHERE P.idPessoa=:idPessoa");
        $sql->bindValue(':idPessoa', $idPessoa);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }


      /**
     * List a singleAluno and Endereço 
     * 
     * @return Aluno
     */
    public function showSingleAlunoAll($idPessoa)
    {
        $sql = $this->con->prepare("SELECT P.Nome AS Aluno, P.CPF, P.RG, P.DataNascimento, P.Telefone, P.Sexo, P.OrgaoEmissor, A.NivelAcademico, EST.Nome AS Estado, C.Nome AS Cidade, E.Rua, E.CEP, E.Bairro, E.Numero, E.Complemento FROM Pessoa P
                                        INNER JOIN Aluno A ON P.idPessoa = A.idPessoa
                                        INNER JOIN Endereco E ON P.idEndereco = E.idEndereco
                                        INNER JOIN Cidade C ON E.idCidade = C.idCidade
                                        INNER JOIN Estado EST ON C.idEstado = EST.idEstado
                                        WHERE P.idPessoa=:idPessoa");
                                        
        $sql->bindValue(':idPessoa', $idPessoa);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }


}
