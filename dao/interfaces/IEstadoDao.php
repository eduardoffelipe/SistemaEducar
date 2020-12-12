<?php
    interface IEstadoDao
    {
        public function create(Estado $estado): void; //Cria um Estado
        public function update(Estado $estado):void; //Atualiza um Estado
        public function delete(int $id):void; //Deleta um Estado
        public function listAll(); //Lista todos os Estado
        public function showSingleEstado(int $id); //lista um Estado
    }
?>