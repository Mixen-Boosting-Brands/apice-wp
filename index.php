<?php get_header(); ?>

<section id="jumbotron">
    <div class="overlay"></div>
    <div class="swiper swiper-jumbotron">
        <div class="swiper-wrapper">
            <?php if (have_rows("slider_principal", "option")):
                $i = 1;
                while (have_rows("slider_principal", "option")):
                    the_row(); ?>
                <div class="swiper-slide bg-jumbotron-<?php echo $i; ?>">
                    <div class="container-fluid">
                        <div class="row">
                            <div
                                class="col d-flex justify-content-center align-items-center"
                            >
                                <h1
                                    class="titulo"
                                    data-aos="fade-up"
                                    data-aos-duration="1000"
                                >
                                    <?php echo acf_esc_html(
                                        get_sub_field("texto")
                                    ); ?>
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $i++;
                endwhile;
            endif; ?>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <!-- div class="swiper-button-next"></div -->
        <!-- div class="swiper-button-prev"></div -->

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div>
    </div>
    <div class="flash"></div>
</section>

<section id="historia" class="black-headings pt-60 pb-30">
    <div class="container">
        <?php if (get_field("historia", "option")): ?>
            <div class="row mb-4">
                <div class="col-lg-6 my-lg-auto">
                    <h1
                        class="mb-30"
                        data-aos="fade-right"
                        data-aos-duration="1000"
                    >
                        Historia
                    </h1>
                    <p
                        data-aos="fade-right"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <?php the_field("historia", "option"); ?>
                    </p>
                </div>
                <div class="col-lg-6 my-lg-auto">
                    <img
                        src="<?php the_field(
                            "thumbnail_historia",
                            "option"
                        ); ?>"
                        alt=""
                        class="img-fluid"
                        data-aos="fade-left"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    />
                </div>
            </div>
        <?php endif; ?>
        <?php if (
            get_field("mision", "option") &&
            get_field("vision", "option")
        ): ?>
            <div class="row mb-4">
                <div class="col-lg-6 order-lg-2 mb-4 my-lg-auto">
                    <h1
                        class="mb-30"
                        data-aos="fade-left"
                        data-aos-duration="1000"
                    >
                        Misión
                    </h1>
                    <p
                        class="mb-40"
                        data-aos="fade-left"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <?php the_field("mision", "option"); ?>
                    </p>
                    <h1
                        class="mb-30"
                        data-aos="fade-left"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    >
                        Visión
                    </h1>
                    <p
                        data-aos="fade-left"
                        data-aos-duration="1000"
                        data-aos-delay="300"
                    >
                        <?php the_field("vision", "option"); ?>
                    </p>
                </div>
                <div class="col-lg-6 order-lg-1 my-lg-auto">
                    <img
                        src="<?php the_field(
                            "thumbnail_mision_vision",
                            "option"
                        ); ?>"
                        alt=""
                        class="img-fluid"
                        data-aos="fade-right"
                        data-aos-duration="1000"
                        data-aos-delay="400"
                    />
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<section id="valores" class="black-headings pt-30 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-6 col-lg-3 mb-md-4">
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <div>
                        <img
                            class="card-img-top"
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/valores/1.webp"
                            alt=""
                            class="img-fluid"
                        />
                        <div class="card-body">
                            <h1 class="card-title">Confianza</h1>
                            <p class="card-text">
                                En el equipo de trabajo como con
                                nuestros clientes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-md-4">
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <div>
                        <img
                            class="card-img-top"
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/valores/2.webp"
                            alt=""
                            class="img-fluid"
                        />
                        <div class="card-body">
                            <h1 class="card-title">Honestidad</h1>
                            <p class="card-text">
                                Actuando siempre con transparencia y
                                claridad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-md-4">
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <div>
                        <img
                            class="card-img-top"
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/valores/3.webp"
                            alt=""
                            class="img-fluid"
                        />
                        <div class="card-body">
                            <h1 class="card-title">Calidad</h1>
                            <p class="card-text">
                                En cada procedimiento, proceso y
                                producto que ofrecemos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-md-4">
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="300"
                >
                    <div>
                        <img
                            class="card-img-top"
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/valores/4.webp"
                            alt=""
                            class="img-fluid"
                        />
                        <div class="card-body">
                            <h1 class="card-title">Servicio</h1>
                            <p class="card-text">
                                Especializado para cada uno de nuestros
                                clientes y colaboradores.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-md-4">
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <div>
                        <img
                            class="card-img-top"
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/valores/5.webp"
                            alt=""
                            class="img-fluid"
                        />
                        <div class="card-body">
                            <h1 class="card-title">Innovación</h1>
                            <p class="card-text">
                                Mejorando siempre las actividades que
                                realizamos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-md-4">
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <div>
                        <img
                            class="card-img-top"
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/valores/6.webp"
                            alt=""
                            class="img-fluid"
                        />
                        <div class="card-body">
                            <h1 class="card-title">Eficiencia</h1>
                            <p class="card-text">
                                En nuestro trabajo mejorando cada día.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-md-4">
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <div>
                        <img
                            class="card-img-top"
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/valores/7.webp"
                            alt=""
                            class="img-fluid"
                        />
                        <div class="card-body">
                            <h1 class="card-title">Integridad</h1>
                            <p class="card-text">
                                En cada situación a afrontar.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 mb-md-4">
                <div
                    class="card"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="300"
                >
                    <div>
                        <img
                            class="card-img-top"
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/valores/8.webp"
                            alt=""
                            class="img-fluid"
                        />
                        <div class="card-body">
                            <h1 class="card-title">Excelencia</h1>
                            <p class="card-text">
                                En cada proyecto que entregamos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (get_field("titulo_del_descanso", "option")): ?>
    <section id="descanso">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <h1
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="0"
                    >
                        <?php the_field("titulo_del_descanso", "option"); ?>
                    </h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <img
                src="<?php the_field("imagen_del_descanso", "option"); ?>"
                alt=""
                class="img-fluid"
                data-aos="zoom-in"
                data-aos-duration="2000"
                data-aos-delay="100"
            />
        </div>
    </section>
<?php endif; ?>

<section id="equipo">
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <p
                    class="descripcion"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Te presentamos las mentes brillantes que lideran
                    proyectos, innovan y fomentan un ambiente
                    colaborativo en esta organización.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mb-4">
            <!-- div class="col-lg-5 mb-4 my-lg-auto">
                <div
                    id="thumbnail-grande"
                    class="thumbnail-grande"
                ></div>
            </div -->
            <div class="col-12 my-auto">
                <div
                    class="swiper swiper-equipo"
                    data-aos="fade-in"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <div class="swiper-wrapper">
                        <?php
                        // Define the query parameters
                        $args = [
                            "post_type" => "equipo", // Custom post type
                            "posts_per_page" => -1, // Retrieve all posts
                            "orderby" => "date", // Order by date
                            "order" => "ASC", // Oldest to newest
                        ];

                        // Custom query to fetch the posts
                        $equipo_query = new WP_Query($args);
                        ?>
                        <?php if ($equipo_query->have_posts()):

                            $i == 1;
                            while ($equipo_query->have_posts()):
                                $equipo_query->the_post(); ?>
                            <div class="swiper-slide">
                                <a
                                    class="integrante integrante-<?php echo $i; ?>"
                                    style="background: url('<?php // Check if the post has a featured image

                                if (has_post_thumbnail()) {
                                        // Get the URL of the featured image
                                        $thumbnail_url = get_the_post_thumbnail_url(
                                            get_the_ID(),
                                            "foto-integrante"
                                        );

                                        // Output the URL
                                        echo $thumbnail_url;
                                    } ?>'); no-repeat;"
                                    href="javascript:void(0)"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modal-equipo"
                                    data-bg="<?php echo esc_url(
                                        get_template_directory_uri()
                                    ); ?>/assets/images/equipo/saul-sanchez.png"
                                    data-bg-modal="<?php if (
                                        get_field("foto_modal")
                                    ):
                                        the_field("foto_modal");
                                    endif; ?>"
                                    data-name="<?php the_title(); ?>"
                                    data-position="<?php if (
                                        get_field("puesto")
                                    ):
                                        the_field("puesto");
                                    endif; ?>"
                                    data-bio="<?php
                                    // Get the content
                                    $content = get_the_content();

                                    // Remove all HTML tags
                                    $content = wp_strip_all_tags($content);

                                    // Replace double line breaks with single new lines for paragraph separation
                                    $content = preg_replace(
                                        "/\r\n|\r|\n{2,}/",
                                        PHP_EOL . PHP_EOL,
                                        $content
                                    );

                                    // Convert content to plain text
                                    echo esc_attr($content);
                                    ?>"
                                    data-quote="<?php if (get_field("frase")):
                                        the_field("frase");
                                    endif; ?>"
                                    data-quote-author="<?php if (
                                        get_field("autor")
                                    ): ?>―<?php the_field("autor");endif; ?>"
                                >
                                    <div class="overlay"></div>
                                </a>
                                <h1><?php the_title(); ?></h1>
                                <p><?php if (get_field("puesto")):
                                    the_field("puesto");
                                endif; ?></p>
                            </div>
                        <?php $i++;
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        <?php
                        else:
                             ?>
                            <p>No team members found.</p>
                        <?php
                        endif; ?>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a
                    class="btn btn-secondary"
                    href="javascript:void(0)"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-vacantes"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                    >¡Únete a nuestro equipo!</a
                >
            </div>
        </div>
    </div>
</section>

<section id="proyectos-y-servicios" class="py-60">
    <div class="overlay"></div>
    <div class="container-fluid h-100">
        <div class="row mb-4">
            <div class="col">
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Proyectos y Servicios
                </h1>
            </div>
        </div>
        <div class="row second-row h-100">
            <div
                class="col-md-6 d-flex justify-content-center align-items-center"
            >
                <a
                    href="<?php echo esc_url(home_url()); ?>/residencial"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <h1 class="categoria categoria-residencial">
                        <span>Residencial</span>
                    </h1>
                </a>
            </div>
            <div
                class="col-md-6 d-flex justify-content-center align-items-center"
            >
                <a
                    href="<?php echo esc_url(home_url()); ?>/industrial"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <h1 class="categoria categoria-industrial">
                        <span>Industrial</span>
                    </h1>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="apiteca" class="py-60">
    <div class="container-fluid h-100">
        <div class="row mb-2 mb-lg-4">
            <div class="col">
                <?php if (get_field("titulo_apiteca", "option")): ?>
                    <h1><?php the_field("titulo_apiteca", "option"); ?></h1>
                <?php endif; ?>
            </div>
        </div>
        <div class="row second-row h-100">
            <div
                class="col-6 col-xl-3 d-flex align-items-center justify-content-center"
            >
                <a
                    href="<?php echo get_category_link(2); ?>"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <h2 class="categoria categoria-articulos triangulo">
                        <span>Artículos</span>
                    </h2>
                </a>
            </div>
            <div
                class="col-6 col-xl-3 d-flex align-items-center justify-content-center"
            >
                <a
                    href="<?php echo esc_url(home_url()); ?>/multimedia"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <h2
                        class="categoria categoria-contenido-multimedia circulo"
                    >
                        <span>Contenido<br />Multimedia</span>
                    </h2>
                </a>
            </div>
            <div
                class="col-6 col-xl-3 d-flex align-items-center justify-content-center"
            >
                <a
                    href="<?php echo get_category_link(16); ?>"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    <h2 class="categoria categoria-noticias hexagono">
                        <span>Noticias</span>
                    </h2>
                </a>
            </div>
            <div
                class="col-6 col-xl-3 d-flex align-items-center justify-content-center"
            >
                <a
                    href="<?php echo esc_url(home_url()); ?>/descargables"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="300"
                >
                    <h2
                        class="categoria categoria-ebooks-descargables cuadrado"
                    >
                        <span>Ebooks<br />Descargables</span>
                    </h2>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
