<?php

/*
 * Classe Usuário contem todos os atributos da tabela usuario do banco 
 * cod, usuario, email, status, nome, senha, cep, bairro, cidade, endereco, estado, data
 * classe responsável por setar e imprimir dados da tabela
 */

/** 
 * @Telmo Ricardo 
 */
class Usuario {
    private $cod;
    private $usuario;
    private $email;
    private $status;
    private $nome;
    private $senha;
    private $nivel;
    private $cep;
    private $bairro;
    private $cidade;
    private $endereco;
    private $estado;
    private $data;
    
    function getCod() {
        return $this->cod;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getEmail() {
        return $this->email;
    }

    function getStatus() {
        return $this->status;
    }

    function getNome() {
        return $this->nome;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNivel() {
        return $this->nivel;
    }

    function getCep() {
        return $this->cep;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getEstado() {
        return $this->estado;
    }

    function getData() {
        return $this->data;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSenha($senha) {
        $this->senha = md5($senha);
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setData($data) {
        $this->data = $data;
    }




}
