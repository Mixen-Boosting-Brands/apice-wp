<?php get_header(); ?>

<section id="jumbotron">
    <div class="overlay"></div>
    <div class="swiper swiper-internas">
        <div class="swiper-wrapper">
            <div
                class="swiper-slide"
                style="
                    background: url(&quot;<?php echo get_the_post_thumbnail_url(
                        get_the_ID(),
                        "jumbotron"
                    ); ?>&quot;)
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
                                <?php the_title(); ?>
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

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

<section id="interna" class="black-headings pt-60 pb-30">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-5">
                <h1
                    class="mb-40"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                >
                    <?php the_title(); ?>
                </h1>
                <ul class="list-unstyled">
                    <?php if (get_field("disenador")): ?>
                        <li
                            class="mb-5"
                            data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/residencial/ico-pin.webp"
                                alt=""
                                class="icono"
                            />
                            Diseñador: <?php echo acf_esc_html(
                                the_field("disenador")
                            ); ?>
                        </li>
                    <?php endif; ?>
                    <?php if (get_field("lote")): ?>
                        <li
                            class="mb-5"
                            data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        >
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/residencial/ico-area.webp"
                                alt=""
                                class="icono"
                            />
                            Lote: <?php echo acf_esc_html(
                                the_field("lote")
                            ); ?> m²
                        </li>
                    <?php endif; ?>
                    <?php if (get_field("construccion")): ?>
                        <li
                            class="mb-5"
                            data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-delay="300"
                        >
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/residencial/ico-area.webp"
                                alt=""
                                class="icono"
                            />
                            Construcción: <?php echo acf_esc_html(
                                the_field("construccion")
                            ); ?> m²
                        </li>
                    <?php endif; ?>
                    <?php if (have_rows("amenidades")): ?>
                        <li
                            class="mb-5"
                            data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-delay="400"
                        >
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/residencial/ico-amenidades.webp"
                                alt=""
                                class="icono"
                            />
                            Amenidades:
                            <ul class="mt-3">
                                <?php while (have_rows("amenidades")):
                                    the_row(); ?>
                                    <li><?php echo acf_esc_html(
                                        get_sub_field("amenidad")
                                    ); ?></li>
                                <?php
                                endwhile; ?>
                            </ul>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <?php if (have_rows("galeria")): ?>
            <div class="col-lg-7">
                <div class="row gallery">
                    <?php while (have_rows("galeria")):
                        the_row(); ?>
                        <div class="col-6 mb-4">
                            <a
                                href="javascript:void(0)"
                                data-image="<?php echo acf_esc_html(
                                    get_sub_field("imagen")
                                ); ?>"
                            >
                                <img
                                    src="<?php echo acf_esc_html(
                                        get_sub_field("imagen")
                                    ); ?>"
                                    alt=""
                                    class="img-fluid"
                                    data-aos="fade-left"
                                    data-aos-duration="1000"
                                    data-aos-delay="0"
                                />
                            </a>
                        </div>
                    <?php
                    endwhile; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php if (have_rows("modelos")): ?>
<section id="modelos" class="black-headings pt-30 pb-60">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul
                    class="nav nav-pills mb-5"
                    id="pills-tab"
                    role="tablist"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="0"
                >
                    <?php
                    $i = 1;
                    while (have_rows("modelos")):
                        the_row(); ?>
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link <?php if (
                                    $i == 1
                                ): ?>active<?php endif; ?>"
                                id="pills-<?php echo $i; ?>-tab"
                                data-bs-toggle="pill"
                                data-bs-target="#pills-<?php echo $i; ?>"
                                type="button"
                                role="tab"
                                aria-controls="pills-<?php echo $i; ?>"
                                aria-selected="<?php if (
                                    $i == 1
                                ): ?>true<?php else: ?>false<?php endif; ?>"
                            >
                                Modelo <?php echo $i; ?>
                            </button>
                        </li>
                    <?php $i++;
                    endwhile;
                    ?>
                </ul>
                <div
                    class="tab-content"
                    id="pills-tabContent"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <?php
                    $i = 1;
                    while (have_rows("modelos")):
                        the_row(); ?>
                        <div
                            class="tab-pane fade <?php if (
                                $i == 1
                            ): ?>show active<?php endif; ?>"
                            id="pills-<?php echo $i; ?>"
                            role="tabpanel"
                            aria-labelledby="pills-<?php echo $i; ?>-tab"
                            tabindex="0"
                        >
                            <h1 class="mb-4">Modelo <?php echo $i; ?></h1>
                            <div class="row">
                                <div class="col-lg-6 mb-4 my-lg-auto">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-imagen"
                                        data-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/residencial/thumb-modelo-1.webp"
                                    >
                                        <img
                                            src="<?php echo esc_url(
                                                get_template_directory_uri()
                                            ); ?>/assets/images/residencial/thumb-modelo-1.webp"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </a>
                                </div>
                                <div class="col-lg-3 mb-4 my-lg-auto">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-imagen"
                                        data-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/residencial/thumb-modelo-2.webp"
                                    >
                                        <img
                                            src="<?php echo esc_url(
                                                get_template_directory_uri()
                                            ); ?>/assets/images/residencial/thumb-modelo-2.webp"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </a>
                                </div>
                                <div class="col-lg-3 mb-4 my-lg-auto">
                                    <a
                                        href="javascript:void(0)"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-imagen"
                                        data-image="<?php echo esc_url(
                                            get_template_directory_uri()
                                        ); ?>/assets/images/residencial/thumb-modelo-2.webp"
                                    >
                                        <img
                                            src="<?php echo esc_url(
                                                get_template_directory_uri()
                                            ); ?>/assets/images/residencial/thumb-modelo-2.webp"
                                            alt=""
                                            class="img-fluid"
                                        />
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php $i++;
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<section id="footer-modelos">
    <a
        href="javascript:void(0)"
        data-bs-toggle="modal"
        data-bs-target="#modal-imagen"
        data-image="<?php echo esc_url(
            get_template_directory_uri()
        ); ?>/assets/images/residencial/thumb-modelo-3.webp"
    >
        <img
            src="<?php echo esc_url(
                get_template_directory_uri()
            ); ?>/assets/images/residencial/thumb-modelo-3.webp"
            alt=""
            class="img-fluid"
            data-aos="fade-in"
            data-aos-duration="1000"
            data-aos-delay="0"
        />
    </a>
</section>

<?php
    endwhile; ?>
<?php
else:
     ?>
<?php
endif; ?>


<?php get_footer(); ?>
