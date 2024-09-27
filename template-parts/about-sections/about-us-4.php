<?php
// about-page/about-us.php
$options = get_option( 'wp10ms_options' );
?>

<section class="about-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-12 text-center text-xl-left">
                <div class="about-img clip-path">
                    <img src="<?php echo isset( $options['v4-about-banner']['url'] ) ? esc_url( $options['v4-about-banner']['url'] ) : ''; ?>" alt="">
                </div>
            </div>
            <div class="col-12 text-center text-xl-left col-xl-6 mt-5 mt-xl-0 pl-xl-5">
                <div class="section-title mb-30">
                    <p><?php echo isset( $options['v4-about-p'] ) ? esc_html( $options['v4-about-p'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v4-about-h1'] ) ? esc_html( $options['v4-about-h1'] ) : ''; ?></h1>
                </div>
                <p><?php echo isset( $options['v4-about-des'] ) ? esc_html( $options['v4-about-des'] ) : ''; ?></p>
                <a href="<?php echo isset( $options['v4-about-btn']['url'] ) ? esc_url( $options['v4-about-btn']['url'] ) : '#'; ?>" class="theme-btn black mt-4">
                    <?php echo isset( $options['v4-about-btn']['text'] ) ? esc_html( $options['v4-about-btn']['text'] ) : ''; ?> 
                    <i class="<?php echo isset( $options['v4-about-btn-icon'] ) ? esc_attr( $options['v4-about-btn-icon'] ) : ''; ?>"></i>
                </a>
                <div class="row text-center">
                    <?php
                    if ( isset( $options['v4-about-box-rep'] ) && is_array( $options['v4-about-box-rep'] ) ) {
                        $repeater_boxes = $options['v4-about-box-rep'];
                        foreach( $repeater_boxes as $repeater_box ) {
                            ?>
                            <div class="col-sm-6 col-12">
                                <div class="icon-box-item">
                                    <div class="icon">
                                        <i class="<?php echo isset( $repeater_box['v4-about-box-icon'] ) ? esc_attr( $repeater_box['v4-about-box-icon'] ) : ''; ?>"></i>
                                    </div>
                                    <h4>
                                        <a href="<?php echo isset( $repeater_box['v4-about-box-link']['url'] ) ? esc_url( $repeater_box['v4-about-box-link']['url'] ) : '#'; ?>">
                                            <?php echo isset( $repeater_box['v4-about-box-link']['text'] ) ? esc_html( $repeater_box['v4-about-box-link']['text'] ) : ''; ?>
                                        </a>
                                    </h4>
                                    <p><?php echo isset( $repeater_box['v4-about-box-p'] ) ? esc_html( $repeater_box['v4-about-box-p'] ) : ''; ?></p>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="cta-banner-5 bg-cover" style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/assets/img/cta5.png' ); ?>')">
            <div class="row d-flex align-items-center">
                <div class="col-xl-6 pl-xl-0 col-12 text-center text-xl-left">
                    <h2><?php echo isset( $options['v4-about-cta-h2'] ) ? esc_html( $options['v4-about-cta-h2'] ) : ''; ?></h2>
                    <p><?php echo isset( $options['v4-about-cta-p'] ) ? esc_html( $options['v4-about-cta-p'] ) : ''; ?></p>
                </div>
                <div class="col-xl-4 mt-4 mt-xl-0 offset-xl-1 col-12 text-center text-xl-left">
                    <a href="<?php echo isset( $options['v4-about-cta-link']['url'] ) ? esc_url( $options['v4-about-cta-link']['url'] ) : '#'; ?>" class="theme-btn">
                        <?php echo isset( $options['v4-about-cta-link']['text'] ) ? esc_html( $options['v4-about-cta-link']['text'] ) : ''; ?> 
                        <i class="<?php echo isset( $options['v4-about-cta-icon'] ) ? esc_attr( $options['v4-about-cta-icon'] ) : ''; ?>"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="circle-shape d-none d-sm-block">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/home4/ring.png' ); ?>" alt="">
    </div>
</section>
