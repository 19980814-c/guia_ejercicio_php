<?php
$num = $_POST['num'];
if($num % 2 == 0){
    echo "El número $num es PAR";
} else {
    echo "El número $num es IMPAR";
}
?>