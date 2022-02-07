<?php
function issetAndUnset() {
    $variable = "Hola";

    echo "<h4 class='my-2'>La variable antes del UNSET: </h4>";
    var_dump(isset($variable));

    unset($variable);

    echo "<h4 class='my-2'>La variable despues del UNSET: </h4>";
    var_dump(isset($variable));
}