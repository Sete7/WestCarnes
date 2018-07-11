<?php

require_once 'Banco.php';

class CategoriaDAO {

    private $debug;
    private $pdo;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

    public function Cadastrar(Categoria $categoria) {
        try {
            $sql = "INSERT INTO categoria (titulo, url, thumb, descricao, status, data) VALUES(:titulo,:thumb, :url, :descricao, :status, :data)";
            $param = array(
                ":titulo" => $categoria->getTitulo(),
                ":thumb" => $categoria->getThumb(),
                ":url" => $categoria->getUrl(),
                ":descricao" => $categoria->getDescricao(),
                ":status" => $categoria->getStatus(),
                ":data" => $categoria->getData()
            );
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (Exception $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function ListarCategoria($inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT * FROM categoria ORDER BY cod DESC LIMIT :inicio, :quantidade";
            $param = array(
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );
            $dt = $this->pdo->ExecuteQuery($sql, $param);

            $listaCat = [];

            foreach ($dt as $pts) {
                $categoria = new Categoria();
                $categoria->setCod($pts['cod']);
                $categoria->setThumb($pts['thumb']);
                $categoria->setTitulo($pts['titulo']);
                $categoria->setDescricao($pts['descricao']);
                $categoria->setStatus($pts['status']);
                $categoria->setData($pts['data']);
                $categoria->setUrl($pts['url']);

                $listaCat[] = $categoria;
            }
            return $listaCat;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function ListarTodasCategorias() {
        try {
            $sql = "SELECT * FROM categoria WHERE status = 1 ORDER BY cod ASC";
            $dt = $this->pdo->ExecuteQuery($sql);
            $listaCat = [];

            foreach ($dt as $pts) {
                $categoria = new Categoria();
                $categoria->setCod($pts['cod']);
                $categoria->setThumb($pts['thumb']);
                $categoria->setTitulo($pts['titulo']);
                $categoria->setDescricao($pts['descricao']);
                $categoria->setStatus($pts['status']);
                $categoria->setData($pts['data']);
                $categoria->setUrl($pts['url']);

                $listaCat[] = $categoria;
            }
            return $listaCat;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function Excluir($cod) {
        try {
            $sql = "DELETE FROM categoria WHERE cod = :cod";
            $param = array(":cod" => $cod);
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (Exception $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function Atualizar(Categoria $categoria) {
        try {
            $sql = "UPDATE categoria SET thumb = :thumb, titulo = :titulo, url = :url, descricao = :descricao, status = :status, data = :data WHERE cod = :cod";
            $param = array(
                ":cod" => $categoria->getCod(),
                ":thumb" => $categoria->getThumb(),
                ":titulo" => $categoria->getTitulo(),
                ":url" => $categoria->getUrl(),
                ":descricao" => $categoria->getDescricao(),
                ":status" => $categoria->getStatus(),
                ":data" => $categoria->getData()
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

    public function retornaCategoria($cod) {
        try {
            $sql = "SELECT * FROM categoria WHERE cod = :cod";
            $param = array(":cod" => $cod);

            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);

            $categoria = new Categoria();
            $categoria->setCod($dt['cod']);
            $categoria->setThumb($dt['thumb']);
            $categoria->setTitulo($dt['titulo']);
            $categoria->setStatus($dt['status']);
            $categoria->setDescricao($dt['descricao']);
            return $categoria;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function retornaCategoriaUrl($url) {
        try {
            $sql = "SELECT * FROM categoria WHERE url = :url";
            $param = array(":url" => $url);

            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);

            $categoria = new Categoria();
            $categoria->setCod($dt['cod']);
            $categoria->setThumb($dt['thumb']);
            $categoria->setTitulo($dt['titulo']);
            $categoria->setStatus($dt['status']);
            $categoria->setDescricao($dt['descricao']);
            $categoria->setData($dt['data']);
            return $categoria;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function RetornaQtdCategoria() {
        try {
            $sql = "SELECT count(c.cod) as total FROM categoria c";
            $dr = $this->pdo->ExecuteQueryOneRow($sql);
            if ($dr["total"] != null):
                return $dr["total"];
            else:
                return 0;
            endif;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    //retorno de produto com imagem
    public function retornaCategoriaImagem($cod) {
        try {
            $sql = "SELECT cod, titulo, thumb FROM categoria WHERE cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $categoria = new Produto();
            $categoria->setCod($dt['cod']);
            $categoria->setThumb($dt['thumb']);
            $categoria->setTitulo($dt['titulo']);
            
            return $categoria;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    
    public function AlterarImagem($cod, $thumb) {
        try {
            $sql = "UPDATE categoria SET thumb = :thumb WHERE cod = :cod";
            $param = array(
                ":cod" => $cod,
                ":thumb" => $thumb
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

}
