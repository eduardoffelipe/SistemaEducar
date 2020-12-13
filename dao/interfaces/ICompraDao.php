<?php
    interface ICompraDao
    {
        public function create(Compra $compra): void; //Cria um Compra
        public function update(Compra $compra):void; //Atualiza um Compra
        public function delete(int $idCurso, int $idAluno):void; //Deleta um Compra
        public function listAll(); //Lista todos os Compra
        public function showSingleCompra(int $idCurso, int $idAluno); //lista um Compra
    }
?>