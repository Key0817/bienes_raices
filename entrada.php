<?php 

    require 'includes/funciones.php';

    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad">
        </picture>
        <p class="informacion-meta">Escrito el:<span>20/10/2026</span> por: <span>Admin</span></p>
        <div class="resumen-propiedad">

            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, maiores, facere explicabo quasi quod accusantium veritatis illum,
                suscipit ipsam at esse mollitia inventore nam beatae neque magni minus quam nemo?Lorem ipsum dolor sit amet consectetur adipisicing elit
                . Ducimus debitis optio itaque quos error soluta corrupti? Iure obcaecati dolorum magnam commodi veritatis sequi eius delectus ab explicabo quidem, vitae possimus et quia laborum ex eveniet quas distinctio aspernatur repudiandae vero perferendis molestiae labore asperiores soluta. Ducimus placeat hic repellat voluptatibus sed ex neque provident expedita sequi dicta explicabo cum, quos velit libero, ut iste odio. Quo commodi ducimus neque aliquid! Eius deleniti ratione corporis enim pariatur cupiditate amet quisquam in, magnam natus nulla aperiam? Sint labore, porro quia doloribus provi
                dent quisquam mollitia id quod, voluptatibus sapiente harum maxime dolore minus.</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>