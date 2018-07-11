<?php

//if (file_exists('../DAL/ProdutoDAO.php')):
//    require_once '../DAL/ProdutoDAO.php';
//elseif (file_exists('DAL/ProdutoDAO.php')):
//    require_once 'DAL/ProdutoDAO.php';
//endif;


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
    
    //listagem da pizza pela categoria e subcategoria
    public function ListarTipoPizza($categoria, $subcategoria) {
        return $this->produtoDAO->ListarTipoPizza($categoria, $subcategoria);
    }
    
    //listagem da pizza pela categoria
    public function ListarProdutoCAt($categoria) {
        return $this->produtoDAO->ListarProdutoCAt($categoria);
    }
    
    public function ListeTodosProd_Cat($categoria, $inicio = null, $quantidade = null){
        return $this->produtoDAO->ListeTodosProd_Cat($categoria, $inicio, $quantidade);
    }

    //retorna dados com subcategoria
    public function groupByProduto() {
        return $this->produtoDAO->groupByProduto();
    }
    public function groupByCategory($categoria) {
        return $this->produtoDAO->groupByCategory($categoria);
    }

    public function retornaProdutoCat($cod) {
        return $this->produtoDAO->retornaProdutoCat($cod);
    }
    
    //quantidades de produtos
    public function RetornaQtdProduto() {
        return $this->produtoDAO->RetornaQtdProduto();
    }

    public function retornaProdutoImagem($cod) {
        return $this->produtoDAO->retornaProdutoImagem($cod);
    }

    public function Excluir($cod) {
        if ($cod > 0):
            return $this->produtoDAO->Excluir($cod);
        else:
            return false;
        endif;
    }
    
    //retorna dados do produto atraves do cod
    public function retornaIdProduto($cod) {
        if ($cod > 0):
            return $this->produtoDAO->retornaIdProduto($cod);
        else:
            return false;
        endif;
    }
    //retorna dados do produto atraavés do url
    public function retornaUrlProduto($url) {
        return $this->produtoDAO->retornaUrlProduto($url);
    }

    public function AlterarImagem($cod, $thumb) {
        return $this->produtoDAO->AlterarImagem($cod, $thumb);
    }
    
    public function listarProdutoOferta() {
        return $this->produtoDAO->listarProdutoOferta();
    }
    
    
//    ***************************************METODOS DAO DO SITE**************************************************
    public function ListaProdutoCategoria($categoria, $inicio = null, $quantidade = null) {
        return $this->produtoDAO->ListaProdutoCategoria($categoria, $inicio, $quantidade);
    }
    
    public function ProdutoCategoria($categoria) {
        return $this->produtoDAO->ProdutoCategoria($categoria);
    }
    
    public function ListarTodosProdutos() {
        return $this->produtoDAO->ListarTodosProdutos();
    }

}
