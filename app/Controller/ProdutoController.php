<?php

    class ProdutoController {

    private $produtoDAO;

    public function __construct() {
        $this->produtoDAO = new ProdutoDAO;
    }

    //    ***************************************METODOS DAO DO PAINEL**************************************************
    public function Cadastrar(Produto $produto) {
        if (strlen($produto->getTitulo()) > 3 && $produto->getCategoria() != '' && strlen($produto->getStatus()) > 0 && strlen($produto->getStatus()) <= 3 && strlen($produto->getDescricao()) > 10 && $produto->getValor() != '' && $produto->getEstoque() != '' && $produto->getThumb() != ''):
            return $this->produtoDAO->Cadastrar($produto);
        else:
            return false;
        endif;
    }

    public function Atualizar(Produto $produto) {
        return $this->produtoDAO->Atualizar($produto);
    }

    public function ListarProduto($inicio = null, $quantidade = null) {
        return $this->produtoDAO->ListarProduto($inicio, $quantidade);
    }

    public function Excluir($cod) {
        if ($cod > 0):
            return $this->produtoDAO->Excluir($cod);
        else:
            return false;
        endif;
    }

    //quantidades de produtos
    public function RetornaQtdProduto() {
        return $this->produtoDAO->RetornaQtdProduto();
    }

    public function retornaProdutoImagem($cod) {
        return $this->produtoDAO->retornaProdutoImagem($cod);
    }

    //retorna dados do produto atraves do cod
    public function retornaIdProduto($cod) {
        if ($cod > 0):
            return $this->produtoDAO->retornaIdProduto($cod);
        else:
            return false;
        endif;
    }

    public function AlterarImagem($cod, $thumb) {
        return $this->produtoDAO->AlterarImagem($cod, $thumb);
    }

    public function ListarTodosProdutos() {
        return $this->produtoDAO->ListarTodosProdutos();
    }
    
     public function listarProdutoCat($categoria){
         return $this->produtoDAO->listarProdutoCat($categoria);
     }
     
     public function retornaUrlProduto($url) {
         return $this->produtoDAO->retornaUrlProduto($url);
     }

}
