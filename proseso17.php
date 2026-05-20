<?php
$cliente = $_POST['cliente'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];
$subtotal = $cantidad * $precio;

echo "<h2>Factura</h2>";
echo "Cliente: $cliente<br>";
echo "Producto: $producto<br>";
echo "Cantidad: $cantidad<br>";
echo "Precio unitario: S/. $precio<br>";
echo "<hr>";
echo "Subtotal: S/. $subtotal<br>";
echo "Total a pagar: S/. $subtotal";
?>