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

<section id="interna" class="black-headings pt-60 pb-30">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h1
                    class=""
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    <?php the_title(); ?>
                </h1>

                <div class="meta-data">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <?php esc_html_e(
                                "Por",
                                "html5blank"
                            ); ?> <?php the_author_posts_link(); ?>
                        </li>
                        <li class="list-inline-item">
                            <time datetime="<?php the_time(
                                "Y-m-d"
                            ); ?> <?php the_time("H:i"); ?>">
                                <?php the_date(); ?> <?php the_time(); ?>
            				</time>
                        </li>
                        <li class="list-inline-item">
                            <?php if (comments_open(get_the_ID())) {
                                comments_popup_link(
                                    __("Leave your thoughts", "html5blank"),
                                    __("1 Comment", "html5blank"),
                                    __("% Comments", "html5blank")
                                );
                            } ?>
                        </li>
                    </ul>
                </div>

                <div class="content" data-aos="fade-up"
                data-aos-duration="1000" data-aos-delay="100">
                    <?php the_content(); ?>

                    <?php edit_post_link(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="comentarios" class="py-60">
    <div class="container">
        <div class="row">
            <div class="col" data-aos="fade-up"
            data-aos-duration="1000">
                <?php comments_template("", true);
// Remove if you don't want comments.
?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
