<?php get_header(); ?>

<?php if (have_posts()):
    while (have_posts()):
        the_post(); ?>

<section id="interna" class="black-headings pt-100 pb-30">
    <div class="container custom-container mb-5">
        <div class="bg-post-details row g-0">
            <div class="col-lg-6 my-auto">
                <div
                    class="post-thumbnail"
                    data-aos="fade-in"
                    data-aos-duration="1000"
                    style="
                        background: url(&quot;<?php echo get_the_post_thumbnail_url(
                            get_the_ID(),
                            "jumbotron"
                        ); ?>&quot;)
                            no-repeat;
                    "
                >
                </div>
            </div>
            <div class="col-lg-6 my-auto">
                <div class="post-details">
                    <h6
                        data-aos="fade-up"
                        data-aos-duration="1000"
                    >
                        <time>
                            <?php
                            // Set the date and time format
                            $date_format = 'j \d\e F, Y \· g:i a';

                            // Replace the problematic character sequence manually
                            $formatted_date = date_i18n(
                                $date_format,
                                strtotime(get_the_date("Y-m-d H:i:s"))
                            );

                            // Output the final formatted date and time
                            echo "" . $formatted_date;
                            ?>
        				</time>
                    </h6>

                    <h1
                        class="my-5"
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="200"
                    >
                        <?php the_title(); ?>
                    </h1>

                    <?php if (get_field("entradilla")): ?>
                        <div
                            class="text-start mb-5"
                            data-aos="fade-up"
                            data-aos-duration="1000"
                            data-aos-delay="400"
                        >
                            <p><?php the_field("entradilla"); ?></p>
                        </div>
                    <?php endif; ?>

                    <h6
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-delay="600"
                    >
                        <?php esc_html_e(
                            "Por",
                            "html5blank"
                        ); ?> <?php echo get_the_author_meta("user_firstname") .
     " " .
     get_the_author_meta("user_lastname"); ?>
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <div class="content" data-aos="fade-up"
                data-aos-duration="1000" data-aos-delay="800">
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

<?php
    endwhile; ?>
<?php
else:
     ?>
<?php
endif; ?>

<?php get_footer(); ?>
