<?php

if (
    isset($_GET["quant_eur"]) &&
    isset($_GET["iva"]) &&
    is_numeric($_GET["quant_eur"]) &&
    in_array($_GET["iva"], ["4", "10", "21"])
) {
    $quant_eur = (float) $_GET["quant_eur"];
    $iva = (int) $_GET["iva"];

    if ($quant_eur < 0) {
        echo "El preu no pot ser negatiu.";
        exit;
    }

    $import_iva = $quant_eur * $iva / 100;
    $total = $quant_eur + $import_iva;
    echo "Import de l'IVA: " . number_format($import_iva, 2, ",", ".") . " €<br>";
    echo "Preu total: " . number_format($total, 2, ",", ".") . " €<br>";
    echo '<a href="index.html">Tornar</a>';

} else {
    header("index.html");
}

?>