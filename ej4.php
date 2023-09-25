<?php
    /**
     * ¿Cuál es la salida del siguiente script?
     * 
     * <?php
     * $ciclo="DAW";
     * $modulo="DWES";
     * print "<p>";
     * printf("%s es un módulo de %d curso de %s", $modulo, 2, $ciclo);
     * print "</p>";
     * 
     * Prueba el script y modifícalo para las palabras DAW y DWES apararezcan en negrita.
     * 🚩 Investiga uso de print y printf para salida de texto.
     * 
     * @version 1.0.0
     * @since 25-09-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $ciclo = "DAW";
    $modulo = "DWES";
    printf("<p><b>%s</b> es un módulo de %d curso de <b>%s</b></p>", $modulo, 2, $ciclo);

    echo "<a href='https://github.com/a19camoan/dwes-ud2' target='_blank'>Repositorio</a>";
