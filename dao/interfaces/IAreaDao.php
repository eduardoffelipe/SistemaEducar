<?php
    interface IAreaDao
    {
        public function create(Area $area): void; //Cria um Area
        public function update(Area $area):void; //Atualiza um Area
        public function delete(int $id):void; //Deleta um Area
        public function listAll(); //Lista todos os Area
        public function showSingleArea(int $id); //lista um Area
    }
?>