<?php
    /**
     * Script que cargue las siguientes variables:
     *  $x=10;
     *  $y=7;
     * y muestre:
     *  10 + 7 = 17
     *  10 - 7 = 3
     *  10 * 7 = 70
     *  10 / 7 = 1.4285714285714
     *  10 % 7 = 3
     * 
     * @version 1.0.0
     * @since 25-09-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $x = 10;
    $y = 7;

    echo "<p>" . "$x + $y = " . ($x + $y) . "</p>";
    echo "<p>" . "$x - $y = " . ($x - $y) . "</p>";
    echo "<p>" . "$x * $y = " . ($x * $y) . "</p>";
    echo "<p>" . "$x / $y = " . ($x / $y) . "</p>";
    echo "<p>" . "$x % $y = " . ($x % $y) . "</p>";

    echo "<a href='https://github.com/a19camoan/dwes-ud1' target='_blank'>Repositorio</a>";
