<?php
$num = $_POST['num'];
echo "<h2>Tabla de multiplicar del $num</h2>";
for($i = 1; $i <= 10; $i++){
    $res = $num * $i;
    echo "$num x $i = $res<br>";
}
?>