<?php
/**
 * Escribir un script que declare una variable y muestre la siguiente información en pantalla:
 * 
 * Valor actual 8.
 * Suma 2. Valor ahora 10.
 * Resta 4. Valor ahora 6.
 * Multipica por 5. Valor ahora 30.
 * Divide por 3. Valor ahora 10.
 * Incrementa el valor en 1. Valor ahora 11.
 * Decrementa el valor en 1. Valor ahora 10.
 * 
 * @version 1.0.1
 * @since 25-09-2023
 * @author Andrés <a19camoan@iesgrancapitan.org>
 */

    $variable = 8;
    echo "<p>Valor actual $variable.</p>";
    $variable += 2;
    echo "<p>Suma 2. Valor ahora $variable.</p>";
    $variable -= 4;
    echo "<p>Resta 4. Valor ahora $variable.</p>";
    $variable *= 5;
    echo "<p>Multipica por 5. Valor ahora $variable.</p>";
    $variable /= 3;
    echo "<p>Divide por 3. Valor ahora $variable.</p>";
    $variable++;
    echo "<p>Incrementa valor en 1. Valor ahora $variable</p>";
    $variable--;
    echo "<p>Decrementa valor en 1. Valor ahora $variable</p>";

    echo "<a href='https://github.com/a19camoan/dwes-ud2' target='_blank'>Repositorio</a>";
