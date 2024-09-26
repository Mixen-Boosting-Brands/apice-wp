<?php get_header(); ?>

<?php if (have_posts()): ?>

<section id="interna-featured" class="interna-dark interna-descargables pt-150 pb-30">
    <div class="container">
        <div class="row">
            <?php
            // Custom query to get the latest post from 'Destacado' category
            $args = [
                "post_type" => "descargables", // Custom post type
                "tax_query" => [
                    [
                        "taxonomy" => "categoria-descargables", // Custom taxonomy
                        "field" => "slug",
                        "terms" => "destacado", // Term slug
                    ],
                ],
                "posts_per_page" => 1, // Limit to 1 post
            ];
            $featured_query = new WP_Query($args);

            if ($featured_query->have_posts()):
                while ($featured_query->have_posts()):
                    $featured_query->the_post(); ?>
                <div class="col">
                    <div class="container-content" style="background: linear-gradient(to bottom, rgba(51, 51, 51, 0) 0%, #333 100%),
                        url('<?php // Check if the post has a featured image

                    if (has_post_thumbnail()) {
                            // Get the URL of the featured image
                            $thumbnail_url = get_the_post_thumbnail_url(
                                get_the_ID(),
                                "full"
                            ); // 'full' can be replaced with other sizes like 'thumbnail', 'medium', etc.

                            // Output the URL
                            echo $thumbnail_url;
                        } ?>') no-repeat;">
                        <h1 class="titulo mb-4" data-aos="fade-up" data-aos-duration="1000">
                            <?php the_title();
                    // Output the post title
                    ?>
                        </h1>

                        <p class="excerpt" data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200">
                            <?php html5wp_excerpt("html5wp_custom_post");
                    // Output the excerpt
                    ?>
                        </p>
                    </div>
                </div>
            <?php
                endwhile;
            else:
                 ?>
                <p><?php _e("Sorry, no posts matched your criteria."); ?></p>
            <?php
            endif;
            ?>

            <?php wp_reset_postdata();
    // Reset the post data after the query
    ?>
        </div>
    </div>
</section>

<section id="interna" class="interna-dark interna-descargables pb-100">
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
            <div class="col-12">
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
                            "post_type" => "descargables", // Custom post type
                            "posts_per_page" => -1, // Display all posts
                            "tax_query" => [
                                "relation" => "AND",
                                [
                                    "taxonomy" => "categoria-descargables", // Custom taxonomy
                                    "field" => "slug",
                                    "terms" => "destacado", // Term slug to exclude
                                    "operator" => "NOT IN", // Exclude posts with 'Destacado' term
                                ],
                                [
                                    "taxonomy" => "categoria-descargables", // Custom taxonomy
                                    "field" => "slug",
                                    "terms" => "oculto", // Term slug to exclude
                                    "operator" => "NOT IN", // Exclude posts with 'Oculto' term
                                ],
                            ],
                        ];
                        $all_posts_query = new WP_Query($args);

                        if ($all_posts_query->have_posts()):
                            while ($all_posts_query->have_posts()):
                                $all_posts_query->the_post(); ?>
                                <div class="swiper-slide">
                                    <div class="card">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail(
                                                "proyecto",
                                                [
                                                    "class" =>
                                                        "card-img-top img-fluid mb-3",
                                                ]
                                            ); ?>
                                        </a>
                                        <div class="card-body">
                                            <a href="<?php the_permalink(); ?>">
                                                <h1>
                                                    <?php the_title(); ?>
                                                </h1>
                                            </a>
                                            <?php esc_html_e(
                                                "Por",
                                                "html5blank"
                                            ); ?> <?php echo get_the_author_meta(
     "user_firstname"
 ) .
     " " .
     get_the_author_meta("user_lastname"); ?>
                                        </div>
                                    </div>
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
                    <div class="swiper-pagination"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar mt-4"></div>
                </div>
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
