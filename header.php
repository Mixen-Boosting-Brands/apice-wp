<!doctype html>
<html lang="es-MX">
    <head>
        <meta charset="<?php bloginfo("charset"); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php
        wp_title("");
        if (wp_title("", false)) {
            echo " - ";
        }
        bloginfo("name");
        ?></title>

		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo(
      "name"
  ); ?>" href="<?php bloginfo("rss2_url"); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo("description"); ?>">

        <link
            rel="apple-touch-icon"
            sizes="180x180"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/apple-touch-icon.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="32x32"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/favicon-32x32.png"
        />
        <link
            rel="icon"
            type="image/png"
            sizes="16x16"
            href="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/favicon-16x16.png"
        />
        <link rel="manifest" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/site.webmanifest" />
        <link rel="mask-icon" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/safari-pinned-tab.svg" color="#121212" />
        <meta name="msapplication-TileColor" content="#121212" />
        <meta name="theme-color" content="#121212" />

        <link rel="stylesheet" href="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/css/styles.css?v=57" />

        <?php wp_head(); ?>
    </head>
    <body>
        <ul
            class="fixed-social list-unstyled mb-0"
            data-aos="fade-left"
            data-aos-duration="1000"
            data-aos-delay="300"
        >
            <li class="mb-2">
                <a
                    href="https://www.linkedin.com/company/apice-arquitectura-y-construccion/"
                    target="_blank"
                >
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
            </li>
            <li class="mb-2">
                <a
                    href="https://www.instagram.com/constructora.apice/"
                    target="_blank"
                >
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
            <li class="mb-2">
                <a
                    href="https://www.facebook.com/apiceconstructora"
                    target="_blank"
                >
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </li>
            <li class="mb-2">
                <a
                    href="https://www.youtube.com/@constructoraapice"
                    target="_blank"
                >
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://www.tiktok.com/@apiceac" target="_blank">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
            </li>
        </ul>
        <div id="backdrop"></div>
        <div class="menu">
            <a id="cerrar-menu" href="javascript:void(0)">
                <i class="fas fa-times"></i>
            </a>
            <div class="menu-contenido">
                <nav>
                    <ul id="navmenu" class="list-unstyled">
                        <li>
                            <a href="<?php if (!is_home()):
                                echo esc_url(home_url());
                            endif; ?>#historia">Conócenos</a>
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
                            endif; ?>#equipo">Nuestro Equipo</a>
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
                                >Proveedores y Contratistas</a
                            >
                        </li>
                        <li>
                            <a href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>

        <header id="navbar" class="<?php if (
            !is_home()
        ): ?>navbar-interna<?php endif; ?>">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 my-auto">
                        <a href="<?php echo esc_url(home_url()); ?>">
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/logo<?php if (
    !is_home()
): ?>-color<?php endif; ?>@2x.webp"
                                alt=""
                                class="logo img-fluid"
                                id="logo-navbar"
                                data-aos="fade-in"
                                data-aos-duration="1000"
                                data-aos-delay="0"
                            />
                        </a>
                    </div>
                    <div class="col-8 my-auto text-end">
                        <a
                            id="mburger"
                            href="javascript:void(0)"
                            data-aos="fade-in"
                            data-aos-duration="1000"
                            data-aos-delay="0"
                        >
                            <i class="fas fa-bars"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
