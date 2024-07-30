<?php

/**
 * @file leer-stream-entrada.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   2-mayo-2013
 * @url    http://lineadecodigo.com/php/leer-el-stream-de-entrada-en-php/
 * @description C—mo leer el stream de entrada en PHP para poder recibir peticiones de tipo XML o JSON en nuestro servidor.
 */

$datos = file_get_contents('php://input');
$datos_sanitized = htmlspecialchars($datos, ENT_QUOTES, 'UTF-8');

if ($datos_sanitized) {
    var_dump($datos_sanitized);
} else {
    echo "Invalid input data.";
}
?>
