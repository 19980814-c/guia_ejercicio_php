<?php
$nombre = $_POST['nombre'];
$horas = $_POST['horas'];
$pago = $_POST['pago'];
$salario = $horas * $pago;
echo "Empleado: $nombre<br>Salario total es: $. $salario";
?>