<?php

require 'includes/funciones.php';

incluirTemplate('header');
?>

<main>
    <h1>Conoce sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="build/img/nosotros.webp" type="image/webp">
                <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>
                25 Años de Experiencia
            </blockquote>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Quisquam, voluptatumLorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum.Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quisquam, voluptatum..</p>
        </div>
    </div>
</main>

<section>
    <h1>Mas Sobre Nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quo doloremque
                eligendi ipsum dolorum debitis dolorem doloribus quasi minima accusamus perspiciatis
                earum recusandae aut reprehenderit officiis, eius dignissimos sapiente </p>
        </div>
        <div class="icono">
            <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
            <h3>Precio</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quo doloremque
                eligendi ipsum dolorum debitis dolorem doloribus quasi minima accusamus perspiciatis
                earum recusandae aut reprehenderit officiis, eius dignissimos sapiente </p>
        </div>
        <div class="icono">
            <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
            <h3>Tiempo</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quo doloremque
                eligendi ipsum dolorum debitis dolorem doloribus quasi minima accusamus perspiciatis
                earum recusandae aut reprehenderit officiis, eius dignissimos sapiente </p>
        </div>
    </div>

    </sercti>

    <?php
    incluirTemplate('footer');
    ?>