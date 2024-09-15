<?php get_header(); ?>

<?php if (have_posts()): ?>

<section id="interna" class="interna-posts pt-100 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1
                    class="titulo ms-lg-4 mb-5"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    <?php if (is_category()):
                        single_cat_title();
                    endif; ?>
                </h1>
            </div>
        </div>

        <div class="row">
            <div
                class="swiper swiper-posts"
                data-aos="fade-in"
                data-aos-duration="1000"
                data-aos-delay="100"
            >
                <div class="swiper-wrapper">
                    <?php
                    // Fetch all posts in the current category
                    $category = get_queried_object(); // Get current category
                    $args = [
                        "cat" => $category->term_id,
                        "posts_per_page" => -1, // Display all posts
                    ];
                    $all_posts_query = new WP_Query($args);

                    if ($all_posts_query->have_posts()):
                        while ($all_posts_query->have_posts()):
                            $all_posts_query->the_post(); ?>
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
                        endwhile;
                        wp_reset_postdata(); // Reset post data after custom query
                    endif;
                    ?>
                </div>

                <!-- Navigation buttons for Swiper -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <!-- If we need pagination -->
                <div class="swiper-pagination-proyectos"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar-proyectos mt-4"></div>
            </div>
        </div>
    </div>
</section>

<?php else: ?>
    <p><?php _e("No posts found"); ?></p>
<?php endif; ?>

<!-- section class="py-60">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <php echo bootstrap_pagination(); >
            </div>
        </div>
    </div>
</section -->

<?php get_footer(); ?>
