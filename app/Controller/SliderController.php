<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SliderController
 *
 * @author Junio
 */
class SliderController {
    private $sliderDAO;
    
    public function __construct() {
        $this->sliderDAO = new SliderDAO();
    }
    
    public function Cadastrar(Slider $slider){
        if(strlen($slider->getSlider_titulo()) > 3 && strlen($slider->getSlider_status()) > 0 && strlen($slider->getSlider_status()) <=3):
            return $this->sliderDAO->Cadastrar($slider);
        else:
            return false;
        endif;
    }
    
    public function Atualizar(Slider $slider) {
         return $this->sliderDAO->Atualizar($slider);
    }
//    
    public function ListarSlider($inicio = null, $quantidade = null) {
        return $this->sliderDAO->ListarSlider($inicio, $quantidade);
    }
    
    public function ListarTamanhoSlider($tamanho) {
        return $this->sliderDAO->ListarTamanhoSlider($tamanho);
    }
    
    
    //retorna dados do slider
    public function retornaSlider($cod){
        if($cod > 0):
            return $this->sliderDAO->retornaSlider($cod);
        else:
            return false;
        endif;
    }
//    
//    public function retornaCategoriaUrl($url){
//        return $this->categoriaDAO->retornaCategoriaUrl($url);
//        
//    }
//    
    //excluir slider
    public function Excluir($cod) {
        return $this->sliderDAO->Excluir($cod);
    }
    
    //Alterar Imagem
    public function AlterarImagem($cod, $thumb) {
        return $this->sliderDAO->AlterarImagem($cod, $thumb);
    }
    
    //retorna o status
    public function retornaStatusSlider($cod) {
        return $this->sliderDAO->retornaStatusSlider($cod);
    }
    
    //alterar status do slider
    public function AlterarStatus($cod, $status) {
        return $this->sliderDAO->AlterarStatus($cod, $status);
    }
    
    //retorna a quantidade
    public function RetornaQtdSlider() {
        return $this->sliderDAO->RetornaQtdSlider();
    }
}
