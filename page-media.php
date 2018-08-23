<?php get_header() ?>

    <section class="media">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="media-image"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="media-context">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="need-music">
                        <h1>Move the beat</h1>
                        <p>Music is a moral law. It gives soul to the universe, wings to the mind, flight to the
                            imagination, and charm and gaiety to life and to everything.
                            <br>
                            Plato
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="media-tab">
        <div class="content">


            <div class="row search-audio">
                <div class="col-md-6">
                    <div class="">
                        <h5>Tracks</h5>
                    </div>
                </div>
                <div class="col-md-6">

                    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="column add-bottom">
                        <div id="mainwrap">
                            <div id="plwrap">
                                <ul id="plList"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--    <section class="music">-->
    <!--        <div class="content">-->
    <!---->
    <!---->
    <!---->
    <!---->
    <!--        </div>-->
    <!--    </section>-->


    <section class="filter">
        <div class="content">
            <div class="portfolioFilter clearfix">
                <ul>

                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category): ?>

                        <li><a href="#"
                               data-filter="<?php echo '.' . $category->name; ?>"><?php echo $category->name; ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>


            <div class="portfolioContainer">

                <div class="Ambient">
                    <?php
                    $args = array('post_type' => 'post', 'posts_per_page' => 10, 'cat' => '10');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post(); ?>
<!--                        <img src="--><?php //bloginfo('template_url'); ?><!--/img/dis.png" alt="">-->
                        <?php
                        echo "<h4>";
                        echo the_title();
                        echo "</h4>";
                        echo '<div class="row">';
                        the_content();
                        echo '</div><hr>';
                    endwhile;
                    ?>
                </div>

                <div class="Any">
                    <?php
                    $args = array('post_type' => 'post', 'posts_per_page' => 10, 'cat' => '7');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post(); ?>
<!--                        <img src="--><?php //bloginfo('template_url'); ?><!--/img/dis.png" alt="">-->
                        <?php
                        echo "<h4>";
                        echo the_title();
                        echo "</h4>";
                        echo '<div class="row">';
                        the_content();
                        echo '</div><hr>';
                    endwhile;
                    ?>
                </div>
                <div class="Dark">
                    <?php
                    $args = array('post_type' => 'post', 'posts_per_page' => 10, 'cat' => '9');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post(); ?>
<!--                        <img src="--><?php //bloginfo('template_url'); ?><!--/img/dis.png" alt="">-->
                        <?php
                        echo "<h4>";
                        echo the_title();
                        echo "</h4>";
                        echo '<div class="row">';
                        the_content();
                        echo '</div><hr>';
                    endwhile;
                    ?>
                </div>
                <div class="Dramatic">
                    <?php
                    $args = array('post_type' => 'post', 'posts_per_page' => 10, 'cat' => '4');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post(); ?>
<!--                        <img src="--><?php //bloginfo('template_url'); ?><!--/img/dis.png" alt="">-->
                        <?php
                        echo "<h4>";
                        echo the_title();
                        echo "</h4>";
                        echo '<div class="row">';
                        the_content();
                        echo '</div><hr>';
                    endwhile;
                    ?>
                </div>
                <div class="Newest">
                    <?php
                    $args = array('post_type' => 'post', 'posts_per_page' => 10, 'cat' => '5');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post(); ?>
<!--                        <img src="--><?php //bloginfo('template_url'); ?><!--/img/dis.png" alt="">-->
                        <?php
                        echo "<h4>";
                        echo the_title();
                        echo "</h4>";
                        echo '<div class="row">';
                        the_content();
                        echo '</div><hr>';
                    endwhile;
                    ?>
                </div>
                <div class="Orchestral">
                    <?php
                    $args = array('post_type' => 'post', 'posts_per_page' => 10, 'cat' => '11');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post(); ?>
<!--                        <img src="--><?php //bloginfo('template_url'); ?><!--/img/dis.png" alt="">-->
                        <?php
                        echo "<h4>";
                        echo the_title();
                        echo "</h4>";
                        echo '<div class="row">';
                        the_content();
                        echo '</div><hr>';
                    endwhile;
                    ?>
                </div>
                <div class="Post-rock">
                    <?php
                    $args = array('post_type' => 'post', 'posts_per_page' => 10, 'cat' => '12');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post(); ?>
<!--                        <img src="--><?php //bloginfo('template_url'); ?><!--/img/dis.png" alt="">-->
                        <?php
                        echo "<h4>";
                        echo the_title();
                        echo "</h4>";
                        echo '<div class="row">';
                        the_content();
                        echo '</div><hr>';
                    endwhile;
                    ?>
                </div>
                <div class="Quirky">
                    <?php
                    $args = array('post_type' => 'post', 'posts_per_page' => 10, 'cat' => '8');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post(); ?>
<!--                        <img src="--><?php //bloginfo('template_url'); ?><!--/img/dis.png" alt="">-->
                        <?php
                        echo "<h4>";
                        echo the_title();
                        echo "</h4>";
                        echo '<div class="row">';
                        the_content();
                        echo '</div><hr>';
                    endwhile;
                    ?>
                </div>
                <div class="Uplifting">
                    <?php
                    $args = array('post_type' => 'post', 'posts_per_page' => 10, 'cat' => '1');
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post(); ?>
<!--                        <img src="--><?php //bloginfo('template_url'); ?><!--/img/dis.png" alt="">-->
                        <?php
                        echo "<h4>";
                        echo the_title();
                        echo "</h4>";
                        echo '<div class="row">';
                        the_content();
                        echo '</div><hr>';
                    endwhile;
                    ?>
                </div>

                <!---->
                <!--                <div class="webTemplates food">-->
                <!--                    <img src="https://mir-s3-cdn-cf.behance.net/projects/202/11893193.5482088f6f391.png" alt="image">-->
                <!--                </div>-->
                <!---->
                <!--                <div class="logos drawings">-->
                <!--                    <img src="https://mir-s3-cdn-cf.behance.net/projects/202/be4b9728308865.55b92edb950fc.jpg"-->
                <!--                         alt="image">-->
                <!--                </div>-->
                <!---->
                <!--                <div class="webTemplates">-->
                <!--                    <img src="https://mir-s3-cdn-cf.behance.net/projects/202/12963199.548365055868a.png" alt="image">-->
                <!--                </div>-->
                <!---->
                <!--                <div class="ui">-->
                <!--                    <img src="https://mir-s3-cdn-cf.behance.net/projects/202/20342607.5434c04b49254.png" alt="image">-->
                <!--                </div>-->
                <!---->
                <!--                <div class="drawings">-->
                <!--                    <img src="https://mir-s3-cdn-cf.behance.net/projects/202/b11bbb26474383.555f91fd42584.jpg"-->
                <!--                         alt="image">-->
                <!--                </div>-->
                <!---->
                <!--                <div class="webTemplates">-->
                <!--                    <img src="https://mir-s3-cdn-cf.behance.net/projects/202/14385875.548573dae7a09.jpg" alt="image">-->
                <!--                </div>-->
                <!---->
                <!--                <div class="drawings">-->
                <!--                    <img src="https://mir-s3-cdn-cf.behance.net/projects/202/14569777.5485b3876a1b9.png" alt="image">-->
                <!--                </div>-->
                <!--                <div class="logos">-->
                <!--                    <img src=" https://mir-s3-cdn-cf.behance.net/projects/202/1d854a24500155.5505cccd057a4.jpg"-->
                <!--                         alt="image">-->
                <!--                </div>-->
                <!--                <div class="ui">-->
                <!--                    <img src="https://mir-s3-cdn-cf.behance.net/projects/202/f9b95b26406487.555cc1fded76f.jpg"-->
                <!--                         alt="image">-->
                <!--                </div>-->
                <!---->
                <!--                <div class="logos">-->
                <!--                    <img src="https://mir-s3-cdn-cf.behance.net/projects/202/181a7b35469661.Y3JvcCw3NjUsNTk5LDY3LDA.png"-->
                <!--                         alt="image">-->
                <!--                </div>-->


                <!--            </div>-->

                <!--                <section class="player">-->
                <!--                    <div id="audiowrap">-->
                <!--                        <div class="content">-->
                <!--                            <div class="row">-->
                <!--                                <div class="col-md-6">-->
                <!--                                    <audio id="audio1" preload controls>Your browser does not support HTML5 Audio!</audio>-->
                <!--                                    <span id="npTitle"></span>-->
                <!--                                    <p class="clearfix"></p>-->
                <!---->
                <!--                                    <iframe src="https://player.html5tap.com/v1/html5full.html?jdata=http%3A%2F%2Fdev.restadviser.com%2Fprog%2Fprog2%2Fhtml5tap%2F113%2F" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" width="586" height="227"></iframe>-->
                <!---->
                <!--                                </div>-->
                <!---->
                <!--                                <div class="col-md-6">-->
                <!--                                    <div class="center-disc">-->
                <!--                                        <img src="-->
                <?php //bloginfo('template_url'); ?><!--/img/dis.png" alt="">-->
                <!--                                    </div>-->
                <!--                                </div>-->
                <!---->
                <!--                            </div>-->
                <!---->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </section>-->


            </div>
        </div>
    </section>


<?php get_footer() ?>