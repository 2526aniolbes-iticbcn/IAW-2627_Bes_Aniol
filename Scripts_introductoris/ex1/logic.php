<?php
    if(
        isset($_POST["nombre"]) &&
        isset($_POST["cognoms"]) &&
        isset($_POST["email"]) &&
        isset($_POST["missatge"])){

        $nom = $_POST["nombre"];
        $cognoms = $_POST["cognoms"];
        $email= $_POST["email"];
        $missatge = $_POST["missatge"];

        echo "Missatge rebut, " . $nom . " ". $cognoms . ". Gràcies per contactar. Et respondrem a" . $email . ".";
    } else {

        echo "No s'ha desat el missatge. Error.";
        echo "<form action='index.html' method='get'><button>Tornar</button></form>";
    }
?>
<!-- Missatge rebut, <?php echo $nom ?> <?php echo $cognoms ?>.
Gràcies per contactar. Et respondrem a <?php echo $email ?>.
<form action='index.html' method='get'<button>Tornar</button></form>; -->

<!-- echo "Missatge rebut, ".$nom.". Gràcies per contactar. Et respondrem a ".$email.""  -->