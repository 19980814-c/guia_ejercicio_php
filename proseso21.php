<?php
$dolares = $_POST['dolares'];
$tasa = 0.92; // Tasa de ejemplo. 1 USD = 0.92 EUR
$euros = $dolares * $tasa;
echo "$dolares USD equivalen a " . number_format($euros, 2) . " EUR";
echo "<br><small>Nota: Cambia la tasa según el día</small>";
?>