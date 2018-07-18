<?php

require_once 'Banco.php';
class ProdutoDAO {

    private $debug;
    private $pdo;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

    /*     * ****************************** PAINEL ADMINISTRATIVO ********************************** */

    public function Cadastrar(Produto $produto) {
        try {
            $sql = "INSERT INTO produto (titulo, categoria, tipo, url, descricao, valor, estoque, status, thumb, data) "
                    . "VALUES (:titulo, :categoria, :tipo, :url, :descricao, :valor, :estoque, :status, :thumb, :data)";
            $param = array(
                ":titulo" => $produto->getTitulo(),
                ":categoria" => $produto->getCategoria(),
                ":tipo" => $produto->getTipo(),
                ":url" => $produto->getUrl(),
                ":descricao" => $produto->getDescricao(),
                ":valor" => $produto->getValor(),
                ":estoque" => $produto->getEstoque(),
                ":status" => $produto->getStatus(),
                ":thumb" => $produto->getThumb(),
                ":data" => $produto->getData()
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

    public function Atualizar(Produto $produto) {
        try {

            $sql = "UPDATE produto SET titulo = :titulo, categoria = :categoria, tipo = :tipo, url = :url, 
                descricao = :descricao, valor = :valor, estoque = :estoque, status = :status, data = :data
                WHERE cod = :cod";

            $param = array(
                ":cod" => $produto->getCod(),
                ":titulo" => $produto->getTitulo(),
                "tipo" => $produto->getTipo(),
                ":categoria" => $produto->getCategoria(),
                ":url" => $produto->getUrl(),
                ":descricao" => $produto->getDescricao(),
                ":valor" => $produto->getValor(),
                ":estoque" => $produto->getEstoque(),
                ":status" => $produto->getStatus(),
                ":data" => $produto->getData()
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

    public function Excluir($cod) {
        try {
            $sql = "DELETE FROM produto WHERE cod = :cod";
            $param = array(":cod" => $cod);
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function ListarProduto($inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT p.cod, p.titulo, p.categoria, p.url, p.descricao, p.valor, p.estoque, p.status, p.thumb, p.data,"
                    . " c.cod as codCat, c.titulo as tituloCat FROM produto p "
                    . "INNER JOIN categoria c ON p.categoria = c.cod WHERE tipo = 'produto' ORDER BY p.cod DESC LIMIT :inicio, :quantidade";
            $param = array(
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );

            $dt = $this->pdo->ExecuteQuery($sql, $param);

            $listarProduto = [];

            foreach ($dt as $pts) {
                $produto = new Produto();
                $produto->setCod($pts['cod']);
                $produto->setTitulo($pts['titulo']);
                $produto->setUrl($pts['url']);
                $produto->setDescricao($pts['descricao']);
                $produto->setValor($pts['valor']);
                $produto->setEstoque($pts['estoque']);
                $produto->setStatus($pts['status']);
                $produto->setThumb($pts['thumb']);
                $produto->setData($pts['data']);
                $produto->getCategoria()->setCod($pts['codCat']);
                $produto->getCategoria()->setTitulo($pts['tituloCat']);

                $listarProduto[] = $produto;
            }
            return $listarProduto;
        } catch (Exception $exc) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //quantidades de produtos
    public function RetornaQtdProduto() {
        try {
            $sql = "SELECT count(pr.cod) as total FROM produto pr";
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
    public function retornaProdutoImagem($cod) {
        try {
            $sql = "SELECT cod, titulo, thumb FROM produto WHERE cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $produto = new Produto();
            $produto->setCod($dt['cod']);
            $produto->setTitulo($dt['titulo']);
            $produto->setThumb($dt['thumb']);
            return $produto;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //retorna dados do produto atraavés do cod
    public function retornaIdProduto($cod) {
        try {
            $sql = "SELECT p.cod, p.titulo, p.categoria, p.url, p.descricao, p.valor, p.estoque, p.status, p.thumb, p.data,p.tipo,"
                    . " c.cod as codCat, c.titulo as tituloCat FROM produto p "
                    . "INNER JOIN categoria c ON p.categoria = c.cod WHERE p.cod = :cod";

            $param = array(":cod" => $cod);
            //Data Table
            $pts = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $produto = new Produto();
            $produto->setCod($pts['cod']);
            $produto->setTitulo($pts['titulo']);
            $produto->setUrl($pts['url']);
            $produto->setDescricao($pts['descricao']);
            $produto->setValor($pts['valor']);
            $produto->setEstoque($pts['estoque']);
            $produto->setStatus($pts['status']);
            $produto->setThumb($pts['thumb']);
            $produto->setData($pts['data']);
            $produto->setTipo($pts['tipo']);
            $produto->getCategoria()->setCod($pts['codCat']);
            $produto->getCategoria()->setTitulo($pts['tituloCat']);

            return $produto;
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
            $sql = "UPDATE produto SET thumb = :thumb WHERE cod = :cod";
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

    /*     * ****************************** SITE ********************************** */

    public function ListarTodosProdutos() {
        try {
            $sql = "SELECT * FROM produto WHERE status = 1 AND oferta = 1 ORDER BY cod DESC ";

            $dt = $this->pdo->ExecuteQuery($sql);

            $listarProduto = [];

            foreach ($dt as $pts) {
                $produto = new Produto();
                $produto->setCod($pts['cod']);
                $produto->setTitulo($pts['titulo']);
                $produto->setUrl($pts['url']);
                $produto->setDescricao($pts['descricao']);
                $produto->setValor($pts['valor']);
                $produto->setEstoque($pts['estoque']);
                $produto->setStatus($pts['status']);
                $produto->setThumb($pts['thumb']);
                $produto->setData($pts['data']);


                $listarProduto[] = $produto;
            }
            return $listarProduto;
        } catch (Exception $exc) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function listarProdutoCat($categoria) {
        try {
            $sql = "SELECT * FROM produto WHERE categoria = :categoria and status = 1";
            $param = array(":categoria" => $categoria);
            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listarProduto = [];
            foreach ($dt as $pdr) {
                $produto = new Produto();
                $produto->setCod($pdr['cod']);
                $produto->setTitulo($pdr['titulo']);
                $produto->setThumb($pdr['thumb']);
                $produto->setUrl($pdr['url']);
                $produto->setCategoria($pdr['categoria']);
                $listarProduto[] = $produto;
            }
            return $listarProduto;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()} , LINE{$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //RETORNA PRODUCT PELA URL
    public function retornaUrlProduto($url) {
        try {
            $sql = "SELECT p.cod, p.titulo, p.categoria, p.url, p.descricao, p.status, p.thumb, p.data,p.tipo,"
                    . " c.cod as codCat, c.titulo as tituloCat FROM produto p "
                    . "INNER JOIN categoria c ON p.categoria = c.cod WHERE p.url = :url";

            $param = array(":url" => $url);
            //Data Table
            $pts = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $produto = new Produto();
            $produto->setCod($pts['cod']);
            $produto->setTitulo($pts['titulo']);
            $produto->setUrl($pts['url']);
            $produto->setDescricao($pts['descricao']);                       
            $produto->setStatus($pts['status']);
            $produto->setThumb($pts['thumb']);
            $produto->setData($pts['data']);
            $produto->setTipo($pts['tipo']);
            $produto->getCategoria()->setCod($pts['codCat']);
            $produto->getCategoria()->setTitulo($pts['tituloCat']);

            return $produto;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

}
