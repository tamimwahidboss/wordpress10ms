<?php $options = get_option( 'wp10ms_options' );?>
<section class="page-banner-wrap bg-cover" style="background-image: url('<?php echo esc_url( $options['breadcrumb-banner']['url'] ); ?>');">
    <div class="banner-text"><?php echo esc_html( get_the_title() ); ?></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <div class="page-heading text-white">
                    <div class="page-title">
                        <h1><?php echo esc_html( get_the_title() ); ?></h1>
                    </div>
                </div>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url( site_url() ); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo esc_html( get_the_title() ); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
