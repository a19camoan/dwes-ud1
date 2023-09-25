<?php
    /**
     * Script que, a partir del radio almacenado en una variable y la definición de la constante PI, calcule el
     * área del círculo y la longitud de la circunferencia. El debe mostrar valor de radio, longitud de la
     * circunferencia, área del círculo y dibujará un círculo utilizando gráficos vectoriales.
     * 
     * @version 1.0.0
     * @since 25-09-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     * @todo SVG
     */

    $pi = 3.1415;
    $radio = 50;
    $longitud = 2 * $pi * $radio;
    $area = $pi * pow($radio, 2);

    echo "<p>Radio: $radio</p>";
    echo "<p>Longitud: $longitud</p>";
    echo "<p>Área: $area</p>";

    echo "<a href='https://github.com/a19camoan/dwes-ud2' target='_blank'>Repositorio</a>";
