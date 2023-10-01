<?php
    /**
     * Escribir un script que utilizando variables permita obtener el siguiente resultado:
     *  Valor es string.
     *  Valor es double.
     *  Valor es boolean.
     *  Valor es integer.
     *  Valor is NULL.
     * 
     * @version 1.0.0
     * @since 25-09-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $string = "2";
    $double = 3.2;
    $boolean = FALSE;
    $integer = 8;
    $NULL = NULL;

    echo "<p>Valor es $string.</p>";
    echo "<p>Valor es $double.</p>";
    echo "<p>Valor es $boolean.</p>";
    echo "<p>Valor es $integer.</p>";
    echo "<p>Valor es $NULL.</p>";

    /*
    # Usando un bucle reccoriendo el array ahorras líneas de código.
    $variables = array(
        $string,
        $double,
        $boolean,
        $integer,
        $NULL
    );

    foreach ($variables as $key => $variable) {
        echo "<p>Valor es " . gettype($variable) . ".</p>";
    };
    */

    echo "<a href='https://github.com/a19camoan/dwes-ud2' target='_blank'>Repositorio</a>";
