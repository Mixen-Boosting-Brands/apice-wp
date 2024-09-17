<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

<section id="interna" class="interna-dark interna-multimedia single-multimedia pt-150 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1
                    class="mb-40"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
        <div class="row">
            <?php if (get_field("video")): ?>
                <div class="col-lg-9 mb-4 my-lg-auto text-center">
                    <div class="ratio ratio-16x9">
                        <?php the_field("video"); ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-lg-3 my-auto text-center">
                <?php
                $terms_to_check = ["Destacado", "Podcast", "Webinar"];
                $taxonomy = "categoria-multimedia";

                if (is_singular()) {
                    // Check if it's a single post view
                    $current_post_id = get_the_ID(); // Get the ID of the current post

                    foreach ($terms_to_check as $term) {
                        if (has_term($term, $taxonomy, $current_post_id)) {
                            // The post belongs to this term
                            $args = [
                                "post_type" => "multimedia",
                                "tax_query" => [
                                    [
                                        "taxonomy" => $taxonomy,
                                        "field" => "slug",
                                        "terms" => $term,
                                    ],
                                ],
                                "post__not_in" => [$current_post_id], // Exclude the current post
                                "posts_per_page" => 3, // Retrieve 3 posts
                                "orderby" => "rand", // Randomize the order
                            ];
                            break; // Exit the loop if you only need to know it belongs to any of these terms
                        }
                    }
                }

                $multimedia_query = new WP_Query($args);

                if ($multimedia_query->have_posts()):
                    $i == 2;
                    while ($multimedia_query->have_posts()):
                        $multimedia_query->the_post(); ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="card" data-aos="fade-up"
                            data-aos-duration="1000" data-aos-delay="<?php echo $i; ?>00">
                                <a href="<?php the_permalink(); ?>">
                                    <i class="fa-regular fa-circle-play"></i>
                                    <?php the_post_thumbnail("proyecto", [
                                        "class" =>
                                            "card-img-top img-fluid mb-3",
                                    ]); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php $i++;
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo "<p>No multimedia posts found.</p>";
                endif;
                ?>
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
