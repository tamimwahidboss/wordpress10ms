<?php
// Retrieve the csf saved option value
$options = get_option( 'wp10ms_options' );
?>

<section class="blog-section section-padding bg-contain">
    <div class="container">
        <div class="row mb-30">
            <div class="col-12 col-lg-12">
                <div class="section-title style-3 text-center">
                    <span><?php echo isset( $options['v2-blog-span'] ) ? esc_html( $options['v2-blog-span'] ) : ''; ?></span>
                    <p><?php echo isset( $options['v2-blog-p'] ) ? esc_html( $options['v2-blog-p'] ) : ''; ?></p>
                    <h1><?php echo isset( $options['v2-blog-h1'] ) ? esc_html( $options['v2-blog-h1'] ) : ''; ?></h1>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 2,
                'order'          => 'ASC',
                'orderby'        => 'menu_order',
            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="single-blog-card style-2">
                            <div class="blog-featured-thumb bg-cover" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>')"></div>
                            <div class="content">
                                <div class="post-author">
                                    <a href="<?php echo esc_url( get_the_author_link() ); ?>"><i class="fal fa-user-circle"></i> <?php echo esc_html( get_the_author() ); ?></a>
                                </div>
                                <h3><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h3>
                                <div class="btn-link-share">
                                    <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="theme-btn minimal-btn">read more <i class="fas fa-arrow-right"></i></a>
                                    <a href="#"><i class="fal fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
