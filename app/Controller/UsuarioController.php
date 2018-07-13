<?php

class UsuarioController {

    private $usuarioDAO;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO;
    }

    public function Cadastrar(Usuario $usuario) {
        if (
                strlen($usuario->getUsuario()) > 3 && strlen($usuario->getEmail()) > 3 && strlen($usuario->getStatus()) > 0 && strlen($usuario->getStatus()) <= 3 && strlen($usuario->getNome()) > 3 && strlen($usuario->getNivel()) > 0 && strlen($usuario->getNivel()) <= 3 && strlen($usuario->getCep()) != '' && strlen($usuario->getBairro()) != '' && strlen($usuario->getCidade()) != '' && strlen($usuario->getEndereco()) != '' && strlen($usuario->getEstado()) != ''):
            return $this->usuarioDAO->Cadastrar($usuario);
        else:
            return false;
        endif;
    }

    public function Atualizar(Usuario $usuario) {
        return $this->usuarioDAO->Atualizar($usuario);
    }

    public function ListarUsuario() {
        return $this->usuarioDAO->ListarUsuario();
    }

    public function retornaUsuario($cod) {
        return $this->usuarioDAO->retornaUsuario($cod);
    }

    public function AutenticarUsuario($email, $senha, $permissao) {
        $senha = md5($senha);
        return $this->usuarioDAO->AutenticarUsuario($email, $senha, $permissao);
    }

    public function isLoggedIn() {
        return $this->usuarioDAO->isLoggedIn();
    }

}
