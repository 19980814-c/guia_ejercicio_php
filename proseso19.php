<?php
$num = $_POST['num'];
$suma = 0;
for($i = 1; $i <= $num; $i++){
    $suma += $i;
}
echo "La suma de 1 hasta $num es: $suma";
?>