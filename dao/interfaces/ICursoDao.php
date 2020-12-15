<?php
interface ICursoDao
{
    public function create(Curso $curso): void; //Cria um Curso
    public function update(Curso $curso):void; //Atualiza um Curso
    public function delete(int $id):void; //Deleta um Curso
    public function listAllForTable(); //Lista todos os Cursos para exibir em tabela
    public function listAll(); //Lista todos os Cursos
    public function showSingleCurso(int $id); //lista um Curso
    public function showSingleCursoAll(int $id); //lista um Curso
}
