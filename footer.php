        <section id="contacto">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col-lg-6 my-auto p-5">
                        <h1
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="0"
                        >
                            Contacto
                        </h1>
                        <p
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            Tu proyecto es único y queremos ayudarte a hacerlo
                            realidad. Cuéntanos mas sobre tus planes y visión.
                            Comparte tus datos con nosotros o agenda una cita
                            virtual ahora mismo.
                        </p>
                        <p
                            class="fw-bold mb-5"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        >
                            Estamos emocionados de trabajar contigo.
                        </p>
                        <address
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="300"
                        >
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2">
                                    <i class="fa-solid fa-location-pin"></i>
                                </li>
                                <li>
                                    Balcones de Vista Hermosa No. 3<br />
                                    Col. Balcones Coloniales, C.P. 76140<br />
                                    Querétaro, Qro., México
                                </li>
                            </ul>
                        </address>
                        <ul
                            class="list-unstyled mb-4"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="400"
                        >
                            <li class="mb-2">
                                <i class="fa-solid fa-mobile"></i>
                            </li>
                            <li>
                                <a href="tel:+526566232823">(656) 623 2823</a> y
                                <a href="tel:+526566945575">(656) 694 5575</a>
                            </li>
                        </ul>
                        <ul
                            class="list-unstyled"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="500"
                        >
                            <li class="mb-2">
                                <i class="fa-solid fa-envelope"></i>
                            </li>
                            <li>
                                <a href="mailto:calebmed@apiceac.com"
                                    >calebmed@apiceac.com</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="contenedor-calendly p-5">
                            <h1
                                data-aos="fade-up"
                                data-aos-duration="1000"
                                data-aos-delay="600"
                            >
                                Agenda una sesión y<br />déjanos tus datos
                            </h1>

                            <!-- Principio del widget integrado de Calendly -->
                            <div
                                class="calendly-inline-widget"
                                data-url="https://calendly.com/apiceac/30min?background_color=c1b4ad&text_color=222222&primary_color=c06b36"
                                style="min-width: 320px; height: 700px"
                                data-aos="zoom-in"
                                data-aos-duration="1000"
                                data-aos-delay="1000"
                            ></div>
                            <script
                                type="text/javascript"
                                src="https://assets.calendly.com/assets/external/widget.js"
                                async
                            ></script>
                            <!-- Final del widget integrado de Calendly -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="py-60">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 ps-5">
                        <a id="logo-footer-a" href="/">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo-footer@2x.webp"
                                alt=""
                                class="img-fluid"
                                id="logo-footer"
                                data-aos="fade-in"
                                data-aos-duration="1000"
                                data-aos-delay="0"
                            />
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 my-auto ps-5 ps-lg-0">
                                <div
                                    class="menu-contenido"
                                    data-aos="fade-inp"
                                    data-aos-duration="1000"
                                    data-aos-delay="100"
                                >
                                    <nav>
                                        <ul
                                            id="navmenu-footer"
                                            class="list-unstyled"
                                        >
                                            <li>
                                                <a href="<?php if (!is_home()):
                                                    echo esc_url(home_url());
                                                endif; ?>#historia"
                                                    >Conócenos</a
                                                >
                                            </li>
                                            <li>
                                                <a href="<?php if (!is_home()):
                                                    echo esc_url(home_url());
                                                endif; ?>#proyectos-y-servicios"
                                                    >Proyectos y Servicios</a
                                                >
                                            </li>
                                            <li>
                                                <a href="<?php if (!is_home()):
                                                    echo esc_url(home_url());
                                                endif; ?>#equipo"
                                                    >Nuestro Equipo</a
                                                >
                                            </li>
                                            <!-- li>
                                                <a href="<?php if (!is_home()):
                                                    echo esc_url(home_url());
                                                endif; ?>#apiteca">Ápiteca</a>
                                            </li -->
                                            <li>
                                                <a
                                                    href="javascript:void(0)"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modal-vacantes"
                                                    >Vacantes</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href="javascript:void(0)"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modal-proveedores-y-contratistas"
                                                    >Proveedores y
                                                    Contratistas</a
                                                >
                                            </li>
                                            <li>
                                                <a href="#contacto">Contacto</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5 ps-5 ps-lg-0">
                                <address
                                    data-aos="fade-in"
                                    data-aos-duration="1000"
                                    data-aos-delay="200"
                                >
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">
                                            <i
                                                class="fa-solid fa-location-pin"
                                            ></i>
                                        </li>
                                        <li>
                                            Balcones de Vista Hermosa No. 3<br />
                                            Col. Balcones Coloniales, C.P.
                                            76140<br />
                                            Querétaro, Qro., México
                                        </li>
                                    </ul>
                                </address>
                                <a
                                    href="<?php echo get_permalink(3); ?>"
                                    data-aos="fade-in"
                                    data-aos-duration="1000"
                                    data-aos-delay="300"
                                    >Aviso de Privacidad</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 my-auto ps-5">
                        <ul
                            class="social list-inline mb-0"
                            data-aos="fade-in"
                            data-aos-duration="1000"
                            data-aos-delay="400"
                            data-aos-offset="20"
                        >
                            <li class="list-inline-item">
                                <a
                                    href="https://www.linkedin.com/company/apice-arquitectura-y-construccion/"
                                    target="_blank"
                                >
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    href="https://www.instagram.com/constructora.apice/"
                                    target="_blank"
                                >
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    href="https://www.facebook.com/apiceconstructora"
                                    target="_blank"
                                >
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    href="https://www.youtube.com/@constructoraapice"
                                    target="_blank"
                                >
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a
                                    href="https://www.tiktok.com/@apiceac"
                                    target="_blank"
                                >
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-5 my-auto pe-5 text-end">
                        <p
                            class="copyright mb-0"
                            data-aos="fade-in"
                            data-aos-duration="1000"
                            data-aos-delay="500"
                            data-aos-offset="20"
                        >
                            &copy; <?php echo bloginfo(
                                "name"
                            ); ?>, <?php echo date("Y"); ?>
                        </p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- a href="https://wa.me/52614?text=Hola%20FOO%20BAR,%20necesito%20información." class="whatsapp" target="_blank">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a -->

        <!-- Modales -->
        <!-- Modal Imagen Singular -->
        <div class="modal fade" id="modal-imagen" tabindex="-1">
            <div
                class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable"
            >
                <div class="modal-content">
                    <div class="modal-header text-end">
                        <a
                            class="btn-close"
                            href="javascrip:void(0)"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        >
                            <i class="fa-solid fa-xmark"></i>
                        </a>
                    </div>
                    <div class="modal-body text-center">
                        <div class="container-fluid">
                            <div class="row g-0">
                                <div class="col">
                                    <img
                                        class="imagen img-fluid"
                                        src=""
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Equipo -->
        <div class="modal fade" id="modal-equipo" tabindex="-1">
            <div
                class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable"
            >
                <div class="modal-content">
                    <div class="modal-header text-end">
                        <a
                            class="btn-close"
                            href="javascrip:void(0)"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        >
                            <i class="fa-solid fa-xmark"></i>
                        </a>
                    </div>
                    <div class="modal-body text-center">
                        <div class="container-fluid">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="foto" style=""></div>
                                </div>
                                <div class="col-lg-6 my-auto p-5">
                                    <h1></h1>
                                    <h2></h2>
                                    <div class="biografia mb-4"></div>
                                    <p class="quote"></p>
                                    <span class="quote-author"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Vacantes -->
        <div class="modal fade" id="modal-vacantes" tabindex="-1">
            <div
                class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable"
            >
                <div class="modal-content">
                    <div class="modal-header text-end">
                        <a
                            class="btn-close"
                            href="javascrip:void(0)"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        >
                            <i class="fa-solid fa-xmark"></i>
                        </a>
                    </div>
                    <div class="modal-body text-center">
                        <div class="container-fluid">
                            <div class="row g-0">
                                <div class="col-lg-6 order-lg-2 order-lg-1">
                                    <div class="foto" style=""></div>
                                </div>
                                <div class="col-lg-6 my-auto p-5">
                                    <h1 class="mb-4">
                                        ¡Únete a nuestro equipo!
                                    </h1>
                                    <!-- Aquí se inyecta feedback a usuario vía Ajax -->
                                    <div id="form-messages-vacantes"></div>
                                    <!-- /Aquí se inyecta feedback a usuario vía Ajax -->
                                    <form
                                        action="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/mailer-vacantes.php"
                                        method="POST"
                                        class="row g-3 needs-validation formulario-vacantes"
                                        id="ajax-contact-vacantes"
                                        novalidate
                                    >
                                        <div class="col-12 form-floating">
                                            <input
                                                type="text"
                                                class="form-control shadow-none"
                                                id="nombre"
                                                name="nombre"
                                                placeholder="Nombre*"
                                                pattern=".{5,50}"
                                                required
                                            />
                                            <label
                                                for="nombre"
                                                class="form-label"
                                                >Nombre*</label
                                            >
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor introduce tu nombre
                                                completo.
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input
                                                type="email"
                                                class="form-control shadow-none"
                                                id="correo"
                                                name="correo"
                                                placeholder="Correo electrónico*"
                                                required
                                            />
                                            <label
                                                for="correo"
                                                class="form-label"
                                                >Correo electrónico*</label
                                            >
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor introduce un correo
                                                electrónico válido.
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input
                                                type="tel"
                                                class="form-control shadow-none"
                                                id="telefono"
                                                name="telefono"
                                                placeholder="Teléfono*"
                                                pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                                                required
                                            />
                                            <label
                                                for="telefono"
                                                class="form-label"
                                                >Teléfono*</label
                                            >
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor escribe un número de
                                                teléfono válido (Ej:
                                                6561234567).
                                            </div>
                                        </div>
                                        <div class="col-12 form-floating">
                                            <select
                                                class="form-select"
                                                id="puesto"
                                                name="puesto"
                                                aria-label="Puesto"
                                                required
                                            >
                                                <option
                                                    selected
                                                    disabled
                                                    value=""
                                                >
                                                    Puesto al que deseas
                                                    postularte
                                                </option>
                                                <?php
                                                // Define the custom query
                                                $args = [
                                                    "post_type" => "vacantes",
                                                    "posts_per_page" => -1,
                                                ];

                                                $query = new WP_Query($args);

                                                if ($query->have_posts()):
                                                    while (
                                                        $query->have_posts()
                                                    ):
                                                        $query->the_post(); ?>
                                                    <option value="<?php the_title(); ?>">
                                                        <?php the_title(); ?>
                                                    </option>
                                                <?php
                                                    endwhile; ?>
                                                <?php
                                                else:
                                                     ?>
                                                    <option
                                                        disabled
                                                        value=""
                                                    >
                                                        En este momento no hay vacantes disponibles
                                                    </option>
                                                <?php
                                                endif;
                                                wp_reset_postdata();
                                                ?>
                                            </select>
                                            <label for="puesto">Puesto*</label>
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor selecciona el puesto
                                                al que deseas postularte.
                                            </div>
                                        </div>
                                        <div class="col-12 form-floating mb-4">
                                            <textarea
                                                class="form-control shadow-none"
                                                id="comentarios"
                                                name="comentarios"
                                                placeholder="Comentarios"
                                                rows="3"
                                            ></textarea>
                                            <label for="comentarios"
                                                >Comentarios</label
                                            >
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor introduce tus
                                                comentarios.
                                            </div>
                                        </div>
                                        <div class="col-12 my-auto">
                                            <label
                                                for="userfile-vacantes"
                                                class="form-label btn"
                                            >
                                                <i class="fas fa-file-pdf"></i>
                                                Adjunta tu CV en formato PDF*
                                            </label>
                                            <input
                                                type="hidden"
                                                name="MAX_FILE_SIZE"
                                                value="10000000"
                                            />
                                            <input
                                                type="file"
                                                class="form-control form-control-sm"
                                                id="userfile-vacantes"
                                                name="userfile-vacantes[]"
                                                multiple="multiple"
                                                aria-describedby="fileUploadBlock"
                                                required
                                            />
                                            <div
                                                id="fileUploadBlock"
                                                class="form-text mb-3"
                                            >
                                                Tamaño máximo de archivo: 10 MB
                                            </div>
                                            <div class="mb-3">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value=""
                                                    id="privacidad-vacantes"
                                                    required
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="privacidad-vacantes"
                                                >
                                                    Acepto el
                                                    <a href="<?php echo get_permalink(
                                                        3
                                                    ); ?>"
                                                        >Aviso de Privacidad</a
                                                    >
                                                </label>
                                                <div class="invalid-feedback">
                                                    Debes de aceptar nuestro
                                                    aviso de privacidad para
                                                    poder enviar tu currículum.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 my-auto text-center">
                                            <button
                                                type="submit"
                                                class="btn btn-block"
                                            >
                                                <i
                                                    class="fa-solid fa-paper-plane"
                                                ></i>
                                                Enviar
                                            </button>
                                            <div id="hold-on-a-sec-vacantes">
                                                <i
                                                    id="contact-spinner-vacantes"
                                                    class="fas fa-spinner fa-spin"
                                                ></i>
                                                Espera un momento por favor...
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Proveedores y Contratistas -->
        <div
            class="modal fade"
            id="modal-proveedores-y-contratistas"
            tabindex="-1"
        >
            <div
                class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable"
            >
                <div class="modal-content">
                    <div class="modal-header text-end">
                        <a
                            class="btn-close"
                            href="javascrip:void(0)"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        >
                            <i class="fa-solid fa-xmark"></i>
                        </a>
                    </div>
                    <div class="modal-body text-center">
                        <div class="container-fluid">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="foto" style=""></div>
                                </div>
                                <div class="col-lg-6 my-auto p-5">
                                    <h1 class="mb-4">¡Trabaja con nosotros!</h1>
                                    <!-- Aquí se inyecta feedback a usuario vía Ajax -->
                                    <div id="form-messages-proveedores-y-contratistas"></div>
                                    <!-- /Aquí se inyecta feedback a usuario vía Ajax -->
                                    <form
                                        action="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/mailer-proveedores-y-contratistas.php"
                                        method="POST"
                                        class="row g-3 needs-validation formulario-proveedores-y-contratistas"
                                        id="ajax-contact-proveedores-y-contratistas"
                                        novalidate
                                    >
                                        <div class="col-12 form-floating">
                                            <input
                                                type="text"
                                                class="form-control shadow-none"
                                                id="nombre"
                                                name="nombre"
                                                placeholder="Nombre*"
                                                pattern=".{5,50}"
                                                required
                                            />
                                            <label
                                                for="nombre"
                                                class="form-label"
                                                >Nombre*</label
                                            >
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor introduce tu nombre
                                                completo.
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input
                                                type="email"
                                                class="form-control shadow-none"
                                                id="correo"
                                                name="correo"
                                                placeholder="Correo electrónico*"
                                                required
                                            />
                                            <label
                                                for="correo"
                                                class="form-label"
                                                >Correo electrónico*</label
                                            >
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor introduce un correo
                                                electrónico válido.
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input
                                                type="tel"
                                                class="form-control shadow-none"
                                                id="telefono"
                                                name="telefono"
                                                placeholder="Teléfono*"
                                                pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
                                                required
                                            />
                                            <label
                                                for="telefono"
                                                class="form-label"
                                                >Teléfono*</label
                                            >
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor escribe un número de
                                                teléfono válido (Ej:
                                                6561234567).
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input
                                                type="text"
                                                class="form-control shadow-none"
                                                id="empresa"
                                                name="empresa"
                                                placeholder="Empresa*"
                                                pattern=".{5,50}"
                                                required
                                            />
                                            <label
                                                for="empresa"
                                                class="form-label"
                                                >Empresa*</label
                                            >
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor introduce el nombre de
                                                tu empresa.
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input
                                                type="text"
                                                class="form-control shadow-none"
                                                id="especialidad"
                                                name="especialidad"
                                                placeholder="Especialidad*"
                                                pattern=".{5,50}"
                                                required
                                            />
                                            <label
                                                for="especialidad"
                                                class="form-label"
                                                >Especialidad*</label
                                            >
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor introduce tu
                                                especialidad.
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <select
                                                class="form-select"
                                                id="division"
                                                name="division"
                                                aria-label="División"
                                                required
                                            >
                                                <option
                                                    selected
                                                    disabled
                                                    value=""
                                                >
                                                    Selecciona una opción
                                                </option>
                                                <option value="Residencial">
                                                    Residencial
                                                </option>
                                                <option value="Industrial">
                                                    Industrial
                                                </option>
                                            </select>
                                            <label for="division"
                                                >División*</label
                                            >
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor selecciona una
                                                división.
                                            </div>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <select
                                                class="form-select"
                                                id="estado"
                                                name="estado"
                                                aria-label="Estado"
                                                required
                                            >
                                                <option
                                                    selected
                                                    disabled
                                                    value=""
                                                >
                                                    Selecciona tu Estado
                                                </option>
                                                <option value="Aguascalientes">
                                                    Aguascalientes
                                                </option>
                                                <option value="Baja California">
                                                    Baja California
                                                </option>
                                                <option
                                                    value="Baja California Sur"
                                                >
                                                    Baja California Sur
                                                </option>
                                                <option value="Campeche">
                                                    Campeche
                                                </option>
                                                <option value="Chiapas">
                                                    Chiapas
                                                </option>
                                                <option value="Chihuahua">
                                                    Chihuahua
                                                </option>
                                                <option value="CDMX">
                                                    Ciudad de México
                                                </option>
                                                <option value="Coahuila">
                                                    Coahuila
                                                </option>
                                                <option value="Colima">
                                                    Colima
                                                </option>
                                                <option value="Durango">
                                                    Durango
                                                </option>
                                                <option
                                                    value="Estado de México"
                                                >
                                                    Estado de México
                                                </option>
                                                <option value="Guanajuato">
                                                    Guanajuato
                                                </option>
                                                <option value="Guerrero">
                                                    Guerrero
                                                </option>
                                                <option value="Hidalgo">
                                                    Hidalgo
                                                </option>
                                                <option value="Jalisco">
                                                    Jalisco
                                                </option>
                                                <option value="Michoacán">
                                                    Michoacán
                                                </option>
                                                <option value="Morelos">
                                                    Morelos
                                                </option>
                                                <option value="Nayarit">
                                                    Nayarit
                                                </option>
                                                <option value="Nuevo León">
                                                    Nuevo León
                                                </option>
                                                <option value="Oaxaca">
                                                    Oaxaca
                                                </option>
                                                <option value="Puebla">
                                                    Puebla
                                                </option>
                                                <option value="Querétaro">
                                                    Querétaro
                                                </option>
                                                <option value="Quintana Roo">
                                                    Quintana Roo
                                                </option>
                                                <option value="San Luis Potosí">
                                                    San Luis Potosí
                                                </option>
                                                <option value="Sinaloa">
                                                    Sinaloa
                                                </option>
                                                <option value="Sonora">
                                                    Sonora
                                                </option>
                                                <option value="Tabasco">
                                                    Tabasco
                                                </option>
                                                <option value="Tamaulipas">
                                                    Tamaulipas
                                                </option>
                                                <option value="Tlaxcala">
                                                    Tlaxcala
                                                </option>
                                                <option value="Veracruz">
                                                    Veracruz
                                                </option>
                                                <option value="Yucatán">
                                                    Yucatán
                                                </option>
                                                <option value="Zacatecas">
                                                    Zacatecas
                                                </option>
                                            </select>
                                            <label for="estado">Estado*</label>
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor selecciona tu Estado.
                                            </div>
                                        </div>
                                        <div class="col-12 form-floating mb-4">
                                            <textarea
                                                class="form-control shadow-none"
                                                id="comentarios"
                                                name="comentarios"
                                                placeholder="Comentarios"
                                                rows="3"
                                            ></textarea>
                                            <label for="comentarios"
                                                >Comentarios</label
                                            >
                                            <div class="valid-feedback">
                                                ¡Se ve bien!
                                            </div>
                                            <div class="invalid-feedback">
                                                Por favor introduce tus
                                                comentarios.
                                            </div>
                                        </div>
                                        <div class="col-12 my-auto">
                                            <label
                                                for="userfile-proveedores-y-contratistas"
                                                class="form-label btn"
                                            >
                                                <i class="fas fa-file-pdf"></i>
                                                Adjuntar CV Empresarial/
                                                Portafolio de Servicios/
                                                Catálogo de Productos en PDF*
                                            </label>
                                            <input
                                                type="hidden"
                                                name="MAX_FILE_SIZE"
                                                value="10000000"
                                            />
                                            <input
                                                type="file"
                                                class="form-control form-control-sm"
                                                id="userfile-proveedores-y-contratistas"
                                                name="userfile-proveedores-y-contratistas[]"
                                                multiple="multiple"
                                                aria-describedby="fileUploadBlock"
                                                required
                                            />
                                            <div
                                                id="fileUploadBlock"
                                                class="form-text mb-3"
                                            >
                                                Tamaño máximo de archivo: 10 MB
                                            </div>
                                            <div class="mb-3">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    value=""
                                                    id="privacidad-proveedores-y-contratistas"
                                                    required
                                                />
                                                <label
                                                    class="form-check-label"
                                                    for="privacidad-proveedores-y-contratistas"
                                                >
                                                    Acepto el
                                                    <a href="<?php echo get_permalink(
                                                        3
                                                    ); ?>"
                                                        >Aviso de Privacidad</a
                                                    >
                                                </label>
                                                <div class="invalid-feedback">
                                                    Debes de aceptar nuestro
                                                    aviso de privacidad para
                                                    poder enviar tu currículum.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 my-auto text-center">
                                            <button
                                                type="submit"
                                                class="btn btn-block"
                                            >
                                                <i
                                                    class="fa-solid fa-paper-plane"
                                                ></i>
                                                Enviar
                                            </button>
                                            <div id="hold-on-a-sec-proveedores-y-contratistas">
                                                <i
                                                    id="contact-spinner-proveedores-y-contratistas"
                                                    class="fas fa-spinner fa-spin"
                                                ></i>
                                                Espera un momento por favor...
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Carrusel Internas -->
        <div
            class="modal fade"
            id="modal-carrusel"
            tabindex="-1"
            aria-labelledby="modal-carruselLabel"
            aria-hidden="true"
        >
            <div
                class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable"
            >
                <div class="modal-content">
                    <div class="modal-header text-end">
                        <a
                            class="btn-close"
                            href="javascrip:void(0)"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        >
                            <i class="fa-solid fa-xmark"></i>
                        </a>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <!-- Swiper -->
                                    <div class="swiper-internas-carrusel">
                                        <div class="swiper-wrapper">
                                            <!-- Slides will be added dynamically here -->
                                        </div>
                                        <!-- Optional Pagination -->
                                        <div class="swiper-pagination"></div>
                                        <!-- Optional Navigation -->
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php wp_footer(); ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/js/app.bundle.js?v=24"></script>
    </body>
</html>
