<?php get_header(); ?>

<section id="jumbotron">
    <div class="overlay"></div>
    <div class="swiper swiper-internas">
        <div class="swiper-wrapper">
            <div
                class="swiper-slide"
                style="
                    background: url(&quot;<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/residencial/thumb-modelo-1.webp&quot;)
                        no-repeat;
                "
            >
                <div class="container-fluid">
                    <div class="row">
                        <div
                            class="col d-flex justify-content-start align-items-end"
                        >
                            <h1
                                class="titulo ms-lg-4 mb-5"
                                data-aos="fade-up"
                                data-aos-duration="1000"
                            >
                                Proyectos Residenciales
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <!-- div class="swiper-button-next"></div -->
        <!-- div class="swiper-button-prev"></div -->

        <!-- If we need scrollbar -->
        <!-- div class="swiper-scrollbar"></div>
        <div class="autoplay-progress">
            <svg viewBox="0 0 48 48">
                <circle cx="24" cy="24" r="20"></circle>
            </svg>
            <span></span>
        </div -->
    </div>
    <div class="flash"></div>
</section>

<?php if (have_posts()): ?>

<section id="interna" class="black-headings pt-60 pb-30">
    <div
        class="swiper swiper-proyectos"
        data-aos="fade-in"
        data-aos-duration="1000"
        data-aos-delay="100"
    >
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a
                    class="integrante integrante-1"
                    style="background: url('<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/saul-sanchez.png'); no-repeat;"
                    href="javascript:void(0)"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-equipo"
                    data-bg="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/saul-sanchez.png"
                    data-bg-modal="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/modal-saul-sanchez.png"
                    data-name="Arq. Saúl Sánchez C."
                    data-position="Director Ejecutivo"
                    data-bio="Desde mi graduación en la Universidad La Salle en el año 2002, he estado inmerso en el mundo de la arquitectura y la gestión de proyectos, buscando constantemente superar los límites de la creatividad y la eficiencia.

                    Mi pasión por la arquitectura me llevó a buscar una mayor especialización, obteniendo un Máster en Desarrollo Urbano y Regional de la Universidad Autónoma de México, donde adquirí una comprensión profunda de los entornos urbanos y regionales y su impacto en el diseño arquitectónico.

                    Sin embargo, mi búsqueda de excelencia no se detuvo ahí. En el año 2024, tuve el privilegio de completar un segundo máster en Gestión de Proyectos en Summa University. Esta experiencia me brindó las habilidades y herramientas necesarias para liderar proyectos de manera efectiva y eficiente, cumpliendo con los más altos estándares de calidad y rendimiento.

                    Mi especialidad en edificios inteligentes ha sido una fuente constante de inspiración para mí. Me apasiona la integración de tecnologías innovadoras con diseños arquitectónicos funcionales y estéticos, asegurando que cada proyecto que emprendemos sea tanto visionario como práctico.

                    Además, mi experiencia en project management, lean management y procedimientos para construcción en concreto me ha permitido enfrentar desafíos con confianza y liderar equipos hacia el éxito en todas las etapas del proceso de construcción.

                    Durante los últimos cuatro años, he tenido el privilegio de formar parte de la dirección de operaciones y planificación estratégica de nuestro equipo, donde he contribuido con mi visión y liderazgo para impulsar el crecimiento y la innovación en nuestra organización."
                    data-quote="La arquitectura es el arte de gastar el espacio."
                    data-quote-author="―Philip Johnson"
                >
                    <div class="overlay"></div>
                </a>
                <h1>Arq. Saúl Sánchez C.</h1>
                <p>Director Ejecutivo</p>
            </div>
            <div class="swiper-slide">
                <a
                    class="integrante integrante-1"
                    style="background: url('<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/saul-sanchez.png'); no-repeat;"
                    href="javascript:void(0)"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-equipo"
                    data-bg="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/saul-sanchez.png"
                    data-bg-modal="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/modal-saul-sanchez.png"
                    data-name="Arq. Saúl Sánchez C."
                    data-position="Director Ejecutivo"
                    data-bio="Desde mi graduación en la Universidad La Salle en el año 2002, he estado inmerso en el mundo de la arquitectura y la gestión de proyectos, buscando constantemente superar los límites de la creatividad y la eficiencia.

                    Mi pasión por la arquitectura me llevó a buscar una mayor especialización, obteniendo un Máster en Desarrollo Urbano y Regional de la Universidad Autónoma de México, donde adquirí una comprensión profunda de los entornos urbanos y regionales y su impacto en el diseño arquitectónico.

                    Sin embargo, mi búsqueda de excelencia no se detuvo ahí. En el año 2024, tuve el privilegio de completar un segundo máster en Gestión de Proyectos en Summa University. Esta experiencia me brindó las habilidades y herramientas necesarias para liderar proyectos de manera efectiva y eficiente, cumpliendo con los más altos estándares de calidad y rendimiento.

                    Mi especialidad en edificios inteligentes ha sido una fuente constante de inspiración para mí. Me apasiona la integración de tecnologías innovadoras con diseños arquitectónicos funcionales y estéticos, asegurando que cada proyecto que emprendemos sea tanto visionario como práctico.

                    Además, mi experiencia en project management, lean management y procedimientos para construcción en concreto me ha permitido enfrentar desafíos con confianza y liderar equipos hacia el éxito en todas las etapas del proceso de construcción.

                    Durante los últimos cuatro años, he tenido el privilegio de formar parte de la dirección de operaciones y planificación estratégica de nuestro equipo, donde he contribuido con mi visión y liderazgo para impulsar el crecimiento y la innovación en nuestra organización."
                    data-quote="La arquitectura es el arte de gastar el espacio."
                    data-quote-author="―Philip Johnson"
                >
                    <div class="overlay"></div>
                </a>
                <h1>Arq. Saúl Sánchez C.</h1>
                <p>Director Ejecutivo</p>
            </div>
            <div class="swiper-slide">
                <a
                    class="integrante integrante-1"
                    style="background: url('<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/saul-sanchez.png'); no-repeat;"
                    href="javascript:void(0)"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-equipo"
                    data-bg="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/saul-sanchez.png"
                    data-bg-modal="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/modal-saul-sanchez.png"
                    data-name="Arq. Saúl Sánchez C."
                    data-position="Director Ejecutivo"
                    data-bio="Desde mi graduación en la Universidad La Salle en el año 2002, he estado inmerso en el mundo de la arquitectura y la gestión de proyectos, buscando constantemente superar los límites de la creatividad y la eficiencia.

                    Mi pasión por la arquitectura me llevó a buscar una mayor especialización, obteniendo un Máster en Desarrollo Urbano y Regional de la Universidad Autónoma de México, donde adquirí una comprensión profunda de los entornos urbanos y regionales y su impacto en el diseño arquitectónico.

                    Sin embargo, mi búsqueda de excelencia no se detuvo ahí. En el año 2024, tuve el privilegio de completar un segundo máster en Gestión de Proyectos en Summa University. Esta experiencia me brindó las habilidades y herramientas necesarias para liderar proyectos de manera efectiva y eficiente, cumpliendo con los más altos estándares de calidad y rendimiento.

                    Mi especialidad en edificios inteligentes ha sido una fuente constante de inspiración para mí. Me apasiona la integración de tecnologías innovadoras con diseños arquitectónicos funcionales y estéticos, asegurando que cada proyecto que emprendemos sea tanto visionario como práctico.

                    Además, mi experiencia en project management, lean management y procedimientos para construcción en concreto me ha permitido enfrentar desafíos con confianza y liderar equipos hacia el éxito en todas las etapas del proceso de construcción.

                    Durante los últimos cuatro años, he tenido el privilegio de formar parte de la dirección de operaciones y planificación estratégica de nuestro equipo, donde he contribuido con mi visión y liderazgo para impulsar el crecimiento y la innovación en nuestra organización."
                    data-quote="La arquitectura es el arte de gastar el espacio."
                    data-quote-author="―Philip Johnson"
                >
                    <div class="overlay"></div>
                </a>
                <h1>Arq. Saúl Sánchez C.</h1>
                <p>Director Ejecutivo</p>
            </div>
            <div class="swiper-slide">
                <a
                    class="integrante integrante-1"
                    style="background: url('<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/saul-sanchez.png'); no-repeat;"
                    href="javascript:void(0)"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-equipo"
                    data-bg="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/saul-sanchez.png"
                    data-bg-modal="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/modal-saul-sanchez.png"
                    data-name="Arq. Saúl Sánchez C."
                    data-position="Director Ejecutivo"
                    data-bio="Desde mi graduación en la Universidad La Salle en el año 2002, he estado inmerso en el mundo de la arquitectura y la gestión de proyectos, buscando constantemente superar los límites de la creatividad y la eficiencia.

                    Mi pasión por la arquitectura me llevó a buscar una mayor especialización, obteniendo un Máster en Desarrollo Urbano y Regional de la Universidad Autónoma de México, donde adquirí una comprensión profunda de los entornos urbanos y regionales y su impacto en el diseño arquitectónico.

                    Sin embargo, mi búsqueda de excelencia no se detuvo ahí. En el año 2024, tuve el privilegio de completar un segundo máster en Gestión de Proyectos en Summa University. Esta experiencia me brindó las habilidades y herramientas necesarias para liderar proyectos de manera efectiva y eficiente, cumpliendo con los más altos estándares de calidad y rendimiento.

                    Mi especialidad en edificios inteligentes ha sido una fuente constante de inspiración para mí. Me apasiona la integración de tecnologías innovadoras con diseños arquitectónicos funcionales y estéticos, asegurando que cada proyecto que emprendemos sea tanto visionario como práctico.

                    Además, mi experiencia en project management, lean management y procedimientos para construcción en concreto me ha permitido enfrentar desafíos con confianza y liderar equipos hacia el éxito en todas las etapas del proceso de construcción.

                    Durante los últimos cuatro años, he tenido el privilegio de formar parte de la dirección de operaciones y planificación estratégica de nuestro equipo, donde he contribuido con mi visión y liderazgo para impulsar el crecimiento y la innovación en nuestra organización."
                    data-quote="La arquitectura es el arte de gastar el espacio."
                    data-quote-author="―Philip Johnson"
                >
                    <div class="overlay"></div>
                </a>
                <h1>Arq. Saúl Sánchez C.</h1>
                <p>Director Ejecutivo</p>
            </div>
            <div class="swiper-slide">
                <a
                    class="integrante integrante-1"
                    style="background: url('<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/saul-sanchez.png'); no-repeat;"
                    href="javascript:void(0)"
                    data-bs-toggle="modal"
                    data-bs-target="#modal-equipo"
                    data-bg="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/saul-sanchez.png"
                    data-bg-modal="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/equipo/modal-saul-sanchez.png"
                    data-name="Arq. Saúl Sánchez C."
                    data-position="Director Ejecutivo"
                    data-bio="Desde mi graduación en la Universidad La Salle en el año 2002, he estado inmerso en el mundo de la arquitectura y la gestión de proyectos, buscando constantemente superar los límites de la creatividad y la eficiencia.

                    Mi pasión por la arquitectura me llevó a buscar una mayor especialización, obteniendo un Máster en Desarrollo Urbano y Regional de la Universidad Autónoma de México, donde adquirí una comprensión profunda de los entornos urbanos y regionales y su impacto en el diseño arquitectónico.

                    Sin embargo, mi búsqueda de excelencia no se detuvo ahí. En el año 2024, tuve el privilegio de completar un segundo máster en Gestión de Proyectos en Summa University. Esta experiencia me brindó las habilidades y herramientas necesarias para liderar proyectos de manera efectiva y eficiente, cumpliendo con los más altos estándares de calidad y rendimiento.

                    Mi especialidad en edificios inteligentes ha sido una fuente constante de inspiración para mí. Me apasiona la integración de tecnologías innovadoras con diseños arquitectónicos funcionales y estéticos, asegurando que cada proyecto que emprendemos sea tanto visionario como práctico.

                    Además, mi experiencia en project management, lean management y procedimientos para construcción en concreto me ha permitido enfrentar desafíos con confianza y liderar equipos hacia el éxito en todas las etapas del proceso de construcción.

                    Durante los últimos cuatro años, he tenido el privilegio de formar parte de la dirección de operaciones y planificación estratégica de nuestro equipo, donde he contribuido con mi visión y liderazgo para impulsar el crecimiento y la innovación en nuestra organización."
                    data-quote="La arquitectura es el arte de gastar el espacio."
                    data-quote-author="―Philip Johnson"
                >
                    <div class="overlay"></div>
                </a>
                <h1>Arq. Saúl Sánchez C.</h1>
                <p>Director Ejecutivo</p>
            </div>
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <div class="container">
        <?php
        $i = 1;
        while (have_posts()):
            the_post(); ?>
            <div class="row mb-4">
                <div class="col-lg-6 <?php if ($i % 2 != 0):
                else:
                     ?>order-lg-2<?php
                endif; ?> mb-4 my-lg-auto">
                    <a href="<?php the_permalink(); ?>">
                        <h1
                            class="mb-30"
                            data-aos="<?php if (
                                $i % 2 !=
                                0
                            ): ?>fade-right<?php else: ?>fade-left<?php endif; ?>"
                            data-aos-duration="1000"
                        >
                            <?php the_title(); ?>
                        </h1>
                    </a>
                    <p
                        data-aos="<?php if (
                            $i % 2 !=
                            0
                        ): ?>fade-right<?php else: ?>fade-left<?php endif; ?>"
                        data-aos-duration="1000"
                        data-aos-delay="100"
                    >
                        <?php html5wp_excerpt("html5wp_custom_post"); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-secondary" data-aos="<?php if (
    $i % 2 !=
    0
): ?>fade-right<?php else: ?>fade-left<?php endif; ?>"
                    data-aos-duration="1000"
                    data-aos-delay="200">Ver más <i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <div class="col-lg-6 my-lg-auto">
                    <a href="<?php the_permalink(); ?>">
                        <?php
                        // Determine the custom AOS attribute based on the counter
                        $aos_effect = $i % 2 != 0 ? "fade-left" : "fade-right";

                        // Define the attributes for the image
                        $attributes = [
                            "class" => "img-fluid",
                            "alt" => "", // Add an appropriate alt text if available
                            "data-aos" => $aos_effect,
                            "data-aos-duration" => "1000",
                            "data-aos-delay" => "200",
                        ];

                        // Print the post thumbnail with the custom attributes
                        echo wp_get_attachment_image(
                            get_post_thumbnail_id(),
                            "galeria",
                            false,
                            $attributes
                        );
                        ?>
                    </a>
                </div>
            </div>
        <?php $i++;
        endwhile;
        ?>
    </div>
</section>

<?php else: ?>
<?php endif; ?>

<section class="py-60">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <?php echo bootstrap_pagination(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
