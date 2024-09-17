<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

<section id="interna" class="interna-dark interna-multimedia pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1
                    class="mb-40"
                    data-aos="fade-right"
                    data-aos-duration="1000"
                >
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 my-auto">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-4 my-auto">
                <div class="swiper swiper-vertical">
                    <div class="swiper-wrapper">
                        <?php
                        $current_post_id = get_the_ID(); // Get the ID of the current post

                        $args = [
                            "post_type" => "multimedia",
                            "tax_query" => [
                                [
                                    "taxonomy" => "categoria-multimedia",
                                    "field" => "slug",
                                    "terms" => "webinar",
                                ],
                            ],
                            "post__not_in" => [$current_post_id], // Exclude the current post
                            "posts_per_page" => -1, // Retrieve all posts
                            "orderby" => "rand", // Randomize the order
                        ];

                        $multimedia_query = new WP_Query($args);

                        if ($multimedia_query->have_posts()):
                            while ($multimedia_query->have_posts()):
                                $multimedia_query->the_post(); ?>
                            <div class="swiper-slide">
                                <div class="card">
                                    <a href="<?php the_permalink(); ?>">
                                        <i class="fa-regular fa-circle-play"></i>
                                        <?php the_post_thumbnail("proyecto", [
                                            "class" =>
                                                "card-img-top img-fluid mb-3",
                                        ]); ?>
                                    </a>
                                </div>
                            </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else:
                            echo "<p>No multimedia posts found.</p>";
                        endif;
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
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
                                        data-image="<?php echo acf_esc_html(
                                            get_sub_field("imagen_del_modelo")
                                        ); ?>"
                                    >
                                        <img
                                            src="<?php echo acf_esc_html(
                                                get_sub_field(
                                                    "imagen_del_modelo"
                                                )
                                            ); ?>"
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
                                        data-image="<?php echo acf_esc_html(
                                            get_sub_field(
                                                "plano_de_la_primera_planta"
                                            )
                                        ); ?>"
                                    >
                                        <img
                                            src="<?php echo acf_esc_html(
                                                get_sub_field(
                                                    "plano_de_la_primera_planta"
                                                )
                                            ); ?>"
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
                                        data-image="<?php echo acf_esc_html(
                                            get_sub_field(
                                                "plano_de_la_segunda_planta"
                                            )
                                        ); ?>"
                                    >
                                        <img
                                            src="<?php echo acf_esc_html(
                                                get_sub_field(
                                                    "plano_de_la_segunda_planta"
                                                )
                                            ); ?>"
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

<?php if (get_field("imagen_del_pie")): ?>
<section id="footer-modelos">
    <a
        href="javascript:void(0)"
        data-bs-toggle="modal"
        data-bs-target="#modal-imagen"
        data-image="<?php the_field("imagen_del_pie"); ?>"
    >
        <img
            src="<?php the_field("imagen_del_pie"); ?>"
            alt=""
            class="img-fluid"
            data-aos="fade-in"
            data-aos-duration="1000"
            data-aos-delay="0"
        />
    </a>
</section>
<?php endif; ?>

<?php
    endwhile; ?>
<?php
else:
     ?>
<?php
endif; ?>


<?php get_footer(); ?>
