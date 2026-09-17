<?php
$tentativas = 0;
do {
    $tentativas++;
    echo "Tentativa número: " . $tentativas . "\n";
} while ($tentativas < 3);
?>