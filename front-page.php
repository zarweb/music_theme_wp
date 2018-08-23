<?php get_header(); wp_reset_query()?>

<section class="home">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-image" style="background-image: url('<?php echo bloginfo('template_url') . "/img/brad-bg.png"; ?>')"></div>
            </div>
        </div>
    </div>
</section>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>






<!--<section  class="home-context">-->
<!--    <div class="content">-->
<!--        <div class="row">-->
<!--            <div class="col-md-12">-->
<!--                <div class="need-music">-->
<!--                    <h1>Hi, I'm Brad Couture.</h1>-->
<!--                    <p>Discovered the world of recording arts, and dove into recording my music for more than just my friends and family to hear</p>-->
<!--                    <a href="contact.html">contact</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->


<?php get_footer()?>


