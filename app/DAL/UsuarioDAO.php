<?php
require_once 'Banco.php';

//if (file_exists('../Model/Usuario.php')):
//    require_once '../Model/Usuario.php';
//elseif (file_exists('Model/Usuario.php')):
//    require_once 'Model/Usuario.php';
//endif;

class UsuarioDAO {

    private $debug;
    private $pdo;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

    public function Cadastrar(Usuario $usuario) {
        try {
            $sql = "INSERT INTO usuario (usuario, email, status, nome, senha, nivel, cep, bairro, cidade, endereco, estado, data) "
                    . "VALUES(:usuario, :email, :status, :nome, :senha, :nivel, :cep, :bairro, :cidade, :endereco, :estado, :data)";
            $param = array(
                ":usuario" => $usuario->getNome(),
                ":email" => $usuario->getEmail(),
                ":status" => $usuario->getStatus(),
                ":nome" => $usuario->getNome(),
                ":senha" => $usuario->getSenha(),
                ":nivel" => $usuario->getNivel(),
                ":cep" => $usuario->getCep(),
                ":bairro" => $usuario->getBairro(),
                ":cidade" => $usuario->getCidade(),
                ":endereco" => $usuario->getEndereco(),
                ":estado" => $usuario->getEstado(),
                ":data" => $usuario->getData()
            );
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    public function Atualizar(Usuario $usuario) {
        try {
            $sql = "UPDATE usuario SET usuario = :usuario, email = :email, status = :status, nome = :nome, nivel = :nivel, cep = :cep,
                    bairro = :bairro, cidade = :cidade, endereco = :endereco, estado = :estado, data = :data WHERE cod = :cod";
            $param = array(
                ":cod" => $usuario->getCod(),
                ":usuario" => $usuario->getUsuario(),
                ":email" => $usuario->getEmail(),
                ":status" => $usuario->getStatus(),
                ":nome" => $usuario->getNome(),                
                ":nivel" => $usuario->getNivel(),
                ":cep" => $usuario->getCep(),
                ":bairro" => $usuario->getBairro(),
                ":cidade" => $usuario->getCidade(),
                ":endereco" => $usuario->getEndereco(),
                ":estado" => $usuario->getEstado(),
                ":data" => $usuario->getData()
            );

            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function ListarUsuario() {
        try {
            $sql = "SELECT * FROM usuario ORDER BY cod DESC";
            $dt = $this->pdo->ExecuteQuery($sql);

            $listaUsuario = [];
            foreach ($dt as $pts) {
                $usuario = new Usuario();
                $usuario->setCod($pts['cod']);
                $usuario->setUsuario($pts['usuario']);
                $usuario->setStatus($pts['status']);
                $usuario->setEmail($pts['email']);
                $usuario->setNivel($pts['nivel']);
                $usuario->setData($pts['data']);
                
                $listaUsuario[] = $usuario;
            }
            return $listaUsuario;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    public function retornaUsuario($cod){
        try {
            
            $sql = "SELECT * FROM usuario WHERE cod = :cod";
            $param = array(":cod" => $cod);
            
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            
            $usuario = new Usuario();
            $usuario->setCod($dt['cod']);
            $usuario->setUsuario($dt['usuario']);
            $usuario->setEmail($dt['email']);
            $usuario->setStatus($dt['status']);
            $usuario->setNome($dt['nome']);
            $usuario->setNivel($dt['nivel']);
            $usuario->setCep($dt['cep']);
            $usuario->setBairro($dt['bairro']);
            $usuario->setCidade($dt['cidade']);
            $usuario->setEndereco($dt['endereco']);
            $usuario->setEstado($dt['estado']);
            
            return $usuario;
            
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
       
    public function AutenticarUsuario($email, $senha, $permissao) {
        try {

            if ($permissao == 1) {
                $sql = "SELECT cod, nome FROM usuario WHERE status = 1 AND nivel = :permissao AND email = :email AND senha = :senha";

                $param = array(
                    ":permissao" => $permissao,
                    ":email" => $email,
                    ":senha" => $senha
                );
            } else {
                $sql = "SELECT cod, nome FROM usuario WHERE status = 1 AND email = :email AND senha = :senha";

                $param = array(
                    ":usuario" => $usu,
                    ":email" => $email
                );
            }

            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);

            if ($dt != null) {
                $usuario = new Usuario();
                $usuario->setCod($dt["cod"]);
                $usuario->setNome($dt["nome"]);

                return $usuario;
            } else {
                return null;
            }
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return null;
        }
    }
    
    public function isLoggedIn() {
        if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
            return false;
        }
        return true;
    }
    
    

}
