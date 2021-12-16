<?php

/**
 * Description of validar / dibujar
 *
 * @author Luis
 */
include_once './rectangulo.php';

if (isset($_REQUEST['btn-submit'])) {
    $codigo = $_REQUEST['codigo'];
    $color = $_REQUEST['color'];
    $ancho = $_REQUEST['ancho'];
    $alto = $_REQUEST['alto'];

    $r = new rectangulo($codigo, $color, $ancho, $alto);

    if ($codigo != "" && $color != "" && $ancho != "" && $alto != "") {
        echo $r->draw();
    } else {
        if ($codigo == "") {
            
            echo '<div class="container p-2 text-center">' ."Rellena codigo antes de enviar" . "<br>" . "</div>";
        }
        if ($color == "") {
            echo '<div class="container p-2 text-center">' ."Rellena color antes de enviar" . "<br>" . "</div>";
        }
        if ($alto == "") {
            echo '<div class="container p-2 text-center">' ."Rellena ancho antes de enviar" . "<br>" . "</div>";
        }
        if ($ancho == "") {
            echo '<div class="container p-2 text-center">' ."Rellena alto antes de enviar"  . "<br>" . "</div>";
        }
    }
}



