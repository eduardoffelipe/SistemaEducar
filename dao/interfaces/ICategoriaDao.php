<?php
    interface ICategoriaDao
    {
        public function create(Categoria $Categoria): void; //Cria um Categoria
        public function update(Categoria $Categoria):void; //Atualiza um Categoria
        public function delete(int $id):void; //Deleta um Categoria
        public function listAll(); //Lista todos os Categoria
        public function showSingleCategoria(int $id); //lista um Categoria
    }
?>