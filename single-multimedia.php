<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

<section id="interna" class="interna-dark interna-multimedia single-multimedia pt-100 pb-30">
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
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zpOULjyy-n8?si=O3sp9ZkhALc_3RCa" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
</section>

<?php
    endwhile; ?>
<?php
else:
     ?>
<?php
endif; ?>

<?php get_footer(); ?>
