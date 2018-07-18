<?php

require_once 'Banco.php';

class ReceitaDAO {

    private $pdo;
    private $debug;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

    public function Cadastrar(Receita $receita) {
        try {
            $sql = "INSERT INTO receita (titulo, categoria, tipo, url, descricao, status, thumb, data) "
                    . "VALUES (:titulo, :categoria, :tipo, :url, :descricao,:status, :thumb, :data)";
            $param = array(
                ":titulo" => $receita->getTitulo(),
                ":categoria" => $receita->getCategoria(),
                ":tipo" => $receita->getTipo(),
                ":url" => $receita->getUrl(),
                ":descricao" => $receita->getDescricao(),
                ":status" => $receita->getStatus(),
                ":thumb" => $receita->getThumb(),
                ":data" => $receita->getData()
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

    public function ListarReceita($inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT r.cod, r.titulo, r.categoria, r.url, r.descricao, r.status, r.thumb, r.data,"
                    . " c.cod as codCat, c.titulo as tituloCat FROM receita r "
                    . "INNER JOIN categoria c ON r.categoria = c.cod WHERE tipo = 'receitas' ORDER BY r.cod DESC LIMIT :inicio, :quantidade";
//            $sql = "SELECT * FROM receita";

            $param = array(
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );

            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listarReceita = [];
            foreach ($dt as $pts) {
                $receita = new Receita();
                $receita->setCod($pts['cod']);
                $receita->setTitulo($pts['titulo']);
                $receita->setUrl($pts['url']);
                $receita->setDescricao($pts['descricao']);
                $receita->setStatus($pts['status']);
                $receita->setThumb($pts['thumb']);
                $receita->setData($pts['data']);
                $receita->getCategoria()->setCod($pts['codCat']);
                $receita->getCategoria()->setTitulo($pts['tituloCat']);
                $listarReceita[] = $receita;
            }
            return $listarReceita;
        } catch (Exception $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function Excluir($cod) {
        try {
            $sql = "DELETE FROM receita WHERE cod = :cod";
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

    //retorno de produto com imagem
    public function retornaReceitaImagem($cod) {
        try {
            $sql = "SELECT cod, titulo, thumb FROM receita WHERE cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $receita = new Receita();
            $receita->setCod($dt['cod']);
            $receita->setTitulo($dt['titulo']);
            $receita->setThumb($dt['thumb']);
            return $receita;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    //quantidades de produtos
    public function RetornaQtdReceita() {
        try {
            $sql = "SELECT count(rc.cod) as total FROM receita rc";
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

    public function Atualizar(Receita $receita) {
        try {

            $sql = "UPDATE receita SET titulo = :titulo, categoria = :categoria, tipo = :tipo, url = :url, 
                descricao = :descricao, status = :status, data = :data
                WHERE cod = :cod";

            $param = array(
                ":cod" => $receita->getCod(),
                ":titulo" => $receita->getTitulo(),
                "tipo" => $receita->getTipo(),
                ":categoria" => $receita->getCategoria(),
                ":url" => $receita->getUrl(),
                ":descricao" => $receita->getDescricao(),
                ":status" => $receita->getStatus(),
                ":data" => $receita->getData()
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

    //retorna dados do produto atraavés do cod
    public function retornaIdReceita($cod) {
        try {
            $sql = "SELECT r.cod, r.titulo, r.categoria, r.url, r.descricao, r.status, r.thumb, r.data,r.tipo,"
                    . " c.cod as codCat, c.titulo as tituloCat FROM receita r "
                    . "INNER JOIN categoria c ON r.categoria = c.cod WHERE r.cod = :cod";

            $param = array(":cod" => $cod);
            //Data Table
            $pts = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $receita = new Receita();
            $receita->setCod($pts['cod']);
            $receita->setTitulo($pts['titulo']);
            $receita->setUrl($pts['url']);
            $receita->setDescricao($pts['descricao']);
            $receita->setStatus($pts['status']);
            $receita->setThumb($pts['thumb']);
            $receita->setData($pts['data']);
            $receita->setTipo($pts['tipo']);
            $receita->getCategoria()->setCod($pts['codCat']);
            $receita->getCategoria()->setTitulo($pts['tituloCat']);

            return $receita;
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
            $sql = "UPDATE receita SET thumb = :thumb WHERE cod = :cod";
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

//    ----------------------------------------SITE RECEITA ----------------------------------;
    public function listarReceitaCat($categoria, $inicio = null, $quantidade = null) {
        try {
            $sql = "SELECT * FROM receita WHERE categoria = :categoria LIMIT :inicio, :quantidade";

            $param = array(
                ":categoria" => $categoria,
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );

            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listarReceitaCat = [];
            foreach ($dt as $rc) {
                $receita = new Receita();
                $receita->setCod($rc['cod']);
                $receita->setTitulo($rc['titulo']);
                $receita->setUrl($rc['url']);
                $receita->setDescricao($rc['descricao']);
                $receita->setStatus($rc['status']);
                $receita->setThumb($rc['thumb']);
                $receita->setData($rc['data']);
                $receita->setCategoria($rc['categoria']);
                $listarReceitaCat[] = $receita;
            }
            return $listarReceitaCat;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE{$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

}
