<?php
interface IAlunoDao
{
    public function create(Aluno $aluno): void; //Cria um Aluno
    // public function update(Aluno $aluno):void; //Atualiza um Aluno
    public function delete(int $id):void; //Deleta um Aluno
    public function listAll(); //Lista todos os alunos
    public function showSingleAluno(int $id); //lista um aluno
    public function showSingleAlunoAll(int $id); //lista um aluno
}
