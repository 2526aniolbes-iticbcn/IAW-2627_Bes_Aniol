<?php
    /* EUR */
    if (
        isset($_GET["quant_eur"]) &&
        is_numeric($_GET["quant_eur"]) &&
        $_GET["quant_eur"] > 0
    ) {
        $conversion_eur = 1.14;
        $quant_eur = $_GET["quant_eur"];
        $quant_eur = $quant_eur * $conversion_eur;
        echo "Quantitat rebuda: " . $quant_eur . "$. Gràcies";
        echo "<form action='index.html' method='get'>";
        echo "<button>Tornar</button>";
        echo "</form>";
    } else {
        header("index.html");
    }

    /* DOL */
    if (
        isset($_GET["quant_dol"]) &&
        is_numeric($_GET["quant_dol"]) &&
        $_GET["quant_dol"] > 0
    ) {
        $conversion_dol = 1.14;
        $quant_dol = $_GET["quant_dol"];
        $quant_dol = $quant_dol / $conversion_dol;
        echo "Quantitat rebuda: " . $quant_dol . "€. Gràcies";
        echo "<form action='index.html' method='get'>";
        echo "<button>Tornar</button>";
        echo "</form>";
    } else {
        header("index.html");
    }
?>