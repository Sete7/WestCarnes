<?php

class CategoriaController {
    private $categoriaDAO;
    
    public function __construct() {
        $this->categoriaDAO = new CategoriaDAO();
    }
    
    public function Cadastrar(Categoria $categoria){         
       if(strlen($categoria->getTitulo()) > 3 && strlen($categoria->getStatus()) > 0 && strlen($categoria->getStatus()) <=2 && strlen($categoria->getDescricao())):
            return $this->categoriaDAO->Cadastrar($categoria);
        else:
            return false;
        endif;
    }   
    
    public function Atualizar(Categoria $categoria) {   
       if(strlen($categoria->getTitulo()) > 3 && strlen($categoria->getStatus()) > 0 && strlen($categoria->getStatus()) <=2 && strlen($categoria->getDescricao())):
            return $this->categoriaDAO->Atualizar($categoria);
        else:
            return false;
        endif;
    }   
    
    public function ListarCategoria($inicio = null, $quantidade = null) {
        return $this->categoriaDAO->ListarCategoria($inicio, $quantidade);
    }
    public function ListarTodasCategorias() {
        return $this->categoriaDAO->ListarTodasCategorias();
    }
    
    public function Excluir($cod){
        return $this->categoriaDAO->Excluir($cod);
    }   
   
    
    public function retornaCategoria($cod){
        return $this->categoriaDAO->retornaCategoria($cod);
    }
    
    public function retornaCategoriaUrl($url) {
        return $this->categoriaDAO->retornaCategoriaUrl($url);
    }
    
    public function RetornaQtdCategoria() {
        return $this->categoriaDAO->RetornaQtdCategoria();
    }
    
     public function retornaCategoriaImagem($cod) {
         return $this->categoriaDAO->retornaCategoriaImagem($cod);
     }
     
      public function AlterarImagem($cod, $thumb) {
          return $this->categoriaDAO->AlterarImagem($cod, $thumb);
      }
}
