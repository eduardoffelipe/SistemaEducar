<?php

require_once('interfaces/IEnderecoDao.php');
require_once('../models/endereco.class.php');

class EnderecoDao implements IEnderecoDao
{

    // ---- CONSTRUCTOR ---- // 

    /**
     * Class constructor and establish connection with bd.
     * 
     */
    public function __construct(Conexao $con)
    {
        $this->con = $con->getConexao();
    }


    // ---- METHODS ---- // 

    /**
     * List all Enderecos
     * 
     * @return ArrayOfEndereco
     */
    public function listAll()
    {
        $rs = $this->con->query("SELECT * FROM Endereco");

        $enderecos = array();
        while ($endereco = $rs->fetch(PDO::FETCH_OBJ)) {
            $enderecos[] = $endereco;
        }

        return $enderecos;
    }


    /**
     * Create and insert info inner BD
     * 
     * @param Object
     */
    public function create(Endereco $endereco): void
    {
        $sql = $this->con->prepare("INSERT INTO endereco(rua, cep, numero, bairro, complemento, idCidade ) VALUES (:rua, :cep, :numero, :bairro, :complemento, :idCidade);")
        $sql->bindValue(':rua', $endereco->getRua());
        $sql->bindValue(':cep', $endereco->getCep());
        $sql->bindValue(':numero', $endereco->getNumero());
        $sql->bindValue(':bairro', $endereco->getBairro());
        $sql->bindValue(':complemento', $endereco->getComplemento());
        $sql->bindValue(':idCidade', $endereco->getidCidade()); 
        $sql->execute();
    }


    /**
     * Update info from Endereco
     * 
     * @param Endereco
     */
    public function update(Endereco $endereco): void
    {
        $sql = $this->con->prepare("UPDATE endereco SET (rua=:rua, cep=:cep, numero=:numero, bairro=:bairro, complemento=:complemento, idCidade=:idCidade) WHERE idEndereco=:id");        
        $sql->bindValue(':id', $endereco->getId());
        $sql->bindValue(':rua', $endereco->getRua());
        $sql->bindValue(':cep', $endereco->getCep());
        $sql->bindValue(':numero', $endereco->getNumero());
        $sql->bindValue(':bairro', $endereco->getBairro());
        $sql->bindValue(':complemento', $endereco->getComplemento());
        $sql->bindValue(':idCidade', $endereco->getidCidade()); 
        $sql->execute();
    }

    /**
     * Delete Cidade
     * 
     * @param Integer
     */
    public function delete(int $id): void
    {
        $sql = $this->con->prepare("DELETE from endereco WHERE idEndereco=:id");

        $sql->bindValue(':id', $id);
        $sql->execute();
    }


    /**
     * Show single Cidade
     * 
     * @param Integer
     * @return Object
     * 
     */
    public function showSingleEndereco(int $id): stdClass
    {
        $sql = $this->con->prepare("SELECT * from endereco WHERE idEndereco=:id");

        $sql->bindValue(':id', $id);
        $sql->execute();

        $endereco = $sql->fetch(PDO::FETCH_OBJ);

        return $endereco;
    }
}
?>