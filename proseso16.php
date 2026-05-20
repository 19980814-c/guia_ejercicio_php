<?php
$monto = $_POST['monto'];
$limite = 100; // puedes cambiar esta cantidad
if($monto > $limite){
    $descuento = $monto * 0.10;
    $total = $monto - $descuento;
    echo "Compra: $. $monto<br>Descuento 10%: $. $descuento<br>Total a pagar: $. $total";
} else {
    echo "Compra: $. $monto<br>No aplica descuento<br>Total a pagar: $. $monto";
}
?>