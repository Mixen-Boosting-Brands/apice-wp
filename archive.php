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
                    ); ?>/assets/images/header-general/bg.webp&quot;)
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
                                Archivos
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
                </div>
                <div class="col-lg-6 my-lg-auto">
                    <a href="<?php the_permalink(); ?>">
                        <img
                            src="<?php echo esc_url(
                                get_template_directory_uri()
                            ); ?>/assets/images/home/thumb-historia.webp"
                            alt=""
                            class="img-fluid"
                            data-aos="<?php if (
                                $i % 2 !=
                                0
                            ): ?>fade-left<?php else: ?>fade-right<?php endif; ?>"
                            data-aos-duration="1000"
                            data-aos-delay="200"
                        />
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
