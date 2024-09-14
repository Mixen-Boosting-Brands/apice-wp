<?php get_header(); ?>

<?php if (have_posts()): ?>

<section id="interna" class="black-headings pt-100 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1
                    class="titulo ms-lg-4 mb-5"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    Proyectos División Industrial
                </h1>
            </div>
        </div>
    </div>
    <div
        class="swiper swiper-posts"
        data-aos="fade-in"
        data-aos-duration="1000"
        data-aos-delay="100"
    >
        <div class="swiper-wrapper">
            <?php while (have_posts()):
                the_post(); ?>
                <div class="swiper-slide">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail("proyecto", [
                            "class" => "img-fluid mb-3",
                        ]); ?>
                    </a>
                    <a href="<?php the_permalink(); ?>">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                    </a>
                </div>
            <?php
            endwhile; ?>
        </div>

        <!-- Navigation buttons for Swiper -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <!-- If we need pagination -->
        <div class="swiper-pagination-proyectos"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar-proyectos mt-4"></div>
    </div>
</section>

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
