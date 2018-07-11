<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Slider
 *
 * @author Junio
 */
class Slider {

    private $slider_cod;
    private $slider_titulo;
    private $slider_status;
    private $slider_link;
    private $slider_thumb;
    private $slider_tamanho;

    function getSlider_cod() {
        return $this->slider_cod;
    }

    function getSlider_titulo() {
        return $this->slider_titulo;
    }

    function getSlider_status() {
        return $this->slider_status;
    }

    function getSlider_link() {
        return $this->slider_link;
    }

    function getSlider_thumb() {
        return $this->slider_thumb;
    }

    function getSlider_tamanho() {
        return $this->slider_tamanho;
    }

    function setSlider_cod($slider_cod) {
        $this->slider_cod = $slider_cod;
    }

    function setSlider_titulo($slider_titulo) {
        $this->slider_titulo = $slider_titulo;
    }

    function setSlider_status($slider_status) {
        $this->slider_status = $slider_status;
    }

    function setSlider_link($slider_link) {
        $this->slider_link = $slider_link;
    }

    function setSlider_thumb($slider_thumb) {
        $this->slider_thumb = $slider_thumb;
    }

    function setSlider_tamanho($slider_tamanho) {
        $this->slider_tamanho = $slider_tamanho;
    }

}
