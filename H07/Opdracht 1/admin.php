<?php
    session_start();
    if (isset($_SESSION["userRole"]) && $_SESSION["userRole"] === "admin") {
        echo "Je bent nog ingelogd!";
    } else {
        echo "Je hebt onvoldoende rechten om deze pagina te bezoeken!";
    }
?>
