<?php
interface IAlunoDao
{
    public function create(Aluno $aluno): void; //Cria um Aluno
    public function update(Aluno $aluno):void; //Atualiza um Aluno
    public function delete(string $cpf):void; //Deleta um Aluno
    public function listAll(); //Lista todos os alunos
    public function showSingleAluno(string $cpf); //lista um aluno
}
