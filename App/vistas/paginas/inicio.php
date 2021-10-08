<?php

    include_once RUTA_APP.'/vistas/inc/header.php';

?>

    <h2>Datos de inicio</h2>

    <?php
        var_dump($datos);

        $array = array (1,2,3,4);

        foreach ($array as $a) {
            echo("<ul>");
                echo("<li>" .$a. "</li>");
            echo("</ul>");
        }

    ?>
    <?php
    include_once RUTA_APP.'/vistas/inc/footer.php';
   ?>

</body>
</html>
