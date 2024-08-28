<?php get_header(); ?>

<section id="jumbotron">
    <div class="overlay"></div>
    <div class="swiper swiper-jumbotron">
        <div class="swiper-wrapper">
            <?php if (have_rows("slider_principal")):
                $i == 1;
                while (have_rows("slider_principal")):
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
                    Ápice se crea en febrero del 2024 con el fin de
                    consolidarse como una empresa sólida y reconocida en
                    el sector de la construcción e inmobiliar- ia, con
                    un permanente crecimiento y gran proyección de
                    participación en el mercado, su creación ha logrado
                    ser el punto para el desarrollo de profesionales con
                    más de 15 años de experiencia en diferentes ámbitos,
                    tales como la arquitectura, ingeniería civil, diseño
                    entre otros.
                </p>
            </div>
            <div class="col-lg-6 my-lg-auto">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/home/thumb-historia.webp"
                    alt=""
                    class="img-fluid"
                    data-aos="fade-left"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                />
            </div>
        </div>
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
                    En Ápice, nos esforzamos por ser líderes en sector
                    de la construcción de obras industriales y
                    habitacionales, entregando proyectos de clase mun-
                    dial que impulsen el desarrollo económico y la
                    innovación, mientras man- tenemos un compromiso
                    firme con la calidad, la integridad y el servicio.
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
                    Nos visualizamos como la empresa constructora de
                    referencia en el mer- cado, destacando por nuestra
                    capacidad de proyectar un crecimiento rentable y
                    seguro, con el fin de realizar proyectos
                    industriales y habita- cionales de alta complejidad
                    y envergadura, mientras mantenemos un enfoque
                    centrado en la eficiencia, honestidad y excelencia.
                </p>
            </div>
            <div class="col-lg-6 order-lg-1 my-lg-auto">
                <img
                    src="<?php echo esc_url(
                        get_template_directory_uri()
                    ); ?>/assets/images/home/thumb-mision-vision.webp"
                    alt=""
                    class="img-fluid"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                    data-aos-delay="400"
                />
            </div>
        </div>
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

<section id="descanso">
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    Sumamos talentos para alcanzar<br />
                    grandes resultados
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <img
            src="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/assets/images/home/bg-descanso.webp"
            alt=""
            class="img-fluid"
            data-aos="zoom-in"
            data-aos-duration="2000"
            data-aos-delay="100"
        />
    </div>
</section>

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
                                class="integrante integrante-2"
                                style="background: url('<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/equipo/jennifer-jimenez.png'); no-repeat;"
                                href="javascript:void(0)"
                                data-bs-toggle="modal"
                                data-bs-target="#modal-equipo"
                                data-bg="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/equipo/jennifer-jimenez.png"
                                data-bg-modal="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/equipo/modal-jennifer-jimenez.png"
                                data-name="Arq. Jennifer Jiménez O."
                                data-position="Gerente PMO"
                                data-bio="Con una sólida formación académica respaldada por un título de Arquitectura obtenido en la Universidad Autónoma de Ciudad Juárez en 2016, y complementada con un Master en Gestión de Proyectos de Summa University en 2024, mi trayectoria profesional abarca más de una década de experiencia en el sector. Mis habilidades se extienden desde la implementación de metodologías como Lean Management hasta la aplicación de plataformas de gestión de proyectos de vanguardia como Procore. A lo largo de mi carrera, he desempeñado roles clave en el diseño, coordinación y dirección de ingenierías de proyectos constructivos, así como en la gestión integral de obras como Gerente de Proyectos, especializándome en optimizar los procesos de construcción mediante una sólida gestión de proyectos.

                                Con un enfoque orientado hacia la excelencia y la eficiencia, mi compromiso es liderar equipos hacia el éxito mediante una combinación de experiencia técnica y habilidades de gestión. Mi sólida base académica y mi experiencia práctica me permiten abordar los desafíos del desarrollo organizacional con perspectivas innovadoras, asegurando resultados sobresalientes en cada proyecto. Estoy emocionada por la oportunidad de contribuir con mis habilidades y conocimientos a tu proyecto, y espero colaborar en la creación de soluciones constructivas y sostenibles que superen tus expectativas."
                                data-quote="La arquitectura es el encuentro entre la luz y la sombra."
                                data-quote-author="―Tadao Ando"
                            >
                                <div class="overlay"></div>
                            </a>
                            <h1>Arq. Jennifer Jiménez O.</h1>
                            <p>Gerente PMO</p>
                        </div>
                        <div class="swiper-slide">
                            <a
                                class="integrante integrante-3"
                                style="background: url('<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/equipo/valeria-jimenez.webp'); no-repeat;"
                                href="javascript:void(0)"
                                data-bs-toggle="modal"
                                data-bs-target="#modal-equipo"
                                data-bg="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/equipo/valeria-jimenez.webp"
                                data-bg-modal="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/equipo/modal-valeria-jimenez.webp"
                                data-name="Lic. Valeria Jiménez M."
                                data-position="Gerente de Mercadotecnia y RRPP"
                                data-bio="Mi enfoque profesional se caracteriza por una actitud dinámica y una organización impecable, lo que me permite adaptarme con facilidad a diversos entornos y desafíos. Como defensor del trabajo en equipo y los valores de compañerismo, me esfuerzo por cultivar un ambiente colaborativo donde cada miembro pueda alcanzar su máximo potencial.

                                A lo largo de mi trayectoria, he alcanzado metas profesionales significativas, siempre buscando nuevos desafíos que me permitan fortalecer relaciones tanto internas como externas. Mi experiencia se ha centrado en la supervisión estratégica de esfuerzos de marketing, guiando equipos hacia la consecución de objetivos compartidos y contribuyendo con mis conocimientos para el logro de metas exitosas y mutuamente beneficiosas."
                                data-quote="Las oportunidades no ocurren, tú las creas."
                                data-quote-author=""
                            >
                                <div class="overlay"></div>
                            </a>
                            <h1>Lic. Valeria Jiménez M.</h1>
                            <p>Gerente de Mercadotecnia y RRPP</p>
                        </div>
                        <div class="swiper-slide">
                            <a
                                class="integrante integrante-4"
                                style="background: url('<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/equipo/karla-torres.png'); no-repeat;"
                                href="javascript:void(0)"
                                data-bs-toggle="modal"
                                data-bs-target="#modal-equipo"
                                data-bg="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/equipo/karla-torres.png"
                                data-bg-modal="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/equipo/modal-karla-torres.png"
                                data-name="Lic. Karla Torres"
                                data-position="Diseñadora Gráfica Sr."
                                data-bio="Mi trayectoria profesional ha sido regida por mis estudios en Diseño Gráfico y Comunicación, los cuales me han guiado a laborar en medios de comunicación como periódicos, radio y revistas, así mismo actualmente en el sector de la construcción.

                                He desempeñado roles de editora y redactora, diseñadora gráfica (editorial, de identidad corporativa y promocional), fotógrafa, diseño digital y diseño web. Estas experiencias me han permitido desarrollar estrategias de comunicación efectivas, tanto gráficas como de interacción, consiguiendo un sentido más analístico y creativo.

                                Mi visión editorial estructurada y funcional, junto con mi capacidad para innovar y ser creativa, me convierten en una profesional versátil. He contribuido al incremento de visibilidad y engagement en redes sociales, creado identidades corporativas únicas y gestionado campañas publicitarias.

                                Así mismo, cuento con un Máster en Comunicación y Periodismo Gastronómico, con el que he obtenido herramientas para aplicar y adaptar mis conocimientos a cualquier sector o marcar, siempre con responsabilidad y profesionalismo, dando un gran sazón a mi perfil profesional."
                                data-quote="Creatividad y funcionalidad, esa es la clave."
                                data-quote-author=""
                            >
                                <div class="overlay"></div>
                            </a>
                            <h1>Lic. Karla Torres</h1>
                            <p>Diseñadora Gráfica Sr.</p>
                        </div>
                        <div class="swiper-slide">
                            <a
                                class="integrante integrante-5"
                                style="background: url('<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/equipo/caleb-medrano.png'); no-repeat;"
                                href="javascript:void(0)"
                                data-bs-toggle="modal"
                                data-bs-target="#modal-equipo"
                                data-bg="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/equipo/caleb-medrano.png"
                                data-bg-modal="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/equipo/modal-caleb-medrano.png"
                                data-name="Lic. Caleb Medrano A."
                                data-position="Gerente de Comunicación Organizacional"
                                data-bio="Con más de siete años de inmersión en los ámbitos de comunicación, mercadotecnia, creación de contenidos e inbound marketing, mi trayectoria profesional ha sido un constante viaje hacia la excelencia en la esfera corporativa. A lo largo de mi carrera, he tenido el privilegio de compartir conocimientos a través de conferencias sobre comunicación digital y monográficos enfocados en el desarrollo de habilidades para una comunicación asertiva, así como la trascendencia de una comunicación organizacional efectiva.

                                En este vertiginoso paisaje digital, he reconocido la trascendencia de las redes sociales y la gestión experta de contenidos multimedia. Esta comprensión me ha llevado a especializarme en publicidad y tendencias digitales, explorando el poder transformador que estas herramientas ejercen en nuestro entorno.

                                Con un enfoque apasionado y orientado a resultados, me comprometo a ser un catalizador de éxito para cualquier marca que tenga la visión de destacar en el competitivo panorama empresarial."
                                data-quote="Deja que tu creatividad hable por ti."
                                data-quote-author=""
                            >
                                <div class="overlay"></div>
                            </a>
                            <h1>Lic. Caleb Medrano A.</h1>
                            <p>
                                Gerente de Comunicación Organizacional
                            </p>
                        </div>
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
                    href="javascript:void(0)"
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
                    href="javascript:void(0)"
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
                <h1>Ápiteca</h1>
            </div>
        </div>
        <div class="row second-row h-100">
            <div
                class="col-6 col-xl-3 d-flex align-items-center justify-content-center"
            >
                <a
                    href="#"
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
                    href="#"
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
                    href="#"
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
                    href="#"
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
