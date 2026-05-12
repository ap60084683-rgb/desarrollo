<?php
$opcion = 2;
switch ($opcion) {
    case 1: echo "Suma: " . (5 + 3) . "<br>"; break;
    case 2: echo "Resta: " . (5 - 3) . "<br>"; break;
    case 3: echo "Multiplicación: " . (5 * 3) . "<br>"; break;
    case 4: echo "División: " . (5 / 3) . "<br>"; break;
    default: echo "Opción inválida<br>";
}
?>