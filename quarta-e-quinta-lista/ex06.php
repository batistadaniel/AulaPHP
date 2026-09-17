<?php
echo "<select name='ano'>";
for ($ano = 2000; $ano <= 2024; $ano++) {
    echo "<option>" . $ano . "</option>";
}
echo "</select>";
?>