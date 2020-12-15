<?php
    interface IFuncionarioDao
    {
        public function create(Funcionario $funcionario): void; //Cria um Funcionario
        public function update(Funcionario $funcionario):void; //Atualiza um Funcionario
        public function delete(int $id):void; //Deleta um Funcionario
        public function listAll(); //Lista todos os Funcionario
        public function showSingleFuncionario(int $id); //lista um Funcionario
        public function showSingleFuncionarioAll(int $id); //lista um Funcionario
    }
?>