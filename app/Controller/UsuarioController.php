<?php

//if (file_exists('../DAL/UsuarioDAO.php')):
//    require_once '../DAL/UsuarioDAO.php';
//elseif (file_exists('DAL/UsuarioDAO.php')):
//    require_once 'DAL/UsuarioDAO.php';
//endif;

class UsuarioController {

    private $usuarioDAO;

    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO;
    }

    public function Cadastrar(Usuario $usuario) {
        return $this->usuarioDAO->Cadastrar($usuario);
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
