<?php
    /**
     * Pon ejemplo de uso de la sintaxis heredoc en el manejo de cadenas.
     * 
     * @version 1.0.0
     * @since 25-09-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $curso = "2º DAW";
    $nombre = "Andrés";
    
    $mensaje = <<<"SEX"
    Mi nombre es $nombre. Estoy haciendo el ejercicio 10 de la UD2 del curso $curso.
    Para ello estoy usando la sintaxis heredoc.
    SEX;

    echo "<p>" . $mensaje . "</p>";

    echo "<a href='https://github.com/a19camoan/dwes-ud1' target='_blank'>Repositorio</a>";
