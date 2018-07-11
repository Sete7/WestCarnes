<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SliderDAO
 *
 * @author Junio
 */

class SliderDAO {

    private $debug;
    private $pdo;

    public function __construct() {
        $this->pdo = new Banco();
        $this->debug = true;
    }

    public function Cadastrar(Slider $slider) {
        try {
            $sql = "INSERT INTO tb_sliders (slider_titulo, slider_status, slider_link, slider_thumb, slider_tamanho) "
                    . "VALUES(:titulo, :status, :link, :thumb, :tamanho)";
            $param = array(
                ":titulo" => $slider->getSlider_titulo(),
                ":status" => $slider->getSlider_status(),
                ":link" => $slider->getSlider_link(),
                ":thumb" => $slider->getSlider_thumb(),
                ":tamanho" => $slider->getSlider_tamanho()
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

    public function Atualizar(Slider $slider) {
        try {
            $sql = "UPDATE tb_sliders SET slider_titulo = :titulo, slider_status = :status, slider_link = :link, slider_tamanho = :tamanho WHERE slider_cod = :cod";
            $param = array(
                ":cod" => $slider->getSlider_cod(),
                ":titulo" => $slider->getSlider_titulo(),
                ":status" => $slider->getSlider_status(),
                ":link" => $slider->getSlider_link(),
                ":tamanho" => $slider->getSlider_tamanho()
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

    public function ListarSlider($inicio = null, $quantidade = null) {
        try {

            $sql = "SELECT * FROM tb_sliders ORDER BY slider_cod DESC LIMIT :inicio, :quantidade";
            $param = array(
                ":inicio" => $inicio,
                ":quantidade" => $quantidade
            );
            $dt = $this->pdo->ExecuteQuery($sql, $param);

            $listaSlider = [];
            foreach ($dt as $pts) {
                $slider = new Slider();
                $slider->setSlider_cod($pts['slider_cod']);
                $slider->setSlider_titulo($pts['slider_titulo']);
                $slider->setSlider_status($pts['slider_status']);
                $slider->setSlider_link($pts['slider_link']);
                $slider->setSlider_thumb($pts['slider_thumb']);
                $slider->setSlider_tamanho($pts['slider_tamanho']);

                $listaSlider[] = $slider;
            }
            return $listaSlider;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }

    public function ListarTamanhoSlider($tamanho) {
        try {

            $sql = "SELECT * FROM tb_sliders WHERE slider_tamanho = :tamanho AND slider_status = 1 ORDER BY slider_cod DESC";

            $param = array(
                ":tamanho" => $tamanho
            );
            $dt = $this->pdo->ExecuteQuery($sql, $param);

            $listaSlider = [];
            foreach ($dt as $pts) {
                $slider = new Slider();
                $slider->setSlider_cod($pts['slider_cod']);
                $slider->setSlider_titulo($pts['slider_titulo']);
                $slider->setSlider_status($pts['slider_status']);
                $slider->setSlider_link($pts['slider_link']);
                $slider->setSlider_thumb($pts['slider_thumb']);
                $slider->setSlider_tamanho($pts['slider_tamanho']);

                $listaSlider[] = $slider;
            }
            return $listaSlider;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    //retorna dados do slider
    public function retornaSlider($cod){
        try {            
            $sql = "SELECT * FROM tb_sliders WHERE slider_cod = :cod";
            $param = array(":cod" => $cod);            
            $pts = $this->pdo->ExecuteQueryOneRow($sql, $param);            
            $slider = new Slider();
            $slider->setSlider_cod($pts['slider_cod']);
            $slider->setSlider_titulo($pts['slider_titulo']);
            $slider->setSlider_status($pts['slider_status']);
            $slider->setSlider_link($pts['slider_link']);
            $slider->setSlider_thumb($pts['slider_thumb']);
            $slider->setSlider_tamanho($pts['slider_tamanho']);         
            return $slider;            
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
//    
//    public function retornaCategoriaUrl($url){
//        try {            
//            $sql = "SELECT * FROM tb_categorias WHERE categoria_url = :url";
//            $param = array(":url" => $url);            
//            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);            
//            $categoria = new Categoria();
//            $categoria->setCategoria_cod($dt['categoria_cod']);
//            $categoria->setCategoria_nome($dt['categoria_nome']);
//            $categoria->setCategoria_descricao($dt['categoria_descricao']);
//            $categoria->setCategoria_status($dt['categoria_status']);
//            $categoria->setCategoria_url($dt['categoria_url']);
//            $categoria->setCategoria_data($dt['categoria_data']);           
//            return $categoria;            
//        } catch (PDOException $e) {
//            if ($this->debug):
//                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
//            else:
//                return null;
//            endif;
//        }
//    }
//    
    
    //excluir slider
    public function Excluir($cod) {
        try {
            $sql = "DELETE FROM tb_sliders WHERE slider_cod = :cod";
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
    
    //Alterar Imagem
    public function AlterarImagem($cod, $thumb) {
        try {
            $sql = "UPDATE tb_sliders SET slider_thumb = :thumb WHERE slider_cod = :cod";
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

    //retorna status do slider
    public function retornaStatusSlider($cod) {
        try {
            $sql = "SELECT slider_cod, slider_status FROM tb_sliders WHERE slider_cod = :cod";
            $param = array(":cod" => $cod);
            //Data Table
            $dt = $this->pdo->ExecuteQueryOneRow($sql, $param);
            $slider = new Slider();
            $slider->setSlider_cod($dt['slider_cod']);
            $slider->setSlider_status($dt['slider_status']);
            return $slider;
        } catch (PDOException $e) {
            if ($this->debug):
                echo "Erro {$e->getMessage()}, LINE {$e->getLine()}";
            else:
                return null;
            endif;
        }
    }
    //alterar status do slider
    public function AlterarStatus($cod, $status) {
        try {
            $sql = "UPDATE tb_sliders SET slider_status = :status WHERE slider_cod = :cod";
            $param = array(
                ":cod" => $cod,
                ":status" => $status
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

    public function RetornaQtdSlider() {
        try {
            $sql = "SELECT count(sl.slider_cod) as total FROM tb_sliders sl";
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

}
