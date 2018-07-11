<?php

class Categoria {

    private $cod;
    private $thumb;
    private $titulo;
    private $url;
    private $descricao;
    private $status;
    private $data;

    function getCod() {
        return $this->cod;
    }

    function getThumb() {
        return $this->thumb;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getUrl() {
        return $this->url;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getStatus() {
        return $this->status;
    }

    function getData() {
        return $this->data;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setThumb($thumb) {
        $this->thumb = $thumb;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setData($data) {
        $this->data = $data;
    }

}
