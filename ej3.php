<?php
    /**
     * Script que, a partir del radio almacenado en una variable y la definición de la constante PI, calcule el
     * área del círculo y la longitud de la circunferencia. El debe mostrar valor de radio, longitud de la
     * circunferencia, área del círculo y dibujará un círculo utilizando gráficos vectoriales.
     * 
     * @version 1.0.1
     * @since 25-09-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $pi = 3.14159;
    $radio = 15;
    $longitud = 2 * $pi * $radio;
    $area = $pi * pow($radio, 2);

    echo "<p>Radio: $radio</p>";
    echo "<p>Longitud: $longitud</p>";
    echo "<p>Área: $area</p>";
    echo "<div><svg width='100' height='100'>
                <circle cx='50' cy='50' r='$radio' stroke='black' stroke-width='3' fill='red' />
            </svg></div>";

    echo "<a href='https://github.com/a19camoan/dwes-ud2' target='_blank'>Repositorio</a>";
