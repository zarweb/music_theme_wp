<?php get_header();?>

<section class="about">
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="about-image"></div>
            </div>
        </div>
    </div>
</section>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>




<?php get_footer();?>