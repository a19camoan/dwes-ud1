<?php
    /**
     * Ficha personal con los datos cargados en variables. El resultado debe mostrar una foto personal.
     * 
     * @version 1.0.0
     * @since 25-09-2023
     * @author Andrés <a19camoan@iesgrancapitan.org>
     */

    $nombre = "Andrés";
    $apellido = "Castillero Moriana";
    $edad = 25;
    $direccion = "Calle falsa 123";
    $telefono = 123456789;
    $email = "a@mail.com";

    echo "<p>Nombre: $nombre</p>";
    echo "<p>Apellido: $apellido</p>";
    echo "<p>Edad: $edad</p>";
    echo "<p>Dirección: $direccion</p>";
    echo "<p>Teléfono: $telefono</p>";
    echo "<p>Email: $email</p>";
    echo "<img src=\"https://i.pinimg.com/474x/83/39/27/833927616d89898d489796340f122d84--ris-the-photo.jpg\" alt=\"Foto de perfil\">";

    echo "<a href='https://github.com/a19camoan/dwes-ud2' target='_blank'>Repositorio</a>";
