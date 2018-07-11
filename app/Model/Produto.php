<?php

require_once 'Categoria.php';

class Produto {

    private $cod;
    private $titulo;
    private $categoria;
    private $url;
    private $descricao;
    private $valor;
    private $estoque;
    private $status;
    private $thumb;
    private $data;
    private $tipo;

    public function __construct() {
        $this->categoria = new Categoria();
    }

    function getCod() {
        return $this->cod;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getUrl() {
        return $this->url;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getValor() {
        return $this->valor;
    }

    function getEstoque() {
        return $this->estoque;
    }

    function getStatus() {
        return $this->status;
    }

    function getThumb() {
        return $this->thumb;
    }

    function getData() {
        return $this->data;
    }

    function getTipo() {
        return $this->tipo;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setThumb($thumb) {
        $this->thumb = $thumb;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

}
