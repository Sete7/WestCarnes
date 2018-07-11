<?php

class Imagem {
    private $cod;
    private $imagem;
    private $produto;

    public function __construct() {
        $this->produto = new Produto();
    }

    function getCod() {
        return $this->cod;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getProduto() {
        return $this->produto;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setProduto($produto) {
        $this->produto = $produto;
    }


}
