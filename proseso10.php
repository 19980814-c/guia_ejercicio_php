<?php
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$promedio = ($n1 + $n2 + $n3) / 3;
echo "El promedio es: " . number_format($promedio, 2) . "<br>";

if($promedio >= 11){
    echo "Esta: APROBADO";
} else {
    echo "Esta: REPROBADO";
}
?>