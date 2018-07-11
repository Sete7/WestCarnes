<?php

require 'TipoReceita.php';

class Receita {

    private $cod;
    private $titulo;
    private $categoria;
    private $url;
    private $status;
    private $descricao;
    private $data;
    private $thumb;
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

    function getStatus() {
        return $this->status;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getData() {
        return $this->data;
    }

    function getThumb() {
        return $this->thumb;
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

    function setStatus($status) {
        $this->status = $status;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setThumb($thumb) {
        $this->thumb = $thumb;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

}
