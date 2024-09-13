<?php get_header(); ?>

<section id="interna" class="black-headings pt-100 pb-30">
    <div class="container">
        <div class="row mb-4">
            <div class="col">
                <h1
                    class=""
                    data-aos="fade-up"
                    data-aos-duration="1000"
                >
                    <?php esc_html_e(
                        "Error 404: Página no encontrada",
                        "html5blank"
                    ); ?>
                </h1>

                <div class="content" data-aos="fade-up"
                data-aos-duration="1000" data-aos-delay="100">
                    <p>Lo sentimos, la página solicitada no pudo se encontrada. Es probable que haya cambiado de ubicación o haya sido eliminada.</p>

                    <a href="<?php echo esc_url(
                        home_url()
                    ); ?>" class="btn btn-secondary"><i class="fa-solid fa-house"></i> Volver al inicio</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
