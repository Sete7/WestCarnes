<?php


class ReceitaController {

    private $receitaDAO;

    public function __construct() {
        $this->receitaDAO = new ReceitaDAO();
    }

    public function Cadastrar(Receita $receita) {
        return $this->receitaDAO->Cadastrar($receita);
    }

    public function ListarReceita($inicio = null, $quantidade = null) {
        return $this->receitaDAO->ListarReceita($inicio, $quantidade);
    }

    public function Excluir($cod) {
        return $this->receitaDAO->Excluir($cod);
    }

    public function retornaReceitaImagem($cod) {
        return $this->receitaDAO->retornaReceitaImagem($cod);
    }

    public function RetornaQtdReceita() {
        return $this->receitaDAO->RetornaQtdReceita();
    }

    public function Atualizar(Receita $receita) {
        return $this->receitaDAO->Atualizar($receita);
    }
    
    public function retornaIdReceita($cod) {
        return $this->receitaDAO->retornaIdReceita($cod);
    }
    
    public function AlterarImagem($cod, $thumb) {
        return $this->receitaDAO->AlterarImagem($cod, $thumb);
    }
}
