<?php
$precio = $_POST['precio'];
$iva = 0.18; // 18% IVA en Perú
$total = $precio + ($precio * $iva);
echo "Precio sin IVA: $. $precio<br>";
echo "IVA 18%: $. " . number_format($precio * $iva, 2) . "<br>";
echo "Total con IVA: $ " . number_format($total, 2);
?>