<?php
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
if($n1 > $n2){
    echo "El mayor es: $n1";
} elseif($n2 > $n1){
    echo "El mayor es: $n2";
} else {
    echo "Ambos números son iguales";
}
?>