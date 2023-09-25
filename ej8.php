<?php
    /**
     * A veces es necesario conocer exactamente el contenido de una variable.
     * Piensa como puedes hacer esto y escribe un script con la siguiente salida:
     * 
     *  string(5) “Harry”
     *  Harry
     *  int(28)
     *  NULL
     * 
     * @version 1.0.0
     * @since 25-09-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $name = "Harry";

    echo "<p>" . var_dump($name) . "</p>";
    echo "<p>" . $name . "</p>";
    echo "<p>" . var_dump(28) . "</p>";
    echo "<p>" . var_dump(NULL) . "</p>";

    echo "<a href='https://github.com/a19camoan/dwes-ud1' target='_blank'>Repositorio</a>";
