<?php /* Template Name: Portfolio */ ?>


<?php get_header() ?>

<section class="portfolio">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="portfolio-image"></div>
            </div>
        </div>
    </div>
</section>

<section class="client-video">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="need-music">
                    <h1>Select client work</h1>
                </div>
            </div>
        </div>


        <?php
            $args = array('post_type' => 'portfolios', 'posts_per_page' => 10);
            $the_query = new WP_Query($args);
        ?>

        <?php if ($the_query->have_posts()) : ?>
        <div class="row music-video">
            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="col-md-4">
                    <div class="music-link">
                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div>
                            <div class="music-description">
                                <a href="<?php echo get_permalink( $post->ID ); ?>">
                                     <h5 class="song-name"><?php the_title(); ?></h5>
                                </a>
                                <span><?php the_category(); ?></span>
                                <p><?php $my_date = the_date('', '<p>', '</p>', FALSE); echo $my_date; ?></p>
                            </div>
                        </div>
                    </div>

                <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>


<section class="additional_clients">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="need-music">
                    <h1>Additional clients</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 client-logo">
                <div class="owl-carousel owl-theme">
                    <div class="item"><img src="<?php echo get_post_meta($post->ID, 'client_img1', true); ?>"></div>
                    <div class="item"><img src="<?php echo get_post_meta($post->ID, 'client_img2', true); ?>"></div>
                    <div class="item"><img src="<?php echo get_post_meta($post->ID, 'client_img3', true); ?>"></div>
                    <div class="item"><img src="<?php echo get_post_meta($post->ID, 'client_img4', true); ?>"></div>
                    <div class="item"><img src="<?php echo get_post_meta($post->ID, 'client_img5', true); ?>"></div>
<!--                    <div class="item"><img src="--><?php //echo bloginfo('template_url'); ?><!--/img/logo-boston-globe-1.png" alt=""></div>-->
<!--                    <div class="item"><img src="--><?php //echo bloginfo('template_url'); ?><!--/img/IPPF-1.png" alt=""></div>-->
<!--                    <div class="item"><img src="--><?php //echo bloginfo('template_url'); ?><!--/img/we-work.png" alt=""></div>-->
<!--                    <div class="item"><img src="--><?php //echo bloginfo('template_url'); ?><!--/img/2xu.png" alt=""></div>-->
<!--                    <div class="item"><img src="--><?php //echo bloginfo('template_url'); ?><!--/img/client1.png" alt=""></div>-->
                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer() ?>


