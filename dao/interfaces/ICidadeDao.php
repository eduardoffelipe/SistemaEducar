<?php
    interface ICidadeDao
    {
        public function create(Cidade $cidade): void; //Cria um Cidade
        public function update(Cidade $cidade):void; //Atualiza um Cidade
        public function delete(int $id):void; //Deleta um Cidade
        public function listAll(); //Lista todos os Cidade
        public function showSingleCidade(int $id); //lista um Cidade
    }
?>