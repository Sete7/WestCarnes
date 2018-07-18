<?php


class ReceitaController {

    private $receitaDAO;

    public function __construct() {
        $this->receitaDAO = new ReceitaDAO();
    }

    public function Cadastrar(Receita $receita) { 
         if (strlen($receita->getTitulo()) > 3 && $receita->getCategoria() != '' && strlen($receita->getStatus()) > 0 && strlen($receita->getStatus()) <= 3 && strlen($receita->getDescricao()) > 10 && $receita->getThumb() != ''):
            return $this->receitaDAO->Cadastrar($receita);
        else:
            return false;
        endif;
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
    //retorna dados do produto atraavés do cod
    public function retornaUrlReceita($url) {
        return $this->receitaDAO->retornaUrlReceita($url);
    }
    
    public function AlterarImagem($cod, $thumb) {
        return $this->receitaDAO->AlterarImagem($cod, $thumb);
    }
    
    // ----------------------------------------SITE RECEITA ----------------------------------;
    public function listarReceitaCat($categoria, $inicio = null, $quantidade = null) {
        return $this->receitaDAO->listarReceitaCat($categoria, $inicio, $quantidade);
    }
}
