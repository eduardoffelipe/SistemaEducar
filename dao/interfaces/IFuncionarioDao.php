<?php
    interface IFuncionarioDao
    {
        public function create(Funcionario $funcionario): void; //Cria um Funcionario
        public function update(Funcionario $funcionario):void; //Atualiza um Funcionario
        public function delete(string $cpf):void; //Deleta um Funcionario
        public function listAll(); //Lista todos os Funcionario
        public function showSingleFuncionario(string $cpf); //lista um Funcionario
    }
?>