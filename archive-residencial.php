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
                    ); ?>/assets/images/residencial/thumb-modelo-1.webp&quot;)
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
                                Proyectos Residenciales
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

<?php
// Define a custom query to fetch all posts from 'residencial' post type
$residencial_query = new WP_Query([
    "post_type" => "residencial",
    "posts_per_page" => -1, // Fetch all posts without pagination
]);

// Check if the custom query has posts
if ($residencial_query->have_posts()): ?>
    <section id="interna" class="black-headings pt-60 pb-30">
        <div
            class="swiper swiper-proyectos"
            data-aos="fade-in"
            data-aos-duration="1000"
            data-aos-delay="100"
        >
            <div class="swiper-wrapper">
                <?php // Loop through all posts from the custom query
    // Loop through all posts from the custom query
    // Loop through all posts from the custom query
                while ($residencial_query->have_posts()):
                    $residencial_query->the_post(); ?>
                    <div class="swiper-slide">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail("proyecto", [
                                "class" => "img-fluid mb-3",
                            ]); ?>
                        </a>
                        <a href="<?php the_permalink(); ?>">
                            <h1>
                                <?php the_title(); ?>
                            </h1>
                        </a>
                    </div>
                <?php
                endwhile; ?>
            </div>

            <!-- Navigation buttons for Swiper -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </section>

<?php // Reset post data after the custom query loop
    // Reset post data after the custom query loop
    // Reset post data after the custom query loop
wp_reset_postdata();else: ?>
    <p>No posts found.</p>
<?php endif;
?>

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
