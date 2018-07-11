<?php

class ImagemDAO {
    private $pdo;
    private $debug;

    public function __construct() {
        $this->pdo = new Banco();
    }

    public function CadastrarImagens(array $imagem) {
        //http://stackoverflow.com/questions/6523062/php-function-arguments-array-of-objects-of-a-specific-class
        try {
            $erros = 0;
            $this->pdo->BeginTransaction();
            foreach ($imagem as $i) {
                $sql = "INSERT INTO imagens (imagem, post_cod) VALUES (:imagem, :postcod)";
                $param = array(
                    ":imagem" => $i->getImagem(),
                    ":postcod" => $i->getProduto()->getProduto_cod()
                );
                if (!$this->pdo->ExecuteNonQuery($sql, $param)) {
                    $erros++;
                }
            }

            if ($erros == 0) {
                $this->pdo->Commit();
                return true;
            } else {
                $this->pdo->Rollback();
                return false;
            }
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            $this->pdo->Rollback();
            return false;
        }
    }

    public function CarregarImagensPost($postCod) {
        try {
            $sql = "SELECT * FROM imagens WHERE post_cod = :postcod";
            $param = array(
                ":postcod" => $postCod
            );

            $dt = $this->pdo->ExecuteQuery($sql, $param);
            $listaImagens = [];

            foreach ($dt as $dr) {
                $imagem = new Imagem();
                $imagem->setCod($dr["cod"]);
                $imagem->setImagem($dr["imagem"]);
                $imagem->setProduto($dr["post_cod"]);

                $listaImagens[] = $imagem;
            }

            return $listaImagens;
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return null;
        }
    }

    public function VerificarArquivoExiste($postCod, $imagemCod) {
        try {
            $sql = "SELECT imagem FROM imagens WHERE post_cod  = :postcod AND cod = :cod";
            $param = array(
                ":postcod" => $postCod,
                ":cod" => $imagemCod
            );

            $dr = $this->pdo->ExecuteQueryOneRow($sql, $param);

            return $dr["imagem"];
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return null;
        }
    }

    public function RemoverImagem($postCod, $imagemCod) {
        try {
            $sql = "DELETE FROM imagens WHERE post_cod  = :postcod AND cod = :cod";
            $param = array(
                ":postcod" => $postCod,
                ":cod" => $imagemCod
            );
            return $this->pdo->ExecuteNonQuery($sql, $param);
        } catch (PDOException $ex) {
            if ($this->debug) {
                echo "ERRO: {$ex->getMessage()} LINE: {$ex->getLine()}";
            }
            return false;
        }
    }
}
