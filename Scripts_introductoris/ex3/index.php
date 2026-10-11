<?php
    /* laragon no em pilla bé la hora */
    date_default_timezone_set('Europe/Madrid');
    
    $hora_servidor = date("H");
    echo "Hora del servidor: " . $hora_servidor;

    echo "<br>";
    if ($hora_servidor >= 5 && $hora_servidor < 14) {
        echo "Bon dia";
    }
    elseif ($hora_servidor >= 14 && $hora_servidor < 19) {
        echo "Bona tarda";
    } else {
        echo "Bona nit";
    }
    
?>