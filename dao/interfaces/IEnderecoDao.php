<?php
    interface IEnderecoDao
    {
        public function create(Endereco $endereco): void; //Cria um Endereco
        public function update(Endereco $endereco):void; //Atualiza um Endereco
        public function delete(int $id):void; //Deleta um Endereco
        public function listAll(); //Lista todos os Endereco
        public function showSingleEndereco(int $id); //lista um Endereco
    }
?>