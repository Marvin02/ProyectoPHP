<?php
/**
 * @file hola-mundo.php
 * @version 1.0
 * @author Linea de Codigo (http://lineadecodigo.com)
 * @date   19-septiembre-2009
 * @url    http://lineadecodigo.com/php/recuperar-datos-de-un-formulario-con-php/
 * @description Paso de parametros en PHP
 */
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Recibir parametros en PHP</title>
</head>
<body>
<h1>Recibir parametros en PHP</h1>

<?php
function sanitize($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'ISO-8859-1');
}

$p1 = isset($_GET["p1"]) ? sanitize($_GET["p1"]) : "No se proporcionó p1";
$p2 = isset($_GET["p2"]) ? sanitize($_GET["p2"]) : "No se proporcionó p2";

echo "El valor de p1 es ", $p1, "<br/>";
echo "El valor de p2 es ", $p2;
?>

<br><br>
<hr>
Art&iacute;culo disponible en: <a href="http://lineadecodigo.com/php/recuperar-datos-de-un-formulario-con-php/">http://lineadecodigo.com/php/recuperar-datos-de-un-formulario-con-php/</a><br/>
<a href="http://lineadecodigo.com" title="Linea de Codigo">lineadecodigo.com</a>

</body>
</html>
