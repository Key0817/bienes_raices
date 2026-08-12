<?php 

    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>
        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp">
            <source srcset="build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la propiedad">
        </picture>
        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, maiores, facere explicabo quasi quod accusantium veritatis illum,
                suscipit ipsam at esse mollitia inventore nam beatae neque magni minus quam nemo?Lorem ipsum dolor sit amet consectetur adipisicing elit
                . Ducimus debitis optio itaque quos error soluta corrupti? Iure obcaecati dolorum magnam commodi veritatis sequi eius delectus ab explicabo quidem, vitae possimus et quia laborum ex eveniet quas distinctio aspernatur repudiandae vero perferendis molestiae labore asperiores soluta. Ducimus placeat hic repellat voluptatibus sed ex neque provident expedita sequi dicta explicabo cum, quos velit libero, ut iste odio. Quo commodi ducimus neque aliquid! Eius deleniti ratione corporis enim pariatur cupiditate amet quisquam in, magnam natus nulla aperiam? Sint labore, porro quia doloribus provi
                dent quisquam mollitia id quod, voluptatibus sapiente harum maxime dolore minus.</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>