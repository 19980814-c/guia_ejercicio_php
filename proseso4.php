<?php
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
if($n2 != 0){
    $div = $n1 / $n2;
    echo "La división es: $div";
} else {
    echo "Error: No se puede dividir entre 0";
}
?>