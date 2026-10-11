<?php

if (isset($_GET["genere"])) {

    $genere = $_GET["genere"];

    switch ($genere) {

        case "pop":
            echo "T'agrada el pop. És un gènere conegut per les seves melodies enganxoses i ritmes actuals.";
            break;

        case "rock":
            echo "T'agrada el rock. És un gènere amb molta energia, guitarres elèctriques i bateries potents.";
            break;

        case "jazz":
            echo "T'agrada el jazz. És un gènere caracteritzat per la improvisació i els ritmes originals.";
            break;
    }
}
echo '<br><br><a href="index.html">Tornar</a>';
?>