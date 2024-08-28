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
                    <?php if (get_field("ubicacion")): ?>
                        <li
                            class="mb-5"
                            data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-delay="100"
                        >
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/industrial/ico-pin.webp"
                                alt=""
                                class="icono"
                            />
                            Ubicación: <?php echo acf_esc_html(
                                the_field("ubicacion")
                            ); ?>
                        </li>
                    <?php endif; ?>
                    <?php if (get_field("area")): ?>
                        <li
                            class="mb-5"
                            data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        >
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/industrial/ico-area.webp"
                                alt=""
                                class="icono"
                            />
                            Área: <?php echo acf_esc_html(
                                the_field("area")
                            ); ?> m²
                        </li>
                    <?php endif; ?>
                    <?php if (get_field("duracion")): ?>
                        <li
                            class="mb-5"
                            data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-delay="300"
                        >
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/industrial/ico-tiempo.webp"
                                alt=""
                                class="icono"
                            />
                            Duración: <?php echo acf_esc_html(
                                the_field("duracion")
                            ); ?> m²
                        </li>
                    <?php endif; ?>
                    <?php if (have_rows("servicios")): ?>
                        <li
                            class="mb-5"
                            data-aos="fade-right"
                            data-aos-duration="1000"
                            data-aos-delay="400"
                        >
                            <img
                                src="<?php echo esc_url(
                                    get_template_directory_uri()
                                ); ?>/assets/images/industrial/ico-tiempo.webp"
                                alt=""
                                class="icono"
                            />
                            Servicios:
                            <ul class="mt-3">
                                <?php while (have_rows("servicios")):
                                    the_row(); ?>
                                    <li><?php echo acf_esc_html(
                                        get_sub_field("servicio")
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

<?php
    endwhile; ?>
<?php
else:
     ?>
<?php
endif; ?>


<?php get_footer(); ?>
