<?php
$percentual = 0;
do {
    echo "Carregando... " . $percentual . "%\n";
    $percentual = $percentual + 25;
} while ($percentual <= 100);
?>