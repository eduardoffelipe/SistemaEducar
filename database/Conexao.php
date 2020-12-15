<?php

class Conexao
{
      private $host = 'localhost';
      private $nome_banco = 'educar_sistema';
      private $usuario = 'root';
      private $senha = '';
      private $con;

      public function getConexao()
      {
            $this->con = new PDO("mysql:host=$this->host;dbname=$this->nome_banco","$this->usuario","$this->senha");
            return $this->con;
      }
}
?>

