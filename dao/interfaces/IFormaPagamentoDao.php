<?php
interface IFormaPagamentoDao
{
    public function create(FormaPagamento $formaPagamento): void; //Cria uma Forma dePagamento
    public function update(FormaPagamento $formaPagamento):void; //Atualiza uma Forma de Pagamento
    public function delete(int $id):void; //Deleta uma Forma de Pagamento
    public function listAll(); //Lista todos as Forma de Pagamentos
    public function showSingleFormaPagamento(int $id); //lista uma Forma de Pagamento
}
