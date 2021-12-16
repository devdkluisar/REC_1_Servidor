<?php

/**
 * Description of rectangulo
 *
 * @author Luis ares
 */
class rectangulo {

// Properties - código, cor, ancho e alto.

    private $codigo;
    private $color;
    private $ancho;
    private $alto;

// Methods

    function __construct($codigo, $color, $ancho, $alto) {
        $this->codigo = $codigo;
        $this->color = $color;
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getColor() {
        return $this->color;
    }

    function getAncho() {
        return $this->ancho;
    }

    function getAlto() {
        return $this->alto;
    }

    function setCodigo($codigo): void {
        $this->codigo = $codigo;
    }

    function setColor($color): void {
        $this->color = $color;
    }

    function setAncho($ancho): void {
        $this->ancho = $ancho;
    }

    function setAlto($alto): void {
        $this->alto = $alto;
    }

    function draw() {
        echo '<style>' . '#rect{'
        . 'background:' . $this->getColor() . ';'
        . 'width:' . $this->getAncho() . 'px ;'
        . 'height:' . $this->getAlto() . 'px ;'
        . '}</style>';


        echo '<h1 class="text-center">Rectangulizando</h1>' . '<div class="container p-2" id="rect">
            
        <ul>
            <li>' . "El rectangulo tiene un area de " . number_format($this->getAncho() * $this->getAlto()) . ' pixeles cuadrados</li>
            <li>' . "El rectangulo tiene un perímetro de " . number_format(2 * ($this->getAncho() * $this->getAlto())) . ' pixeles</li>
        </ul>
    </div>';
    }

}
