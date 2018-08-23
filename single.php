<?php get_header(); ?>

<section class="single">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="col-md-12">
                    <h3><?php the_title(); ?></h3>
                </div>

                <div class="col-md-12">
                    <div class="content-single">
                        <?php the_content(); ?>
                    </div>
                </div>


            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>