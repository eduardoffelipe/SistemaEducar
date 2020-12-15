<?php

require_once('interfaces/IFuncionarioDao.php');
require_once('../../models/funcionario.class.php');

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
        $sql = $this->con->prepare("INSERT INTO Pessoa(idPessoa,Nome, CPF, RG, OrgaoEmissor, Telefone, DataNascimento, EstadoCivil, Sexo, idEndereco) 
                                    VALUES (:idPessoa,:nome, :cpf, :rg, :orgaoEmissor, :telefone, :dataNascimento, :estadoCivil, :sexo, :idEndereco);");
        
        $sql->bindValue(':idPessoa', $funcionario->getId());
        $sql->bindValue(':nome', $funcionario->getNome());
        $sql->bindValue(':cpf', $funcionario->getCpf());
        $sql->bindValue(':rg', $funcionario->getRg());
        $sql->bindValue(':orgaoEmissor', $funcionario->getOrgaoEmissor());
        $sql->bindValue(':telefone', $funcionario->getTelefone());
        $sql->bindValue(':dataNascimento', $funcionario->getDataNascimento());
        $sql->bindValue(':estadoCivil', $funcionario->getEstadoCivil());
        $sql->bindValue(':sexo', $funcionario->getSexo());
        $sql->bindValue(':idEndereco', $funcionario->getIdEndereco());
        $sql->execute();

        $sql2 = $this->con->prepare("INSERT INTO Funcionario(idPessoa, cargo, email, senha)
                                     VALUES (:idPessoa, :cargo, :email, :senha)");

        $sql2->bindValue(':idPessoa', $funcionario->getId());
        $sql2->bindValue(':cargo', $funcionario->getCargo());
        $sql2->bindValue(':email', $funcionario->getEmail());
        $sql2->bindValue(':senha', $funcionario->getSenha());
        $sql2->execute();

    }

    /**
     * Update Funcionario in the BD, and set infos to Pessoa and Funcionario tables
     * 
     * @param Object 
     */
    public function update(Funcionario $funcionario): void
    {
        $sql = $this->con->prepare("UPDATE Pessoa SET Nome=:nome, CPF=:cpf, RG=:rg, OrgaoEmissor=:orgaoEmissor, Telefone=:telefone, DataNascimento=:dataNascimento, EstadoCivil=:estadoCivil, Sexo=:sexo WHERE idPessoa=:idPessoa");
 
        $sql->bindValue(':idPessoa', $funcionario->getId());
        $sql->bindValue(':nome', $funcionario->getNome());
        $sql->bindValue(':cpf', $funcionario->getCpf());
        $sql->bindValue(':rg', $funcionario->getRg());
        $sql->bindValue(':orgaoEmissor', $funcionario->getOrgaoEmissor());
        $sql->bindValue(':telefone', $funcionario->getTelefone());
        $sql->bindValue(':dataNascimento', $funcionario->getDataNascimento());
        $sql->bindValue(':estadoCivil', $funcionario->getEstadoCivil());
        $sql->bindValue(':sexo', $funcionario->getSexo());
        $sql->execute();

        $sql2 = $this->con->prepare("UPDATE Funcionario SET Cargo=:cargo, Email=:email, Senha=:senha WHERE idPessoa=:idPessoa");
        
        $sql2->bindValue(':idPessoa', $funcionario->getId());
        $sql2->bindValue(':cargo', $funcionario->getCargo());
        $sql2->bindValue(':email', $funcionario->getEmail());
        $sql2->bindValue(':senha', $funcionario->getSenha());
        $sql2->execute();
        
    }

    /**
     * Delete Funcionario in the BD by ID
     * 
     * @param Integer 
     */
    public function delete($idPessoa): void
    {
        $sql = $this->con->prepare("DELETE FROM Funcionario WHERE idPessoa = :idPessoa");
        $sql->bindValue(':idPessoa', $idPessoa);
        $sql->execute();

        $sql2 = $this->con->prepare("DELETE FROM Pessoa WHERE idPessoa = :idPessoa");
        $sql2->bindValue(':idPessoa', $idPessoa);
        $sql2->execute();
    }

    /**
     * List all Funcionarios
     * 
     * @return arrayOfFuncionarios
     */
    public function ListAll()
    {
        $rs = $this->con->query("SELECT * FROM funcionario f
                                    INNER JOIN pessoa p  ON f.idPessoa = p.idPessoa");
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
     * @param Integer
     */
    public function showSingleFuncionario($idPessoa)
    {
        $sql = $this->con->prepare("SELECT * FROM Pessoa P 
                                        INNER JOIN Funcionario F ON P.idPessoa = F.idPessoa
                                    WHERE P.idPessoa = :idPessoa");
        $sql->bindValue(':idPessoa', $idPessoa);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }

    /**
     * List a single Funcionario
     * 
     * @return Funcionario
     * @param Integer
     */
    public function showSingleFuncionarioAll($idPessoa)
    {
        $sql = $this->con->prepare("SELECT P.Nome AS Funcionario, P.CPF, P.RG, P.DataNascimento, P.Telefone, P.Sexo, P.OrgaoEmissor, F.Cargo, F.Email, EST.Nome AS Estado, C.Nome AS Cidade, E.Rua, E.CEP, E.Bairro, E.Numero, E.Complemento FROM Pessoa P
                                        INNER JOIN Funcionario F ON P.idPessoa = F.idPessoa
                                        INNER JOIN Endereco E ON P.idEndereco = E.idEndereco
                                        INNER JOIN Cidade C ON E.idCidade = C.idCidade
                                        INNER JOIN Estado EST ON C.idEstado = EST.idEstado
                                    WHERE P.idPessoa=:idPessoa");
        $sql->bindValue(':idPessoa', $idPessoa);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }
}
